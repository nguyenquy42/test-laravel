<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <title>@yield('title')</title>
  @include('admin.partials.headercss')
  @yield('linkcss')

</head>

<body>
  @include('admin.partials.header')

  <div class="main">
    @include('admin.partials.menuleft')
    <main class="main-body">
      <div class="body">
        @yield('content')
      </div>
    </main>

    @include('admin.partials.footer')

    @include('admin.partials.footerjs')
    @yield('linkjs')

  </div>

</body>

</html>