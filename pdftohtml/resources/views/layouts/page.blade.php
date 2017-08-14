<!DOCTYPE html>
<html lang="en">
    @include('partial.header')

    <body>
        @include('partial.nav')
        
        @yield('content')
        
    </body>

    @include('partial.footer')
</html>