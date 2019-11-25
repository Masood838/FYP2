
<?php 

include 'workspace/admin/pannel/dbconnect.php';


?>
<!doctype html>
<html class="no-js" lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Pak Saqafat - Ecommerce Store</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <!-- CSS 
    ========================= -->

    <!-- Plugins CSS -->
    <link rel="stylesheet" href="assets/css/plugins.css">

    <!-- Main Style CSS -->
    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body>

    <!--Offcanvas menu area start-->
    <div class="off_canvars_overlay"></div>
    <div class="Offcanvas_menu">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="canvas_open">
                        <a href="javascript:void(0)"><i class="ion-navicon"></i></a>
                    </div>
                    <div class="Offcanvas_menu_wrapper">
                        <div class="canvas_close">
                            <a href="javascript:void(0)"><i class="ion-android-close"></i></a>
                        </div>
                        <div class="antomi_message">
                           
                        </div>
                        <div class="header_top_settings text-right">
                            <ul>
                                <li><a href="#">Store Locations</a></li>
                                <li><a href="#">Track Your Order</a></li>
                               
                            </ul>
                        </div>

                        <div class="search_container">
                            <form action="#">

                                <div class="search_box">
                                    <input placeholder="Search product..." type="text">
                                    <button type="submit">Search</button>
                                </div>
                            </form>
                        </div>
                        <div id="menu" class="text-left ">
                            <ul class="offcanvas_main_menu">
                                <li class="menu-item-has-children active">
                                    <a href="index.php">Home</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">New Arrival</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Shop</a>

                                </li>
                                <li class="menu-item-has-children">
                                    <a href="about.php">About Us</a>

                                </li>

                                <li

                                <li class="menu-item-has-children">
                                    <a href=""> Contact Us</a>
                                </li>
                            </ul>
                        </div>
                        <div class="Offcanvas_footer">
                            <span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
                            <ul>
                                <li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
                                <li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Offcanvas menu area end-->
    <!--header area start-->
    <header>
        <div class="main_header">
            <div class="container">
                <!--header top start-->
                <div class="header_top">
                    <div class="row align-items-center">
                        <div class="col-lg-4 col-md-5">
                            <div class="antomi_message">
                              
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-7">
                            <div class="header_top_settings text-right">
                                <ul>
                                    <li><a href="#">Store Locations</a></li>
                                    <li><a href="#">Track Your Order</a></li>
                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header top start-->

                <!--header middel start-->
                <div class="header_middle sticky-header">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-md-6">
                            <div class="logo">
                                <a href="index.php"><img src="data:image/jpeg;base64,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" alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-12">
                            <div class="main_menu menu_position text-center">
                                <nav>
                                    <ul>
                                        <li><a href="index.php">home</a>

                                        </li>
                                        <li class="mega_items"><a href="">New Arrival</a>

                                        </li>
                                        <li class="mega_items"><a href="">shop</a>

                                        </li>


                                        <li><a href="about.php">About Us</a></li>
                                        <li><a href=""> Contact Us</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="header_configure_area">

                                <div class="mini_cart_wrapper">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-shopping-bag"></i>
                                        <span class="cart_price">$152.00 <i class="ion-ios-arrow-down"></i></span>
                                        <span class="cart_count">2</span>

                                    </a>
                                    <!--mini cart-->
                                    <div class="mini_cart">
                                        <div class="mini_cart_inner">


                                            <div class="mini_cart_table">
                                                <div class="cart_total">
                                                    <span>Sub total:</span>
                                                    <span class="price">$138.00</span>
                                                </div>
                                                <div class="cart_total mt-10">
                                                    <span>total:</span>
                                                    <span class="price">$138.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini_cart_footer">
                                            <div class="cart_button">
                                                <a href="">View cart</a>
                                            </div>
                                            <div class="cart_button">
                                                <a href="">Checkout</a>
                                            </div>

                                        </div>
                                    </div>
                                    <!--mini cart end-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header middel end-->


            </div>
        </div>
    </header>