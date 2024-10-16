<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transformational Detox - Aligned Sovereignty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css">
 
    <style>
 /* Global Styles */
body {
    font-family: Arial, sans-serif;
    line-height: 1.6;
    color: #ffffff;
    background-color: #000000;
    margin: 0;
}

header {
    background-color: black;
    color: white;
    padding: 1em;
}

.navbar {
    padding: 10px 20px;
    background-color: #000000;
}

.navbar .logo-img {
    width: 100%;
    height: auto;
    max-width: 200px;
    object-fit: contain;
    margin-top: 10px;
}

/* Layout and Container Styles */
.header-img {
    width: 100%;
    height: 40vh;
    margin-top: 10px;
}

.hero-section {
    background-image: url('gambar.jpg');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 0;
}

.container2, .container3, .container4, .container5 {
    background-size: cover;
    padding: 20px;
    width: 100%;
    max-width: 100%;
    display: block;
    margin-left: auto;
    margin-right: auto;
    margin-bottom: 40px;
}

.container2 {
    background-image: url('{{asset('asset/images/fungi.jpg')}}');
}

.container3 {
    background-image: url('{{asset('asset/images/essen.jpg')}}');
    max-width: 70%;
}

.container4 {
    background-image: url('{{asset('asset/images/sit.jpg')}}');
    max-width: 90%;
}

.container5 {
    background-image: url('{{asset('asset/images/last.jpg')}}');
    max-width: 80%;
}

/* Text Blocks */
.text-block-essen, .text-block-sit, .text-block-last {
    justify-content: center;
    text-align: center;
    height: 100%;
}

.text-block-sit {
    font-weight: 1000;
}

.text-block-last {
    font-weight: 500;
}

h2 {
    font-weight: 500;
}

