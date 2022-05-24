@extends('layouts.app')

@section('content')

<div class="container">
<div class="row">
<div class="mx-auto my-2 w-100">

<div class="adsbyvli" data-ad-slot="vi_1842078065" style="width: 320px; height: 50px"></div><script>(vitag.Init = window.vitag.Init || []).push(function(){viAPItag.display("vi_1842078065")})</script>

</div> </div>
<div class="row">
<div class="card card-2 col-12 col-sm-8 col-md-7  col-lg-5 col-xl-4 p-2 m-auto">
<h1 class="card-title text-center">Secret Messages 2022 <br> 😍</h1>
<h6 class="card-subtitle text-center text-muted">Get anonymous feedback from your friends, coworkers and Fans.</h6>
<hr>
<ol class="m-2 mt-3 mb-3 list-unstyled animate__fadeIn">
<li style="color: indigo;">You can never know who messaged you!🔮</li>
<li class="text-muted">Please allow <strong>NOTIFICATION</strong> to receive notifications about new message.</li>
</ol>
<form class="form-horizontal" method="POST" action="{{ route('register') }}">
{{ csrf_field() }}
<h5>Enter your name-</h2>
<div class="form-group">
<input type="text" class="form-control" name="name" id="in-name" placeholder="Nickname " autofocus required>
</div>
<div class="form-group">
<input class="btn btn-block font-weight-font-weight-bold" type="submit" id="sub" name="sub" value="Create your Link 💎">
</div>
<div class="form-group text-center">
<input type="checkbox" name="agree" id="agree" required checked>
<label for="agree">You agree to <a href="privacy-policy.html">Privacy Policy</a> and <a href="terms.html">Terms and condition</a> of our website.</label>
</div>
</form>
</div>
</div>
<div class="row">
<div class="card card-2 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 p-4 mx-auto my-2">
<h2 class="accordionH2">Frequently Asked Questions</h2>
<div class="accordion">
<div class="accordion-item">
<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">What is secretM.me?</span><span class="icon" aria-hidden="true"></span></button>
<div class="accordion-content">
<p>
SecretM.me allows you to get anonymous feedback from your friends, co-workers and
fans. Discover your strengths and areas of improvement by receiving feedbacks from everyone.
</p>
</div>
</div>
<div class="accordion-item">
<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Are secret messages for friends only?</span><span class="icon" aria-hidden="true"></span></button>
<div class="accordion-content">
<p>
No, you can receive secret messages from every one. You just have to share secretM.me
link on WhatsApp status or any other social media. Many people will start sharing their honest
feedback to you because they know you will never know who they are.
</p>
</div>
</div>
<div class="accordion-item">
<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Why I should use SecretM.me?</span><span class="icon" aria-hidden="true"></span></button>
<div class="accordion-content">
<p>
SecretM.me is an anonymous secret message platform which has many unique features.
You can check out by using just once.
</p>
</div>
</div>
<div class="accordion-item">
<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Is this app safe?</span><span class="icon" aria-hidden="true"></span></button>
<div class="accordion-content">
<p>
Yes this app is safe. If you don’t feel safe you can always delete your account and stop using the
website. Once you delete your account, it’s permanently deleted from our servers.
</p>
</div>
</div>
<div class="accordion-item">
<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">I want to know who messaged me?</span><span class="icon" aria-hidden="true"></span></button>
<div class="accordion-content">
<p>
If you have used a service called anonymous messages, you must understand that the identity of users sending you messages are not stored. Hence, there are no ways to understand who sent you the messages.</p>
</div>
</div>
<div class="accordion-item">
<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">I forgot my Login Pin, how can I recover it?</span><span class="icon" aria-hidden="true"></span></button>
<div class="accordion-content">
<p>
If you forgot the Login PIN then please create a new account. Anyone who has only a User ID but not pin is necessarily not the same person who has created the account. Therefore, we cannot provide Pin to anyone. </p>
</div>
</div>
<div class="accordion-item">
<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">I forgot to take the screenshot of the User ID and Pin, how can I Login?</span><span class="icon" aria-hidden="true"></span></button>
<div class="accordion-content">
<p>
Try visiting the website with the same browser you used to create an account. If your account is still logged in, then click on “Show Login Details” and then take the screenshot for future use. You can use that User Id and Pin to Login from any other device or browser in future.
But in case your account is not logged in, then there is no way to restore User Id and Pin. To continue using, you need to create a new account and this time remember to take the screenshot.</p>
</div>
</div>
<div class="accordion-item">
<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">How can I know the phone numbers of all the people that have seen my status or story?</span><span class="icon" aria-hidden="true"></span></button>
<div class="accordion-content">
<p>
We or any other website whose links you share on your story can ever know any person’s phone number that has seen your status. Neither can we even know your contact number. Therefore, please understand you can’t know by any means who has messaged you. </p>
</div>
</div>
<div class="accordion-item">
<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">Someone is abusing or insulting me, how can I know who they are?</span><span class="icon" aria-hidden="true"></span></button>
<div class="accordion-content">
<p>
If someone is insulting you and you are bothered, please log out of your account and stop using our service. If someone is abusing you, there is no way from our side to understand who messaged you. I completely understand your concern but that's how our website works.</p>
</div>
</div>
<div class="accordion-item">
<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">How can I stop receiving notifications?</span><span class="icon" aria-hidden="true"></span></button>
<div class="accordion-content">
<p>
If you want to stop receiving notifications, tap the lock icon (🔒) in the URL bar in your browser and then click on site settings,
then click “Notifications” Button,
Turn Off “Show Notifications”
You can now see Notifications are turned off. You can use this method to turn off notifications from any other sites as well.
You can also search for step by step guide on google by typing disable push notification on android browser. </p>
</div>
</div>
<div class="accordion-item">
<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">How can I permanently delete my account?</span><span class="icon" aria-hidden="true"></span></button>
<div class="accordion-content">
<p>
If you want to delete your account, tap on the settings button in Inbox page.
</p>
</div>
</div>
 <div class="accordion-item">
