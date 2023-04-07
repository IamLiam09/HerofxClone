 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield("title")</title>
    @vite(['resources/scss/style.scss', 'resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
</head>
<body>
    <div class="layout">
        <div class="layout navbar">
            <div class="layout navbar logo">
                <img src={{ URL('images/Herofx.png')}} alt="logo">
            </div>
            <div class="layout navbar link">
                <ul>
                    <li><a href="#">
                        Home
                    </a></li>
                    <li><a href="/about">
                        About
                    </a></li>
                    <li><a href="/account-type">
                        Account Types
                    </a></li>
                    <li><a href="/platform">
                        Platform
                    </a></li>
                    <li>
                        <a href="/trading-asset">
                            trading assets <span>&#129171;</span>
                            <ul>
                                <li><a href="funding-method">funding methods</a></li>
                                <li><a href="withdrawing-method">withdrawing methods</a></li>
                            </ul>
                        </a>
                    </li>
                    <li><a href="/FAQs">
                        FAQs
                    </a></li>
                    <li><a href="partners">
                        Partners  
                    </a>
                    </li>
                </ul>
            </div>
            <div class="users">
                <a href="#" class="users login">
                    login
                </a>
                <a href="#" class="users register">
                    open a free account
                </a>
            </div>
        </div>
        @yield('content')
        <section class="bottom">
            <section class="homepageaccount">
                <div class="inner">
                    <h1>CREATE YOUR LIVE ACCOUNT TODAY</h1>
                    <p>Sign up and start trading on one of the world’s most transparent brokerages.<br>
                        Trade your favorite FX and Crypto Pairs on MT5 or MT4 platform backed by true ECN connectivity.</p>
                    <a href="#" class="createsignup">
                        Sign up for free
                    </a>
                </div>
            </section>
            <section class="bottomnav">
                <div class="bimagehodl">
                    <div class="imghodl">
                        <img src="{{ URL("images/logo-bottom.png")}}">
                    </div>
                    <p>Trade Forex, Cryptos, and Indices with confidence <br>today! Up to 1:500 Leverage! The best market conditions. Truly RAW spreads. Zero commission <br> options. Newest trading technology.</p>
                </div>
                <div class="bottomnav link">
                    <ul>
                        <h1>Quick links</h1>
                        <li><a href="#">
                            Home
                        </a></li>
                        <li><a href="/about">
                            About
                        </a></li>
                        <li><a href="/account-type">
                            Account Types
                        </a></li>
                        <li><a href="/platform">
                            Platform
                        </a></li>
                        <li>
                            <a href="/trading-assets">
                                trading assets <span>&#129171;</span>
                                <ul>
                                    <li><a href="funding-method">funding methods</a></li>
                                    <li><a href="withdrawing-method">withdrawing methods</a></li>
                                </ul>
                            </a>
                        </li>
                        <li><a href="/FAQs">
                            FAQs
                        </a></li>
                        <li><a href="partners">
                            Partners  
                        </a>
                        </li>
                    </ul>
                </div>
                <div class="contact">
                    <h2>Contact Info</h2>
                    <p>Hero FX Ltd. © reg. 2085846 BC 2021<br>
                    Trident Chambers P. O. Box 146 Road Town, Tortola British Virgin Islands<br></p>
                    <p>Email: support@herofx.co</p>
                    <br>
                    <p>Phone: (833) 4-HEROFX / (833) 443-7639</p>
                    <div class="social">
                        <i class="fab fa-facebook-f"></i>
                        <i class="fab fa-twitter"></i>
                        <i class="fab  fa-instagram"></i>
                        <i class="fas fa-solid fa-envelope"></i>
                        <i class="fas fa-solid fa-phone"></i>
                    </div>
                </div>
            </section>
            <section class="disclamer">
                <p><b>Disclaimer</b> This material comprises personal opinions and ideas. It does not suggest to purchase financial services, nor does it guarantee the performance or outcome of future transactions. The material should not be interpreted as containing any type of financial advice. The accuracy, validity, or completeness of this information is not guaranteed and no liability is assumed for any loss related to any investment based on the material.</p>
                <p><b>Risk warning:</b> Operations mentioned in this material can be considered high-risk transactions, and the performance or outcome of these transactions cannot be guaranteed. It is possible that by trading you may sustain significant investment losses, possibly including the loss of money in your account. When trading, you must always take into consideration your level of experience and seek independent financial advice if necessary if necessary.</p>

                    <p>* Hero FX, Ltd does not solicit Citizens from the United States or Sweden. Please check with your local jurisdiction to determine if you are permitted to open an account</p>
                <h4 class="copyright">Copyright © 2023 HERO FX – ALL RIGHTS RESERVED</h4>
                <br>
            </section>
        </section>
    </div>
</body>
</html>