@extends("layout")
@section("content")
    <section>
        <div>Platform</div>
        <div>
            <div>
                <h1>The power of choice</h1>
                <h4>Now offering MT5 and MT4, Tradingview soon to come.</h4>
            </div>
            <img src="{{url('/herofx.png')}}">
        </div>
        <div>
            <h1>Download the MetaTrader Platform</h1>
            <p>The most popular platform for trading FX, CFDs & Cryptos
            </p>
            <div>
             <div>
                {{-- FONT AWESOME --}}
                <h3>MT5 Desktop</h3>
                <a href="#">Download now</a>
             </div>
             <div>
                {{-- FONT AWESOME --}}
                <h3>MT5 web trader</h3>
                <a href="#">Login</a>
             </div>
             <div>
                {{-- FONT AWESOME --}}
                <h3>MT5 andriod</h3>
                <a href="#">Download now</a>
             </div>
            </div>
        </div>
        <div>
            <img src="{{url('/herofx.png')}}">
            <div>
                <h1>Trade using tradingview</h1>
                <h4>coming soon!</h4>
            </div>
        </div>
    </section>
@endsection("content")