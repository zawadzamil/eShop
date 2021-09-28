<!DOCTYPE html>
<html>

<head>
    <!-- Basic -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Digitf</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="public/mainAsset/css/bootstrap.css" />

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="public/mainAsset/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="public/mainAsset/css/responsive.css" rel="stylesheet" />
    @livewireStyles
</head>

<body>
<div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
        <div class="container-fluid" >
            <nav class="navbar navbar-expand-lg custom_nav-container">
                <a class="navbar-brand" href="{{url('/')}}">
                    <img src="public/mainAsset/images/logo.png" alt="" />
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav  ">
                        <li class="nav-item ">
                            <a class="nav-link" href="{{url('/')}}"><p style="color: #218838;   ">Home </p> <span class="sr-only">(current)</span></a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('shop')}}">Shop </a>
                        </li>


                    </ul>
                    <div class="user_option">
                        <a href="{{url('login')}}">
                            <img src="public/mainAsset/images/user.png" alt="">
                            <span>
                  Login/Sign In
                </span>
                        </a>
                        <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                    </div>
                   @if(Auth::user())
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <a href="route('logout')"
                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </a>
                        </form>

                    @endif

                    <div class="user_option">
                        <a href="{{url('login')}}">
                            <img src="public/mainAsset/images/user.png" alt="">
                            <span>
                  Login/Sign In
                </span>
                        </a>
                        <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                            <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
                        </form>
                    </div>
                    @php

                        use Illuminate\Support\Facades\Auth;
                         use App\Models\Cart;
                        if(Auth::user())
                            {
                                 $user_id = Auth::user()->id;
                                $cart = Cart::where('user_id',$user_id)->count();

                            }
                       else{
                           $cart =0;
                       }

                    @endphp
                    @if(Illuminate\Support\Facades\Auth::user())
                        <a href="viewCart"> <h5>cart({{$cart}})</h5></a>
                        @else <a href="login"> <h5>cart({{$cart}})</h5></a>
                        @endif




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

    @yield('slider')
</div>

@yield('main_content')

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

</body>
@livewireScripts
</body>

</html>
