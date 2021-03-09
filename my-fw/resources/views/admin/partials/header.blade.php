<header class="">

  <nav class="navbar navbar-expand-md navbar-dark bg-menu">
    <!-- Brand -->
    <div class="top_nav_header">

      <a class="navbar-brand" href="{{ Request::root() }}/admin/home">
        <h3>LPBooks</h3>
      </a>

      <div>
        <ul class="none-list-type menu_top">
          <li class="menu_top_link"><a href="{{ Request::root() }}"  target="_blank|_parent"> <i class="fa fa-globe"></i> Xem web của bạn</a></li>
          <li class="menu_top_link"><a href=""  target="_blank|_parent"> <i class="fa fa-user"></i>{{ session('username') }}</a></li>
          <li class="menu_top_link"><a clas href="#"> <i class="fa fa-sign-out" aria-hidden="true"></i> Đăng xuất</a></li>
        </ul>
      </div>

    </div>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>


  </nav>

</header>