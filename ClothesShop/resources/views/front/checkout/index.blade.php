@extends('front.layout.master')

@section('title','Thanh toán')

@section('body')

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="./index.html"><i class="fa fa-home"></i> Trang chủ</a>
                        <a href="./shop.html">Cửa hàng</a>
                        <span>Thanh toán</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Shopping Cart Section Begin -->
    <div class="checkout-section spad">
        <div class="container">
            <form action="#" class="checkout-form">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <a href="login.html" class="content-btn">Nhập thông tin tại đây</a>
                        </div>
                        <h4>Chi tiết hóa đơn</h4>
                        <div class="row">
                            <div class="col-lg-6">
                                <label for="fir">Họ <span>*</span></label>
                                <input type="text" id="fir">
                            </div>
                            <div class="col-lg-6">
                                <label for="last">Tên <span>*</span></label>
                                <input type="text" id="last">
                            </div>
                            <div class="col-lg-6">
                                <label for="cun-name">Công việc</label>
                                <input type="text" id="cun-name">
                            </div>
                            <div class="col-lg-12">
                                <label for="cun">Quốc gia<span>*</span></label>
                                <input type="text" id="cun">
                            </div>
                            <div class="col-lg-12">
                                <label for="street">Địa chỉ <span>*</span></label>
                                <input type="text" id="street" class="street-first">
                                <input type="text">
                            </div>
                            <div class="col-lg-12">
                                <label for="zip">Mã bưu điện / ZIP (Nếu có)</label>
                                <input type="text" id="zip">
                            </div>
                            <div class="col-lg-12">
                                <label for="town">Thành phố<span>*</span></label>
                                <input type="text" id="town">
                            </div>
                            <div class="col-lg-6">
                                <label for="email">Địa chỉ Email<span>*</span></label>
                                <input type="text" id="email">
                            </div>
                            <div class="col-lg-6">
                                <label for="phone">Số điện thoại<span>*</span></label>
                                <input type="text" id="phone">
                            </div>
                            <div class="col-lg-12">
                                <div class="create-item">
                                    <label for="acc-create">
                                       Chắc chắn muốn tạo?
                                        <input type="checkbox" id="acc-create">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-6">
                        <div class="checkout-content">
                            <input " type="text " placeholder="Nhập mã phiếu giảm giá của bạn ">
                        </div>
                        <div class="place-order ">
                            <h4>Đơn hàng của bạn</h4>
                            <div class="order-total ">
                                <ul class="order-table ">
                                    <li>Sản phẩm <span>Tổng tiền</span></li>
                                    <li class="fw-nornal ">Combination x 1 <span>$68.88</span></li>
                                    <li class="fw-nornal ">Combination x 1 <span>$68.88</span></li>
                                    <li class="fw-nornal ">Combination x 1 <span>$128.88</span></li>
                                    <li class="fw-nornal ">Tạm tính <span>$248.88</span></li>
                                    <li class="total-price ">Tổng tiền <span>$248.88</span></li>
                                </ul>
                                <div class="payment-check ">
                                    <div class="pc-item ">
                                        <label>
                                            Kiểm tra thanh toán
                                            <input type="checkbox " id="pc-check ">
                                            <span class="checkmark "></span>
                                        </label>
                                    </div>
                                    <div class="pc-item ">
                                        <label for="pc-paypal ">
                                            Thanh toán
                                            <input type="checkbox " id="pc-paypal ">
                                            <span class="checkmark "></span>
                                        </Label>
                                    </div>
                                </div>
                                <div class="order-btn ">
                                    <button type="submit " class="site-btn place-btn ">Đặt hàng</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Shopping Cart Section End -->
@endsection