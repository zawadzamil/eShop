<!DOCTYPE html>


<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>

    <title>Digitf</title>


    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="public/mainAsset/css/bootstrap.css"/>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap"
          rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="public/mainAsset/css/style.css" rel="stylesheet"/>
    <link href="public/mainAsset/css/cart.css" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="public/mainAsset/css/responsive.css" rel="stylesheet"/>
    @livewireStyles
</head>

<body class="sub_page">
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="index.html">
                    <img src="public/mainAsset/images/logo.png" alt=""/>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{'dashboard'}}">Home <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item ">
                            <a class="nav-link" href="{{'shop'}}">Shop </a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="{{'viewCart'}}">Cart </a>
                        </li>


                    </ul>
                    <div class="user_option">
                        <a href="">
                            <img src="public/mainAsset/images/user.png" alt="">
                            <span>
                                    Login
                                </span>
                        </a>
                        <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                    </div>
                </div>
                <div>
                    <div class="custom_menu-btn ">
                        <button>
                                <span class=" s-1">

                                </span>
                            <span class="s-2">

                                </span>
                            <span class="s-3">

                                </span>
                        </button>
                    </div>
                </div>

            </nav>
        </div>
    </header>
    <!-- end header section -->
</div>

<div>


    <div class="container wrapper mt-3">

        <h1>

            Cart
        </h1>

    </div>

    <div class="container wrapper p-3 mt-5">
        @foreach($carts as $cart)
            <div class="m-5 mx-auto wrapper" style="max-width: 800px;">

                <div class="row g-0">
                    <div class="col-md-4 ">
                        <img src="public/images/{{\App\Models\Product::where('id',$cart->product_id)->value('image')}}"
                             class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h4 class="card-title">{{\App\Models\Product::where('id',$cart->product_id)->value('name')}}</h4>
                            <div class=" d-flex align-items-center  ">
                                <div>
                                    <h5 class="">Quantity :</h5>
                                </div>


                                <div class="card-item-dislay mx-auto card-inside-color ">
                                    <form action="{{url('updateCart',$cart->id)}}" method="POST">
                                        @csrf
                                        <label for="qty"></label>
                                        <input type="number" name="quantity" min="1" style="margin-bottom: 3%;"
                                               value="{{\App\Models\Cart::where('id',$cart->id)->value('quantity')}}">
                                        <button class="btn btn-sm card-button" type="submit">Add</button>

                                        <button class="btn card-button" type="button" style="width: 70px;"><i
                                                class="fas fa-trash"></i></button>
                                    </form>


                                </div>

                            </div>
                            <hr>

                            <p class="card-text mt-3"
                               id="price">  {{\App\Models\Product::where('id',$cart->product_id)->value('price') *$cart->quantity}}</p>

                        </div>
                    </div>
                </div>

            </div>
        @endforeach


    </div>


    <!-- brand section -->
</div>

<div class="container wrapper text-center mt-5 ">
    <div class="p-2">
        <h3>Total Price $ :1200</h3>
        <h3>Delivery Charge $ :100</h3>
        <h3>Tax Fee $ :1200</h3>
        <hr>
        <h1>Final Price $ :1200</h1>
        <button class=" check-button " type="button">Checkout</button>


    </div>

</div>


<!-- end brand section -->


<!-- footer -->
<!-- footer -->
<footer class="container-fluid footer_section  mt-5 ">
    <div class="container ">
        <p>© 2021 All Rights Reserved By Team</p>


    </div>
</footer>


<script src="https://kit.fontawesome.com/795f45e6df.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="public/mainAsset/js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="public/mainAsset/js/bootstrap.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
</script>
<script type="text/javascript">
    $(".owl-carousel").owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: [],
        autoplay: true,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            420: {
                items: 2
            },
            1000: {
                items: 5
            }
        }

    });
</script>

<script>
    var nav = $("#navbarSupportedContent");
    var btn = $(".custom_menu-btn");
    btn.click
    btn.click(function (e) {

        e.preventDefault();
        nav.toggleClass("lg_nav-toggle");
        document.querySelector(".custom_menu-btn").classList.toggle("menu_btn-style")
    });
</script>
<script>
    $('.carousel').on('slid.bs.carousel', function () {
        $(".indicator-2 li").removeClass("active");
        indicators = $(".carousel-indicators li.active").data("slide-to");
        a = $(".indicator-2").find("[data-slide-to='" + indicators + "']").addClass("active");
        console.log(indicators);

    })
</script>

@livewireScripts


</body>


</html>
