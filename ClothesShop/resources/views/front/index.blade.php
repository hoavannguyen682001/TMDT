@extends('front.layout.master')


@section('title','Trang Chủ')
@section('body')

<!-- Hero Section Begin -->
<section class="hero-section">
    <div class="hero-items owl-carousel">
        <div class="single-hero-items set-bg" data-setbg="front/img/hero-1.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Chăm sóc da và trang điểm</span>
                        <h1>Black friday</h1>
                        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis blanditiis, quos ullam ad omnis esse quam necessitatibus voluptatibus quaerat fugiat?</P>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale <span>58%</span></h2>
                </div>
            </div>
        </div>
        <div class="single-hero-items set-bg" data-setbg="front/img/hero-2.jpg">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5">
                        <span>Chăm sóc da và trang điểm</span>
                        <h1>Black friday</h1>
                        <P>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis blanditiis, quos ullam ad omnis esse quam necessitatibus voluptatibus quaerat fugiat?</P>
                        <a href="#" class="primary-btn">Shop Now</a>
                    </div>
                </div>
                <div class="off-card">
                    <h2>Sale <span>58%</span></h2>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Hero Section End -->

<!-- Banner Section Begin -->
<!-- <div class="banner-section spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="front/img/banner-1.jpg" alt="">
                    <div class="inner-text">
                        <h4>Chăm sóc da</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="front/img/banner-2.jpg" alt="">
                    <div class="inner-text">
                        <h4>Serum và sản phẩm đặc trị</h4>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single-banner">
                    <img src="front/img/banner-3.jpg" alt="">
                    <div class="inner-text">
                        <h4>Trang điểm</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- Banner Section End -->

<!-- Women Banner Section Begin -->
<section class="product2-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <div class="product-large set-bg" data-setbg="front/img/products/women-large.jpg">
                    <h2>Serum và sản phẩm đặc trị</h2>
                    <a href="#">Xem thêm</a>
                </div>
            </div>
            <div class="col-lg-8 offset-lg-1">
                <div class="filter-control">
                    <ul>
                        <li class="item active" data-tag="*" data-category="product2">Tất cả</li>
                        <li class="item" data-tag=".Son môi" data-category="product2">Son môi</li>
                        <li class="item" data-tag=".Sửa rửa mặt" data-category="product2">Sửa rửa mặt</li>
                        <li class="item" data-tag=".Serum" data-category="product2">Serum</li>
                        <li class="item" data-tag=".Kẻ mắt" data-category="product2">Kẻ mắt</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel product1">
                    @foreach($product2 as $product2)
                        @include('front.components.product-item',['product' => $product2])
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Women Banner Section End -->

<!-- Deal Of The Week Section Begin-->
<section class="deal-of-week set-bg spad" data-setbg="front/img/time-bg.jpg">
    <div class="container">
        <div class="col-1g-6 text-center">
            <div class="section-title">
                <h2>Giảm giá cuối tuần</h2>
                <p>Loren ipsum dolor sit amet, consectetur adipisicing elit, sed<br /> consectetur adipisicing elit </p>
                <div class="product-price">
                    $35.00
                    <span>/ HanBag</span>
                    <ATP />
                </div>
                <div class="countdown-timer" id="countdown">
                    <div class="cd-item">
                        <span>56</span>
                        <p>Days</p>
                    </div>
                    <div class="cd-item">
                        <span>12</span>
                        <p>Hrs</p>
                    </div>
                    <div class="cd-item">
                        <span>48</span>
                        <p>Mins</p>
                    </div>
                    |
                    <div class="cd-item"> %3
                        <span>52</span>
                        <p>Secs</p>
                    </div>
                </div>
                <a href="" class="primary-btn">Mua ngay</a>
            </div>
        </div>
</section>
<!-- Deal Of The Week Section End-->

<!-- Man Banner Section Begin-->
<section class="product1-banner spad">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-8">
                <div class="filter-control">
                    <ul>
                        <li class="item active" data-tag="*" data-category="women">Tất cả</li>
                        <li class="item" data-tag=".Son môi" data-category="women">Son môi</li>
                        <li class="item" data-tag=".Sửa rửa mặt" data-category="women">Sửa rửa mặt</li>
                        <li class="item" data-tag=".Serum" data-category="women">Serum</li>
                        <li class="item" data-tag=".Kẻ mắt" data-category="women">Kẻ mắt</li>
                    </ul>
                </div>
                <div class="product-slider owl-carousel product1">
                    @foreach($product1 as $product1)
                        @include('front.components.product-item',['product' => $product1])
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3 offset-lg-1">
                <div class="product-large set-bg" data-setbg="front/img/products/man-large.jpg">
                    <h2>Trang điểm</h2>
                    <a href="#">Xem thêm</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Han Banner Section End -->

<!-- Instagram Section Begin -->
<div class="instagram-photo">
    <div class="insta-item set-bg" data-setbg="front/img/insta-1.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">CodeLean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-2.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">CodeLean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-3.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">CodeLean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-4.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">CodeLean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-5.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">CodeLean_Collection</a></h5>
        </div>
    </div>
    <div class="insta-item set-bg" data-setbg="front/img/insta-6.jpg">
        <div class="inside-text">
            <i class="ti-instagram"></i>
            <h5><a href="#">CodeLean_Collection</a></h5>
        </div>
    </div>
</div>
<!-- Instagram Section End -->

<!-- Latest Blog Section Begin -->
<section class="latest-blog spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Tin tức</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="front/img/latest-1.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i> May 4, 2822
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i> 5
                            </div>
                        </div>
                        <a href="">
                            <h4>The Best Street Style From London codeleanon Week</h4>
                        </a>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="front/img/latest-2.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i> May 4, 2822
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i> 5
                            </div>
                        </div>
                        <a href="">
                            <h4>Vogue's Ultimate Guide To Autumn/Winter 2022 Shoes</h4>
                        </a>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae, quia?
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-latest-blog">
                    <img src="front/img/latest-3.jpg" alt="">
                    <div class="latest-text">
                        <div class="tag-list">
                            <div class="tag-item">
                                <i class="fa fa-calendar-o"></i> May 4, 2822
                            </div>
                            <div class="tag-item">
                                <i class="fa fa-comment-o"></i> 5
                            </div>
                        </div>
                        <a href="">
                            <h4>How To Brighten Your Wardrobe With A Dash Of Lime
                            </h4>
                        </a>
                        <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="benefit-items">
            <div class="row">
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-1.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Miễn phí vận chuyển</h6>
                            <p>Cho hóa đơn từ $99</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-2.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Giao hàng đúng hẹn</h6>
                            <p>Giải quyết nhanh nếu có vấn đề</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="single-benefit">
                        <div class="sb-icon">
                            <img src="front/img/icon-3.png" alt="">
                        </div>
                        <div class="sb-text">
                            <h6>Thanh toán an toàn</h6>
                            <p>Độ tin cậy 100%</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Latest Blog Section End -->
@endsection