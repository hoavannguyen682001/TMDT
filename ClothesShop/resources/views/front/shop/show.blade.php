@extends('front.layout.master')

@section('title','Sản phẩm')

@section('body')

<!-- Breadcrumb Section Begin -->
<div class="breacrumb-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb-text">
                    <a href="index.html"><i class="fa fa-home"></i> Trang chủ</a>
                    <a href="shop.html">Cửa hàng</a>
                    <span>Chi tiết</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcrumb Section End -->

<!-- Product Shop Section Begin -->
<section class="product-shop spad page-details">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="filter-widget">
                    <h4 class="fw-title">Danh mục</h4>
                    <ul class="filter-catagories">
                        <li><a href="#">Chăm sóc da</a></li>
                        <li><a href="#">Serum và sản phẩm đặc trị</a></li>
                        <li><a href="#">Trang điểm</a></li>
                    </ul>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Nhãn hàng</h4>
                    <div class="fw-brand-check">
                        <div class="bc-item">
                            <label for="bc-calvin">
                                L'Oreal
                                <input type="checkbox" id="bc-calvin">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-diesel">
                                Innissfee
                                <input type="checkbox" id="bc-diesel">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-polo">
                                Eveline
                                <input type="checkbox" id="bc-polo">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                        <div class="bc-item">
                            <label for="bc-tommy">
                                Byphasse
                                <input type="checkbox" id="bc-tommy">
                                <span class="checkmark"></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Giá </h4>
                    <div class="filter-range-wrap">
                        <div class="range-slider">
                            <div class="price-input">
                                <input type="text" id="minamount">
                                <input type="text" id="maxamount">
                            </div>
                        </div>
                        <div class="price-range ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-min="33" data-max="98">
                            <div class="price-range ui-slider ui-corner-all ui-widget-header"></div>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                            <span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default"></span>
                        </div>
                    </div>
                    <a href="#" class="filter-btn">Lọc</a>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Màu sắc</h4>
                    <div class="fw-color-choose">
                        <div class="cs-item">
                            <input type="radio" id="cs-black">
                            <label class="cs-black" for="cs-black">black</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-violet">
                            <label class="cs-violet" for="cs-violet">violet</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-blue">
                            <label class="cs-blue" for="cs-blue">blue</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-yellow">
                            <label class="cs-yellow" for="cs-yellow">yellow</Label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-red">
                            <label class="cs-red" for="cs-red">red</label>
                        </div>
                        <div class="cs-item">
                            <input type="radio" id="cs-green">
                            <label class="cs-green" for="cs-green">green </label>
                        </div>
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class="fw-title">Kích thước</h4>
                    <div class="fw-size-choose">
                        <div class="sc-item">
                            <input type="radio" id="s-size">
                            <label for="s-size">Lớn</Label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="m-size">
                            <label for="m-size">Nhỏ</label>
                        </div>
                        <div class="sc-item">
                            <input type="radio" id="l-size">
                            <label for="l-size">Gói</label>
                        </div>
                        <!-- <div class="sc-item">
                                <input type="radio" id="xs-size">
                                <Label for="xs-size">xs</label>
                            </div> -->
                    </div>
                </div>
                <div class="filter-widget">
                    <h4 class=" fw-title">Gợi ý</h4>
                    <div class="fw-tags">
                        <a href="#">Rửa mặt</a>
                        <a href="#">Tẩy trang</a>
                        <a href="#">Son</a>
                        <a href="#">Kẻ mắt</a>
                        <a href="#">Nước hoa</a>
                        <a href="#">Dưỡng thể</a>
                        <a href="#">Toner</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="product-pic-zoom">
                            <img class="product-big-img" src="front/img/products/{{$product->productImages[0]->path}}" alt="">
                            <div class="zoom-icon">
                                <i class="fa fa-search-plus"></i>
                            </div>
                        </div>
                        <div class="product-thumbs">
                            <div class="product-thumbs-track ps-slider owl-carousel">
                                @foreach($product->productImages as $productImage)
                                <div class="pt active" data-imgbigurl="front/img/product-single/{{$productImage->path}}">
                                    <img src="front/img/product-single/{{$productImage->path}}" alt="">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="product-details">
                            <div class="pd-title">
                                <span>{{ $product->tag}}</span>
                                <h3>{{$product->name}}</h3>
                                <a href="#" class="heart-icon"><i class="icon_heart_alt"></i></a>
                            </div>
                            <div class="pd-rating">
                                @for($i = 1; $i <= 5; $i++) @if($i < $avg_rating) <i class="fa fa-star"></i>
                                    @else
                                    <i class="fa fa-star-o"></i>
                                    @endif
                                    @endfor

                                    <span>({{count($product->productComment)}})</span>
                            </div>
                            <div class="pd-desc">
                                <p>{{$product->content}}</p>
                                @if($product->discount != null)
                                <h4>{{$product->discount}} <span>{{$product->price}}</span></h4>
                                @else
                                <h4>{{$product->price}}</h4>
                                @endif

                            </div>
                            <div class="pd-color">
                                <h6>Color</h6>
                                <div class="pd-color-choose">
                                    @foreach($colors as $productColor)
                                    <div class="cc-item">
                                        <input type="radio" id="cc-{{$productColor}}">
                                        <label for="cc-{{$productColor}}" class="cc-{{$productColor}}"></label>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="pd-size-choose">
                                @foreach($size as $productSize)
                                <div class="sc-item">
                                    <input type="radio" id="sm-{{$productSize}}">
                                    <label for="sm-{{$productSize}}">{{$productSize}}</label>
                                </div>
                                @endforeach
                            </div>
                            <div class="quantity">
                                <div class="quantity">
                                    <div class="pro-qty">
                                        <input type="text" value="1">
                                    </div>
                                    <a href="#" class="primary-btn pd-cart">Thêm vào giỏ hàng</a>
                                </div>
                            </div>
                            <ul class="pd-tags">
                                <li><span>Danh Mục</span>: {{$product->productCategory->name}}</li>
                                <li><span>TAGS</span>: {{$product->tag}}</li>
                            </ul>
                            <div class="pd-share">
                                <div class="p-code">Sku : {{$product->sku}}</div>
                                <div class="pd-social">
                                    <a href="#"><i class="ti-facebook"></i></a>
                                    <a href="#"><i class="ti-twitter-alt"></i></a>
                                    <a href="#"><i class="ti-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-tab">
                    <div class="tab-item">
                        <ul class="nav" role="tablist">
                            <li><a class="active" href="#tab-1" data-toggle="tab" role="tab">MÔ TẢ SẢN PHẨM</a></li>
                            <li><a href="#tab-2" data-toggle="tab" role="tab">THÔNG TIN CHUNG </a></li>
                            <li><a href="#tab-3" data-toggle="tab" role="tab">ĐÁNH GIÁ (02)</a></li>
                        </ul>
                    </div>
                    <div class="tab-item-content">
                        <div class="tab-content">
                            <div class="tab-pane fade-in active" id="tab-1" role="tabpanel">
                                <div class="product-content">
                                    <div class="row">
                                        <div class="col-lg-7">
                                            <h5>GIới thiệu</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo corporis omnis, nulla fugiat culpa molestias officia? Deserunt asperiores velit alias corrupti officia sequi in, dolorum assumenda similique,
                                                laboriosam itaque quaerat!</p>
                                            <h5>Chi tiết</h5>
                                            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Explicabo corporis omnis, nulla fugiat culpa molestias officia? Deserunt asperiores velit alias corrupti officia sequi in, dolorum assumenda similique,
                                                laboriosam itaque quaerat!</p>
                                        </div>
                                        <div class="col-lg-5">
                                            <img src="front/img/product-single/tab-desc.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-2" role="tabpanel">
                                <div class="specification-table">
                                    <table>
                                        <tr>
                                            <td class="p-catagory">Đánh giá</td>
                                            <td>
                                                <div class="pd-rating">
                                                    @for ($i = 1; $i <= 5; $i++) @if($i <=$avg_rating) <i class="fa fa-star"></i>
                                                        @else
                                                        <i class="fa fa-star-o"></i>
                                                        @endif
                                                        @endfor
                                                        <span> ({{count($product->productComment)}})</span>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Giá tiền</td>
                                            <td>
                                                <div class="p-price">
                                                    ${{$product->price}}
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Thêm vào giỏ hàng</td>
                                            <td>
                                                <div class="cart-add">+ Thêm </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Số lượng có sẵn</td>
                                            <td>
                                                <div class="p-stock">{{$product->qty}} sản phẩm</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Cân nặng</td>
                                            <td>
                                                <div class="p-weight">{{$product->weight}}kg</div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Kích thước</td>
                                            <td>
                                                <div class="p-size">
                                                    @foreach($size as $product_size)
                                                    {{$product_size}}
                                                    @endforeach
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Màu sắc</td>
                                            <td>
                                                @foreach($colors as $product_color)
                                                <span class="cs-{{$product_color}}"></span>
                                                @endforeach
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="p-catagory">Sku</td>
                                            <td>
                                                <div class="p-code">{{$product->sku}}</div>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="tab-3" role="tabpanel">
                                <div class="customer-review-option">
                                <h4>{{count($product->productComment)}} Comments</h4>
                                    <div class="comment-option">
                                        @foreach($product->productComment as $productComment)
                                            <div class="co-item">
                                                <div class="avatar-pic">
                                                    <img src="front/img/product-single/{{$productComment->user->avatar}}" alt="">
                                                </div>
                                                <div class="avatar-text">
                                                    <div class="at-rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-0"></i>
                                                    </div>
                                                    <h5>{{$productComment->name}} <span>{{date('d,m,Y',strtotime($productComment->created_at))}}</span></h5>
                                                    <div class="at-reply">{{$productComment->messages}}</div>
                                                </div>
                                            </div>
                                        @endforeach
                                    <div class="personal-rating">
                                        <h6>Your Rating</n6>
                                            <div class="rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-o"></i>
                                            </div>
                                    </div>
                                    <div class="leave-comment">
                                        <h4>Đánh giá </h4>
                                        <form action="" class="comment-form">
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Tên">
                                                </div>
                                                <div class="col-lg-6">
                                                    <input type="text" placeholder="Email">
                                                </div>
                                                <div class="col-lg-12">
                                                    <textarea placeholder="Lời nhắn"></textarea>
                                                    <button type="submit" class="site-btn">Gửi lời nhắn</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- Product Shop Section End -->

