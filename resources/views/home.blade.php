@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
<div class="mx-auto my-2 w-100">

<div class="adsbyvli" data-ad-slot="vi_1842078065" style="width: 320px; height: 50px"></div><script>(vitag.Init = window.vitag.Init || []).push(function(){viAPItag.display("vi_1842078065")})</script>

</div> </div>

<div class="row ">
<div class="col-12 col-sm-8 col-md-7 col-lg-5 col-xl-4 m-auto p-0 rounded card-1 animate__headShake" id="tray">
<div id="pin_tray ">
<div class="row m-auto p-2">
<img src="{{ asset('img/favicon-32x32.png') }}" alt="confess.space logo" class="rounded-circle col-4 m-auto logo-page">
<div class="password col-8 d-flex justify-content-center align-items-center">
<ul id="pass">
<li><strong>User ID - </strong><span class="imp">{{ $user->username }}</span></li>
<li><strong>Pin - </strong><span class="imp">{{ $user->secret_key }}</span></li>
</ul>
</div>
</div>
</div>
<p id="domain_abb" class="p-2 m-0 text-center">
http://confess.space </p>
<p class=" text-center p-2 m-0">
<strong> Please take a screenshot of these details </strong><br>
You need these details to login from anywhere! PIN cannot be restored!
</p>
<p class=" text-center p-2 m-0">
<button class="btn rounded-circle" onclick="closeTray()"><i class="fa fa-close"></i></button>
</p>
</div>
<div id="show_pass" class="col-12 col-sm-8 col-md-7 col-lg-5 col-xl-4 m-auto p-2 rounded mt-3" onclick="openTray()">
Show Login Details <i class="fas fa-eye"></i>
</div>
</div>


<div class="row ">
<div id="share_tray" class="card col-12 col-sm-8 col-md-7 col-lg-5 col-xl-4 mx-auto mt-2 rounded card-2 border-0 ">
<h2 class="card-title mt-2">
Share this link <wbr />with your friends and collect <wbr />Anonymous Messages
</h2>
<hr>
<div class="row m-0 my-1 share_buttons text border-0">
<input type="text" class="form-control text-center mb-1" name="url" id="url" value="{{ url('message') }}?id={{ $user->username }}" onclick="copy()" readonly />
<button class="btn btn-block  btn-copy mt-0 mb-1 share_btn_gleam" onclick="copy()">
<i class="fa fa-copy"></i> Click to Copy
</button>
<button class="btn-block btn btn-success btn-whatsapp mt-0 mb-1 share_btn_gleam" onclick="whatsapp_share()"> <i class="fab fa-whatsapp" aria-hidden="true"></i>
Add to Story</button>
<button class="btn-block btn btn-primary btn-messenger mt-0 mb-1 share_btn_gleam" onclick="messenger_share()"> <i class="fab fa-facebook-messenger"></i>
Share</button>
</div>
<div class="row">
<div class="col d-flex justify-content-center">
<button class="mx-1 btn btn-instagram share_btn_gleam" id="instagram" onclick="instagram_share()"> <i class="fab fa-instagram" aria-hidden="true"></i></button>
<button class="mx-1 btn btn-snapchat share_btn_gleam" onclick="snapchat_share()"> <i class="fab fa-snapchat-ghost" aria-hidden="true"></i></button>
<button class="mx-1 btn btn-twitter share_btn_gleam" onclick="twitter_share()"> <i class="fab fa-twitter" aria-hidden="true"></i></button>
<button class="mx-1 btn btn-facebook share_btn_gleam" onclick="facebook_share()"><i class="fab fa-facebook" aria-hidden="true"></i></button>
<button class="mx-1 btn btn-share" onclick="share()"><i class="fa fa-plus" aria-hidden="true"></i></button>

</div>
</div>

