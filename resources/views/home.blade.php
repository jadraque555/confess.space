@extends('layouts.app')

@section('content')
<style>
    .credentialLabel {
        font-size:23px;
        font-weight: 900;
        color: #dd5f88
    }

    .credentialValue {
        font-size:23px;
        font-weight: bold;
        color:black;
        margin-left: 15px;
    }

     .modal-content {
        background-image: linear-gradient(
            to right,
            #dd5f88,
            #e87089,
            #f1818c,
            #f89390,
            #ffa497
        );
        border-radius:30px;
        color:white;
        border:0px;
    }

</style>
<br />
        <div class="row mx-md-3">
          <div class="col-md-3"></div>
          <div class="col-md d-flex flex-column">
            <div class="div-form-login mx-md-5 hide-btn-div">
                <h5 class="text-white font-weight-bold text-center mt-3" style="font-size:22px">Take a screenshot of these details</h5>
                <p class="text-center text-white px-4" style="font-size:15px">You need these details to login from anywhere.
                    PINS cannot be restored!
                </p>
                <div class="bg-white mx-md-4 row" style="border-radius:8px">
                    <div class="col-12 d-flex justify-content-end flex-row pt-1">
                        <a class="text-danger font-weight-bold" style="font-size:12px;cursor:pointer" data-toggle="modal" data-target="#settings">Delete Account 
                            <span class="bg-danger p-1" style="border-radius:50px"><img src="{{ asset('img/trashcan.png') }}" style="width:15px" /></span>
                        </a>
                    </div>
                    <div class="col-md-4">
                        <img src="{{ asset('img/confessionslogo.png') }}" class="py-2" style="width:120px" />
                    </div>
                    <div class="col-md d-flex flex-column p-4 login-details">
                        <div class="d-flex flex-row">
                            <label class="credentialLabel">UserID:</label>
                            <label class="credentialValue"> {{ $user->username }}</label>  
                        </div>
                        <div class="d-flex flex-row">
                            <label class="credentialLabel">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;PIN:</label>
                            <label class="credentialValue"> {{ $user->secret_key }}</label>  
                        </div>
                    </div>
                    <div class="col-md-12 d-flex justify-content-center pb-1">
                        <img src="{{ asset('img/websiteUrl.PNG') }}" style="width:250px" />
                    </div>
                </div>
                <h4 class="text-white pt-3 mx-md-4 text-center">
                    <span style="font-size: 20x">Hide Login Details</span>
                    <img src="{{ asset('img/hide.png') }}" onClick="handleShowDetails('hide')" style="width:35px;cursor:pointer" class="ml-2 " />
                </h4> 
            </div>
            <br>
            <div class="div-form-login mx-md-5 show-btn-div">
              <h4 class="text-white pt-2 mx-md-4 text-center">
                <span style="font-size: 20x">Show Login Details</span>
                <img src="{{ asset('img/imoji3.PNG') }}" onClick="handleShowDetails('show')" class="ml-2" style="cursor:pointer" />
              </h4>
            </div>
            <br />
            <div class="div-form-login mx-md-5">
              <p class="text-center text-white px-2 px-md-5 pt-3">
                Share this link with your friends and start receiving Anonymous
                Messages
              </p>
              <div
                class="mx-md-5 bg-white border-5 input-div-regular d-flex justify-content-center align-items-center mb-3"
              >
                <input type="text" class="form-control text-center mb-1  mx-2 bg-transparent pt-1" name="url" id="url" value="{{ url('to') }}/{{ $user->username }}" onclick="copy()" readonly
                        style="color: #dd5f88;font-size:15px;height:30px" />


              </div>
              <h4 class="font-weight-bold text-white text-center">
                Share your Link
              </h4>
              <div class="d-flex flex-row justify-content-center pb-4">
                <div class="">
                  <img
                    src="{{ asset('img/instagram.png') }}"
                    style="height: 50px;cursor:pointer"
                    class="mr-3"
                    onClick="instagram_share()"
                  />
                </div>
                <div class="">
                  <img
                    src="{{ asset('img/facebook.png') }}"
                    style="height: 50px;cursor:pointer"
                    class="mr-3"
                    onClick="facebook_share()"
                  />
                </div>
                <div class="">
                  <img
                    src="{{ asset('img/messenger.png') }}"
                    style="height: 50px;cursor:pointer"
                    class="mr-3"
                    onClick="messenger_share()"
                  />
                </div>
                <div class="">
                  <img
                    src="{{ asset('img/twitter.png') }}"
                    style="height: 50px;cursor:pointer"
                    class="mr-3"
                    onClick="twitter_share()"
                  />
                </div>
                <div class="">
                  <img
                    src="{{ asset('img/snapchat.png') }}"
                    style="height: 50px;cursor:pointer"
                    class="mr-3"
                    onClick="snapchat_share()"
                  />
                </div>
                <div class="">
                  <img src="{{ asset('img/plusIcon.png') }}" style="height: 50px;cursor:pointer" onClick="share()" />
                </div>
              </div>
            </div>
            <br />
            <h4
              class="text-center"
              style="color: #dd5f88; font-weight: bolder !important"
            >
              Anonymous Confessions Timeline
            </h4>
            <div class="div-form-login mx-md-5 pb-4 px-3">
              <br />
              @if(count($messages) == 0) 
                <div class="d-flex flex-row default-message-empty">
                    <div
                    class="bg-white border-5 textarea-div mx-3"
                    style="height: 150px; position: relative"
                    >
                    You don't have any messages yet. Newer messages will appear
                    here!
                    <img
                        src="{{ asset('img/logo_w@2x.png') }}"
                        style="
                        width: 140px;
                        position: absolute;
                        left: 15px;
                        bottom: 15px;
                        "
                    />
                    </div>
                </div>
                
                <div class="d-flex flex-row mt-2 mx-4 justify-content-center">
                    <div
                    class="bg-white border-5 input-div d-flex justify-content-center align-items-center"
                    style="height: 42px; cursor: pointer"
                    >
                    <a
                        class="pt-1 font-weight-bold"
                        style="color: #dd5f88; font-size: 15px"
                        onClick="handleRefresh()"
                    >
                        <img src="{{ asset('img/refresh.png') }}" style="height: 25px"  />
                        &nbsp;Refresh
                    </a>
                    </div>
                </div>
              @else
              <div class="d-flex flex-row mx-4 justify-content-center mb-2">
                <div
                    class="bg-white border-5 input-div d-flex justify-content-center align-items-center"
                    style="height: 42px; cursor: pointer"
                    >
                    <a
                        class="pt-1 font-weight-bold"
                        style="color: #dd5f88; font-size: 15px"
                        onClick="handleRefresh()"
                    >
                        <img src="{{ asset('img/refresh.png') }}" style="height: 25px"  />
                        &nbsp;Refresh
                    </a>
                    </div>
                </div>
                <div class="px-2" style="{{ count($messages) > 3 ? 'height:500px;overflow-y:auto' : '' }}">
                    @foreach($messages as $key => $message)
                        <div
                        class="bg-white mb-2"
                        style="height: 150px; position: relative; border-radius: 30px;cursor:pointer"
                        onClick="window.location.href='{{ url('view/').'/'.$message->id }}'"
                        >
                        <div class="px-4 pt-2">{{ $message->Message }}</div>
                        <div class="d-flex justify-content-between"
                            style="
                            background-image: linear-gradient(
                                to right,
                                #ffa497,
                                #f89390,
                                #f0818a,
                                #e77087,
                                #dd5f85
                            );
                            position: absolute;
                            width: 100%;
                            bottom: 0px;
                            padding-left: 18px;
                            font-weight: 1000;
                            color: white;
                            border-bottom-left-radius: 30px;
                            border-bottom-right-radius: 30px;
                            "
                        >   
                            
                            <span>Confess.space</span>
                            <a class="text-danger font-weight-bold pr-4" style="font-size:12px;cursor:pointer" href="{{ url('message/delete?id=').$message->id }}">
                                <img src="http://localhost/confess.space/public/img/trashcan.png" style="width:15px;">
                            </a>

                        </div>
                        </div>
                    @endforeach
                </div>


                @if($seeMore)
                    <div class="d-flex justify-content-center">
                        <a href="{{ url('home') }}" class="px-4 py-2 font-weight-bold bg-white" style="cursor:pointer;border-radius:50px;color:#dd5f88">
                            <img src="{{ asset('img/arrowUp.png') }}" style="width:30px" />
                        </a>
                    </div>
                @else
                    <div class="d-flex justify-content-center">
                        <a href="{{ url('home?seeMore=true') }}" class="px-4 py-2 font-weight-bold bg-white" style="cursor:pointer;border-radius:50px;color:#dd5f88">See More</a>
                    </div>
                @endif
              

              @endif
            </div>
          </div>

          <div class="col-md-3"></div>
        </div>
        <br />



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
            <div class="modal-body">
            <p class="text-center font-weight-bold">Delete your account permanently.</p>
            <p class="text-center"> After clicking delete account button, your data will be deleted from our servers.</p>
                <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-warning btn-sm bg-white font-weight-bold border-0 px-4 py-1 mr-5" 
                            style="border-radius:50px;color:#dd5f88" data-dismiss="modal">Cancel</button>
                    <a href="{{ url('delete_user?username=').$user->username }}" 
                        class="btn btn-sm p-1 danger bg-danger text-white px-4" id="delete_account"
                        style="border-radius:50px;font-weight:bold">
                    <i class="fas fa-trash" aria-hidden="true"></i>
                    Delete Account
                    </a>
                </div>
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
@endsection

@section('scripts')

    <script>
        const showBtnDiv = $(".show-btn-div");
        const hideBtnDiv = $(".hide-btn-div");

        hideBtnDiv.addClass('d-none');

        function handleShowDetails(status) {
         
            if(status == "show") {

                hideBtnDiv.removeClass('d-none');
                showBtnDiv.addClass('d-none');

            } else if(status == "hide") {

                hideBtnDiv.addClass('d-none');
                showBtnDiv.removeClass('d-none');
            }
        }

        function handleRefresh() {
            window.location.reload();
        }
    </script>

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
@stop
