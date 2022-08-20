@extends('layouts.app')

@section('content')
<style>
    @media only screen and (max-width: 600px) { 
      .btn-send {
        font-size:15px !important
      }
      .div-form-login.message-info h4 span {
        font-size: 15px !important
      }
      .message-info h4 {
        padding-left: 10px;
        padding-right: 10px;
      }
    }
</style>
<br />
        <div class="row mx-md-3 mx-1">
          <div class="col-md-3"></div>
          <div class="col-md d-flex flex-column">
            <div class="div-form-login mx-md-5 pb-4 px-3">
                <form action="{{ url('message') }}" method="post" id="formSendMessage">
                    {{ csrf_field() }}
                    <input type="hidden" name="username" value="{{ $id }}" />
                    <h4 class="text-white pt-4 mx-md-4 text-center">
                        <span style="font-size: 20px">Message your friend</span>
                        <span class="font-weight-bold"
                        >secretly <img src="{{ asset('img/kidhat.PNG') }}"
                        /></span>
                    </h4>
                    <div class="d-flex flex-row">
                        <div class="w-100 bg-white border-5 textarea-div">
                        <textarea
                            class="w-100"
                            rows="7"
                            placeholder="Write your secret message here"
                            name="message"
                            id="message"
                        ></textarea>
                        </div>
                    </div>
                    <div class="d-flex flex-row mt-1 justify-content-center">
                        <input type="checkbox" checked name="agree" id="agree" />&nbsp;
                        <span
                        style="font-size: 11px !important"
                        class="pt-1 text-white"
                        >
                        You agree to Privacy Policy and Terms and Condition of our
                        website.</span
                        >
                    </div>
                    <div class="d-flex flex-row mt-2 mx-4">
                        <div
                        class="w-100 bg-white border-5 input-div d-flex justify-content-center align-items-center"
                        style="height: 42px; cursor: pointer"
                        >
                        <a
                            class="pt-1 font-weight-bold btn-send"
                            style="color: #dd5f88; font-size: 17px"
                            onClick="handleSumitForm()"
                        >
                            Send Secret Message <img src="{{ asset('img/psst.PNG') }}" />
                        </a>
                        </div>
                    </div>
                </form>
            </div>
            <div class="div-form-login message-info mx-md-5 pb-4 mt-4">
              <h4 class="text-white pt-4 mx-md-4">
                <span style="font-size: 18px"
                  >Confess anonymously, they will never know who sent the
                  message <img src="{{ asset('img/imoji.PNG') }}"
                /></span>
                <!-- <span class="font-weight-bold"
                  >secretly <img src="./assets/img/kidhat.png"
                /></span> -->
              </h4>
              <h4 class="text-white pt-4 mx-md-4">
                <span style="font-size: 18px">This website is </span>
                <span class="font-weight-bold" style="font-size: 18px"
                  >just for fun
                  <img
                    src="{{ asset('img/imoji1.PNG') }}"
                    style="height: 35px"
                  />.</span
                >
                <span style="font-size: 18px">
                  Do not go out of your way to spread head.
                  <img src="{{ asset('img/imoji2.PNG') }}" style="height: 35px" />
                </span>
              </h4>
            </div>
          </div>

          <div class="col-md-3"></div>
        </div>
        <br />
@endsection

@section('scripts')
    <script>
        function handleSumitForm() {
            const form = document.getElementById('formSendMessage')
            const message = document.getElementById('message');

            if(message.value == "") {
                alert('Message must not be empty')
                return false;
            }

            form.submit()
        }
    </script>
@stop
