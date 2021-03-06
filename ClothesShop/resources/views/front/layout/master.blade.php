<!DOCTYPE html>
<html lang="zxx">

<head>
    <base href="{{ asset('/') }}">
    <meta charset="UTF-8">
    <meta name="description" content="codelean Template">
    <meta name="keywords" content="codelean, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Cosmetics Shop</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">

    <link rel="stylesheet" href="front/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="front/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="front/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="front/css/style.css" type="text/css">

    <script src="front/js/owLcarousel2-filter.min.js"></script>

</head>

<body>
    <!-- Start coding here -->

    <!-- Page Preloader-->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!--Header section begin-->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class="fa fa-envelope"></i> nguyenvana@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class="fa fa-phone"></i> +84 123456789
                    </div>
                </div>
                <div class="ht-right">
                    <a href="./login" class="login-panel"><i class="fa fa-user"></i>????ng nh???p</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="front/img/flag-1.jpg" data-imagecss="flag yt" data-title="VietNam">Vi???t Nam</option>
                            <!-- <option value='yu' data-image="front/img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">?????c</option> -->
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>

        </div>

        <div class="container">
            <div class="inner-header">
                <div class="row">

                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="index.html">
                                <img src="front/img/logo.png" width="130" alt="" height="40">
                            </a>
                        </div>
                    </div>

                    <div class="col-lg-7 col-md-7">
                        <form action="shop">
                            <div class="advanced-search">
                                <button type="button" class="category-btn">Danh m???c</button>
                                <div class="input-group">
                                    <input name="search" type="text" value="{{ request('search') }}" placeholder="B???n mu???n t??m?">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                    <div class="col-lg-3 col-md-3 text-right">
                        <ul class="nav-right">
                            <li class="heart-icon">
                                <a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon">
                                <a href="./shop/cart">
                                    <i class="icon_bag_alt"></i>
                                    <span>3</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="front/img/select-product-1.jpg"></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$68.80 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img src="front/img/select-product-2.jpg"></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>$68.80 x 1</p>
                                                            <h6>Kabino Bedside Table</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>$120.88</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="./shop/cart" class="primary-btn view-card">Xem gi??? h??ng</a>
                                        <a href="./checkout/index" class="primary-btn checkout-btn">Thanh to??n</a>
                                    </div>
                                </div>
                            </li>
                            <li>
                            <li class="cart-price">$128.00</li>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>

        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>Nh??n h??ng</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Bioderma</a></li>
                            <li><a href="#">Byphasse</a></li>
                            <li><a href="#">Eveline</a></li>
                            <li><a href="#">Innissfee</a></li>
                            <li><a href="#">L'Oreal</a></li>
                            <li><a href="#">Some By Me</a></li>

                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li class="{{(request()->segment(1) == '') ? 'active' : ''}}"><a href="./">Trang ch???</a></li>
                        <li class="{{(request()->segment(1) == 'shop') ? 'active' : ''}}"><a href="./shop">C???a h??ng</a></li>
                        <li><a href="">Danh m???c</a>
                            <ul class="dropdown">
                                <li class="active"><a href="">Ch??m s??c da </a></li>
                                <li><a href="">Serum v?? s???n ph???m ?????c tr???</a></li>
                                <li><a href="">Trang ??i???m</a></li>
                            </ul>
                        </li>
                        <li class="{{(request()->segment(1) == 'blog') ? 'active' : ''}}"><a href="./blog">Blog</a></li>
                        <li class="{{(request()->segment(1) == 'contact') ? 'active' : ''}}"><a href="./contact">Li??n h???</a></li>
                        <!-- <li ><a href="">Chung</a>
                            <ul class="dropdown">
                                <li class="active"><a href="blog-details.html">Th??ng tin trang web</a></li>
                                <li><a href="./shop/cart">Gi??? h??ng</a></li>
                                <li><a href="./checkout/index">Thanh to??n</a></li>
                                <li class="{{(request()->segment(1) == 'faq') ? 'active' : ''}}"><a href="./faq">Faq</a></li>
                                
                                <li><a href="register.html">????ng k??</a></Li>
                                <li><a href="./login">????ng nh???p</a></li>
                            </ul>
                        </li> -->
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!--Header section end-->


    @yield('body')

    <!-- Partner Logo Section Begin -->
    <div class="partner-logo">
        <div class="container">
            <div class="logo-carousel owl-carousel">
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-1.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-2.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-3.png">
                    </div>
                </div>
                <div class="logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/logo-carousel/logo-4.png">
                    </div>
                </div>
                <div class="Logo-item">
                    <div class="tablecell-inner">
                        <img src="front/img/Logo-carousel/logo-5.png">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Partner Logo Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="footer-left">
                        <div class="footer-logo">
                            <a href="index.html">
                                <img src="front/img/footer-logo.png" height="25" alt="">
                            </a>
                        </div>
                        <ul>
                            <li>48 Cao Th???ng, Thanh B??nh, H???i Ch??u, ???? N???ng</li>
                            <li>??i???n tho???i: +84 123456789</li>
                            <li>Email: nguyenvana@gmail.com</li>
                        </ul>
                        <div class="footer-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 offset-lg-1">
                    <div class="footer-widget">
                        <h5>Th??ng tin chung</h5>
                        <ul>
                            <li><a href="">V??? ch??ng t??i</a></li>
                            <li><a href="">Thanh to??n</a></li>
                            <li><a href="">Li??n h???</a></li>
                            <li><a href="">D???ch v???</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="footer-widget">
                        <h5>T??i kho???n c???a t??i</h5>
                        <ul>
                            <li><a href="">T??i kho???n</a></li>
                            <li><a href="">Li??n h???</a></li>
                            <li><a href="">S???n ph???m</a></li>
                            <li><a href="">C???a h??ng</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="newslatter-item">
                        <h5>Tham gia v???i ch??ng t??i ngay</h5>
                        <p>C???p nh???t Email v??? c???a h??ng m???i nh???t v?? nh???n c??c ??u ????i ?????c bi???t.</p>
                        <form action="#" class="subscribe-form">
                            <input type="text" placeholder="Nh???p Email">
                            <button type="button">????ng k??</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            Copyright @
                            <script>
                                document.write(new Date().getFullYear());
                            </script>
                        </div>
                        <div class="payment-pic">
                            <img src="front/img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="front/js/jquery-3.3.1.min.js"></script>
    <script src="front/js/bootstrap.min.js"></script>
    <script src="front/js/jquery-ui.min.js"></script>
    <script src="front/js/jquery.countdown.min.js"></script>
    <script src="front/js/jquery.nice-select.min.js"></script>
    <script src="front/js/jquery.zoom.min.js"></script>
    <script src="front/js/jquery.dd.min.js"></script>
    <script src="front/js/jquery.slicknav.js"></script>
    <script src="front/js/owl.carousel.min.js"></script>
    <script src="front/js/main.js"></script>
</body>

</html>