<div class="row">
<div class="share mx-auto my-1">
<div class="row text-center my-2">
<div class="col-12">
<a class="btn btn-block" href="#timeline" style="background: #15f4ef; color: #004c4a">
<i class="fas fa-envelope" aria-hidden="true"></i>
Check Messages
</a>
</div>
</div>
<div class="row text-center my-2">
<div class="col-12">
<button type="button" class="btn btn-block" data-toggle="modal" data-target="#settings" style="background-color: #565656">
<i class="fa fa-cog"></i> Settings
</button>
</div>
</div>
</div>
</div>
</div>
<div id="show_share" class="col-12 col-sm-8 col-md-7 col-lg-5 col-xl-4 m-auto p-2 rounded text-center" onclick="openShare()">
Open Share Menu <i class="fas fa-share"></i>
</div>
</div>


<div class="row" id="info_tray">
<div class="card col-12 col-sm-8 col-md-7 col-lg-5 col-xl-4 mx-auto mt-2 p-3 rounded card-2 border-0 ">
<p>
<span class="badge badge-danger">Important</span> Please <strong>allow</strong> notification to get notified about new messages.</br>
<span class="badge badge-danger">Important</span> There are <b>no ways</b> to know who messaged you!<br>
<span class="badge badge-success">New</span> To see <strong>newly received messages</strong>, Refresh and scroll down on this page. Only you will see the received messages. Have FUN!
</p>
<p class=" text-center p-2 m-0">
<button class="btn rounded-circle" onclick="closeInfoTray()"><i class="fa fa-close"></i></button>
</p>
</div>
</div>

<div class="row">
<!-- <div class="card card-2 col-12 col-sm-8 col-md-7 col-lg-5 col-xl-4 p-2 mx-auto my-2">
<div id="taboola-mid-homepage-thumbnails"></div>
<script type="text/javascript">
                    window._taboola = window._taboola || [];
                    _taboola.push({
                        mode: 'thumbnails-mid-homepage',
                        container: 'taboola-mid-homepage-thumbnails',
                        placement: 'Mid Homepage Thumbnails',
                        target_type: 'mix'
                    });
                </script>
</div> -->
</div>
<!-- <div class="row" id="email_form">
<div class="card card-2 col-12 col-sm-8 col-md-7  col-lg-5 col-xl-4 p-2 mx-auto my-2">
<div class="row">
<div class="p-5">
<h2 class="text-center">
<strong>🎁 Want more Games? 😍</strong>
</h2>
<p class="text-center">
We are currently working on new games and funny challenges. Enter your email below to be the first to play them 😎
<br>
</p>
<div id="revue-embed">
<form action="https://www.getrevue.co/profile/FriendshipKing/add_subscriber" method="post" id="revue-form" name="revue-form" target="_blank">
<div class="revue-form-group my-2">
<label for="member_email" class="text-bold"><strong>📧 Email address</strong></label>
 <input class="revue-form-field form-control" placeholder="Your email address..." type="email" name="member[email]" id="member_email" required>
</div>
<div class="revue-form-group my-2">
<label for="member_first_name" class="text-bold"><strong>👀 First name</strong></label>
<input class="revue-form-field form-control" placeholder="First name" value="jayson" type="text" name="member[first_name]" id="member_first_name">
</div>
<div class="revue-form-actions my-2">
<input type="submit" value="Send Me New Games 😍" name="member[subscribe]" id="member_submit" class="btn btn-block">
</div>
<div class="revue-form-footer text-center"><small>By subscribing, you agree with Revue’s <a target="_blank" href="https://www.getrevue.co/terms">Terms</a> and <a target="_blank" href="https://www.getrevue.co/privacy">Privacy Policy</a>.</small></div>
</form>
</div>
</div>
</div>
</div>
</div> -->
<div class="row timeline my-2">
<div class="card col-12 col-sm-8 col-md-7 col-lg-5 col-xl-4 mx-auto p-3 rounded card-2 border-0" id="timeline">
<h2 class="text-center"><strong> Anonymous Message Timeline </strong></h2>
<hr>

