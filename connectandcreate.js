const { TonClient, WalletContractV4, internal } = require("ton");
const { mnemonicNew, mnemonicToPrivateKey } = require("ton-crypto");
const { writeFile, readFile, appendFile } = require("fs").promises;
const nacl = require("tweetnacl");
const { sha256 } = require("@noble/hashes/sha256");
const axios = require("axios");
const promptSync = require("prompt-sync");

const prompt = promptSync();
let globalToken = null;

// Fungsi untuk membuat pesan
function createMessage(address, domain, timestamp, payload) {
  const [workchainStr, hashStr] = address.split(":");
  const workchain = parseInt(workchainStr, 10);
  const workchainBuffer = Buffer.alloc(4);
  workchainBuffer.writeInt32BE(workchain, 0);

  const hashBuffer = Buffer.from(hashStr, "hex");
  const addressBuffer = Buffer.concat([workchainBuffer, hashBuffer]);

  const domainBuffer = Buffer.from(domain, "utf-8");
  const domainLengthBuffer = Buffer.alloc(4);
  domainLengthBuffer.writeUInt32LE(domainBuffer.length, 0);

  const timestampBuffer = Buffer.alloc(8);
  timestampBuffer.writeBigUInt64LE(BigInt(timestamp), 0);

  const payloadBuffer = Buffer.from(payload, "utf-8");

  const message = Buffer.concat([
    Buffer.from("ton-proof-item-v2/", "utf-8"),
    addressBuffer,
    domainLengthBuffer,
    domainBuffer,
    timestampBuffer,
    payloadBuffer,
  ]);

  return message;
}

// Fungsi untuk menandatangani pesan
function signMessage(message, privateKey) {
  const messageHash = sha256(message);
  const prefix = Buffer.from([0xff, 0xff]);
  const finalMessage = Buffer.concat([
    prefix,
    Buffer.from("ton-connect", "utf8"),
    Buffer.from(messageHash),
  ]);
  const finalHash = sha256(finalMessage);
  const signature = nacl.sign.detached(finalHash, privateKey);
  return Buffer.from(signature).toString("base64");
}

// Fungsi untuk mendapatkan token menggunakan query_id
async function getNewToken(queryId) {
  const url =
    "https://user-domain.blum.codes/api/v1/auth/provider/PROVIDER_TELEGRAM_MINI_APP";
  const headers = {
    accept: "application/json, text/plain, */*",
    "accept-language": "en-US,en;q=0.9",
    "content-type": "application/json",
    origin: "https://telegram.blum.codes",
    priority: "u=1, i",
    referer: "https://telegram.blum.codes/",
  };
  const data = { query: queryId };

  for (let attempt = 1; attempt <= 3; attempt++) {
    try {
      console.log(`Mendapatkan token... Percobaan ${attempt}`);
      const response = await axios.post(url, data, { headers });

      if (response.status === 200) {
        const response_json = response.data;
        globalToken = response_json.token.refresh;
        return globalToken;
      } else {
        console.error(`Gagal mendapatkan token, status: ${response.status}`);
        console.error(response.data);
      }
    } catch (error) {
      console.error(
        `Error pada percobaan ${attempt}:`,
        error.response ? error.response.data : error.message
      );
    }
  }
  return null;
}

// Fungsi untuk melakukan koneksi wallet
async function postToWalletConnect(
  token,
  result,
  nonBounceableAddress,
  mnemonics
) {
  try {
    const response = await axios.post(
      "https://wallet-domain.blum.codes/api/v1/wallet/connect",
      result,
      {
        headers: {
          accept: "application/json, text/plain, */*",
          "accept-language": "en-US,en;q=0.9",
          authorization: `Bearer ${token}`,
          "content-type": "application/json",
          origin: "https://telegram.blum.codes",
          priority: "u=1, i",
          referer: "https://telegram.blum.codes/",
        },
      }
    );

    // Jika POST berhasil, simpan mnemonics dan address
    console.log("POST berhasil. Respon:", response.data);

    // Simpan mnemonic dan non-bounceable address ke file
    await appendFile("mnemonics.txt", mnemonics.join(" ") + "\n", "utf8");
    await appendFile("address.txt", nonBounceableAddress + "\n", "utf8");

    return true; // Mengembalikan status sukses
  } catch (error) {
    console.error(
      "POST gagal. Error:",
      error.response ? error.response.data : error.message
    );
    return false; // Mengembalikan status gagal
  }
}

