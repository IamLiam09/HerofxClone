@extends('layout')
@section('content')
    <section class="partner">
        <div class="imghodl">
            <div class="img"><h1>HEROFX AFFILIATE PROGRAM</h1></div>
        </div>
        <section class="main">
            <div class="affiliate">
                <h1>How do you become a hero<span>fx</span> affiliate?</h1>
            </div>
            <div class="steps">
                <div class="procedure">
                    <div class="number">1</div>
                    <p>Create your profile and complete KYC Verification</p>
                </div>
                    {{-- font awesome arrow --}}
                <div class="procedure">
                    <div class="number">2</div>
                    <p>Click "Refer A Friend" in the client terminal
                    </p>
                </div>
                    {{-- font awesome arrow --}}
                <div class="procedure">
                    <div class="number">3</div>
                    <p>Create your custom registration links</p>
                </div>
                    {{-- font awesome arrow --}}
            </div>
            <div class="offer">
                <h1>What do we offer our hero<span>fx</span> partners?</h1>
                <div class="services">
                    <div class="details">3D Structured Earning Opportunities</div>
                    <div class="details">Attractive Revenue Sharing Model</div>
                    <div class="details">Deposit and Withdrawal with Cryptocurrencies</div>
                    <div class="details">Dedicated Affiliate Manager</div>
                    <div class="details">Instant Payouts As Soon As Each Trade Is Closed</div>
                    <div class="details">Dedicated Support Platform 24/7</div>
                </div>
            </div>
            <div class="wording">
                <h4>Referral Bonus Structure</h4>
                <h1>Learn How You're Going To Be Paid</h1>
            </div>
            <div class="program">
                <div class="phodl"> 
                    <div class="affhodl">
                        <div class="together">
                            <img src="{{ URL("images/logo-partner.png")}}">
                            <h1 class="a">AFFILIATE PROGRAM</h1>
                        </div>
                        <h3 class="b">Learn How you're</h3>
                        <h1>
                            GOING TO BE PAID
                        </h1>
                        <h3 class="c">For reffering individuals, get up $6 a lot for every trade they take</h3>
                        <a href="#" class="createsignup">open an account</a>
                    </div>
                    <div class="lap">
                        <img src="{{ URL("images/lap.png")}}">
                    </div>
                </div>
            </div>
            <div class="Do">
                <div class="heading">
                    <h5>WHAT WE DO OFFER</h5>
                    <h1>Our hero<span>fx</span> partners</h1>
                </div>
                <div class="grid">
                    <div class="details">
                        <img src="{{url("images/3d-Structure.svg")}}">
                        <span>3D structured</span>
                        <p>Earnings Opportunities</p>
                    </div>
                    <div class="details">
                        <img src="{{url("images/Attractive-Revenue.svg")}}">
                        <span>Attractive Revenue</span>
                        <p>sharing model</p>
                    </div>
                    <div class="details">
                        <img src="{{url("images/Deposit-and-Withdrawal.svg")}}">
                        <span>Deposit and Withdrawal</span>
                        <p>Sharing mode</p>
                    </div>
                    <div class="details">
                        <img src="{{url("images/Instant-Payout.svg")}}">
                        <span>Instant payout</span>
                        <p>As soon as each trade is closed</p>
                    </div>
                    <div class="details">
                        <img src="{{url("images/Dedicated-Affiliate.svg")}}">
                        <span>Dedicated affiliate</span>
                        <p>Affiliate Manager</p>
                    </div>
                    <div class="details">
                        <img src="{{url("images/Dedicated-Support.svg" )}}">
                        <span>Dedicated Support</span>
                        <p>Platform 24/7</p>
                    </div>
                </div>
            </div>
        </section>
    </section>
@endsection("content")