@if(count($messages) != 0) 
    @foreach($messages as $key => $message)
        <div class="row message_holder p-2">
        <div class="card message  message-4 border-0 mx-auto p-3" id="message_0">
            <div class="message_text">
            {{ $message->Message }} </div>
            <div class="footer_menu mt-2">
            <div class="message_divider float-left">
            confess.space </div>
            <form action="{{ url('message/delete') }}" class="delete_form" method="post">
            <div class="form-group m-0 p-0">
            <input type="text" name="id" value="{{ $message->id }}" class="hidden_feild">
            <input type="text" name="message_to_delete" value="b3Bhdw==" class="hidden_feild">
            <input type="text" name="message_id" value="message_0" class="hidden_feild">
            <input type="text" name="delete_form" value="Delete" class="hidden_feild">
            </div>
            <a href="{{ url('message/delete?id=').$message->id }}" class="text-center square  bg-white "><i class="fas fa-trash" style="color:black;margin-top:8px"></i></a>
            <!-- <button type="submit" class="text-center square  bg-white"><i class="fas fa-trash"></i></button> -->
            </form>
            </div>
            </div>
        </div>
    
    @endforeach
</div>
</div>
@else 

    <div class="row message_holder p-2">
    <div class="card message message-none border-0 mx-auto p-3">
    <div class="message_text">
    You don't have any messages yet. <br>
    Newer messages will appear here!
    </div>
    <div class="footer_menu">
    <div class="message_divider float-left">
    confess.space </div>
    </div>
    </div>
    </div>
    </div>
    </div>

@endif



<!-- <div class="row">
<div class="card card-2 col-12 col-sm-12 col-md-12 col-lg-10 col-xl-10 p-2 mx-auto my-2">
<div id="taboola-below-homepage-thumbnails"></div>

</div>
</div> -->
</div>
<a href="" id="ref" onclick="refresh()" class="refresh rounded-left border-right-0"><i class="fa fa-repeat"></i> Refresh</a>


<script>
        // animate__backOutDown
        // Add animation to delete

        const delete_form = document.querySelectorAll(".delete_form");
        try {
            delete_form.forEach(element => {
                element.addEventListener('submit', function(evt) {
                    evt.preventDefault();
                    const formData = new FormData(this);
                    const message_id = formData.get('message_id');
                    const message_tab = document.getElementById(message_id);
                    // message_tab.innerHTML = `<div class="spinner-grow text-primary" role="status"><span class="sr-only">Loading...</span></div>`;
                    message_tab.style.background = `#cdcdcd`;
                    fetch('delete.php', {
                            method: "post",
                            body: formData,
                            credentials: "include"
                        })
                        .then(function(response) {
                            if (!response.ok) {
                                message_tab.style.background = `#0d0d0d`;
                                message_tab.innerHTML = `<p>Couldn't delete message!</p>`;
                            } else {
                                message_tab.parentNode.innerHTML = `<p class = "alert alert-success text-center col-12">Message Deleted successfully!</p>`;
                            }
                        })
                        .catch(function(err) {
                            message_tab.innerHTML = `<p>Network Error, please Refresh</p>`;
                            console.error(err);
                        });
                });
            });
        } catch (error) {
            console.error(error);
        }
    </script>

<script>
        function setCookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
        }

        function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }

        function refresh() {
            document.getElementById("ref").innerHTML = `<i class="fa fa-repeat"></i> Refreshing...`;
            document.getElementById("ref").style.backgroundColor = "#8400ff";
        }
    </script>

<script>
        var Gleam = Gleam || [];

        var today = new Date();
        var date = today.getFullYear() + '-' + (today.getMonth() + 1) + '-' + today.getDate();
        var tray = document.getElementById('tray');
        var show_pass = document.getElementById('show_pass');
        var share_tray = document.getElementById('share_tray');
        var show_share = document.getElementById('show_share');
        var counter = getCookie('counter');
        var options = getCookie('password');
        var days = getCookie('days');
        var share_menu = getCookie('shareMenu');
        var info = getCookie('info');


        function delete_account() {
            if (confirm('Are you sure you want to delete your account?')) {
                window.location.href = "https://confess.space/delete_account.php";
            } else {
                // Do nothing!
                console.log('Thing was not saved to the database.');
            }


        }
        if (counter == "") {
            setCookie('counter', '1', '1');
        } else {
            setCookie('counter', parseInt(counter) + 1, 1);
        }

        if (share_menu == date && counter <= 2) {
            openShare();
        } else if (share_menu === "") {
            openShare();
        } else {
            closeShare();
        }


        if (options == '1') {
            closeTray();
        } else {
            openTray();
        }
        if (info == '1') {
            closeInfoTray();
        } else {
            openInfoTray();
        }

        function closeShare() {
            share_tray.style.display = "none";
            show_share.style.display = "block";
        }

        function openShare() {
            setCookie('share_menu', date, 2)
            share_tray.style.display = "flex";
            show_share.style.display = "none";
        }

        function closeTray() {
            setCookie('password', '1', '5');
            tray.style.display = "none";
            show_pass.style.display = "block";
        }

        function openTray() {
            setCookie('password', '1', '5');
            tray.style.display = "block";
            show_pass.style.display = "none";
        }

        function closeInfoTray() {
            setCookie('info', '1', '2');
            info_tray.style.display = "none";
        }

        function openInfoTray() {
            setCookie('info', '1', '2');
            info_tray.style.display = "block";
        }
    </script>

