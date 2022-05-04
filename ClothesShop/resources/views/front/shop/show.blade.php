@extends('front.layout.master')

@section('title','Chi Tiết Sản phẩm')

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
            @include('front.shop.components.products-sidebar-filter')
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
                                @for($i = 1; $i <= 5; $i++) @if($i <= $avg_rating) <i class="fa fa-star"></i>
                                    @else
                                    <i class="fa fa-star-o"></i>
                                    @endif
                                    @endfor

                                    <span>({{count($product->productComment)}})</span>
                            </div>
                            <div class="pd-desc">
                                <p>{{$product->content}}</p>
                                @if($product->discount != null)
                                <h4>${{$product->discount}} <span>${{$product->price}}</span></h4>
                                @else
                                <h4>${{$product->price}}</h4>
                                @endif

                            </div>
                            <div class="pd-color">
                                <h6>Color</h6>
                                <div class="pd-color-choose">
                                    @foreach($colors as $productColor)
                                    <div class="cc-item">
                                        <input type="radio" id="cc-{{$productColor}}">
                                        <label for="cc-{{ $productColor }}" class="cc-{{ $productColor }}"></label>
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
                                <li><span>THẺ</span>: {{$product->tag}}</li>
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
                            <li><a href="#tab-3" data-toggle="tab" role="tab">ĐÁNH GIÁ</a></li>
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
                                                <div class="p-weight">{{$product->weight}}g</div>
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
                                                    @for ($i = 1; $i <= 5; $i++) @if($i <=$avg_rating) <i class="fa fa-star"></i>
                                                        @else
                                                        <i class="fa fa-star-o"></i>
                                                        @endif
                                                        @endfor
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
                                            <form action="" method="POST" class="comment-form">
                                            @csrf
                                                <input type="hidden" name="product_id" value="{{ $product->id }}">
                                                <input type="hidden" name="user_id" value="{{ \Illuminate\Support\Facades\Auth::user()->id ?? null }}">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Tên">
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <input type="text" placeholder="Email">
                                                    </div>
                                                    <div class="col-lg-12">
                                                        <textarea placeholder="Lời nhắn"></textarea>

                                                        <div class="personal-rating">
                                                            <h6>Your Rating</h6>
                                                            <div class="rate">
                                                                <input type="radio" id="star5" name="rating" value="5" />
                                                                <label for="star5" title="text">5 stars</label>
                                                                <input type="radio" id="star4" name="rating" value="4" />
                                                                <label for="star4" title="text">4 stars</label>
                                                                <input type="radio" id="star3" name="rating" value="3" />
                                                                <label for="star3" title="text">3 stars</label>
                                                                <input type="radio" id="star2" name="rating" value="2" />
                                                                <label for="star2" title="text">2 stars</label>
                                                                <input type="radio" id="star1" name="rating" value="1" />
                                                                <label for="star1" title="text">1 star</label>
                                                            </div>
                                                        </div>

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
            @foreach($relatedProducts as $relatedProducts)
                <div class="col-lg-3 col-sm-6">
                    @include('front.components.product-item',['product' => $relatedProducts])
                </div>
            @endforeach
        </div>
    </div>
</div>
<!-- Related Products Section End -->
@endsection