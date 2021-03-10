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

  <div class="container">
    <div class="row">
      <div class="col-12">

      </div>
    </div>
  </div>

</main>

@endsection