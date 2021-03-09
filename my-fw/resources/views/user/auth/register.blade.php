<!DOCTYPE html>
<html lang="en">

<head>
  <title>Đăng Ký</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/user.login.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vender/css/bootstrap.css') }}">
</head>

<body>

  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(assets/images/banner/bg-01.jpg);">
          <span class="login100-form-title-1">
            Đăng ký
          </span>
        </div>

        <form method="POST" action="/createregister" class="login100-form validate-form">
          @csrf

          <div class="wrap-input100 validate-input m-b-26">
            <span class="label-input100">Email</span>
            <input class="input100" type="text" name="email" placeholder="Nhập Email đăng nhập">
            <span class="focus-input100"></span>
            @error('email')
            <div class="text-danger">
              <strong>{{$message}}</strong>
            </div>
            @enderror
          </div>

          <div class="wrap-input100 validate-input m-b-18">
            <span class="label-input100">Mật Khẩu</span>
            <input class="input100" type="password" name="password" placeholder="Nhập mật khẩu">
            <span class="focus-input100"></span>
          </div>
          @error('password')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
          @enderror

          <div class="wrap-input100 validate-input m-b-18">
            <span class="label-input100">Nhắc Lại</span>
            <input class="input100" type="password" name="password_confirmation" placeholder="Nhắc Lại mật khẩu">
            <span class="focus-input100"></span>
          </div>
          @error('password_confirmation')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
          @enderror


          <div class="wrap-input100 validate-input m-b-26">
            <span class="label-input100">Tên</span>
            <input class="input100" type="text" name="username" placeholder="Nhập Họ và Tên của bạn.">
            <span class="focus-input100"></span>
          </div>
          @error('username')
          <div class="text-danger">
            <strong>{{$message}}</strong>
          </div>
          @enderror

          <div class="container-login100-form-btn flex-sb-m w-full">
            <button class="login100-form-btn">
              Đăng Ký
            </button>

            <a href="/login" class="login100-form-register-btn">
              Đăng Nhập
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>

  <script src="{{ asset('assets/vender/js/jquery-3.5.1.js') }}"></script>
  <script src="{{ asset('assets/vender/js/jquery.lazy.min.js') }}"></script>
  <script src="{{ asset('assets/vender/js/bootstrap.min.js') }}"></script>
</body>

</html>