<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" />
    <style>
      body {
        background-color: black;
      }
      .anonymous-message-bottom {
        position: absolute;
        bottom: 20px;
        width: 100%;
        display: flex;
        justify-content: center;
      }
    </style>
    <title>Confess Space</title>
  </head>
  <body>
    <div class="container">
      <div class="content">
        <br /><br />
        <div class="row mx-md-3">
          <div class="col-md-3"></div>
          <div class="col-md">
            <div class="d-flex justify-content-center">
              <img src="{{ asset('img/sendme (1).png') }}" class="img-fluid" />
            </div>
            <br />
            <div
              class="bg-white"
              style="height: 150px; position: relative; border-radius: 30px"
            >
              <div class="px-4 pt-2 font-weight-bold">{{ $message->Message }}</div>
              <div
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
                Confess.space
              </div>
            </div>
          </div>
          <div class="col-md-3"></div>
        </div>
        <br />
      </div>
    </div>
    <div class="anonymous-message-bottom">
      <img src="{{ asset('img/sendme (3).png') }}" style="width: 250px" />
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ asset('js/jquery-3.2.1.slim.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
  </body>
</html>
