@extends('layouts.app')

@section('content')
<br /><br /><br />
        <div class="row mx-md-3">
          <div class="col-md-3"></div>
          <div class="col-md d-flex flex-column">
            <div class="div-form-login mx-md-4 px-2 pb-4">
                <form class="form-horizontal" id="registerForm" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="py-2 text-white py-4 mx-md-4">
                        <p
                        class="text-center"
                        style="
                            font-size: 17px;
                            background-color: #43ffa1;
                            color: black;
                            font-size: 25px;
                            border-radius: 10px;
                        "
                        >
                        <img src="{{ asset('img/check.PNG') }}" />
                        Message sent successfully
                        <img src="{{ asset('img/like.PNG') }}" />
                        </p>
                        <div class="text-center d-flex flex-column">
                        <label style="font-size: 17px">
                            Now, create a link for yourself. See what messages your
                            friends will send you!
                        </label>
                        </div>

                        <div class="w-100 bg-white border-5 input-div mt-3">
                        <input type="text" placeholder="Nickname" class="w-100" name="name" id="in-name" />
                        </div>
                        <div
                        class="mt-3 bg-white border-5 input-div d-flex flex-row justify-content-center align-items-center mx-3"
                        style="height: 42px;cursor:pointer"
                        onClick="handleSubmitForm()"
                        >
                        <label
                            class="pt-1 mr-2"
                            style="color: #dd5f88; font-size: 27px; font-weight: 600;cursor:pointer"
                        >
                            Create Link
                        </label>
                        <img
                            src="{{ asset('img/generate.PNG') }}"
                            style="width: 29px"
                            class="pb-1"
                        />
                        </div>
                        <div class="d-flex flex-row mt-1">
                        <input type="checkbox" checked />&nbsp;
                        <span style="font-size: 11px !important" class="pt-1">
                            You agree to Privacy Policy and Terms and Condition of our
                            website.</span
                        >
                        </div>
                        <div class="d-flex flex-row mt-1 justify-content-center">
                        <span>Already have a link?</span
                        ><a href="#" class="text-dark">&nbsp;Login</a>
                        </div>
                    </div>
                </form>
            </div>
          </div>

          <div class="col-md-3"></div>
        </div>
        <br />
@endsection

@section('scripts')
    <script>
        function handleSubmitForm() {
            const input = document.getElementById('in-name');
            const form = document.getElementById("registerForm");
            if(input.value == "") {
              alert("Please enter your nickname")
              return false;
            }

            form.submit();
        }
    </script>
@stop