/* Navbar and Footer Styles */
.footer {
    margin-top: 20px;
    background-color: rgb(0, 0, 0);
    color: white;
    padding: 10px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.logo-text-container {
    display: flex;
    flex-direction: column;
    align-items: center;
    flex-grow: 1;
}

.logo-text-container img {
    width: 200px;
    height: auto;
    margin-bottom: 10px;
}

.aligned-sovereignty {
    font-size: 18px;
    font-weight: bold;
}

.copyright {
    font-size: 14px;
    margin-top: 5px;
}

/* Table Styles */
table {
    background-color: #f8f9fa00;
    width: 100%;
    border-collapse: collapse;
    border: 1px solid #ffffff;
}

th, td {
    padding: 15px;
    border: 1px solid #ffffff;
    text-align: left;
}

th {
    background-color: #ffffff00;
    cursor: pointer;
}

td {
    background-color: #fffcfc00;
}

.quick-nav {
    background-color: #f8f9fa00;
    border-radius: 0;
    margin-top: 10px;
    border: 1px solid #ffffff;
    overflow: hidden;
    position: sticky;
    top: 15px;
    z-index: 1000;
    margin-bottom: 20px;
}

.quick-nav table {
    width: 100%;
    border-collapse: collapse;
}

.quick-nav th {
    background-color: #4a91e200;
    color: #ffffff;
    padding: 10px;
    text-align: left;
}

.quick-nav td {
    padding: 10px;
}

.quick-nav a {
    color: #08d947;
    text-decoration: none;
}

/* Image Styles */
.fungi-img, .fungis-img {
    width: 100%;
    height: auto;
    object-fit: cover;
    margin-bottom: 40px;
}

.fungis-img {
    max-width: 50%;
    display: block;
    margin-left: auto;
    margin-right: auto;
}

.neti-pot-image {
    width: 30%;
    height: auto;
    display: block;
    margin: 0 auto;
}

.logo2 {
    width: 100%;
    height: auto;
    max-width: 50%;
    object-fit: contain;
    margin-top: 10px;
    margin-bottom: 20px;
}

/* Pricing Container Styles */
.pricing-container {
    display: flex;
    justify-content: center;
    align-items: stretch;
    gap: 20px;
    padding: 20px;
    flex-wrap: wrap;
}

.pricing-column {
    flex: 1;
    max-width: 300px;
    background-color: #e5e4e2;
    border-radius: 10px;
    overflow: hidden;
    box-shadow: 0 4px 6px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    margin-bottom: 20px;
}

.pricing-header {
    color: black;
    font-weight: bold;
    text-align: center;
    padding: 10px;
    font-size: 1.2em;
}

.pricing-content {
    padding: 15px;
    font-size: 0.9em;
    color: #000000;
    flex: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.pricing-item {
    margin-bottom: 10px;
}

.buy-button {
    display: block;
    width: 100%;
    padding: 10px;
    background-color: #333;
    color: white;
    text-align: center;
    text-decoration: none;
    border-radius: 5px;
    margin-top: auto;
    align-self: flex-end;
}

/* Media Queries */
@media (max-width: 600px) {
    .container2, .container3, .container4, .container5 {
        background-size: contain;
    }

    .container3 {
        max-width: 100%;
    }

    .container4 {
        background: url('{{asset('asset/images/sit.jpg')}}');
    }

    .container5 {
        max-width: 80%;
    }

    .header-img {
        height: 30vh;
    }

    .text-block-sit {
        font-weight: 600;
    }

    .text-block-last {
        font-size: 12px;
    }
}

@media (max-width: 768px) {
    .pricing-container {
        flex-direction: column;
        align-items: center;
    }

    .pricing-column {
        max-width: 90%;
    }
}

@media (min-width: 769px) {
    .pricing-column {
        max-width: 300px;
    }
}

/* Overlay Styles */
.overlay {
    background-color: rgba(0, 0, 0, 0);
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: flex-start;
    padding: 20px;
}

/* Miscellaneous */
.icon {
    font-size: 24px;
    color: #fff;
    cursor: pointer;
}

.icon:hover {
    opacity: 0.7;
}

.pheader, .pheader2, .pheader3 {
    font-weight: 1000;
}

.pheader2 {
    font-size: 18px;
}

.pheader3 {
    font-size: 20px;
}

.week {
    margin-bottom: 20px;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand" href="{{ route('login') }}">
                <img src="{{asset('asset/images/logo3.png')}}" alt="Logo" class="logo-img">
            </a>
            <div class="d-flex align-items-center">
                <a href="{{ route('subscription.choose') }}" class="btn btn-light">Next</a>
            </div>
        </div>
    </nav>

    <header class="hero-section text-center">
        <div class="container">
            <h1 class="display-4">TRANSFORMATIONAL DETOX</h1>
            <img src="{{ asset('asset/images/headers.jpg')}}" class="header-img">
        </div>
    </header>

    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-4">
                <div class="quick-nav">
                    <table>
                        <thead>
                            <tr>
                                <th>Quick Navigation</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr><td><a href="#welcome">Welcome</a></td></tr>
                            <tr><td><a href="#program">Getting the most out of this program</a></td></tr>
                            <tr><td><a href="#cleanse">Why do I need to cleanse?</a></td></tr>
                            <tr><td><a href="#aim">The aim & benefits</a></td></tr>
                            <tr><td><a href="#expect">What can I expect?</a></td></tr>
                            <tr><td><a href="#ready">Getting Ready</a></td></tr>
                            <tr><td><a href="#supplement">Supplements</a></td></tr>
                            <tr><td><a href="#supplies">Groceries & Supplies</a></td></tr>
                            <tr><td><a href="#allow">Foods that are allowed</a></td></tr>
                            <tr><td><a href="#dontallow">Foods that are not allowed</a></td></tr>
                            <tr><td><a href="#suggest">Other suggested supplies</a></td></tr>
                            <tr><td><a href="#MoreProgram">The Program</a></td></tr>
                            <tr><td><a href="#faq">FAQ</a></td></tr>
                        </tbody>
                    </table>
                </div>
            </div>
            
            <div class="col-lg-8">
                <section id="welcome">
                    <h2 class="section-title">Welcome</h2>
                    <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
Thank you for purchasing this course and supporting Aligned Sovereignty and our vision of optimising health for humanity.
                        
Congratulations on making the choice to nurture and prioritize your health.
                        
Over the next 6 weeks (and possibly more!) I will guide you through a comprehensive fungal parasite colon cleanse that will rid your body of the nasties that are keeping you stuck in dis-ease.
                        
During our 6 weeks together, my aim is for you is not simply to do a deep detox of your colon, but to set the foundations for a brand new you. By establishing lifestyle support systems that are achievable and manageable, you will create consistency through applied action and breaking down of limiting beliefs and habits. The goal is not just to implement these teachings throughout the 6 weeks, but to incorporate them into your life in the long-term. By the end of this immersion, you will have gained a deeper understanding and attunement with your body, generating the confidence to pursue the things you love and enjoy true vitality.
                        </pre>
                        <img src= "{{asset('asset/images/logo3.png')}}" class="logo2">
                        <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
During our 6 weeks together, my goal is for you to experience a significant and lasting transformation in how your body feels. These 6 weeks are just the beginning of a whole new you. You will start to establish simple and effective lifestyle support systems that you can maintain long after this cleanse. By the end of this immersion, you will have cleansed and cleared a significant amount of toxins and debris, laying the foundation for your body to truly heal itself. Additionally, you will gain a much deeper innerstanding and attunement with your body, giving you the confidence to pursue your passions at your highest potential.</pre>


                        <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
<i>
For most people, I recommend the Gold Package. This detox is meant to be transformative, and as such, there will be moments where things will feel tough. It is highly valuable to be part of a group where you can ask questions, receive personalised support, and lean on the community.

The Platinum Package has been designed for those with severe health issues that will require a deeper level of support on their healing journey.

The Silver Package requires a high level of self-accountability and recommended only if you have done a fair bit of self-guided detoxes previously.

Payment Plans available.
</i>
                        </pre>
<img src="{{asset('asset/images/pemandangan.jpg')}}" class = "fungi-img">
<pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
    <bold>
YOUR NEXT STEPS
    </bold>
Please reach out directly to either Vaughan or Dona for your payment link. Once your payment has been received, you will receive our comprehensive Tranformational Detox Booklet which will help to prepare you for our upcoming journey together.

<bold>
SEE YOU ON THE INSIDE
</bold>
</pre>
                </section>
                <section id ="program" class="mt-5">
                    <h2 class="section-title">Getting the most our of this program</h2>
                    <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
The program is ONLY as effective as your dedication to your own growth and wellbeing.
                        
This program requires discipline and diligence. Clear, honest communication means the client is responsible for speaking up and giving feedback with regards to what they are needing and how each phase of the program is affecting their mind, body, and spirit. This means that between practitioner and client, there is a constant stream of feedback, consent, and trust so that both parties benefit abundantly from this 6 week program.
                        
During this cleanse, sabotage patterns will arise. I am here to hold space for you and to help you break old patterns and beliefs. Some of the patterns I see come up with clients consistently are, too busy, had a drama pop up, story's and excuses, relationship drama, forgetting to take action on instructed steps, etc. My job is to help you notice these so you can break the pattern.
                        </pre>
                        

                </section>
                <section id ="cleanse" class="mt-5">
                    <h2 class="section-title">WHY DO I NEED TO CLEANSE?</h2>
                    <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
The vast majority of humans (something like 95% of us) are living with an overgrowth of fungus and parasites in our systems. They love all the food we love — starches and sugar.
                        
And thanks to the amazing ease of which we have access to these foods that we consume all day, everyday…it creates a perfect breeding ground for the things that are keeping us so sick. On top of that, our environments are full of toxins — from the air we breathe, to the water we drink, to the foods we eat. So our physical vessels become absolutely overloaded with a toxic load that they simply weren't designed to handle.
                        
This toxic load results in systemic inflammation, and is the root cause of all dis-ease within the human body. Unfortunately a lot of our habits and the poor diet choices we make, prevent our body from doing its job, and allow these pathogens to flourish and cause further harm.
                        
The presence of parasites and fungal overgrowths manifest in a wide range of symptoms – the most common of which can be skin conditions like eczema and psoriasis, bloating, lethargy, poor sleep, painful menstruation, chronic illnesses, etc. Left untreated these can lead to life-threatening disease and even mental illness such as anxiety and depression, cancer, parkinson's, and MS.
                        
It is essential for lasting vitality, that we regularly do a deep fungal parasite colon cleanse in order to bring out bodies back to homeostasis, and then they can do what they were designed to do…we can heal from anything.
                        </pre>
                        <div class="container2">
                            <div class="overlay">
                                <div class="text-block">
                                    <h2>FUNGI</h2>
                                    <p>
                                        A group of living organisms which are classified in their own kingdom. This means they are not animals, plants, or bacteria.
                                        Unlike bacteria, which have simple prokaryotic cells, fungi have complex eukaryotic cells like animals and plants.
                                    </p>
                                </div>
                                <div class="text-block2">
                                    <h2>PARASITE</h2>
                                    <p>
                                        An organism that lives in or on an organism of another species and benefits by deriving nutrients at the other's expense.
                                    </p>
                                </div>
                            </div>
                        </div>

                </section>
                <section id ="aim" class="mt-5">
                    <h2 class="section-title">The aim & benefits</h2>
                    <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
The aim of this course is to help you bring your body back to homeostasis, so that you can begin to eradicate symptoms of dis-ease and remember what it feels like to thrive in life.
                        
Over the course of six weeks, most participants will successfully reduce parasite populations and bring fungal colonies down to healthy levels. This detox program also focuses on repairing and restoring healthy gut and digestive functions, while boosting the immune system.
                        
For the most effective cleanse we recommend completing this 6 week program annually
                        </pre>
                        
                </section>
                <section id="expect" class="mt-5">
                    <h2 class="section-title">What can I expect?</h2>
                    <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
The first week of the detox is our elimination phase. You'll begin adjusting the foods and beverages you are consuming, and gather the supplements that are recommended to support your cleanse.

In weeks 2 & 3, expect to have some bowel irregularity while your body detoxes and adjusts, you may feel more tired, experience mood swings, or have flare-ups of symptoms. All of this is perfectly okay and expected. You will also likely experience cravings for some of your normal comfort foods or snacks. This is simply the die-off process happening as the parasites begin to be starved of the foods that they thrive on. Just remember this is all part of the process.
                        
You will be eliminating many of your favourite foods and drinks, and adding in new practices which may feel a bit overwhelming. But you'll settle into the program and find your flow with it in no time. If you do happen to break the program, don't be discouraged. Just simply continue the program to the best of your ability. I don't expect perfection. But I do expect that you notice what feels hard, recognize your sabotage patterns, and choose differently the next time they come up.
                        
<strong><bold>Breaking down of old patterns and stories is where the transformation begins.</bold></strong>
                        
It is very likely that you will feel worse before you feel better. This is due to the fact you will have tens of millions of bacterial and parasitic organisms dying off inside your system. Your body will systematically destroy and eliminate the atrophied pathogens, however you may experience discomfort, bloating, low moods, and irritability during the process. If at any time you feel overwhelmed by what you are experiencing, please reach out to me. I never want you to feel as if you are alone and unsupported.
                        
As the cleanse moves into weeks 4 & 5, you will notice a significant and drastic shift in your energy levels, the quality of your sleep, and your overall mood will be much improved. Enjoy it!
                        
This is the beginning of the new you!
                    </pre>
                </section>
                
                <section id ="ready" class="mt-5">
                    <h2 class="section-title">Getting Ready</h2>
                    <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
The more time you can give yourself to prepare – the more successful you will be!
                        
<strong class="pheader3">Down, Noticing + Taking Action</strong> 
                        
You will get out of this program what you put in. Please be sure to carve out a little extra space for yourself over the course of these 6-weeks to not only attend our live calls and implement what is being shared…but to slow down enough to notice what is coming up for you. This is truly where the transformational aspect of this comes in.
                        
<strong class="pheader3">Be Open & Teachable </strong>
                        
You may have been on a healing journey for many years, and have ideas of what's right vs wrong. I ask that you put all of that aside, and instead be open and willing to take on new information. Teachability is one of the highest measures of success in this program. If you are not teachable, you will likely repeat sabotage patterns and therefore continue to replicate the same outcomes/habits that got you here in the first place.
                        
<strong class="pheader3">Check-Ins </strong>(Platinum + Gold only)
                        
I expect honest & transparent check-ins about where you're at, issues that are arising, struggles that you are having, etc. I can only support you in my highest capacity, when I know the truth of what is coming up for you. Please don't hold back. And yes, get comfortable with the idea of taking photos of your poop and sending them to me daily.
                        
<strong class="pheader3">Set yourself up for success. </strong>
                        
Over the next few weeks, begin to prepare yourself for the transformation that is about to take place. As soon as you said YES to this program, energetically your body has begun to prepare itself and you may notice emotions begin to arise….that's ok, just allow it. Be sure to familiarise yourself with the protocol that is outlined in this booklet, and begin to gather the recommended supplements so that you are ready to go for Week 1!
                    </pre>
                        
    
                <section id="supplement" class="mt-5">
                    <h2 class="section-title">Recommended Supplements</h2>
                    <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
The Eden Health IDF #1 and #2 are included in the price of this program and will be shipped directly to you. Please do not go out and purchase on your own.

<strong>HEALTH FOODS INTESTINAL DETOX FORMULA #1 + #2</strong>
                        
Broad spectrum detoxifiers to cleanse, heal, strengthen and replenish the digestive tract.
                        
<strong>RAW APPLE CIDER VINEGAR</strong>
                        
Kills bacteria, reduces blood sugar and insulin response.
                        
<strong>NORTH AMERICAN HERB & SPICE SUPER STRENGTH P73 OREGANO OIL</strong>
                        
Highly potent detoxifier and immunity booster.
                        
<strong>GELATIN & COLLAGEN</strong>
                        
Gut and liver healer, joint health, healthy hair, skin and nails. Please ensure that the product is from organic and grass-fed, grass-finished sources.
                        
<strong>MOUNT CAPRA GOAT MILK COLOSTRUM</strong>
                        
Rich in proteins, vitamins, growth factors and cytokines to boost gut immunity and growth of gastrointestinal tissue.
                        
<strong>BIOPTIMIZERS MAGNESIUM BREAKTHROUGH</strong>
                        
Helps repair muscles, improves cardiac function and aids in achieving deep, restful sleep.
                        
<strong>TURMERIC</strong>
                        
A powerful anti-microbial and anti-bacterial that supports foundational immune function.
                        
<strong>MILK THISTLE, CHAMOMILE + DANDELION TEAS</strong>
                        
Milk thistle + dandelion both help to support liver function and bile production. Chamomile tea is great for calming the nervous system, especially when taken in conjunction with collagen + glycine.
                        </pre>
                        
                </section>

                <section id = "supplies" class="mt-5">
                    <h2 class="section-title">Groceries & Supplies</h2>
                    <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
Throughout week 1, you will be eliminating foods from your diet that fungus and parasites thrive on, such as most starches and sugars. From week 2, you will be on a restricted diet. As such, the majority of your diet will be meat, vegetables, a few fruits, and raw dairy products. If you are vegetarian, I will allow a few other foods to support your protein intake. This will be discussed in our first session together.
                        
If you do not do so already, please ensure that all of the meats and produce you consume are of the highest quality. Ideally, sourcing your foods from local farms that are spray-free or organic is best. All meats should be grass-fed, grass-finished, raised without hormones or antibiotics, and free-range. It is essential that your fruits and veggies are spray-free or organic.
                        
Please be aware that the majority of your meals should be cooked at home. This is important in ensuring that you know exactly what's going into your food. If you are busy with work and other priorities, please make sure that you have meals and snacks prepared ahead of time so that you don't get hangry and make poor choices which will reduce the efficacy of your cleanse.
                        
If you are to eat out, please be very stringent and strict in making sure that the restaurant you choose uses good, clean products. Be sure to ask for your meals to be cooked in butter, ghee, olive oil, or coconut oil only.
                        
Please steer clear of seed and vegetable oils.
                        </pre>
                        
                </section>
                <section id = "allow" class="mt-5">
                    <h2 class="section-title">Foods that are allowed</h2>
                    <table>
                        <tbody>
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Grass-fed, Grass-finished, Pasture-raised and Wild caught Meat & Fish
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Beef, lamb, goat, eggs, chicken, duck, turkey, and organ meat. Pork is okay but not recommended. Fish and other seafood are okay, but choose high quality and wild, not farmed. Bone broth is highly recommended.
                                </td>
                            </tr>
                    
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Organic, spray-free vegetables
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about organic, spray-free vegetables.
                                </td>
                            </tr>
                    
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Organic, spray-free fruits
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about organic, spray-free fruits.
                                </td>
                            </tr>
                    
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Organic Nuts + Seeds
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about organic nuts + seeds.
                                </td>
                            </tr>
                    
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Fats & Oils
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about fats & oils.
                                </td>
                            </tr>
                    
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Raw Dairy, Probiotic Yogurt & Milk Alternatives
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about raw dairy, probiotic yogurt & milk alternatives.
                                </td>
                            </tr>
                    
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Celtic Sea Salt
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about Celtic sea salt.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                        
                </section>
                <section id = "dontallow" class="mt-5">
                    <h2 class="section-title">Foods that are not allowed</h2>
                    <table>
                        <tbody>
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Alcohol
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Beer, wine, spirits, liquors and bitters.
                                </td>
                            </tr>
                    
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Grains
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about organic, spray-free vegetables.
                                </td>
                            </tr>
                    
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Sugar
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about organic, spray-free fruits.
                                </td>
                            </tr>
                    
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Caffeine
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about organic nuts + seeds.
                                </td>
                            </tr>
                    
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Below ground vegetables
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about fats & oils.
                                </td>
                            </tr>
                    
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Pasteurised Dairy & Milk Alternatives
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about raw dairy, probiotic yogurt & milk alternatives.
                                </td>
                            </tr>
                    
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Cooking oils
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about Celtic sea salt.
                                </td>
                            </tr>
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Soy
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about Celtic sea salt.
                                </td>
                            </tr>
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    All legumes & Beans
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about Celtic sea salt.
                                </td>
                            </tr>
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Artifcial preservatives, colours,and flavours
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about Celtic sea salt.
                                </td>
                            </tr>
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    Tinned / Canned and frozen foods
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Details about Celtic sea salt.
                                </td>
                            </tr>
                        </tbody>
                    </table>
                        
                </section>
                <section id = "suggest" class="mt-5">
                    <div class="container3">
                        <div class="overlay">
                            <div class="text-block-essen">
                                <h2><i>Keep It Super Simple</i></h2>
                                <p class="mains">
                                For the duration of this cleanse, eat simple, whole foods. Avoid anything that comes in a box, can 
                                frozen, or a bag. When you're uncertain, err on the side of caution and just avoid it. Eat Foods
                                that are as close to their natural state as possible.   
                                </p>
                            </div>
                        </div>
                    </div>

                    <h2 class="section-title">Essentials Supplies</h2>
<div>
    <p class=" pheader2">
        Neti pot and salts
    </p>
    <p>
        A powerful tool to help move toxins out of the sinus cavity. We recommend using a netty pot 1-2x per week throughout the 6 week course
    </p>
    <img src="{{asset('asset/images/f.jpg')}}" alt="Neti pot" class="neti-pot-image">
    <p class = "pheader2">
        Tongue scraper
    </p>
    <p>
        As we sleep, toxins accumulate on our tongues. Scraping the tongue ?rst thing upon waking is an important part of the detox process. Ensure your tongue scraper is stainless-steel or cooper, absolutely not plastic!
    </p>
    <img src="{{asset('asset/images/d.jpg') }}" alt="Neti pot" class="neti-pot-image">
    <p class = "pheader2">
        Natural bristle brush (for body)
    </p>

    <p>
        Dry brushing helps to slough off dead cells and excess toxins from the skin, while also stimulating the lymphatic system.
    </p>
    <img src="{{asset('asset/images/c.jpg')}}" alt="Neti pot" class="neti-pot-image">
    <p class = "pheader2">
        Floss
    </p>
    <p>
        Our gums are linked directly to our nervous system. When bacteria and toxins remain trapped between the teeth they get embedded in the gums and create chronic in]ammation
    </p>
    <img src="{{asset('asset/images/aa.jpg')}}" alt="Neti pot" class="neti-pot-image">
    <p class = "pheader2">
        Diary or Journal
    </p>
    <p>
        A primary component of this Transformational
Detox is slowing down and noticing the thoughts,
emotions and feelings that are arising within your
body. A daily journaling practice is an essential
part of your next 6 weeks
    </p>
    <img src="{{asset('asset/images/e.jpg')}}" alt="Neti pot" class="neti-pot-image">
    <p class = "pheader2">
        Yoga mat
    </p>
    <p>
        Throughout the course you will be introduced to
        various breathing and somatic exercises that are
        speci?cally designed to support the release of
        toxins and shift state as old patterns and stories
        arise. Having a yoga mat for these practices is
        important.
    </p>
    <img src="{{asset('asset/images/b.jpg')}}" alt="Neti pot" class="neti-pot-image">

    
</div>
                        
                </section>


                <section id = "MoreProgram" class="mt-5">
                    <h2 class="section-title">The Program</h2>
                    <table class="week">
                        <tbody>
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    WEEK 1: ELIMINATION WEEK
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    Beef, lamb, goat, eggs, chicken, duck, turkey, and organ meat. Pork is okay but not recommended. Fish and other seafood are okay, but choose high quality and wild, not farmed. Bone broth is highly recommended.
                                </td>
                            </tr>
                            <tr>
                                <th onclick="toggleRow(this)">
                                    <span class="toggle-icon">+</span>
                                    WEEK 2 & 3: DIE-OFF
                                </th>
                            </tr>
                            <tr class="hidden-row">
                                <td>
                                    These two weeks are all about starving the
                                    parasites and fungus that have taken up
                                    residence in your body. You'll be eating a
                                    restricted diet and by stopping to feed them the
                                    starches and sugars that they love, the parasites
                                    and fungi will begin to die-off and detach from
                                    the walls of your colon and intestines. During
                                    these weeks you will be taking IDF #1 to support
                                    the ]ushing out of your digestive system and
                                    releasing of the toxins that have been causing
                                    so much dis-ease within you.  </td>
                            </tr>
                        </tbody>
                    </table>
                        <p class = pheader>
                            YOUR MORNING ROUTINE
                        </p>
                        <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
Upon waking, scrape tongue, oil pull (swish with coconut oil for 2-5 min), brush teeth with nondominate hand (be sure to use ]uoride-free toothpaste!).
                            