<script>
        function share() {
            if (navigator.share) {
                navigator.share({
                        text: `✉️💬💌
Send Secret Message to jayson
🤩 I will never know who sent me which message 🤔
It's fun, Try here 👉 `,
                        url: `https://confess.space/message.php?id=j5bv86zz`
                    }).then(() => {
                        console.log('Thanks for sharing!');
                        try {
                            Gleam.push(['UserId', 'j5bv86zz']);
                        } catch (e) {
                            console.error(e)
                        }

                    })
                    .catch(err => {
                        console.log(`Couldn't share because of`, err.message);
                    });
            } else {
                $('#share_modal').modal('toggle');
                try {
                    Gleam.push(['UserId', 'j5bv86zz']);
                } catch (e) {
                    console.error(e)
                }

                console.log('Web share not supported');
            }
        }

        function copy() {
            var copyText = document.getElementById("url");
            copyText.select();
            document.execCommand("copy");
            copyText.blur();
            try {
                gtag("event", "Copy Text", {
                    event_category: "Link Share",
                    event_label: "Account",
                });
            } catch (e) {
                console.error(e);
            }
            alert("Link copied to clipboard! Paste it and have fun!");
        }

        function copyNewLink() {
            const el = document.createElement('textarea');

            var message_text = `https://confess.space/message.php?id=j5bv86zz`;
            el.value = message_text;

            el.setAttribute('readonly', '');
            el.style.position = 'absolute';
            el.style.left = '-9999px';
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
            try {
                gtag("event", "Copy Text", {
                    event_category: "Link Share",
                    event_label: "Account",
                });
            } catch (e) {
                console.error(e);
            }
            try {
                Gleam.push(['UserId', 'j5bv86zz']);
            } catch (e) {
                console.error(e)
            }

            alert("Copied! Add it to your bio to recieve messages.");
        }

        function copyWithMessage() {
            const el = document.createElement('textarea');

            var message_text = `✉️💬💌
Send Secret Message to jayson
🤩 I will never know who sent me which message 🤔
It's fun, Try here 👉 ` + `https://confess.space/message.php?id=j5bv86zz`;
            console.log(message_text)
            el.value = message_text;

            el.setAttribute('readonly', '');
            el.style.position = 'absolute';
            el.style.left = '-9999px';
            document.body.appendChild(el);
            el.select();
            document.execCommand('copy');
            document.body.removeChild(el);
            try {
                gtag("event", "Copy Text", {
                    event_category: "Link Share",
                    event_label: "Account",
                });
            } catch (e) {
                console.error(e);
            }
            try {
                Gleam.push(['UserId', 'j5bv86zz']);
            } catch (e) {
                console.error(e)
            }
            alert("Copied! Paste it and send it to your friends to recieve messages.");
        }

        function instagram_share() {
            try {
                gtag("event", "Instagram Share", {
                    event_category: "Link Share",
                    event_label: "Account",
                });
            } catch (e) {
                console.error(e);
            }
            $("#insta_share_modal").modal("show");
        }

        function twitter_share() {
            try {
                gtag("event", "Twitter Share", {
                    event_category: "Link Share",
                    event_label: "Account",
                });
            } catch (e) {
                console.error(e);
            }
            var shareMessage = "%E2%9C%89%EF%B8%8F%F0%9F%92%AC%F0%9F%92%8C%0D%0ASend+Secret+Message+to+%2Ajayson%2A%0D%0A%F0%9F%A4%A9+I+will+never+know+who+sent+me+which+message+%F0%9F%A4%94%0D%0AIt%27s+fun%2C+Try+here+%F0%9F%91%89+"
            var linkShare = document.getElementById("url").value;
            window.open(
                "https://twitter.com/share?url=" + linkShare + "&hashtags=secretmessage%2Cquizprank&related=TheRohitDas%2CQuizprank&text=" + shareMessage + "&via=QuizPrank&original_referer=" + window.location.origin,
                "_blank"
            );
        }

        function messenger_share() {
            try {
                gtag("event", "Messenger Share", {
                    event_category: "Link Share",
                    event_label: "Account",
                });
            } catch (e) {
                console.error(e);
            }
            var linkShare = `https://confess.space/message.php?id=j5bv86zz`;

            window.open(`https://www.addtoany.com/add_to/facebook_messenger?linkurl=${ linkShare }linkname=✉️💬💌
Send Secret Message to jayson
🤩 I will never know who sent me which message 🤔
It's fun, Try here 👉 `, "_blank")
        }

        function facebook_share() {
            try {
                gtag("event", "Facebook Share", {
                    event_category: "Link Share",
                    event_label: "Account",
                });
            } catch (e) {
                console.error(e);
            }
            var linkShare = `https://confess.space/message.php?id=j5bv86zz`;
            window.open(`https://www.addtoany.com/add_to/facebook?linkurl=${ linkShare }linkname=✉️💬💌
Send Secret Message to jayson
🤩 I will never know who sent me which message 🤔
It's fun, Try here 👉 `, "_blank");
        }

        function snapchat_share() {
            try {
                gtag("event", "Snapchat Share", {
                    event_category: "Link Share",
                    event_label: "Account",
                });
            } catch (e) {
                console.error(e);
            }

            $("#snapchat_share_modal").modal("show");
        }

        function whatsapp_share() {
            try {
                gtag("event", "Whatsapp Share", {
                    event_category: "Link Share",
                    event_label: "Account",
                });
            } catch (e) {
                // Honeybadger.notify(e);
                console.error(e);
            }
            window.open("whatsapp://send?text=%E2%9C%89%EF%B8%8F%F0%9F%92%AC%F0%9F%92%8C%0D%0ASend+Secret+Message+to+%2Ajayson%2A%0D%0A%F0%9F%A4%A9+I+will+never+know+who+sent+me+which+message+%F0%9F%A4%94%0D%0AIt%27s+fun%2C+Try+here+%F0%9F%91%89+https://confess.space/message.php?id=j5bv86zz", "_blank");
        }

        $(".share_btn_gleam").click(function() {
            try {
                Gleam.push(['UserId', 'j5bv86zz']);
            } catch (e) {
                console.error(e)
            }
        })
    </script>

