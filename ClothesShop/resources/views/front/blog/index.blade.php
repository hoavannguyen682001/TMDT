@extends('front.layout.master');

@section('title','Blog');

@section('body')
    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="index.html"><i class="fa fa-home"></i> Trang chủ</a>
                        <span>Chi tiết</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-8 order-2 order-lg-1">
                    <div class="blog-sidebar">
                        <div class="search-form">
                            <h4>Tìm kiếm</h4>
                            <form action="%#">
                                <input type="text" placeholder="Tìm kiếm...">
                                <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                        </div>
                        <div class="blog-catagory">
                            <h4>Danh mục</h4>
                            <ul>
                                <li><a href="">Chăm sóc da</a></Li>
                                <li><a href="">Chăm sóc da mặt</a></li>
                                <li><a href="">Serum đặc trị</a></li>
                                <li><a href="">Trang điểm</a></li>
                            </ul>
                        </div>
                        <div class="recent-post">
                            <h4>Bài đăng mới nhất</h4>
                            <div class="recent-blog">
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/recent-1.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes...</h6>
                                        <p>code <span>- May 19, 2822</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/recent-2.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes...</h6>
                                        <p>code <span>- May 19, 2822</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/recent-3.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes...</h6>
                                        <p>code <span>- May 19, 2822</span></p>
                                    </div>
                                </a>
                                <a href="#" class="rb-item">
                                    <div class="rb-pic">
                                        <img src="front/img/blog/recent-4.jpg" alt="">
                                    </div>
                                    <div class="rb-text">
                                        <h6>The Personality Trait That Makes...</h6>
                                        <p>code <span>- May 19, 2822</span></p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="blog-tags">
                            <h4>Thẻ sản phẩm</h4>
                            <div class="tag-item">
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
                </div>
                <div class="col-lg-9 order-1 order-lg-2">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-1.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="./blog/blogdetail/1">
                                        <h4>The Personality Trait That Makes People Happier</h4>
                                    </a>
                                    <p>travel <span>- May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-2.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="./blog/blogdetail/2">
                                        <h4>The Personality Trait That Makes People Happier</h4>
                                    </a>
                                    <p>travel <span>- May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-3.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="./blog/blogdetail/3">
                                        <h4>The Personality Trait That Makes People Happier</h4>
                                    </a>
                                    <p>travel <span>- May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-4.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="./blog/blogdetail/4">
                                        <h4>The Personality Trait That Makes People Happier</h4>
                                    </a>
                                    <p>travel <span>- May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-5.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="./blog/blogdetail/5">
                                        <h4>The Personality Trait That Makes People Happier</h4>
                                    </a>
                                    <p>travel <span>- May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="blog-item">
                                <div class="bi-pic">
                                    <img src="front/img/blog/blog-6.jpg" alt="">
                                </div>
                                <div class="bi-text">
                                    <a href="./blog/blogdetail/6">
                                        <h4>The Personality Trait That Makes People Happier</h4>
                                    </a>
                                    <p>travel <span>- May 19, 2022</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="loading-more">
                                <i class="icon_loading"></i>
                                <a href="#">Xem thêm</a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- Blog Section End -->
@endsection