Dilute 2-3 teaspoons of Celtic Sea Salt into 500ml of clean ?ltered water and drink on an empty stomach. 

Appox 20 minutes later, enjoy a cup of warm lemon water with cayenne pepper while you sit with your journal and take note of how your body is feeling, how well you slept, any emotions that are coming up for you, and a minimum of 3-6 things that you are grateful for.
                                                        
Take IDF #1 capsules. I recommend starting with 1 capsule, and increasing by 1 capsule per day until the desired consistency and quantity of stooling is achieved. You should be passing stool 1-3 times per day that is the consistency of toothpaste and approx 6 inches/20cm in length.Eat breakfast. Remember, this should be your largest meal of the day. See our meal plans and recipes in the Facebook group                        
                                                   
                        </pre>
                        <div class="container4">
                            <div class="overlay">
                                <div class="text-block-sit">
                                  
                                    <p class="mains">
                                    <bold>
                                        SIT IN GRATITUDE FOR A MINIMUM OF 5-10 MINUTES
                                        BOTH IN THE AM AND IN THE PM. 
                                    </bold> 
                                    </p>
                                    <p class="mains">
                                        <bold>
                                            THIS PRACTICES ALINE WILL BEGIN TO PROFOUDLY
                                            SHIFT YOUR EXPERIENCE IN LIFE.
                                        </bold>
                                        
                                    </p>
                                </div>
                            </div>
                        </div>
                        <p class = pheader>
                            THINGS TO NOTE
                        </p>
                        <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
