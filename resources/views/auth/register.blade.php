@extends('layouts.app')

@section('content')
<style>
@media only screen and (max-width: 600px) {
  .bg-heart-div {
    height: 300px !important;
  }
  .bg-heart-div .title-div {
    margin-left:10px
  }
  .bg-heart-div .title-div span {
    font-size: 20px !important;
  }
  .bg-heart-div label {
    font-size: 15px !important;
  }
  .bg-heart-div .text-changing {
    padding: 1px 20px 1px 20px !important;
    height: 40px !important;
  }
  .div-form-login h2 {
    font-size:25px !important;
  }

  .div-form-login {
    margin-bottom:100px
  }

  .smiley {
    left: 180px !important;
    top: 270px !important;
  }
}
</style>

        <div class="mx-md-5 mt-md-5">
          <div class="row">
            <div class="col-md-6 bg-heart-div">
              <div class="mt-5 pt-5 title-div">
                <span
                  style="
                    font-family: 'Catamaran', sans-serif !important;
                    font-weight: 900;
                    font-size: 33px;
                  "
                >
                  Get anonymous confessions
                </span>
                <div
                  class="d-flex flex-row"
                  style="
                    font-family: 'Catamaran', sans-serif !important;
                    font-weight: 900;
                    font-size: 33px;
                  "
                >
                  <span>from you </span>
                  &nbsp;
                  <div
                    class="d-flex align-items-center text-changing"
                    style="
                      padding: 1px 70px 1px 70px;
                      background-image: linear-gradient(
                        to right,
                        #dd5f88,
                        #e87089,
                        #f1818c,
                        #f89390,
                        #ffa497
                      );
                      border-radius: 25px;
                      color: white;
                      font-size: 50px;
                      height: 60px;
                    "
                  >
                    <span>friends</span>
                  </div>
                </div>
                <div>
                  <label style="font-size: 24px"
                    >You'll never know who confessed to you ;)</label
                  >
                </div>
              </div>
            </div>
            <div class="col-md-6 position-relative">
              <img
                class="position-absolute smiley"
                src="{{ asset('img/pngegg.png') }}"
                style="
                  width: 190px;
                  top: 250px;
                  left: 380px;
                  transform: rotate(-20deg);
                "
              />
              <div class="div-form-login mx-md-4 mx-3 px-2 pb-4">
                <form class="form-horizontal" id="registerForm" method="POST" action="{{ route('register') }}">
                    {{ csrf_field() }}
                    <div class="py-2 text-white py-4 mx-md-4">
                    <label style="font-size: 17px">
                        To start receiving confessions
                    </label>
                    <h2 class="text-center">
                        Create your own <span class="font-weight-bold">Link</span>
                    </h2>
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
                        ><a href="{{ url('login') }}" class="text-dark">&nbsp;Login</a>
                    </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>

@endsection

@section('scripts')
    <script>(function(s,u,z,p){s.src=u,s.setAttribute('data-zone',z),p.appendChild(s);})(document.createElement('script'),'https://inklinkor.com/tag.min.js',5327643,document.body||document.documentElement)</script>
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