<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">People sending you anonymous messages but those messages are not appearing on my timeline, what can I do?</span><span class="icon" aria-hidden="true"></span></button>
<div class="accordion-content">
<p>
Try refreshing the page.
</p>
</div>
</div>
<div class="accordion-item">
<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">How to create my account?</span><span class="icon" aria-hidden="true"></span></button>
<div class="accordion-content">
<p>
Go to the website(https://secretm.me), Enter your name and then click the “Create your Link” button. Your account is now created. Copy your link by clicking the “Copy Link” button and then share that link on all your Social Media Accounts.
</p>
</div>
</div>
<div class="accordion-item">
<button id="accordion-button-1" aria-expanded="false"><span class="accordion-title">How to restore deleted messages?</span><span class="icon" aria-hidden="true"></span></button>
<div class="accordion-content">
<p>
Once you delete any message, it’s permanently deleted from our servers. Therefore, there is no way you can restore deleted messages.
</p>
</div>
</div>
</div>
<script>
                    const items = document.querySelectorAll(".accordion button");

                    function toggleAccordion() {
                        const itemToggle = this.getAttribute('aria-expanded');

                        for (i = 0; i < items.length; i++) {
                            items[i].setAttribute('aria-expanded', 'false');
                        }

                        if (itemToggle == 'false') {
                            this.setAttribute('aria-expanded', 'true');
                        }
                    }

                    items.forEach(item => item.addEventListener('click', toggleAccordion));
                </script>
</div>
</div>
<div class="row">

</div>
<br>
</div>
<script>
        var urlParam = new URLSearchParams(window.location.search);
        if (urlParam.has("error")) {
            var error = atob(urlParam.get("error"));
            var signup = document.getElementById("signup");
            var new_element = document.createElement("div");
            var text = document.createTextNode(error);
            new_element.appendChild(text);
            new_element.className = "alert alert-danger";
            signup.insertAdjacentElement('afterbegin', new_element);
        }
</script>

<footer style="background: blueviolet; color: white; margin-top:10px;">

<div class="container">
<hr class="clearfix d-md-none" style="margin: 10% 15% 5%;">

<div class="row text-center d-flex justify-content-center pt-5 mb-3">

<div class="col-md-2 mb-3">
<h6 class="text-uppercase font-weight-bold">
<a href="terms.html" class="text-light">Terms of Use</a>
</h6>
</div>


<div class="col-md-2 mb-3">
<h6 class="text-uppercase font-weight-bold">
<a href="about.html" class="text-light">About us</a>
</h6>
</div>


<div class="col-md-2 mb-3">
<h6 class="text-uppercase font-weight-bold">
<a href="disclaimer.html" class="text-light">Disclaimer</a>
</h6>
</div>


<div class="col-md-2 mb-3">
<h6 class="text-uppercase font-weight-bold">
<a href="cookiepolicy.html" class="text-light">Cookie Policy</a>
</h6>
</div>


<div class="col-md-2 mb-3">
<h6 class="text-uppercase font-weight-bold">
<a href="privacy-policy.html" class="text-light">Privacy Policy</a>
</h6>
</div>




<div class="col-md-2 mb-3">
<h6 class="text-uppercase font-weight-bold">
<a href="contact-us.html" class="text-light">Contact Us</a>
</h6>
</div>

</div>



</div>


<div class="footer-copyright text-center py-3 " style="background-color: indigo">© 2022 Copyright:
<a href="index.html" class="text-light"> SecretM.Me</a>
</div>

</h6>
</div>

</div>



</div>


<div class="footer-copyright text-center py-3 " style="background-color: indigo">© 2022 Copyright:
<a href="index.html" class="text-light"> SecretM.Me</a>
</div>

@endsection