Make sure you slow down in all areas of your life. As your body releases toxins, stagnant energy will begin to shift and move, and you need to give it the space it needs to be felt.                                  
                           
But if you keep up with the frantic pace of life you're likely used to, these emotions will stay buried.

Please be mindful not to exert yourself too much. This cleanse is about going inward as your body sheds toxins. If you do workout, light training only. I recommend walks in nature, gentle cycling, stretching, and light stability training.

When you eat, you should feel satiated, but not as though you've overindulged. Chew your food well until it's a liquid to aid digestion. Carry a green appleand a handful of activated nuts to avoid low blood sugar.

Avoid eating within 3 hours of bed and no drinking liquid 1-2 hours before bed.

During this phase be prepared to experience periods of low energy, skin breakouts, headaches, irritability, mood swings and cravings
</pre>                        
<div class="container5">
    <div class="overlay">
        <div class="text-block-last">
          <h2>
            DAILY
          </h2>
          <p>
            IDF #1
          </p>
          <p>
            Zone Exercise
          </p>
          <p>
            3 R's - Reflection, Refractory Period & Re-phrase Gratitude Practice
          </p>
          <h2>
            1-2X/WEEK
          </h2>
          <p>
            Infrared sauna or epsom bath
          </p>
          <p>
            Early morning sun (before 9am) on exposed skin + 
            sun gazing
          </p>
          <p> 
            lymphatic drainage massage
          </p>
          <h2>
            AS MUCH AS POSSIBLE
          </h2>
          <p>
            Get into nature(waterfalls,ocean,forest)
            Put your barefeet on the earth (grounding)
          </p>
        </div>
    </div>
