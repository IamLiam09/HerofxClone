@extends('layout')
@section('content')
    <section class="faqs">
        <div class="imghodl">
            <div class="img"><h1>FAQs</h1></div>
        </div>
        <section class="accordian">
            <div class="hodl">
                <ul id="accordion">
                    <li>
                        <label for="first">Can I change my personal information on my dashboard?<i class="fas fa-angle-double-down "></i></label>
                        <input type="radio" name="accord" id="first" checked>
                        <div class="content">
                            <p>Please go to “Profile” and you will be able to edit your information such as your password, email and your phone number.</p>
                    </li>
                    <li>
                        <label for="second">How do I enable Two Factor Authentication (2FA)?<i class="fas fa-angle-double-down "></i></label>
                        <input type="radio" name="accord" id="second" >
                        <div class="content">
                            <p>The Two-Factor Authentication (2FA) requires you to enter an additional code when signing into your account, adding an extra level of security. The Two-Factor Authentication feature currently supports the use of an authenticator app or an email address as a verification method.

                                To add 2FA to your account, follow these steps:
                                1. On your HeroFX profile, go to the “Profile” tab.
                                2. Click the Enable button under the Two Factor Authentication section.
                                3. To find the requested code, download and open up the Google Authenticator app on your phone and tap Begin Setup > Scan Barcode. Once you’ve used your phone to scan the barcode displayed in your browser, click Next in your browser. You will then be prompted to enter the authenticator code that will appear on your phone.</p>
                    </li>
                    <li>
                        <label for="third"> What type of customer support does HeroFX offer?<i class="fas fa-angle-double-down "></i></label>
                        <input type="radio" name="accord" id="third">
                        <div class="content">
                            <p>The HeroFX customer support team is available 24/7 to assist you with any needs you encounter. Simply click on the “Profile” tab and select “Help Desk” and submit a “new ticket.” Or you can go directly to the “Help Desk” link at the upper right corner of your window.</p>
                    </li>
                    <li>
                        <label for="fourth"> How do I cancel a deposit?<i class="fas fa-angle-double-down "></i></label>
                        <input type="radio" name="accord" id="fourth">
                        <div class="content">
                            <p>Transactions via “crypto” cannot be reverted once a crypto address has been used and the funds have left your exchange wallet.<br>
                                If you have not sent the funds yet, the deposit on your account will simply timeout and no further action is needed.</p>
                    </li>
                    <li>
                        <label for="fifth"> How do I know that the funds have reached HeroFX?<i class="fas fa-angle-double-down "></i></label>
                        <input type="radio" name="accord" id="fifth">
                        <div class="content">
                            <p>Once funds have been received, they will be credited to your HeroFX wallet automatically and an email notification will be sent.</p>
                    </li>
                    <li>
                        <label for="sixth">How long does it take for a deposit to reach my account?<i class="fas fa-angle-double-down "></i></label>
                        <input type="radio" name="accord" id="sixth">
                        <div class="content">
                            <p>If funds are sent from your crypto wallet, they will be credited once they reach the multiple network confirmations. This process can take up to 6 hours and depends on the blockchain network. Once the funds are received, they are instantly and automatically credited to your vault.</p>
                    </li>
                    <li>
                        <label for="seventh">I have sent funds. Why are they not in my MT4/MT5 account?<i class="fas fa-angle-double-down "></i></label>
                        <input type="radio" name="accord" id="seventh">
                        <div class="content">
                            <p>When you deposit funds successfully, they will appear in your wallet. To be able to trade with these funds, you will need to conduct an internal transfer from your wallet to your trading account. Once this step is completed they will be linked to your MT4/MT5 account under the same ID as your trading account.</p>
                    </li>
                    <li>
                        <label for="eight">What are my depositing options?<i class="fas fa-angle-double-down "></i></label>
                        <input type="radio" name="accord" id="eight">
                        <div class="content">
                            <p>We currently offer multiple deposit methods including BTC/ ETH/ USDT (ERC-20) For these deposits, select the deposit method and proceed to input the details of your deposit. You will be given a wallet address to which you can send your funds and they will be loaded to your account upon receipt. The minimum deposit in BTC is $20. With ETH/ UDST consider the “gas fees” on the ERC-20 network before using this form of payment to ensure it will go through. We understand these options may be preferred by our clients. However, HeroFX will not be responsible to make up difference of deposits if these options are used.</p>
                    </li>
                    <li>
                        <label for="ninth">Can withdrawals be made while trades are still open?<i class="fas fa-angle-double-down "></i></label>
                        <input type="radio" name="accord" id="ninth">
                        <div class="content">
                            <p>You may withdraw the funds in your wallets while having other funds in your trading account with open trades.</p>
                    </li>
                    <li>
                        <label for="tenth"> How do I submit a withdrawal?<i class="fas fa-angle-double-down "></i></label>
                        <input type="radio" name="accord" id="tenth">
                        <div class="content">
                            <p>You may withdraw the funds in your wallets while having other funds in your trading account with open trades.<br>
                                1- Select “Funds” tab<br>
                                
                                2- Select “Withdraw Funds” from the left hand panel.<br>
                                
                                3- Complete “Initial Information” proceed to “Transfer Details” and finish with “Confirmation.”</p>
                    </li>
                    <li>
                        <label for="eleventh"> How long does it take to withdraw?<i class="fas fa-angle-double-down "></i></label>
                        <input type="radio" name="accord" id="eleventh">
                        <div class="content">
                            <p>Withdrawals are reviewed by our payments team throughout the day. They conduct security checks to ensure that funds are being sent out to the correct person. You are therefore advised to check your email or to get in touch with our”Help Desk” should you have any pending withdrawals lasting over 24 hrs. Once approved by our payments team, funds should arrive in your Bitcoin wallet within an hour or less, depending on blockchain traffic. It is strongly advised that 2FA is enabled on your account for an extra layer of security.</p>
                    </li>
                    <li>
                        <label for="tweleveth"> How do I become an HeroFX Affiliate?<i class="fas fa-angle-double-down "></i></label>
                        <input type="radio" name="accord" id="tweleveth">
                        <div class="content">
                            <p>To become an HeroFX Affiliate all you need to do is click the “Refer A Friend” tab in your client area and you will automatically be approved to be a partner. Do you have a large following and want an upgraded partner program? Submit a ticket in the helpdesk so we can have a conversation and design a partner program that suits your needs. Should you require any further information on becoming an HeroFX affiliate, please do not hesitate to contact our “Help Desk” team.</p>
                    </li>
                </ul>
            </div>
        </section>
    </section>
@endsection("content")