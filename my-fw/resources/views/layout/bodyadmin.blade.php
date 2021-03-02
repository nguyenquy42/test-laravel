<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  @include('admin.partials.headercss')

</head>

<body>
  @include('admin.partials.header')


  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-3">
        @include('admin.partials.menuleft')
      </div>

      <div class="col-lg-9">
        <div class="body-main">
          @yield('content')
          @include('admin.partials.footer')
        </div>
      </div>

    </div>
  </div>

  @include('admin.partials.footerjs')

</body>

</html>