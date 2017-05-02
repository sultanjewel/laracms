<!DOCTYPE html>
<html lang="{{ config('app.locale','en') }}">
    @include('partials.header')
    <body id="page-top" class="index">
        <!-- Navigation Starts -->
        @include('partials.nav')
        <!-- Navigation Ends -->
        <!-- Content Starts -->
        @yield('content')
        <!-- Content Ends  -->
        <!-- Footer Starts -->
        @include('partials.footer')
        <!-- Footer Ends -->    
    </body>
</html>
