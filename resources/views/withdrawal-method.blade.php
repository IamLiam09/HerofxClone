@extends("layout")
@section("content")
    <section class="withdrawal"> 
        <div class="imghodl"> 
            <div class="img"><h1>withdrawal methods</h1></div>
        </div>
        <div class="writeup">
            <h1>
                HOW TO WITHDRAW FUNDS FROM YOUR HEROFX ACCOUNT</h1>
            <p>We have a flexible payment process for you to deposit funds and withdraw from your HeroFX account. You may choose to fund your account through cryptocurrencies.

            </p>
            <a href="#">sign up for free</a>
        </div>
        <div class="bitcoin">
            <div class="wrap">
                <div>
                    <img src="{{ url("images/Herofx.png")}}">
                </div>
                <div class="bitcoin writeup">
                    <h1>Bitcoin</h1>
                    <p>You can deposit and withdraw funds as little as $50 with Bitcoin. Bitcoin is a decentralized digital currency that keeps track of transactions in a distributed ledger known as a blockchain. It can be easily bought, sold and exchangable with other digital currency.</p>
                </div>
            </div>
        </div>
        <div class="curve">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none">
                <path class="elementor-shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
                c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
                c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
            </svg>
        </div>
        <div class="tether">
            <div class="wrap2">
                <div>
                    <img src="{{ url("images/Herofx.png")}}">
                </div>
                <div>
                    <h1>TETHER</h1>
                    <p>Tether is a cryptocurrency that works the same as other cryptocurrencies. Tether’s price is relatively stable compared to other coins, which frequently fluctuate. This feature helps tether stand out amongst the other currencies. You can use Tether to make any transaction at HeroFX.</p>
                </div>
            </div>
        </div>
        <div class="stablecoins"> 
            <div class="content">
                <h1>WHY SHOULD YOU CHOOSE STABLECOINS FOR TRANSACTIONS?</h1>
                <div class="services">
                    <div class="inner">
                        Compared to other cryptocurrencies, stablecoins are less volatile.
                    </div>
                    <div class="inner">Stablecoins are a secure investment since they are backed by solid assets.</div>
                    <div class="inner">International payments are made easier with stablecoins. Making payments globally has never been this simple.</div>
                    <div class="inner">Since it’s a blockchain-based payment system, it eliminates the need for middlemen in the transaction process.</div>
                </div>
            </div>
        </div>
    </section>
@endsection("content")