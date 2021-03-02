<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('admin.partials.headercss')

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

  </div>

</body>

</html>