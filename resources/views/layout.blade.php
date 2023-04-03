 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/scss/app.scss', 'resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <div>
        <div>
            <img src={{ URL('images/Herofx.png')}} alt="logo">
        </div>
        <div>
            <a href="#">
                Home
            </a>
            <a href="#">
                About
            </a>
            <a href="#">
                Account Types
            </a>
            <a href="#">
                Platform
            </a>
            <a href="#">
                Trading Assets
            </a>
            <a href="#">
                FAQs
            </a>
            <a href="#">
                Partners  
            </a>
        </div>
        <div>
            <a href="#">
                login
            </a>
            <a href="#">
                register
            </a>
        </div>
    </div>
    @yield('content')
    <section>
        <h1>CREATE YOUR LIVE ACCOUNT TODAY</h1>
        <p>Sign up and start trading on one of the world’s most transparent brokerages.
            Trade your favorite FX and Crypto Pairs on MT5 or MT4 platform backed by true ECN connectivity.</p>
    </section>
    <section>
        <div>
            <img src="{{ URL("images/Herofx.png")}}">
            <p>Trade Forex, Cryptos, and Indices with confidence today! Up to 1:500 Leverage! The best market conditions. Truly RAW spreads. Zero commission options. Newest trading technology.</p>
        </div>
        <div>
            <h2>Quick Links</h2>
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/account-types">Account Types</a>
            <a href="platform">Platform</a>
            <a href="#">Trading Assest</a>
            <a href="FAQs">FAQs</a>
            <a href="partners">Partners</a>
        </div>
        <div>
            <h2>Contact Info</h2>
            <p>Hero FX Ltd. © reg. 2085846 BC 2021</p>
            <p>Trident Chambers P. O. Box 146 Road Town, Tortola British Virgin Islands</p>
            <p>Email: support@herofx.co</p>
            <p>Phone: (833) 4-HEROFX / (833) 443-7639</p>
            <div>
                {{-- to use font icons for facebook, twitter, instagram, gmail, phone --}}
            </div>
        </div>
    </section>
    <section>
        <p><b>Disclaimer</b> This material comprises personal opinions and ideas. It does not suggest to purchase financial services, nor does it guarantee the performance or outcome of future transactions. The material should not be interpreted as containing any type of financial advice. The accuracy, validity, or completeness of this information is not guaranteed and no liability is assumed for any loss related to any investment based on the material.</p>
        <p><b>Risk warning:</b> Operations mentioned in this material can be considered high-risk transactions, and the performance or outcome of these transactions cannot be guaranteed. It is possible that by trading you may sustain significant investment losses, possibly including the loss of money in your account. When trading, you must always take into consideration your level of experience and seek independent financial advice if necessary.</p>
        <p> if necessary.

            * Hero FX, Ltd does not solicit Citizens from the United States or Sweden. Please check with your local jurisdiction to determine if you are permitted to open an account</p>
        <h4>Copyright © 2023 HERO FX – ALL RIGHTS RESERVED</h4>
    </section>
</body>
</html>