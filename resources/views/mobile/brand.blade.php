<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>pomato</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <!-- owl stylesheets -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">

            <div class="container">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                        <div class="full">
                            <div class="center-desk">
                                <div class="logo">
                                    <a href="index.html"><img src="images/logo.png" alt="#"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                        <div class="menu-area">
                            <div class="limit-box">
                                <nav class="main-menu">
                                    <ul class="menu-area-main">
                                        <li class="active"> <a href="/mobile/index">Home</a> </li>
                                        <li><a href="/mobile/about">About</a> </li>
                                        <li><a href="/mobile/brand">Brand</a></li>
                                        <li><a href="/mobile/special">Specials</a></li>
                                        <li><a href="/mobile/contact">Contact Us</a></li>
                                        {{-- <li class="last">
                                            <a href="#"><img src="images/search_icon.png" alt="icon" /></a>
                                        </li> --}}
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 offset-md-6">
                        <div class="location_icon_bottum">
                            <ul>
                                @foreach($addresses as $address)
                                <li><img src="{{asset('mobile/icon/call.png')}}" />{{$address->phone}}</li>
                                <li><img src="{{asset('mobile/icon/email.png')}}" />{{$address->email}}</li>
                                <li><img src="{{asset('mobile/icon/loc.png')}}" />Location</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end header inner -->
    </header>
    <!-- end header -->
    <div class="brand_color">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Our Brand</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- brand -->
    <div class="brand">
        <div class="container">

        </div>
        <div class="brand-bg">
            <div class="container">
                <div class="row">
                    @foreach ($products as $product)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                        <div class="brand_box">
                            <img src="../images/{{$product->image}}" alt="img" />
                            <h3><strong class="red">{{$product->Price}}</strong> $</h3>
                            <span>{{$product->Name}}</span>
                            <i><img src="{{asset('mobile/images/star.png')}}"/></i>
                            <i><img src="{{asset('mobile/images/star.png')}}"/></i>
                            <i><img src="{{asset('mobile/images/star.png')}}"/></i>
                            <i><img src="{{asset('mobile/images/star.png')}}"/></i>
                        </div>
                    </div>
                    @endforeach
                    <div class="col-md-12" style="display: none">
                        <a class="read-more">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- end brand -->

    <!-- footer -->
    <footer>
        <div id="contact" class="footer">
            <div class="container">
                <div class="row pdn-top-30">
                    <div class="col-md-12 ">
                        <div class="footer-box">
                            <div class="headinga">
                                <h3>Address</h3>
                                @foreach($addresses as $address)
                                <span>{{$address->country}}, {{$address->city}}, {{$address->street}}, {{$address->area}}.</span>
                                <p>Phone: {{$address->phone}}<br>{{$address->email}}</p>
                                @endforeach
                            </div>
                            <ul class="location_icon">
                                @foreach($social as $socials)
                                <li> <a href="{{$socials->Facebook}}"><i class="fa fa-facebook-f"></i></a></li>
                                <li> <a href="{{$socials->Twiter}}"><i class="fa fa-twitter"></i></a></li>
                                <li> <a href="{{$socials->Instagram}}"><i class="fa fa-instagram"></i></a></li>
                                <li> <a href="{{$socials->Whatsapp}}"><i class="fa fa-whatsapp"></i></a></li>
                                @endforeach
                            </ul>
                            <div class="menu-bottom">
                                <ul class="link">
                                    <li><a href="/mobile/about">About</a> </li>
                                    <li><a href="/mobile/brand">Brand</a></li>
                                    <li><a href="/mobile/special">Specials</a></li>
                                    <li><a href="/mobile/contact">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright">
                <div class="container">
                    <p>© 2019 All Rights Reserved. Design By<a href="https://html.design/"> Free Html Templates</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <!-- javascript -->
    <script src="js/owl.carousel.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function() {

                $(this).addClass('transition');
            }, function() {

                $(this).removeClass('transition');
            });
        });
    </script>
</body>

</html>