<div class="modal fade" id="share_modal" tabindex="-1" role="dialog">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title">Share</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body ">

<div class="a2a_kit a2a_kit_size_54 a2a_default_style" data-a2a-url="https://confess.space/message.php?id=j5bv86zz" data-a2a-title="✉️💬💌
Send Secret Message to jayson
🤩 I will never know who sent me which message 🤔
It's fun, Try here 👉 ">
<a class="a2a_dd m-1" href="https://www.addtoany.com/share"></a>
<a class="a2a_button_twitter m-1"></a>
<a class="a2a_button_pinterest m-1"></a>
<a class="a2a_button_reddit m-1"></a>
<a class="a2a_button_google_gmail m-1"></a>
<a class="a2a_button_tumblr m-1"></a>
<a class="a2a_button_copy_link m-1"></a>
<a class="a2a_button_wordpress m-1"></a>
<a class="a2a_button_sms m-1"></a>
 <a class="a2a_button_skype m-1"></a>
<a class="a2a_button_outlook_com m-1"></a>
<a class="a2a_button_buffer m-1"></a>
<a class="a2a_button_blogger m-1"></a>
<a class="a2a_button_telegram m-1"></a>
<a class="a2a_button_whatsapp m-1"></a>
<a class="a2a_button_linkedin m-1"></a>
<a class="a2a_button_email m-1"></a>
</div>
<script>
                        var a2a_config = a2a_config || {};
                        a2a_config.onclick = 1;
                        a2a_config.num_services = 22;
                        a2a_config.thanks = {
                            postShare: false
                        };
                    </script>
