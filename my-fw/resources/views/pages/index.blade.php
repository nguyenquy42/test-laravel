@extends('layout.bodypages')

@section('title', 'Trang chủ | Lpbooks')


@section('content')
<main>

<?= $product; ?>

  <!-- List Product Start -->
  <section class="section_product">

    <div class="container">
      <div class="row justify-content-center">
        <div class="title text-center mt-5 mb-5">
          <h2>Danh sách sản phẩm</h2>
          <span>cách sản phầm có thể bạn muốn biết</span>
        </div>
      </div>
      <div class="row">
        <?php for ($i = 0; $i < 4; $i++) : ?>
          <div class="col-lg-3">
            <div class="list_product mb-4">
              <div class="product_item">
                <div class="product_item_img">
                  <a href="#"><img src="assets/images/product/1.jpg" alt="product"></a>
                </div>
                <div class="product_item_content">
                  <span>Công nghệ</span>
                  <a href="#">
                    <h3 class="product_item_title">Sách củ nhất</h3>
                  </a>
                  <p class="product_item_intro">sản phẩm lỗi, mua ngu rán chiệu.</p>
                  <div class="star_rating">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star"></span>
                    <span class="fa fa-star"></span>
                  </div>
                  <div class="list_price_cart">
                    <div class="price">
                      <span>5.000 $</span>
                    </div>
                    <ul class="m-0 none-list-type product-cart">
                      <li class="product_cart_item"><a href="#"><i class="fa fa-heart"></i></a></li>
                      <li class="product_cart_item"><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endfor; ?>
      </div>

    </div>

  </section>
  <!-- List Product End -->

  <!-- List Blog Start -->
  <section class="section_blog">

    <div class="container">
      <div class="row justify-content-center">
        <div class="title text-center mt-5 mb-5">
          <h2>Bài viết mơi nhất</h2>
          <span>Nếu muốn thông minh biết thêm nhiều thông tin thì mày nên đọc các bài viết dưới đây, nhớ follow để không bỏ lởi bất kỳ bài viết mới nhất nào của tao.</span>
        </div>
      </div>

      <div class="row">

        <?php for ($i = 0; $i < 3; $i++) : ?>
          <div class="col-lg-4">
            <div class="row mb-4 main_blog">
              <div class="col-lg-3  d-flex align-items-center">
                <div class="blog_item_img">
                  <a href="#"><img src="assets/images/product/2.jpg" alt="img"></a>
                </div>
              </div>
              <div class="col-lg-9">
                <div class="blog_item_content">
                  <a href="#">
                    <h3 class="blog_item_title">Bí kiếp CONAN</h3>
                  </a>
                  <p class="m-0 blog_item_intro">Hướng dẫn cách có người yêu, một phát ăn ngay và luôn, không tin thì thôi. NEXT..</p>
                  <div class="list_author_date">
                    <ul class="none-list-type">
                      <li><a href="#"><i class="fa fa-user" aria-hidden="true"></i> Minh Quang</a></li>
                      <li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i> 3/3/2021</a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endfor; ?>

      </div>
    </div>

  </section>
  <!-- List Blog End -->


</main>

@endsection