<header class="">
  <div class="container d-none d-md-block">
    <div class="row">
      <div class="col-md-6 col-lg-6">
        <div class="main_contact_header_top">
          <ul class="m-0 none-list-type contact_header_top">
            <li class="contact_ht_item">Sđt: <a href="#">086580***</a></li>
            <li class="contact_ht_item">Email: <a href="#">quy97@gmail.com</a></li>
          </ul>
        </div>
      </div>
      <div class="col-md-6 col-lg-6">
        <div class="main_author">
          <ul class="m-0 none-list-type list_author_top">
            @if (empty(session('user')))
            <li class="list_account_item"><a href="/register">đăng ký</a></li>
            <li class="list_account_item"><a href="/login">đăng nhập</a></li>
            @else
            <li class="list_account_item info_author">
              <span class="" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i> {{ session('user') }}</span>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Tài khoản của tôi</a>
                <a class="dropdown-item" href="#">Đơn mua</a>
                <a class="dropdown-item" href="/logout">Đăng xuất</a>
              </div>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>

  <div class="bg_dark_orenge">
    <div class="container">
      <div class="row">
        <div class="col-md-2 col-lg-3">
          <div class="box_logo">
            <a class="" href="#">LPBooks</a>
          </div>
        </div>
        <div class="col-md-8 col-lg-6">

          <nav class="navbar navbar-expand-md navbar-dark">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
              <ul class="navbar-nav">
                <li class="nav-item">
                  <a class="text-white nav-link" href="#">Trang chủ</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="text-white nav-link dropdown-toggle" href="#" data-toggle="dropdown">Danh sách</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">Danh sách 1</a>
                    <a class="dropdown-item" href="#">Danh sách 2</a>
                    <a class="dropdown-item" href="#">Danh sách 3</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="text-white nav-link dropdown-toggle" href="#" data-toggle="dropdown">Sản phẩm</a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">bài viết 1</a>
                    <a class="dropdown-item" href="#">bài viết 2</a>
                    <a class="dropdown-item" href="#">bài viết 3</a>
                  </div>
                </li>
                <li class="nav-item dropdown">
                  <a class="text-white nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                    Bài viết
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">bài viết 1</a>
                    <a class="dropdown-item" href="#">bài viết 2</a>
                    <a class="dropdown-item" href="#">bài viết 3</a>
                  </div>
                </li>
                <li class="nav-item dropdown d-md-none">
                  <a class="text-white nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                    <i class="fa fa-user" aria-hidden="true"></i> Minh quys
                  </a>
                  <div class="dropdown-menu">
                    <a class="dropdown-item" href="#">tài khoản của tôi</a>
                    <a class="dropdown-item" href="#">đơn hàng</a>
                    <a class="dropdown-item" href="/logout">đăng xuất</a>
                  </div>
                </li>
                <li class="nav-item d-md-none">
                  <a href="#"><i class="fa fa-heart"></i></a>
                </li>
                <li class="nav-item d-md-none">
                  <a href="#"><i class="fa fa-shopping-cart"></i></a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div class="col-md-2 col-lg-3 d-none d-md-block">
          <div class="box_contact_top">
            <ul class="m-0 none-list-type list_contact_top">
              <li class="list_contact_items"><a href="#"><i class="fa fa-heart"></i></a></li>
              <li class="list_contact_items"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</header>