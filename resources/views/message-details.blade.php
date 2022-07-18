
<html>
    <title>Details View</title>
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com/">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&amp;display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}" integrity="sha512-k78e1fbYs09TQTqG79SpJdV4yXq8dX6ocfP0bzQHReQSbEghnS6AQHE2BbZKns962YaqgQL16l7PkiiAHZYvXQ==" crossorigin="anonymous" />
        <link rel="stylesheet" href="{{ asset('css/style3860.css?v=1') }}">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <script src="{{ asset('js/jquery.min.js') }}" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous"></script>
        <script src="{{ asset('js/bootstrap.min.js') }}" integrity="sha512-ANkGm5vSmtDaoFA/NB1nVJzOKOiI4a/9GipFtkpMG8Rg2Bz8R1GFf5kfL0+z0lcv2X/KZRugwrAlVTAgmxgvIg==" crossorigin="anonymous"></script>
        <style>
            body {
                background: black;
            }
        </style>
    </head>
    <body>
    <div class="row message_holder p-2 pt-5">
            <div class="col-md-4 col-sm-12"></div>
            <div class="col-md-4 col-sm-12 d-flex align-items-center pt-5 mt-5">
            <div class="card message  bg-white text-dark mx-auto" style="border:2px solid #f5a48a;" id="message_0">
            <div class="message_text p-2" style="font-size:17x !important;">
            {{ $message->Message }} </div>
            <div style="background:#f5a48a" class="p-1 px-2 text-white">
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
        </div>
            </div>
            <div class="col-md-4 col-sm-12"></div>
    </body>
</html>