<script async src="https://static.addtoany.com/menu/page.js"></script>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
</div>
</div>
</div>
</div>
<script>
        function email_card() {
            if (!email_added() && parseInt(counter) > 1) {
                $("#email_form").show();
                event_logging("email_card", "interaction", "email_card_shown");
            } else {
                $("#email_form").hide();
            }
        }


        $("#revue-form").submit(function() {
            set_email();
            event_logging("email_card", "interaction", "email_added");
        })

        function set_email() {
            set_cookie("email", "1", 1000);

        }

        function get_email() {
            return get_cookie("email");
        }

        function email_added() {
            if (get_email() == "1") return true;
            else return false;
        }

        function event_logging(action, category, label) {
            try {
                gtag("event", action.toLowerCase(), {
                    event_category: category.toLowerCase(),
                    event_label: label.toLowerCase(),
                });
            } catch (error) {
                console.error(error);
            }
        }

        function set_cookie(cname, cvalue, exdays) {
            var d = new Date();
            d.setTime(d.getTime() + exdays * 24 * 60 * 60 * 1000);
            var expires = "expires=" + d.toUTCString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
            return true;
        }

        function get_cookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(";");
            for (var i = 0; i < ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) == " ") {
                    c = c.substring(1);
                }
                if (c.indexOf(name) == 0) {
                    return c.substring(name.length, c.length);
                }
            }
            return "";
        }
    </script>
<div class="modal fade" id="settings" tabindex="-1" role="dialog" aria-labelledby="SettingLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="SettingLabel">Settings</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<p>Delete your account permanently.</p>
<p> After clicking delete account button, your data will be deleted from our servers.</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
<a href="{{ url('delete_user?username=').$user->username }}" class="btn p-1 rounded danger bg-danger" id="delete_account">
<i class="fas fa-trash" aria-hidden="true"></i>
Delete Account
</a>
</div>
</div>
</div>
</div>

<div class="modal fade" id="snapchat_share_modal" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<div>
<h3>Share on SnapChat <small>
<i id="snapchat-modal" class="fab fa-snapchat-ghost fa-4x"></i></h3>
</small>
<div class="dashed__box">
<h4>Share as Snap 🤳</h4>
<ol class="mt-1">
<li>Copy your link 👉
<button class="btn btn-copy font-sm px-2 py-1" onclick="copyNewLink()">
<small>Copy Link</small>
</button>
</li>
<li>Create a Snap with <strong>Swipe UP ⬆</strong>.</li>
<li>Enjoy ✨</li>
</ol>
</div>
<p class="text-center">OR</p>
<div class="dashed__box mb-0">
<h4>Share as Direct Message ✉</h4>
<p class="mb-0 mt-1">
Send the link as Direct Message(DM) to friends.
<button class="btn btn-block btn-copy mt-1" onclick="copyWithMessage()">
<i class="fa fa-copy"></i> Copy Link as Message
</button>
</p>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="insta_share_modal" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<div>
<h3>Share on Instagram <small>
<i id="instagram-modal" class="fab fa-instagram fa-4x"></i></h3>
</small>
<div class="dashed__box">
<h4>Share as Story/Reel 🤳</h4>
<ol class="mt-1">
<li>Copy your link 👉
<button class="btn btn-copy font-sm px-2 py-1" onclick="copyNewLink()">
<small>Copy Link</small>
</button>
</li>

<li>Go to <span class="bold">edit profile</span> in your instagram.</li>
<li>Paste the copied link in <span class="bold">"Website".</span></li>
<li>Add a story asking your friends to send secret message.</li>
</ol>
</div>
<p class="text-center">OR</p>
<div class="dashed__box mb-0">
 <h4>Share as Direct Message ✉</h4>
