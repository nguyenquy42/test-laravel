@extends('layout.bodypages')

@section('title', 'bài viết | hai con thằng lằn con')

@section('link_js_deatil')
@endsection

@section('link_css_deatil')
<link rel="stylesheet" href="{{ asset('assets/css/detail.css') }}">
@endsection

@section('content')
<main>

    <!-- shop-product area start -->
    <div class="shop-details-area bg_gray_4 pd-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="product-thumbnail-wrapper">
                        <div class="single-thumbnail-slider">
                            <div class="slider-item">
                                <img src="{{ Request::root() }}/{{ $data->imgurl }}" alt="item">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="shop-item-details">
                        <h4 class="entry-title">{{$data->title}}</h4>
                        <div class="star-rating">
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                            <span><i class="fa fa-star"></i></span>
                        </div>
                        <a class="review-counter" href="#">(19 Review)</a>
                        <div class="price">$99.00<del>$115.90</del></div>
                        <div class="stock"><i class="fa fa-check"></i>In Stock</div>
                        <form>
                            <div class="quantity buttons_added">
                                <input type="button" value="-" class="minus">
                                <input type="number" class="input-text qty text" step="1" min="1" max="10000" name="quantity" value="1">
                                <input type="button" value="+" class="plus">
                            </div>
                        </form>
                        <div class="color-variation">
                            <h3>Available Colors:</h3>
                            <ul>
                                <li><a class="color-1" href="#"></a></li>
                                <li><a class="color-2" href="#"></a></li>
                                <li><a class="color-3" href="#"></a></li>
                                <li><a class="color-4" href="#"></a></li>
                                <li><a class="color-5" href="#"></a></li>
                            </ul>
                        </div>
                        <button type="submit" class="btn btn-black">Add to Cart</button>
                    </div>
                </div>
                <div class="col-12 mg-top-120">
                    <div class="shop-tabs">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Thông Tin Chi Tiết</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Miêu Tả</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="review-tab" data-toggle="tab" href="#review" role="tab" aria-controls="profile" aria-selected="false">Bình Luận (0)</a>
                            </li>
                        </ul>
                        <div class="tab-content specific-tab" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <table class="table table-bordered">
                                    <tbody>
                                        <tr>
                                            <th>Brand</th>
                                            <td>Brand Name</td>
                                        </tr>
                                        <tr>
                                            <th>Model</th>
                                            <td>2019</td>
                                        </tr>
                                        <tr>
                                            <th>RAM</th>
                                            <td>8 GB</td>
                                        </tr>
                                        <tr>
                                            <th>Storage</th>
                                            <td>SSD - 512 GB</td>
                                        </tr>
                                        <tr>
                                            <th>Graphic</th>
                                            <td>AMD 1 GB</td>
                                        </tr>
                                        <tr>
                                            <th>Processor</th>
                                            <td>Intel i5</td>
                                        </tr>
                                        <tr>
                                            <th>Backup</th>
                                            <td>Upto 10h</td>
                                        </tr>
                                        <tr>
                                            <th>Display</th>
                                            <td>Retina 4k</td>
                                        </tr>
                                        <tr>
                                            <th>Warranty</th>
                                            <td>1 Year (Global)</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="tab-pane fade describe-tab" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                            {{ strip_tags($data->content) }}
                            </div>
                            <div class="tab-pane review-tab fade" id="review" role="tabpanel" aria-labelledby="review-tab">
                                <p class="woocommerce-noreviews">There are no reviews yet.</p>
                                <div class="star-rating">
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                    <span><i class="fa fa-star"></i></span>
                                </div>
                                <form class="contact-form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="single-input-wrap">
                                                <label>Name</label>
                                                <input type="text" class="single-input">
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-12">
                                            <div class="single-input-wrap">
                                                <label>Email</label>
                                                <input type="text" class="single-input">
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="single-input-wrap">
                                                <label>Your review </label>
                                                <textarea class="single-input textarea"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <a class="btn btn-black" href="#">Submit</a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- shop-product area end -->

</main>

@endsection