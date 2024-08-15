<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset("assests/bootstrap/dist/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("assests/sweetalert2/dist/sweetalert2.min.css")}}">
    @yield("css")
</head>
<body>
@include("layouts.front.navbar")
@yield("icerik")
@include("layouts.front.footer")

<script src="{{ asset("assests/bootstrap/dist/js/bootstrap.min.js") }}"></script>
<script src="{{ asset("assests/bootstrap/dist/js/bootstrap.bundle.min.js") }}"></script>
<script src="{{ asset("assests/jquery/dist/jquery.min.js") }}"></script>
<script src="{{ asset("assests/sweetalert2/dist/sweetalert2.all.min.js") }}"></script>
{{--asset komutu sayesinde public içi görülür ve dışarıdan dosya eklemek böyle yapılır--}}

@yield("js")
</body>
</html>
