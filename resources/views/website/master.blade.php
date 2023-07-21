<!doctype html>
<html lang="zxx">

<head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

       @include('website.includes.style')

        <title>@yield('title')</title>

        <link rel="icon" type="image/png" href="{{asset('/')}}website/assets/img/TL-dark.png">
    </head>

    <body>

        <!-- Start Preloader Area -->
        <div class="preloader">
            <div class="spinner"></div>
        </div>
        <!-- End Preloader Area -->

         <!-- Start Header Area -->
       @include('website.includes.header')
        <!-- End Header Area -->

       @yield('content')

        <!-- Start Footer Area -->
       @include('website.includes.footer')
        <!-- End Footer Area -->

        <div class="go-top"><i class="fas fa-arrow-up"></i></div>

       @include('website.includes.script')
    </body>

</html>