</div>
                        <p class = pheader>
                            YOUR EVENING ROUTINE
                        </p>
                        <p class = pheader2>Journaling</p>
                        <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
Set yourself up for success. In week 1, you'll learn about the 3 R's — Reflection, Refractory, and Reframe. Get in the habit of reviewing your 3 R's nightly. Then write out 3 things that are priorities to get done for the following day. This primes the unconscious/subconscious brain so we don't distract ourselves and we begin to notice any sabotaging patterns.
                        </pre>
                        
                        <p class = pheader2>Approx 2 hours before bed</p>
                        <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
Have a cup of tea. Chamomile tea is well-known to help your nervous system relax. But when we pair it with glycine (found in collagen), it becomes a potent sleep-aid.
                        
Turn down the lights and get off screens. Artificial light is detrimental to our sleep cycles. As such, we recommend turning off lights + screens, and lighting candles. Implementing this simple change alone, will result in significant shifts in the quality of your sleep.
                        </pre>
                        
                        <p class = pheader2>Before Bed</p>
                        <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
Nice gentle stretching or Zone Exercises. Connecting with your breath and doing slow, intentional stretching at night before bed helps to relax the nervous system and improve circadian rhythm.
                        </pre>
                        
                        <p class = pheader>
                            YOUR MORNING ROUTINE
                        </p>
                        <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
