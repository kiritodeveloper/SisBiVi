<!DOCTYPE html>
<html lang="es">
    @include('main.vendor.app.components.head')
<body>
    {{--top nav--}}
    @include('main.vendor.app.layouts.menu')
    {{--/topnav--}}
    <div class="content-page-container full-reset custom-scroll-containers">
        @yield('content')
    </div>
</body>
    
</html>