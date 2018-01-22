<!DOCTYPE html>
<html lang="en">
    <head>
     @include('partials._head')
    </head>

    <body>
    @include('partials._nav')

    <br>
    @include('partials._title')
    @yield('main')

    @include('partials._scripts')
    </body>

</html>