@extends('layout.bodypages')

@section('title', 'Trang chủ | Lpbooks')

@section('link_css_home')
<link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
@endsection


@section('content')
<main>


  <!-- breadcrumb-area start -->
  <nav class="breadcrumb-area" aria-label="breadcrumb">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Shop</a></li>
            <li class="breadcrumb-item active" aria-current="page">Product</li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- breadcrumb-area end -->

  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-8">
        <h1>{{ $data->title }} </h1>
        <ul class="none-list-type none-list-type blog_item_author_date">
          <li class="blog_item_ad"><i class="far fa-user" aria-hidden="true"></i> {{ $data->author }}</li>
          <li class="blog_item_ad"><i class="far fa-clock" aria-hidden="true"></i> {{ $data->date }}</li>
        </ul>
        <div class="content">
          {{ $data->content }}
        </div>
      </div>
      <div class="col-4">
        <div class="slider-right">
          <div class="box_fround">
            <h3>Tóm Tắt</h3>
            <ol>
              <li>tiêu đề</li>
              <li>phụ hoạ</li>
              <li>không thương tiết</li>
            </ol>
          </div>
          <div class="box_fround">
            <h3>bài viết liên quan</h3>
            <ul class="none-list-type">
              <li>không hiểu</li>
              <li>chơi lớn luôn</li>
              <li>chơi nhỏ thôi</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>

</main>

@endsection