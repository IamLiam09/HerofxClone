@extends("layout")
@section("content")
    <section class="platform">
        <div class="imghodl"><div class="img"><h1>Platform</h1></div></div>
        <div class="power">
            <div class="hodl">
                <div class="heading">
                    <h1>The power of choice</h1>
                    <p>Now offering <b>MT5</b> and <b>MT4</b>, <b>Tradingview</b> soon to come.</p>
                </div>
                <div><img src="{{url('/images/herofxhomepage')}}"></div>
            </div>
        </div>
        <div class="download">
            <h1>Download the MetaTrader Platform</h1>
            <p>The most popular platform for trading FX, CFDs & Cryptos
            </p>
            <div class="services">
                <div  class="inner">
                    <img src="{{ URL("images/desktop-monitor.png")}}">
                    <h3>MT5 Desktop</h3>
                    <a href="#">Download now</a>
                </div>
                <div class="inner">
                    <img src="{{ URL("images/web.png")}}">
                    <h3>MT5 web trader</h3>
                    <a href="#">Login</a>
                </div>
                <div  class="inner">
                    <img src="{{ URL("images/android.png")}}">
                    <h3>MT5 andriod</h3>
                    <a href="#">Download now</a>
                </div>
            </div>
        </div>
        <div class="power">
            <div class="hodl">
            <img src="{{url('/herofx.png')}}">
                <div class="heading">
                    <h1>Trade using tradingview</h1>
                    <p>coming soon!</p>
                </div>
            </div>
        </div>
    </section>
@endsection("content")