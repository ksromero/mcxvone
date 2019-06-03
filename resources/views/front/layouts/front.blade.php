<!DOCTYPE html>
<html>
<head>
    <title>Laraspace - Frontend</title>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="{{mix("/assets/front/css/front.css")}}" rel="stylesheet" type="text/css">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    @include('front.layouts.partials.favicons')
    @yield('styles')
</head>
<body>

@include('front.layouts.partials.laraspace-notifs')
@include('front.layouts.partials.header')


<div id="app">
      @yield('content')      
</div>

@include('front.layouts.partials.footer')

<script src="{{mix('/assets/front/js/plugins.js')}}"></script>
<script src="{{mix('/assets/admin/js/core/app.js')}}"></script>
@yield('scripts')
</body>
</html>