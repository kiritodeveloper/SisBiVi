<!DOCTYPE html>
<html lang="es">
    @include('main.vendor.app.components.head')
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
<body>


    {{--top nav--}}
    @include('main.vendor.app.layouts.menu')
    {{--/topnav--}}
    <div class="content-page-container full-reset custom-scroll-containers">
        @include('main.vendor.app.components.topnav')
        @yield('content')
    </div>
</body>
    
</html>