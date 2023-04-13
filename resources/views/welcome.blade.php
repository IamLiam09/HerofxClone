@extends('layout')
@section('content')
<section class="home">
    <section class="first">
        <div class="hodl">
            <div class="wording">
                <h1>Raw spread and No commission broker</h1>
                <p>Trade Forex, Cryptos, and indicates with confidence and enjoy
                    a 1:500 Leverage</p>
                <a href="#">
                    Sign up for free
                </a>
            </div>
            <div>
                <img src="{{ URL("images/Herofx.png")}}" alt="mtscreens">
            </div>
        </div>
    </section>
    <section class="second">
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
                <p>desktop, mobile & web</p>
            </div>
        </div>
    </section>
    <section class="power">
        <div class="hodl">
            <div class="heading">
                <h1>Be your hero</h1>
                <p>We invite YOU to become the HERO of your own story, and every hero needs to overcome the challenges they face. Do you prefer raw spread or a commission based account? Do you use MT4 or MT5 platform? Do you trade Indices or Crypto? We are confident HeroFx will become your #1 trusted partner once you experience our world class services. Sign up today and evaluate the HERO advantage for yourself.</p>
                <a href="#">sign up for free</a>
            </div>
            <div>
                <img src="{{ URL("images/Herofx.png")}}" alt="">
            </div>
        </div>
    </section>
    <section class="power">
        <div class="hodl">
            <div>
                <img src="{{ URL("images/Herofx.png")}}" alt="">
            </div>
            <div class="heading">
                <h1>METATRADER 4 AND 5</h1>
                <p>HeroFX provides industry leading trading conditions on the Award Winning MT4 platform and MT5 platform. Our customers will soon be able to enjoy trading using Traidingview, which is coming soon.</p>
                <a href="#">sign up for free</a>
            </div>
        </div>
    </section>
    <section class="power">
        <div class="hodl">
            <div class="heading">
                <h1>TRADE WITH RAW SPREAD OR ZERO COMMISSIONS</h1>
                <p>HeroFX offers multiple account types to meet the needs of all traders. $20 Min Deposit
                </p>
                <h4>$20 Minimum Deposit 1:500 Leverage</h4>
                <h4>0.01 Minimum Lot 71 forex pairs</h4>
                <h4>59 Stocks 30 Cryptos</h4>
                <a href="#">sign up for free</a>
            </div>
            <div>
                <img src="{{ URL("images/Herofx.png")}}" alt="">
            </div>
        </div>
    </section>
    <section>
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide">Slide 1</div>
              <div class="swiper-slide">Slide 2</div>
              <div class="swiper-slide">Slide 3</div>
            </div>
            <!-- If we need pagination -->
            <div class="swiper-pagination"></div>
          
            <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          
            <!-- If we need scrollbar -->
            <div class="swiper-scrollbar"></div>
          </div>
    </section>
</section>
@endsection
