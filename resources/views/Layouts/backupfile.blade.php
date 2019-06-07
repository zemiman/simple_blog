<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name', 'Laravel')}}</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

        
    </head>
    <body>
        @include('Inc.navbar')
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

         <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
        <script>
            CKEDITOR.replace( 'article-ckeditor' );
        </script>
    </body>
</html>