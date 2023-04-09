@extends('layout')
@section('content')
<section class="about">
    <div class="imghodl"><div class="img"><h1>About</h1></div></div>
    <div class="encap">
        <section class="writeup">
                <h1>Be your hero</h1>
                <p>We invite YOU to become the HERO of your own story, and every hero needs to overcome the challenges they face. Do you prefer raw spread or a commission based account? Do you use MT4 or MT5 platform? Do you trade Indices or Crypto? We are confident HeroFx will become your #1 trusted partner once you experience our world class services. Sign up today and evaluate the HERO advantage for yourself.</p>
                <a href="#">sign up for free</a>
            <div class="services">
                <div  class="inner">
                    <img src="{{ URL("images/trade-mark.png")}}" alt="mtscreens">
                    <p>latest technology</p>
                </div>
                <div class="inner">
                    <img src="{{ URL("images/fast-charge.png")}}" alt="mtscreens">
                    <p>fast execution</p>
                </div>
                <div class="inner">
                    <img src="{{ URL("images/chart-1.png")}}" alt="mtscreens">
                    <p>zero spreads</p>
                </div>
                <div class="inner">
                    <img src="{{ URL("images/devices.png")}}" alt="mtscreens">
                    <p>desktop, mobile $ web</p>
                </div>
            </div>
            <section class="wrap">
                <div>
                    <img src="{{ URL("images/Herofx.png")}}" alt="">
                </div>
                <div class="writeup">
                    <h4>why choose us?</h4>
                    <h1>Equipping Our Clients For Success</h1>
                    <p>HeroFx is an A-Book broker who invests in their client’s success. Choose from raw spread or no commission accounts, use daily technical analysis markups, entry level to advanced education and quizzes, trade signals and expert advisors with no fees, social trade copiers, a state of the art client dashboard, and the best trading conditions in the retail market through our fiber optic server network. When you win, we win! Ready to take your trading to the next level?</p>
                </div>
            </section>
        </section>
    </div>
    <div class="curve"> 
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
            <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
            c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
            c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
        </svg>
    </div>
    <div class="academy">
        <div class="hodl">
            <i class="far fa-clock"></i>  
            <h2>HeroFx Academy</h2>
            <p>Trading can seem like entering another world and speaking another language. Our education platform starts with terminology like “What is a pip?” and continues through technical analysis and trading strategies. Whether you are just starting out, or have advanced in trading, our education covers it all in video or e-book formats.</p>
        </div>
    </div>
    <section class="gridhodl">
        <div class="grid">
            <div class="inner">
                <i class="far fa-clock"></i>  
                <h2>TRADE COPIERS</h2>
                <p>When you are just starting out, it is good to have access to see what other traders are doing. We offer a variety of opportunities to view trade history from other traders, and the ability to connect and copy their trades. If you feel that your trading has reached a level that other people would benefit from, you can also qualify as a strategy provider and receive performance fees for your trades.</p>
            </div>
            <div class="inner">
                <i class="fas fa-award"></i>
                <h2>TRADE Signals</h2>
                <p>If you are on the go and don’t have a lot of time to sit and analyze the charts, trade signals can be very helpful. Our Signal Service includes forex, crypto-currency, indexes, spot metals, spot commodities and shares. These signals show entry, take profit and stop loss levels and can be filtered to include only the variety you prefer as well as the strength of the opportunity through the three star rating system.</p>
            </div>
            <div class="inner">
                <i class="far fa-money-bill-alt"></i>
                <h2>TECHNICAL MARKUPS</h2>
                <p>Understanding how the financial markets move takes more than just reading a book or watching a few videos. Hands on technical analysis in the real-time live market is the ticket to advancing your skills. Each day video markups and explanations are sent to your resource desk on multiple trading instruments for your use and review. Follow up videos are also sent to confirm the direction of these trades or to make course corrections if necessar</p>
            </div>
            <div class="inner">
                <i class="fas fa-users-cog"></i>
                <h2>ECONOMIC CALENDARS</h2>
                <p>Economic calendars are provided to keep you on top of high impact news events like CPI, FOMC, NFP and others. These events can send the market into a frenzy and cause issues with your trades if you are unaware. Our Economic calendar can be filtered to your specific trading instruments and alert you at your resource desk with the dates and times that affect your specific portfolio.</p>
            </div>
            <div class="inner">
                <i class="fas fa-award"></i>
                <h2>NEWS EVENTS</h2>
                <p>While our economic calendar notifies you in the moment of a high impact news event, it is smart to stay current on things that are trending in our economies that have a more subtle impact. Multiple articles are published and updated to your resource desk on a daily basis to keep you in the loop on happenings that affect the financial markets.</p>
            </div>
            <div class="inner">
                <i class="fas fa-users-cog"></i>
                <h2>COMPETITION & BONUSES</h2>
                <p>Welcome to the arena! At HeroFx we love to trade. In fact we kind of consider ourselves “Trade Nerds”. We love that trading can be lucrative but also want it to be fun. We offer bonus programs and quarterly competitive events that you can participate in, or simply track on our leader board. Friendly competitions even on demo accounts can be a great way to put your skills to the test against the trading elite.</p>
            </div>
        </div>
    </section>
</section>
@endsection("content")