Continue with the same morning routine that you established in Weeks 2 & 3. However, instead of IDF #1, you will begin to take IDF #2. 
                        
Dissolve 1 teaspoon of IDF #2 in 250ml of water. Stir or shake well, and drink immediately on an empty stomach.

Eat breakfast. Remember, this should be your largest meal of the day. See our meal plans and recipes in the Facebook group for ideas.
                        
You want to consume 4-5 doses of IDF #2 daily. It should be taken on an empty stomach, or approx 1-2hours after a meal
                        </pre>
                        <table class="week">
                            <tbody>
                                <tr>
                                    <th onclick="toggleRow(this)">
                                        <span class="toggle-icon">+</span>
                                        WEEK 4&5: CLEANSING PHASE
                                    </th>
                                </tr>
                                <tr class="hidden-row">
                                    <td>
                                        Beef, lamb, goat, eggs, chicken, duck, turkey, and organ meat. Pork is okay but not recommended. Fish and other seafood are okay, but choose high quality and wild, not farmed. Bone broth is highly recommended.
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        
                        <p class = pheader>
                            YOUR MORNING ROUTINE
                        </p>
                        <pre style="font-family: 'Helvetica Neue', sans-serif; font-weight: normal; text-align: left; white-space: pre-wrap;">
Continue with the same morning routine that you established in Weeks 2 & 3. However, instead of IDF #1, you will begin to take IDF #2.
                                                        
