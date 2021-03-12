@extends('layout.bodyadmin')
@section('title', 'Danh sách bài viết | Lpbooks')

@section('linkcss')
@endsection

@section('linkjs')
<script>
</script>
@endsection

@section('content')
<div class="container-fulid pl-1 pr-1">


  <div class="main-list-blog">
    <div class="d-flex mt-3 blog_title">
      <p m-0><i class="fa fa-bars text-light-blue"></i> Tất cả thành viên</p>
    </div>

    <h1>đây là trang tất cả thành viên</h1>

  </div>
  

  {{ $data }}

</div>

@endsection