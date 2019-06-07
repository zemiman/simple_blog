<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body style="overflow-x: hidden;">
    <div id="app">
         
         @include('Inc.navbar')
        {{--  <div class="container"> 
        @include('Inc.messages')
        @yield('content') --}}
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    @yield('section1')
                </div>
                <div class="col-sm-6">
                    @include('Inc.messages')
                    @yield('content')
                    
                </div>
                <div class="col-sm-3">
                    
                </div>
            </div>
         
         </div>
     {{--  </div> --}}
    </div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>

    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
</html>
