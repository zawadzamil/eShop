@extends('mainLayout')
@section('slider')
    <!-- slider section -->
    <section class="slider_section ">
        <div class="play_btn">
            <a href="">
                <img src="public/mainAsset/images/play.png" alt="">
            </a>
        </div>
        <div class="number_box">
            <div>
                <ol class="carousel-indicators indicator-2">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
                </ol>
            </div>
        </div>
        <div class="container">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h1>
                                        The Latest
                                        <span>
                        Furniture
                      </span>
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn-1">
                                            Read More
                                        </a>
                                        <a href="" class="btn-2">
                                            Contact us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 img-container">
                                <div class="img-box">
                                    <img src="public/mainAsset/images/slider-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h1>
                                        The Latest
                                        <span>
                        Furniture
                      </span>
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn-1">
                                            Read More
                                        </a>
                                        <a href="" class="btn-2">
                                            Contact us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 img-container">
                                <div class="img-box">
                                    <img src="public/mainAsset/images/slider-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h1>
                                        The Latest
                                        <span>
                        Furniture
                      </span>
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn-1">
                                            Read More
                                        </a>
                                        <a href="" class="btn-2">
                                            Contact us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 img-container">
                                <div class="img-box">
                                    <img src="public/mainAsset/images/slider-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box">
                                    <h1>
                                        The Latest
                                        <span>
                        Furniture
                      </span>
                                    </h1>
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                        do eiusmod tempor incididunt ut labore
                                    </p>
                                    <div class="btn-box">
                                        <a href="" class="btn-1">
                                            Read More
                                        </a>
                                        <a href="" class="btn-2">
                                            Contact us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 img-container">
                                <div class="img-box">
                                    <img src="public/mainAsset/images/slider-img.png" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end slider section -->
@endsection

@section('main_content')





    <!-- about section -->

    <section class="about_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <h2>
                                About Us
                            </h2>

                        </div>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore magna aliqua. Ut enim ad minim veniam
                        </p>
                        <a href="">
                            Read More
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="public/mainAsset/images/about-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end about section -->

    <!-- trending section -->

    <section class="trending_section layout_padding">
        <div id="accordion">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="detail-box">
                            <div class="heading_container">
                                <h2>
                                    Trending Categories
                                </h2>
                            </div>
                            <div class="tab_container">
                                <div class="t-link-box" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true"
                                     aria-controls="collapseOne">
                                    <div class="number">
                                        <h5>
                                            01
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Chairs
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseTwo"
                                     aria-expanded="false" aria-controls="collapseTwo">
                                    <div class="number">
                                        <h5>
                                            02
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Tables
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseThree"
                                     aria-expanded="false" aria-controls="collapseThree">
                                    <div class="number">
                                        <h5>
                                            03
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Bads
                                        </h5>
                                    </div>
                                </div>
                                <div class="t-link-box collapsed" data-toggle="collapse" data-target="#collapseFour"
                                     aria-expanded="false" aria-controls="collapseFour">
                                    <div class="number">
                                        <h5>
                                            04
                                        </h5>
                                    </div>
                                    <hr>
                                    <div class="t-name">
                                        <h5>
                                            Furnitures
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="collapse show" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-1.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-2.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-3.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-4.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-3.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">

                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-1.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-4.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-1.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-3.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="collapse" id="collapseFour" aria-labelledby="headingfour" data-parent="#accordion">
                            <div class="img_container ">
                                <div class="box b-1">
                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-1.jpg" alt="">
                                    </div>

                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-4.jpg" alt="">
                                    </div>
                                </div>
                                <div class="box b-2">
                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-3.jpg" alt="">
                                    </div>
                                    <div class="img-box">
                                        <img src="public/mainAsset/images/t-2.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- end trending section -->

    <!-- discount section -->

    <section class="discount_section  layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="detail-box">
                        <h2>
                            The Latest Collection
                        </h2>
                        <h2 class="main_heading">
                            50% DISCOUNT
                        </h2>

                        <div class="">
                            <a href="">
                                Buy Now
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="img-box">
                        <img src="public/mainAsset/images/discount-img.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- end discount section -->

    <!-- brand section -->

    <section class="brand_section">
        <div class="container">
            <div class="heading_container">
                <h2>
                    Featured Brands
                </h2>
            </div>
            <div class="brand_container layout_padding2">
                <div class="box">
                    <a href="">
                        <div class="new">
                            <h5>
                                New
                            </h5>
                        </div>
                        <div class="img-box">
                            <img src="public/mainAsset/images/slider-img.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6 class="price">
                                $100
                            </h6>
                            <h6>
                                Chair
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <a href="">
                        <div class="img-box">
                            <img src="public/mainAsset/images/slider-img.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6 class="price">
                                $100
                            </h6>
                            <h6>
                                Chair
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <a href="">
                        <div class="img-box">
                            <img src="public/mainAsset/images/slider-img.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6 class="price">
                                $100
                            </h6>
                            <h6>
                                Chair
                            </h6>
                        </div>
                    </a>
                </div>
                <div class="box">
                    <a href="">
                        <div class="img-box">
                            <img src="public/mainAsset/images/slider-img.png" alt="">
                        </div>
                        <div class="detail-box">
                            <h6 class="price">
                                $100
                            </h6>
                            <h6>
                                Chair
                            </h6>
                        </div>
                    </a>
                </div>
            </div>
            <a href="" class="brand-btn">
                See More
            </a>
        </div>
    </section>
@endsection







