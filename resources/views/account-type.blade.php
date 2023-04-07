@extends('layout')
@section('content')
<section class="account-type">
    <div class="imghodl">
            <div class="img">
                <div>
                    <h1>account types</h1>
                    <p>We offer multiple account types to meet the needs of all traders.</p>
                </div>
            </div>
        </div>
    <section class="main">
        <div class="first" id="first">
            <h2>Raw Spread</h2>
            <div>
                <p>raw spread(starting at 0.01pips)
            </div>
                <p>flat rate commission</p>
            <div>
                <p>hedging enabled</p>
            </div>
            <div>
                <p>EA enabled</p>
            </div>
            <div>
                <p>All pairs</p>
            </div>
            <a href="#">Open account</a>
        </div>
        <div class="second" id="second">
            <h2>No commission</h2>
            <div>
                <p>low spread(starting at 1.5pips)
            </div>
                <p>Zero commission</p>
            <div>
                <p>hedging enabled</p>
            </div>
            <div>
                <p>EA enabled</p>
            </div>
            <div>
                <p>All pairs</p>
            </div>
            <a href="#">Open account</a>
        </div>
    </section>
</section>
@endsection('content')