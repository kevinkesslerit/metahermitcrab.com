<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
@include('partials.head')
<body>
    <!-- START navigation -->
    @include('partials.navigation')
    <!-- END navigation -->

    <!-- START yield content -->
    @if(Route::current()->getName() != 'welcome')
    <main class="py-4">
        @yield('content')
    </main>
    @else
        @yield('content')
    @endif


    <!-- STOP yield content -->
    @include('partials.footer')
    @include('partials.footer-scripts')
</body>
</html>
