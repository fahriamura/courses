<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Choose Subscription</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #121212;
            color: #e0e0e0;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        h1 {
            text-align: center;
            color: #ffffff;
            margin-bottom: 30px;
        }
        .pricing-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: nowrap; // Ubah ini dari wrap ke nowrap
        }
        .pricing-column {
            display: flex;
            flex-direction: column;
            flex: 1; // Tambahkan ini
            min-width: 0; // Tambahkan ini
            max-width: 33.33%; // Tambahkan ini
            background-color: #1e1e1e;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }
        .pricing-column:hover {
            transform: translateY(-5px);
        }
        .pricing-header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            font-size: 24px;
            font-weight: bold;
        }
        .pricing-content {
            display: flex;
            flex-direction: column;
            flex-grow: 1;
            padding: 20px;
        }
        .pricing-details {
            flex-grow: 1;
        }
        .pricing-item {
            margin-bottom: 15px;
            font-size: 14px;
            line-height: 1.4;
        }
        .pricing-price {
            font-size: 24px;
            font-weight: bold;
            margin: 20px 0;
            color: #ffffff;
        }
        .buy-button-container {
            padding: 20px;
            background-color: rgba(255, 255, 255, 0.1);
            margin-top: auto;
        }
        .buy-button {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #333;
            color: #fff;
            text-align: center;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
        }
        .buy-button:hover {
            background-color: #444;
        }
        .platinum .pricing-header { background-color: #757575; }
        .gold .pricing-header { background-color: #FFC107; color: #000; }
        .silver .pricing-header { background-color: #9E9E9E; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Choose Your Subscription</h1>
        <div class="pricing-container">
            @foreach(['platinum', 'gold', 'silver'] as $plan)
                <div class="pricing-column {{ $plan }}">
                    <div class="pricing-header">{{ strtoupper($plan) }}</div>
                    <div class="pricing-content">
                        <div class="pricing-details">
                            @if($plan == 'platinum')
                                <div class="pricing-item">6 × 90 min live Coaching Sessions</div>
                                <div class="pricing-item">6 × 45 min 1:1 Support</div>
                                <div class="pricing-item">Personalized Support in WhatsApp Group Chat</div>
                                <div class="pricing-item">Intestinal Detox Formula 1 and 2</div>
                                <div class="pricing-item">FB Group with Breathing Techniques, Somatic Releases, Health & Wellness Education and Lifestyle Hacks</div>
                                <div class="pricing-price">$998 USD</div>
                                <div class="pricing-item">Payment Plan: $200 USD Deposit + 3 payments of $300 USD</div>
                            @elseif($plan == 'gold')
                                <div class="pricing-item">6 × 90 min live Coaching Sessions</div>
                                <div class="pricing-item">Personalized Support in WhatsApp Group Chat</div>
                                <div class="pricing-item">Intestinal Detox Formula 1 and 2</div>
                                <div class="pricing-item">FB Group with Breathing Techniques, Somatic Releases, Health & Wellness Education and Lifestyle Hacks</div>
                                <div class="pricing-price">$575 USD</div>
                                <div class="pricing-item">Payment Plan: $200 USD Deposit + 3 payments of $150 USD</div>
                            @else
                                <div class="pricing-item">Recordings of weekly coaching sessions</div>
                                <div class="pricing-item">Intestinal Detox Formula 1 and 2</div>
                                <div class="pricing-item">FB Group with Breathing Techniques, Somatic Releases, Health & Wellness Education and Lifestyle Hacks</div>
                                <div class="pricing-price">$467 USD</div>
                                <div class="pricing-item">Payment Plan: $200 USD Deposit + 3 payments of $105 USD</div>
                            @endif
                        </div>
                    </div>
                    <div class="buy-button-container">
                        <form action="{{ route('subscription.checkout') }}" method="POST">
                            @csrf
                            <input type="hidden" name="plan" value="{{ $plan }}">
                            <button type="submit" class="buy-button">BUY</button>
                        </form>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</body>
</html>