// Fungsi untuk memutuskan koneksi wallet
async function disconnectWallet(token) {
  const url = "https://wallet-domain.blum.codes/api/v1/wallet/disconnect";
  const headers = {
    accept: "application/json, text/plain, */*",
    "accept-language": "en-US,en;q=0.9",
    authorization: `Bearer ${token}`,
    "content-type": "application/json",
    origin: "https://telegram.blum.codes",
    priority: "u=1, i",
    referer: "https://telegram.blum.codes/",
  };

  try {
    const response = await axios.delete(url, { headers });
    console.log("Wallet berhasil di-disconnect. Response:", response.data);
  } catch (error) {
    console.error(
      "Gagal disconnect wallet. Error:",
      error.response ? error.response.data : error.message
    );
  }
}

async function main() {
  console.log("Pilih opsi:");
  console.log("1. Create wallet and connect");
  console.log("2. Disconnect wallet");

  const choice = prompt("Masukkan pilihan Anda (1 atau 2): ");

  const queryIdsData = await readFile("query.txt", "utf8");
  const queryIds = queryIdsData
    .split("\n")
    .map((id) => id.trim())
    .filter((id) => id); // Memastikan setiap ID query tidak kosong

  if (choice === "1") {
    const client = new TonClient({
      endpoint: "https://toncenter.com/api/v2/jsonRPC",
    });

    for (const queryId of queryIds) {
      console.log(`Memproses query ID: ${queryId}`);

      const mnemonics = await mnemonicNew();
      console.log("Generated Mnemonic:", mnemonics.join(" "));

      let keyPair = await mnemonicToPrivateKey(mnemonics);
      let privateKey = keyPair.secretKey;
      let publicKey = keyPair.publicKey;

      let workchain = 0;
      let wallet = WalletContractV4.create({ workchain, publicKey });
      let hexAddress = wallet.address.toRawString();
      console.log("Hex Address:", hexAddress);

      let nonBounceableAddress = wallet.address.toString({
        bounceable: false,
        testOnly: false,
      });
      console.log("Wallet Address (Non-Bounceable):", nonBounceableAddress);

      const domain = "telegram.blum.codes";
      const timestamp = Math.floor(Date.now() / 1000);
      const payload = Date.now().toString();

      const message = createMessage(hexAddress, domain, timestamp, payload);
      const signatureBase64 = signMessage(message, privateKey);
      console.log("Signature (Base64):", signatureBase64);

      const result = {
        account: {
          address: hexAddress,
          chain: "-239",
          publicKey: Buffer.from(publicKey).toString("hex"),
        },
        tonProof: {
          name: "ton_proof",
          proof: {
            domain: {
              lengthBytes: domain.length,
              value: domain,
            },
            payload: payload,
            signature: signatureBase64,
            timestamp: timestamp,
          },
        },
      };

      console.log("Payload for postToWalletConnect:", result);

      let token = await getNewToken(queryId);

      if (token) {
        const success = await postToWalletConnect(
          token,
          result,
          nonBounceableAddress,
          mnemonics
        );

        if (!success) {
          console.error(
            `Gagal menghubungkan wallet untuk query ${queryId}, tidak menyimpan mnemonic dan address.`
          );
        }
      } else {
        console.error(
          `Gagal mendapatkan token untuk query ${queryId}, tidak bisa melakukan POST.`
        );
      }
    }
  } else if (choice === "2") {
    for (const queryId of queryIds) {
      console.log(`Memproses disconnect untuk query ID: ${queryId}`);

      let token = await getNewToken(queryId);

      if (token) {
        await disconnectWallet(token);
      } else {
        console.error(
          `Gagal mendapatkan token untuk query ${queryId}, tidak bisa disconnect.`
        );
      }
    }
  } else {
    console.error("Pilihan tidak valid.");
  }
}

main();
