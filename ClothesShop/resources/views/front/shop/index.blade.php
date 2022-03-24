@extends('front.layout.master')

@section('title', 'Cửa hàng')

@section('body')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i> Trang chủ</a>
                        <span>Cửa hàng</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Product Shop Section Begin -->
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1 produts-sidebar-filter">
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
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="product-show-option">
                        <div class="row">
                            <div class="col-lg-7 col-nd-7">
                                <div class="select-option">
                                    <select class="sorting">
                                        <option value="">Phân loại</option>
                                    </select>
                                    <select class="p-show">
                                        <option value="">Hiển thị:</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-5 col-nd-5 text-right">
                                <p>Hiển thị 01- 09 của 36 sản phẩm</p>
                            </div>
                        </div>
                    </div>
                    <div class="product-list">
                        <div class="row">
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/product-1.jpg" alt="">
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/product-9.jpg" alt="">
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/product-2.jpg" alt="">
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/product-3.jpg" alt="">
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/product-4.jpg" alt="">
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/product-5.jpg" alt="">
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/product-6.jpg" alt="">
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/product-7.jpg" alt="">
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
                            <div class="col-lg-4 col-sm-6">
                                <div class="product-item">
                                    <div class="pi-pic">
                                        <img src="front/img/products/product-8.jpg" alt="">
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
                    <div class="loading-more">
                        <i class="icon_loading"></i>
                        <a href="#">Xem thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Shop Section End -->

   @endsection