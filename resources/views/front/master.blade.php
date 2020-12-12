<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{asset('favicon.ico')}}">

<title>@yield('title' , 'Master Page')</title>

   <link rel="stylesheet" href="{{asset('dist/css/bootstrap.min.css')}}">
   <link rel="stylesheet" href="{{asset('dist/css/album.css')}}">

</head>
<body>

<div class="contain">
@include('front.nav')
@yield('content')
@include('front.footer')
</div>




<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
<script src="{{asset('dist/js/jquery.slim.min.js')}}"></script>
<script src="{{asset('dist/js/popper.min.js')}}"></script>
<script src="{{asset('dist/js/bootstrap.min.js')}}"></script>
<script src="{{asset('dist/js/holder.min.js')}}"></script>


</body>
</html>
