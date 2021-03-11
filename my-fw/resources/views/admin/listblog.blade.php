@extends('layout.bodyadmin')
@section('title', 'Danh sách bài viết | Lpbooks')

@section('linkcss')
<link data-require="sweet-alert@*" data-semver="0.4.2" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css" />
@endsection

@section('linkjs')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
  $(document).on('click', '.button', function(e) {
    e.preventDefault();
    var id = $(this).data('id');

    swal({
      title: "Bạn có chắc không?",
      text: "Bạn sẽ không thể khôi phục dử liệu này!",
      icon: "warning",
      buttons: [
        'Không, quay lại!',
        'Có, Tôi chắc chắn!'
      ],
      dangerMode: true,
    }).then(function(isConfirm) 
    {
      if (!isConfirm)
      {return;}
        $.ajax({
          url: "{{ url('/admin/delete/') }}/"+id,
          type: "GET",
          dataType: "html",
          success: function() {
            $('.item-' + id).remove()
            swal("Xong!", "Dử liệu đã được xoá thành công!", "success");
          },
          error: function(xhr, ajaxOptions, thrownError) {
            swal("Lỗi khi xóa!", "Vui lòng thử lại", "error");
          }
        });
    })
  });
</script>
@endsection

@section('content')
<div class="container-fulid">

  <div class="main-list-blog">
    <div class="d-flex mt-3 blog_title">
      <p m-0><i class="fa fa-bars text-light-blue"></i> Danh sách bài viết</p>
      <a class="btn btn-outline-success post_blog_link" href="/admin/createblog">Thêm bài viết</a>
    </div>

    <div class="list_post">
      <table class="table table-hover">
        <thead>
          <tr class="text-center">
            <th>ID</th>
            <th>Hình</th>
            <th class="text-left">Tiêu đề</th>
            <th>Tác giả</th>
            <th>Danh mục</th>
            <th>Thời gian</th>
            <th>Trạng thái</th>
            <th>Sửa</th>
            <th>Xoá</th>
          </tr>
        </thead>
        <tbody>
          @foreach ($blogs as $item)

          <tr class="text-center item-{{ $item->id }}">
            <td>{{ $item->id }}</td>
            <td class="item_img_block">
              <img src="{{ Request::root() }}/{{ $item->imgurl }}" alt="img">
            </td>
            <td class="text-left">
              <a href="#">{{ $item->title }}</a>
            </td>
            <td>{{ $item->author }}</td>
            <td class="text-left blog_category">
              <a href="#"><i class="fa fa-external-link"></i></a><a href=""></a><a href="#"><span> {{ $item->category }} </span></a><br>
            </td>
            <td> {{ $item->date }} </td>
            <td>
              <form>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="switch1">
                  <label class="custom-control-label" for="switch1">chọn</label>
                </div>
              </form>
            </td>
            <td>
              <a class="btn btn-outline-info" href="edit/{{ $item->id }}"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </td>
            <td>
              <a class="btn btn-outline-danger btn_text_danger  button" data-id="{{ $item->id }}"><i class="fa fa-times" aria-hidden="true"></i></a>
            </td>
          </tr>

          @endforeach

        </tbody>
      </table>
    </div>

  </div>
</div>

@endsection