Dissolve 1 teaspoon of IDF #2 in 250ml of water. Stir or shake well, and drink immediately on an empty stomach.
                                                        
Eat breakfast. Remember, this should be your largest meal of the day. See our meal plans and recipes in the Facebook group for ideas.
                                                        
You want to consume 4-5 doses of IDF #2 daily. It should be taken on an empty stomach, or approx 1-2 hours after a meal
                                                     
                                                    <pre>
                </section>
                <section id="faq" class="mt-5">
                    <h2 class="section-title">Frequently Asked Questions</h2>
                    <div id="faq-container"></div>
                </section>
            </div>
        </div>
    </div>
    <footer class="footer">
        <div style="width: 30px;"></div> <!-- Spacer to balance the arrow -->
        <div class="logo-text-container">
            <img src="{{asset('asset/images/logo.jpg')}}" alt="Aligned Sovereignty Logo">
            <div class="copyright">Aligned Sovereignty 2024 © All Rights Reserved</div>
        </div>
    
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        const faqs = [
            {
                question: "If I have a headache, am I able to take anything for it?",
                answer: "It's best to consult with your healthcare provider for specific recommendations during the cleanse."
            },
            {
                question: "Can I eat mushrooms during the cleanse?",
                answer: "Mushrooms are generally not recommended during the cleanse as they can potentially feed fungal overgrowth."
            },
            {
                question: "Can I drink coconut water?",
                answer: "Coconut water is not recommended during the cleanse due to its natural sugar content."
            },
            {
                question: "I do not eat meat. Can I still do the cleanse?",
                answer: "Yes, but you may need to adjust the program. Please consult with the program coordinator for vegetarian options."
            },
            {
                question: "How much water should I be drinking?",
                answer: "It's recommended to drink plenty of water throughout the day. A general guideline is about 8 glasses (64 ounces) of water per day, but this can vary based on individual needs."
            }
        ];

        const faqContainer = document.getElementById('faq-container');

        faqs.forEach(faq => {
            const faqElement = document.createElement('div');
            faqElement.innerHTML = `
                <h5 class="mt-4">${faq.question}</h5>
                <p>${faq.answer}</p>
            `;
            faqContainer.appendChild(faqElement);
        });

        function toggleRow(header) {
    const nextRow = header.parentElement.nextElementSibling;
    const toggleIcon = header.querySelector('.toggle-icon');
    
    if (nextRow.style.display === 'none' || nextRow.style.display === '') {
        nextRow.style.display = 'table-row';
        toggleIcon.textContent = '–';
    } else {
        nextRow.style.display = 'none';
        toggleIcon.textContent = '+';
    }
}
    </script>
</body>
</html>