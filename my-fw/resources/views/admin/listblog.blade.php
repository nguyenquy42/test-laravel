@extends('layout.bodyadmin')
@section('title', 'Post | Lpbooks')

@section('content')
<div class="container-fulid">

  <div class="main-list-blog">
    <div class="d-flex mt-3 blog_title">
      <p m-0><i class="fa fa-bars text-light-blue"></i> Danh sách bài viết</p>
      <a class="btn btn-outline-success post_blog_link" href="#">Thêm bài viết</a>
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
          <tr class="text-center">
            <td>1</td>
            <td class="item_img_block">
              <img src="https://www.matbao.net/uploads/news/trilm/images/10-cong-cu-toi-uu-seo.png" alt="">
            </td>
            <td class="text-left">
              <a href="#">không phai dang vừa đau</a>
            </td>
            <td>minh quys</td>
            <td class="text-left blog_category">
              <a href="#"><i class="fa fa-external-link"></i></a><a href=""></a><a href="#"><span> Truyện hay </span></a><br>
              <a href="#"><i class="fa fa-external-link"></i></a><a href=""></a><a href="#"><span> Truyện ngắn </span></a>
            </td>
            <td>3-2-2020</td>
            <td>
              <form>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="switch1">
                  <label class="custom-control-label" for="switch1">chọn</label>
                </div>
              </form>
            </td>
            <td>
              <a class="btn btn-outline-info" href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </td>
            <td>
              <button type="button" class="btn btn-outline-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
            </td>
          </tr>
          <tr class="text-center">
            <td>2</td>
            <td class="item_img_block">
              <img src="https://www.matbao.net/uploads/news/trilm/images/10-cong-cu-toi-uu-seo.png" alt="">
            </td>
            <td class="text-left">
              <a href="#">khi hai đứa chia tay đứa nào buồn hơn.</a>
            </td>
            <td>minh quys</td>
            <td class="text-left blog_category">
              <a href="#"><i class="fa fa-external-link"></i></a><a href=""></a><a href="#"><span> Truyện hay </span></a><br>
              <a href="#"><i class="fa fa-external-link"></i></a><a href=""></a><a href="#"><span> Truyện ngắn </span></a>
            </td>
            <td>3-2-2020</td>
            <td>
              <form>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="switch1">
                  <label class="custom-control-label" for="switch1">chọn</label>
                </div>
              </form>
            </td>
            <td>
              <a class="btn btn-outline-info" href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </td>
            <td>
              <button type="button" class="btn btn-outline-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
            </td>
          </tr>
          <tr class="text-center">
            <td>3</td>
            <td class="item_img_block">
              <img src="https://www.matbao.net/uploads/news/trilm/images/10-cong-cu-toi-uu-seo.png" alt="">
            </td>
            <td class="text-left">
              <a href="#">Cách làm cho hai con chó đực không cắn nhau vì chó cái</a>
            </td>
            <td>minh quys</td>
            <td class="text-left blog_category">
              <a href="#"><i class="fa fa-external-link"></i></a><a href=""></a><a href="#"><span> Truyện hay </span></a> <br>
              <a href="#"><i class="fa fa-external-link"></i></a><a href=""></a><a href="#"><span> Truyện ngắn </span></a> <br> 
            </td>
            <td>3-2-2020</td>
            <td>
              <form>
                <div class="custom-control custom-switch">
                  <input type="checkbox" class="custom-control-input" id="switch1">
                  <label class="custom-control-label" for="switch1">chọn</label>
                </div>
              </form>
            </td>
            <td>
              <a class="btn btn-outline-info" href="#"><i class="fa fa-pencil" aria-hidden="true"></i></a>
            </td>
            <td>
              <button type="button" class="btn btn-outline-danger"><i class="fa fa-times" aria-hidden="true"></i></button>
            </td>
          </tr>
        </tbody>
      </table>

    </div>

  </div>
</div>

@endsection