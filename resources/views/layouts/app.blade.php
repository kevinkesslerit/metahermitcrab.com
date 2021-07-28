<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<body>
    <!-- START navigation -->
    @include('partials.navigation')
    <!-- END navigation -->

    <!-- START yield content -->
    @yield('content')
    <!-- STOP yield content -->

@include('partials.footer')
@include('partials.footer_scripts')
</body>
</html>
