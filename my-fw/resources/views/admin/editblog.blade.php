@extends('layout.bodyadmin')
@section('title', 'Sửa bài viết | Lpbooks')

@section('linkcss')
<link rel="stylesheet" href="{{ asset('assets/css/admin.create.blog.css') }}">
@endsection

@section('linkjs')
<script src="{{ asset('assets/vender/js/tinymce.min.js') }}"></script>

<script>
  tinymce.init({
    selector: 'textarea#tiny'
  });

  $(document).ready(function() {
    $('.inputs').keyup(function() {

      var slug = function(str) {
        var $slug = '';
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
</script>
@endsection

@section('content')
<div class="container-fulid bg_black mt-3">
  @if ($errors->any())
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
  @endif

  <form action="/admin/update/{{ $data->id }}" method="POST">
    @csrf
    <table class="table table-dark table-hover">
      <thead>
        <tr class="text-center">
          <th>Tiêu đề</th>
          <th>intro</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <input type="text" class="form-control inputs" name="title" value="{{ $data->title }}">
          </td>
          <td>
            <input type="text" class="form-control" name="intro" value="{{ $data->intro }}">
          </td>
        </tr>
      </tbody>


      <thead>
        <tr class="text-center">
          <th>slug (đường dẫn của bạn)</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <input id="title" type="text" class="form-control" name="slug" value="{{ $data->slug }}">
          </td>
        </tr>
      </tbody>


      <thead>
        <tr class="text-center">
          <th colspan="2">Nội dung</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="2">
            <textarea id="tiny" name="content">{{ $data->content }}</textarea>
          </td>
        </tr>
      </tbody>
      <tbody>
        <tr class="text-center">
          <td colspan="2">
            <button type="submit" class="btn btn-outline-secondary">Đăng bài</button>
          </td>
        </tr>
      </tbody>
    </table>
  </form>

</div>

@endsection