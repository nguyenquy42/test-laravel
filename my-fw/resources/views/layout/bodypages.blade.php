<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('pages.partials.headercss')
    @yield('link_css_home')
    @yield('link_css_deatil')
</head>

<body>

    @include('pages.partials.header')

    @yield('content')

    @include('pages.partials.footer')

    @include('pages.partials.footerjs')
    
    @yield('link_js_deatil')
</body>

</html>