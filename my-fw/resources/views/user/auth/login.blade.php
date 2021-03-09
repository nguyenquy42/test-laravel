<!DOCTYPE html>
<html lang="en">

<head>
  <title>Đăng Nhập</title>
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
            Đăng Nhập
          </span>
        </div>

        <form method="POST" action="/postlogin" class="login100-form validate-form">
          @csrf
          <div class="wrap-input100 validate-input m-b-26">
            <span class="label-input100">Email</span>
            <input class="input100" type="text" name="email" placeholder="Nhập Email">
            <span class="focus-input100"></span>

            @error('email')
            <div class="text-danger">
              <span>{{$message}}</span>
            </div>
            @enderror
          </div>

          <div class="wrap-input100 validate-input m-b-18">
            <span class="label-input100">Mật Khẩu</span>
            <input class="input100" type="password" name="password" placeholder="Nhập mật khẩu">
            <span class="focus-input100"></span>
            @error('password')
            <div class="text-danger">
              <span>{{$message}}</span>
            </div>
            @enderror

          </div>

          <div class="flex-sb-m w-full p-b-30">
            <div class="contact100-form-checkbox">
              <input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
              <label class="label-checkbox100" for="ckb1">
                Lưu đăng nhập
              </label>
            </div>

            <div>
              <a href="#" class="txt1">
                Quên mật khẩu?
              </a>
            </div>
          </div>

          <div class="container-login100-form-btn flex-sb-m w-full">
            <button class="login100-form-btn">
              Đăng Nhập
            </button>

            <a href="/register" class="login100-form-register-btn">
              Đăng Ký
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