<p class="mb-0 mt-1">
Send the link as Direct Message(DM) to friends.
<button class="btn btn-block btn-copy mt-1" onclick="copyWithMessage()">
<i class="fa fa-copy"></i> Copy Link as Message
</button>
</p>
</div>
</div>
</div>
</div>
</div>
</div>

<div class="modal fade" id="twitter_bio_modal" role="dialog">
<div class="modal-dialog modal-dialog-centered">
<div class="modal-content text-center">
<div class="modal-body">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
<div>
<p><i id="twitter-modal" class="fab fa-twitter fa-4x"></i></p>
<h3>Add to twitter BIO</h3>
<ul>
<li>Copy your link.</li>

<li>Go to <span class="bold">edit profile</span> in your Twitter account.</li>
<li>Paste the copied link in <span class="bold">"Website".</span></li>
<br>
<li>Or, Send as Direct Message(DM) to friends.</li>
</ul>
</div>
</div>
</div>
</div>
</div>
<script data-categories="performance">
        email_card();
    </script>
<img src="https://notix.io/mt.gif?user=j5bv86zz&app_id=10041639860b94cf6981d09a08a5e64" width="1" height="1">
<img src="https://notix.io/rtg.gif?px=472a4ea0-0d22-4874-ae38-32f36ca53678&app_id=10041639860b94cf6981d09a08a5e64" width="1" height="1">

<footer style="background: blueviolet; color: white; margin-top:10px;">

<div class="container">
<hr class="clearfix d-md-none" style="margin: 10% 15% 5%;">

<div class="row text-center d-flex justify-content-center pt-5 mb-3">

<div class="col-md-2 mb-3">
<h6 class="text-uppercase font-weight-bold">
<a href="../../terms.php" class="text-light">Terms of Use</a>
</h6>
</div>


<!-- <div class="col-md-2 mb-3">
<h6 class="text-uppercase font-weight-bold">
<a href="../../about.php" class="text-light">About us</a>
</h6>
</div> -->


<div class="col-md-2 mb-3">
<h6 class="text-uppercase font-weight-bold">
<a href="../../disclaimer.php" class="text-light">Disclaimer</a>
</h6>
</div>


<div class="col-md-2 mb-3">
<h6 class="text-uppercase font-weight-bold">
<a href="../../cookiepolicy.php" class="text-light">Cookie Policy</a>
</h6>
</div>


<div class="col-md-2 mb-3">
<h6 class="text-uppercase font-weight-bold">
<a href="../../privacy-policy.php" class="text-light">Privacy Policy</a>
</h6>
</div>




<!-- <div class="col-md-2 mb-3">
<h6 class="text-uppercase font-weight-bold">
<a href="../../contact-us.php" class="text-light">Contact Us</a>
</h6>
</div> -->

</div>

<hr class="rgba-white-light" style="margin: 0 15%;">

<div class="row d-flex text-center justify-content-center mt-1 mb-md-0 mb-4">
</div>
</div>


<div class="footer-copyright text-center py-3 " style="background-color: indigo">© 2022 Copyright:
<a href="https://confess.space/" class="text-light"> Confess.space</a>
</div>


<script async src="https://www.googletagmanager.com/gtag/js?id=G-94XQDK4SL9"></script>
<script>
  window.dataLayer = window.dataLayer || [];

  function gtag() {
    dataLayer.push(arguments);
  }
  gtag('js', new Date());

  gtag('config', 'G-94XQDK4SL9');
</script></footer>
<div class="modal fade" id="logout" tabindex="-1" role="dialog" aria-labelledby="LogoutLabel" aria-hidden="true">
<div class="modal-dialog" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="LogoutLabel">Important Notice</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
<p>
Before logging out please take screenshot of the login credentials like PIN and ID {Green Box}. <br>
<strong> You need them to login again. PIN cannot be restored.</strong>
</p>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
<form action="{{ url('logout') }}" name="logout" method="get">
<input type="submit" value="Log out" class="btn" style="margin-left:auto;" name="logout">
</form>
</div>
</div>
</div>
</div>
<!-- <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div> -->
@endsection
