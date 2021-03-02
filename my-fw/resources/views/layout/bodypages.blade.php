<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('pages.partials.headercss')

</head>

<body>
    
    @include('pages.partials.header')

    @yield('content')

    @include('pages.partials.footer')

    @include('pages.partials.footerjs')

</body>

</html>