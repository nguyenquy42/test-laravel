@extends('layout.bodyadmin')
@section('title', 'Tạo bài viết | Lpbooks')

@section('linkcss')
<link rel="stylesheet" href="{{ asset('assets/css/admin.create.blog.css') }}">
@endsection

@section('linkjs')
<script src="{{ asset('assets\tinymce\js\tinymce\tinymce.min.js') }}"></script>
<script>
  $(document).ready(function() {
    $('.inputs').keyup(function() {

      var slug = function(str) {
        var $slug = '';
        console.log($slug);
        var trimmed = $.trim(str).toLowerCase();

        $slug = trimmed.replace(/á|à|ả|ạ|ã|ă|ắ|ằ|ẳ|ẵ|ặ|â|ấ|ầ|ẩ|ẫ|ậ/gi, 'a').
        replace(/é|è|ẻ|ẽ|ẹ|ê|ế|ề|ể|ễ|ệ/g, 'e').
        replace(/i|í|ì|ỉ|ĩ|ị/g, 'i').
        replace(/ó|ò|ỏ|õ|ọ|ô|ố|ồ|ổ|ỗ|ộ|ơ|ớ|ờ|ở|ỡ|ợ/g, 'o').
        replace(/ú|ù|ủ|ũ|ụ|ư|ứ|ừ|ử|ữ|ự/g, 'u').
        replace(/ý|ỳ|ỷ|ỹ|ỵ/g, 'y').
        replace(/đ/g, 'd').
        replace(/\`|\~|\!|\@|\#|\||\$|\%|\^|\&|\*|\(|\)|\+|\=|\,|\.|\/|\?|\>|\<|\'|\"|\:|\;|_/g, '').
        replace(/ /g, "-").
        replace(/\-\-\-\-\-/g, '-').
        replace(/\-\-\-\-/g, '-').
        replace(/\-\-\-/g, '-').
        replace(/\-\-/g, '-').
        replace(/\@\-|\-\@|\@/g, '').
        replace(/-+/g, '-').
        replace(/^-|-$/g, '');
        return $slug;
      }
      var namer = $('.inputs').attr('name');
      $('#' + namer).val(slug($(this).val()));

    });
  });


  $(document).ready(function() {
    $('.toast').toast('show');
  });

  tinymce.init({
    selector: 'textarea#tiny',
    publics: 'image',
  });
</script>
@endsection

@section('content')
<div class="container-fulid pl-2 pr-2 bg_black create_blogs">
  <div class="row">
    <div class="sextion_title p-3">
      <h5>Quản lý bài viết</h5>
    </div>
  </div>

  <form action="createblog" method="POST">
    @csrf
    <div class="row">
      <div class="col-12">
        <div class="section_intro">
          <h6><i class="fa fa-plus-circle text-light-blue"></i> Tạo bài viết mới</h6>
          <div class="sub_create_blog">
            <button type="submit" class="btn btn-success">Đăng bài</button>
          </div>
        </div>

      </div>
      <div class="col-9 mt-3">
        <div class="row g-3">
          <div class="col-6">
            <div class="mb-3">
              <label class="form-label">Tiêu đề</label>
              <label>Danh mục <small class="label bg-red">Bắt buộc</small></label>
              <input type="text" class="form-control inputs" name="title" placeholder="Tên bài viết">
            </div>
          </div>
          <div class="col-6">
            <div class="mb-3">
              <label class="form-label">Thẻ tiêu đề</label>
              <input type="text" class="form-control" name="title_tag">
            </div>
          </div>
          <div class="col-6">
            <div class="mb-3">
              <label class="form-label">SEO link</label>
              <label>Danh mục <small class="label bg-red">Bắt buộc</small></label>
              <input type="text" id="title" class="form-control" name="slug" placeholder="ten-bai-viet">
            </div>
          </div>
          <div class="col-6">
            <div class="mb-3">
              <label class="form-label">Từ khóa</label>
              <input type="text" class="form-control" name="keyword">
            </div>
          </div>
          <div class="col-6">
            <div class="mb-3">
              <label class="form-label">Giới thiệu ngắn</label>
              <textarea rows="3" class="intro-count form-control" data-max-length="200" name="intro" placeholder="" maxlength="250"></textarea>
            </div>
          </div>
          <div class="col-12">
            <div class="mb-3">
              <label class="form-label">Giới thiệu ngắn</label>
              <textarea rows="30" class="intro-count form-control" id="tiny" name="content"></textarea>
            </div>
          </div>
        </div>
      </div>
      <div class="col-3 mt-3">
        <div class="form-group">
          <label>Danh mục <small class="label bg-red">Bắt buộc</small></label>
          <div class="category-container" style="height: 300px">
            <ul class="check-list">
              <li id="category-3">
                <div class="checkbox">
                  <label><input type="checkbox" value=""> &nbsp; Root1</label>
                </div>
              </li>
              <li style="padding-left: 19px;" id="category-4">
                <div class="checkbox">
                  <label><input type="checkbox" name="category" value="Dịch Vụ"> &nbsp; Dịch Vụ</label>
                </div>
              </li>
            </ul>
          </div>
        </div>


        <label>Chọn hình đại diện</label>
        <div class="form-group" style="border: 2px solid #f0f0f0;padding: 4px;">
          <a class="btn btn-info" href="#" data-popup="vsbox" data-type="iframe">
            <i class="fa fa-1x fa-file"></i> Danh sách file
          </a>
          <p class="help-block">
            Số file cho phép: <small class="label label-info">1</small>
          </p>
          <p class="help-block">
            Định dạng file cho phép: <small class="label label-info">jpg,gif,png</small>
          </p>
          <p class="help-block">
            Kích thước tiêu biểu: <small class="label label-info">100x100</small>
          </p>
          <p class="help-block">
            Dung lượng File Cho Phép: <small class="label label-info">2M</small>
          </p>
        </div>

        <div class="file_representative">
          <div class="toast" data-autohide="false">
            <div class="toast-header">
              <strong class="mr-auto text-primary"><input type="radio" name="imgurl" value="assets/images/product/1.jpg" checked></strong>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
              <div class="img_representative">
                <img src="{{ Request::root() }}/assets/images/product/1.jpg" alt="img">
              </div>
            </div>
          </div>
          <div class="toast" data-autohide="false">
            <div class="toast-header">
              <strong class="mr-auto text-primary"><input type="radio" name="imgurl" value="assets/images/product/2.jpg" checked></strong>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
              <div class="img_representative">
                <img src="{{ Request::root() }}/assets/images/product/2.jpg" alt="img">
              </div>
            </div>
          </div>
          <div class="toast" data-autohide="false">
            <div class="toast-header">
              <strong class="mr-auto text-primary"><input type="radio" name="imgurl" value="assets/images/product/3.png" checked></strong>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
              <div class="img_representative">
                <img src="{{ Request::root() }}/assets/images/product/3.png" alt="img">
              </div>
            </div>
          </div>
          <div class="toast" data-autohide="false">
            <div class="toast-header">
              <strong class="mr-auto text-primary"><input type="radio" name="imgurl" value="assets/images/product/4.jpg" checked></strong>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
              <div class="img_representative">
                <img src="{{ Request::root() }}/assets/images/product/4.jpg" alt="img">
              </div>
            </div>
          </div>
          <div class="toast" data-autohide="false">
            <div class="toast-header">
              <strong class="mr-auto text-primary"><input type="radio" name="imgurl" value="assets/images/product/5.jpg" checked></strong>
              <button type="button" class="ml-2 mb-1 close" data-dismiss="toast">&times;</button>
            </div>
            <div class="toast-body">
              <div class="img_representative">
                <img src="{{ Request::root() }}/assets/images/product/5.jpg" alt="img">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </form>

</div>

@endsection