
@extends('layouts.app')

@section('content')

<br /><br />
        <div class="row mx-md-3">
          <div class="col-md-3"></div>
          <div class="col-md div-form-login mx-md-5">
            <form class="form-horizontal login-form" method="POST" id="formLogin" action="{{ route('login') }}">
                {{ csrf_field() }}
                <h2 class="text-white py-4 mx-md-4 title">Login to your account</h2>
                <div class="mx-md-3 pb-2">
          
                    <div class="d-flex flex-row">
                    <div
                        style="width: 13%"
                        class="d-flex align-items-center justify-content-center"
                    >
                        <img src="{{ asset('img/user.png') }}" style="width: 26px" />
                    </div>
                    <div class="w-100 d-flex flex-column">
                        <div class="bg-white border-5 input-div">
                            <input
                            type="text"
                            placeholder="Enter user ID"
                            class="w-100"
                            id="username"
                            name="username" value="{{ old('username') }}"
                            />
                        </div>
                        @if ($errors->has('username'))
                        <div>
                            <span class="help-block text-danger ml-3">
                                <strong>{{ $errors->first('username') }}</strong>
                            </span>
                        </div>
                        @endif
                    </div>
                    </div>
                    <br />
                    <div class="d-flex flex-row">
                    <div
                        style="width: 13%"
                        class="d-flex align-items-center justify-content-center"
                    >
                        <img
                        src="{{ asset('img/icon-lock.png') }}"
                        class="pl-1"
                        style="width: 26px"
                        />
                    </div>
                    <div class="w-100 d-flex flex-column">
                        <div class="bg-white border-5 input-div">
                            <input placeholder="Enter PIN" class="w-100" id="password" type="password" name="password" value="{{ old('password') }}" />
                        </div>
                        @if ($errors->has('password'))
                        <div>
                            <span class="help-block text-danger ml-3">
                                <strong>{{ $errors->first('password') }}</strong>
                            </span>
                        </div>
                        @endif
                    </div>
                    </div>
                    <div class="d-flex flex-row mt-4">
                    <div
                        class="w-100 bg-white border-5 input-div ml-5 d-flex justify-content-center align-items-center"
                        style="height: 42px;cursor:pointer"
                        onClick="handleSubmitForm()"
                    >
                        <label class="pt-1" style="color: #dd5f88; font-size: 27px;cursor:pointer">
                        Login
                        </label>
                    </div>
                    </div>
                    <div class="mt-3 text-center" style="font-size: 13px">
                    <label class="text-white">Don't have an account? </label
                    ><a href="{{ url('register') }}" class="text-dark"> Register</a>
                    </div>
         
                </div>
            </form>
          </div>
          <div class="col-md-3"></div>
        </div>
        <br />
        <div class="row mx-md-3">
          <div class="col-md-3"></div>
          <div class="col-md div-form-login mx-md-5">
            <div class="mx-md-3 mb-3">
              <div
                class="mt-3 text-center text-white d-flex flex-column mb-1"
                style="font-size: 13px"
              >
                <span>Forgot ID? it is at the end of your shared Link.</span>
                <span>If your link is</span>
              </div>
              <div
                class="mx-md-5 bg-white border-5 input-div-regular d-flex justify-content-center align-items-center"
              >
                <label class="pt-1" style="color: #dd5f88"
                  >https://confess.space/to/gfyjseya</label
                >
              </div>
              <div
                class="mt-1 text-center text-white d-flex flex-column mb-1"
                style="font-size: 13px"
              >
                <span>Then your ID will be</span>
              </div>
              <div
                class="mx-md-5 bg-white border-5 input-div-regular d-flex justify-content-center align-items-center"
                style="height: 30px"
              >
                <label
                  class="pt-1 font-weight-bold"
                  style="color: #dd5f88; font-size: 15px"
                  >gfyjseya</label
                >
              </div>
            </div>
          </div>
          <div class="col-md-3"></div>
        </div>

@endsection

@section('scripts')
    <script>
        function handleSubmitForm() {
            const password = document.getElementById('password');
            const username = document.getElementById('username');
            const form = document.getElementById('formLogin')
            // alert(password.value)
            // if(username == "") {
            //     alert("Username must not be empty");
            //     return false;
            // }

            // if(password.value == "") {
            //     alert("Password must not be empty")
            //     return false;
            // }

            form.submit();
        }
    </script>
@stop