<!-- Related Products Section Begin -->
<div class="related-products spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title">
                    <h2>Sản phẩm liên quan</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="img/products/product-1.jpg" alt="">
                        <div class="sale pp-sale">Giảm giá</div>
                        <div class="icon">
                            <i class="icon_heart alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a>
                            </li>
                            <li class="quick-view"><a href="product.html">+ Xem nhanh</a></li>
                            <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="pi-text">
                            <div class="catagory-name">Towel</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $14.00
                                <span>$35.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="img/products/product-2.jpg" alt="">
                        <div class="sale pp-sale">Giảm giá</div>
                        <div class="icon">
                            <i class="icon_heart alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a>
                            </li>
                            <li class="quick-view"><a href="product.html">+ Xem nhanh</a></li>
                            <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="pi-text">
                            <div class="catagory-name">Towel</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $14.00
                                <span>$35.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="img/products/product-3.jpg" alt="">
                        <div class="sale pp-sale">Giảm giá</div>
                        <div class="icon">
                            <i class="icon_heart alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a>
                            </li>
                            <li class="quick-view"><a href="product.html">+ Xem nhanh</a></li>
                            <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="pi-text">
                            <div class="catagory-name">Towel</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $14.00
                                <span>$35.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="product-item">
                    <div class="pi-pic">
                        <img src="img/products/product-4.jpg" alt="">
                        <div class="sale pp-sale">Giảm giá</div>
                        <div class="icon">
                            <i class="icon_heart alt"></i>
                        </div>
                        <ul>
                            <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a>
                            </li>
                            <li class="quick-view"><a href="product.html">+ Xem nhanh</a></li>
                            <li class="w-icon"><a href=""><i class="fa fa-random"></i></a></li>
                        </ul>
                    </div>
                    <div class="pi-text">
                        <div class="pi-text">
                            <div class="catagory-name">Towel</div>
                            <a href="#">
                                <h5>Pure Pineapple</h5>
                            </a>
                            <div class="product-price">
                                $14.00
                                <span>$35.00</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Related Products Section End -->
@endsection