<?php
// Include the configuration file 
require_once 'config/config.php';

// Initialize shopping cart class 
include_once 'Cart.class.php';
$cart = new Cart;
?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Fiama - Flower Shop eCommerce HTML Template - shared on themelock.com</title>
    <meta name="robots" content="noindex, follow" />
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Place favicon.png in the root directory -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/x-icon" />
    <!-- Font Icons css -->
    <link rel="stylesheet" href="css/font-icons.css">
    <!-- plugins css -->
    <link rel="stylesheet" href="css/plugins.css">
    <!-- Main Stylesheet -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Add your site or application content here -->

    <!-- Body main wrapper start -->
    <div class="body-wrapper">

        <!-- HEADER AREA START (header-3) -->
        <header class="ltn__header-area ltn__header-3 section-bg-6">
            <!-- ltn__header-middle-area start -->
            <div class="ltn__header-middle-area">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="site-logo">
                                <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
                            </div>
                        </div>
                        <div class="col header-contact-serarch-column d-none d-xl-block">
                            <div class="header-contact-search">
                                <!-- header-feature-item -->
                                <div class="header-feature-item">
                                    <div class="header-feature-icon">
                                        <i class="icon-phone"></i>
                                    </div>
                                    <div class="header-feature-info">
                                        <h6>Phone</h6>
                                        <p><a href="tel:0123456789">+0123-456-789</a></p>
                                    </div>
                                </div>
                                <!-- header-search-2 -->
                                <div class="header-search-2">
                                    <form id="#123" method="get" action="#">
                                        <input type="text" name="search" value="" placeholder="Search here..." />
                                        <button type="submit">
                                            <span><i class="icon-magnifier"></i></span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="ltn__header-options">
                                <ul>
                                    <li class="d-none">
                                        <!-- ltn__currency-menu -->
                                        <div class="ltn__drop-menu ltn__currency-menu">
                                            <ul>
                                                <li><a href="#" class="dropdown-toggle"><span class="active-currency">USD</span></a>
                                                    <ul>
                                                        <li><a href="login.html">USD - US Dollar</a></li>
                                                        <li><a href="wishlist.html">CAD - Canada Dollar</a></li>
                                                        <li><a href="register.html">EUR - Euro</a></li>
                                                        <li><a href="account.html">GBP - British Pound</a></li>
                                                        <li><a href="wishlist.html">INR - Indian Rupee</a></li>
                                                        <li><a href="wishlist.html">BDT - Bangladesh Taka</a></li>
                                                        <li><a href="wishlist.html">JPY - Japan Yen</a></li>
                                                        <li><a href="wishlist.html">AUD - Australian Dollar</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="d-none">
                                        <!-- header-search-1 -->
                                        <div class="header-search-wrap">
                                            <div class="header-search-1">
                                                <div class="search-icon">
                                                    <i class="icon-magnifier  for-search-show"></i>
                                                    <i class="icon-magnifier-remove  for-search-close"></i>
                                                </div>
                                            </div>
                                            <div class="header-search-1-form">
                                                <form id="#" method="get" action="#">
                                                    <input type="text" name="search" value="" placeholder="Search here..." />
                                                    <button type="submit">
                                                        <span><i class="icon-magnifier"></i></span>
                                                    </button>
                                                </form>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="d-none">
                                        <!-- user-menu -->
                                        <div class="ltn__drop-menu user-menu">
                                            <ul>
                                                <li>
                                                    <a href="#"><i class="icon-user"></i></a>
                                                    <ul>
                                                        <li><a href="login.html">Sign in</a></li>
                                                        <li><a href="register.html">Register</a></li>
                                                        <li><a href="account.html">My Account</a></li>
                                                        <li><a href="wishlist.html">Wishlist</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- mini-cart 2 -->
                                        <div class="mini-cart-icon mini-cart-icon-2">
                                            <a href="#ltn__utilize-cart-menu" class="ltn__utilize-toggle">
                                                <span class="mini-cart-icon">
                                                    <i class="icon-handbag"></i>
                                                    <sup>2</sup>
                                                </span>
                                                <h6><span>Your Cart</span> <span class="ltn__secondary-color">$89.25</span></h6>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <!-- Mobile Menu Button -->
                                        <div class="mobile-menu-toggle d-lg-none">
                                            <a href="#ltn__utilize-mobile-menu" class="ltn__utilize-toggle">
                                                <svg viewBox="0 0 800 600">
                                                    <path d="M300,220 C300,220 520,220 540,220 C740,220 640,540 520,420 C440,340 300,200 300,200" id="top"></path>
                                                    <path d="M300,320 L540,320" id="middle"></path>
                                                    <path d="M300,210 C300,210 520,210 540,210 C740,210 640,530 520,410 C440,330 300,190 300,190" id="bottom" transform="translate(480, 320) scale(1, -1) translate(-480, -318) "></path>
                                                </svg>
                                            </a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__header-middle-area end -->

            <!-- header-bottom-area start -->
            <div class="header-bottom-area ltn__border-top ltn__header-sticky  ltn__sticky-bg-white ltn__primary-bg---- menu-color-white---- d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col header-menu-column justify-content-center">
                            <div class="sticky-logo">
                                <div class="site-logo">
                                    <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
                                </div>
                            </div>
                            <div class="header-menu header-menu-2">
                                <nav>
                                    <div class="ltn__main-menu">
                                        <ul>
                                            <li class="menu-icon"><a href="#">Home</a>
                                                <ul>
                                                    <li><a href="index.html">Home Style - 01</a></li>
                                                    <li><a href="index-2.html">Home Style - 02</a></li>
                                                    <li><a href="index-3.html">Home Style - 03</a></li>
                                                    <li><a href="index-4.html">Home Style - 04</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-icon"><a href="#">Pages</a>
                                                <ul class="mega-menu">
                                                    <li><a href="#">Inner Pages</a>
                                                        <ul>
                                                            <li><a href="about.html">About Us</a></li>
                                                            <li><a href="portfolio.html">Portfolio</a></li>
                                                            <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                                            <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                            <li><a href="faq.html">FAQ</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Inner Pages</a>
                                                        <ul>
                                                            <li><a href="locations.html">Google Map Locations</a></li>
                                                            <li><a href="404.html">404</a></li>
                                                            <li><a href="contact.html">Contact</a></li>
                                                            <li><a href="coming-soon.html">Coming Soon</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Shop Pages</a>
                                                        <ul>
                                                            <li><a href="shop.html">Shop</a></li>
                                                            <li><a href="shop-grid.html">Shop Grid</a></li>
                                                            <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                                            <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                                                            <li><a href="product-details.html">Shop details </a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">Blog Pages</a>
                                                        <ul>
                                                            <li><a href="blog.html">News</a></li>
                                                            <li><a href="blog-grid.html">News Grid</a></li>
                                                            <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                                                            <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                                                            <li><a href="blog-details.html">News details</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-icon"><a href="#">Shop</a>
                                                <ul>
                                                    <li><a href="shop.html">Shop</a></li>
                                                    <li><a href="shop-grid.html">Shop Grid</a></li>
                                                    <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                                    <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                                                    <li><a href="product-details.html">Shop details </a></li>
                                                    <li><a href="#">Other Pages <span class="float-right">>></span></a>
                                                        <ul>
                                                            <li><a href="cart.html">Cart</a></li>
                                                            <li><a href="wishlist.html">Wishlist</a></li>
                                                            <li><a href="checkout.html">Checkout</a></li>
                                                            <li><a href="order-tracking.html">Order Tracking</a></li>
                                                            <li><a href="account.html">My Account</a></li>
                                                            <li><a href="login.html">Sign in</a></li>
                                                            <li><a href="register.html">Register</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="menu-icon"><a href="#">Portfolio</a>
                                                <ul>
                                                    <li><a href="portfolio.html">Portfolio</a></li>
                                                    <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                                    <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                                </ul>
                                            </li>
                                            <li class="menu-icon"><a href="#">News</a>
                                                <ul>
                                                    <li><a href="blog.html">News</a></li>
                                                    <li><a href="blog-grid.html">News Grid</a></li>
                                                    <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                                                    <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                                                    <li><a href="blog-details.html">News details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-bottom-area end -->
        </header>
        <!-- HEADER AREA END -->

        <!-- Utilize Cart Menu Start -->
        <div id="ltn__utilize-cart-menu" class="ltn__utilize ltn__utilize-cart-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <span class="ltn__utilize-menu-title">Cart</span>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="mini-cart-product-area ltn__scrollbar">
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="img/product/1.png" alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-trash"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">Premium Joyful</a></h6>
                            <span class="mini-cart-quantity">1 x $65.00</span>
                        </div>
                    </div>
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="img/product/2.png" alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-trash"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">The White Rose</a></h6>
                            <span class="mini-cart-quantity">1 x $85.00</span>
                        </div>
                    </div>
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="img/product/3.png" alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-trash"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">Red Rose Bouquet</a></h6>
                            <span class="mini-cart-quantity">1 x $92.00</span>
                        </div>
                    </div>
                    <div class="mini-cart-item clearfix">
                        <div class="mini-cart-img">
                            <a href="#"><img src="img/product/4.png" alt="Image"></a>
                            <span class="mini-cart-item-delete"><i class="icon-trash"></i></span>
                        </div>
                        <div class="mini-cart-info">
                            <h6><a href="#">Pink Flower Tree</a></h6>
                            <span class="mini-cart-quantity">1 x $68.00</span>
                        </div>
                    </div>
                </div>
                <div class="mini-cart-footer">
                    <div class="mini-cart-sub-total">
                        <h5>Subtotal: <span>$310.00</span></h5>
                    </div>
                    <div class="btn-wrapper">
                        <a href="cart.html" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                        <a href="cart.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                    </div>
                    <p>Free Shipping on All Orders Over $100!</p>
                </div>

            </div>
        </div>
        <!-- Utilize Cart Menu End -->

        <!-- Utilize Mobile Menu Start -->
        <div id="ltn__utilize-mobile-menu" class="ltn__utilize ltn__utilize-mobile-menu">
            <div class="ltn__utilize-menu-inner ltn__scrollbar">
                <div class="ltn__utilize-menu-head">
                    <div class="site-logo">
                        <a href="index.html"><img src="img/logo.png" alt="Logo"></a>
                    </div>
                    <button class="ltn__utilize-close">×</button>
                </div>
                <div class="ltn__utilize-menu-search-form">
                    <form action="#">
                        <input type="text" placeholder="Search...">
                        <button><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <div class="ltn__utilize-menu">
                    <ul>
                        <li><a href="#">Home</a>
                            <ul class="sub-menu">
                                <li><a href="index.html">Home Style - 01</a></li>
                                <li><a href="index-2.html">Home Style - 02</a></li>
                                <li><a href="index-3.html">Home Style - 03</a></li>
                                <li><a href="index-4.html">Home Style - 04</a></li>
                            </ul>
                        </li>
                        <li><a href="about.html">About Us</a></li>
                        <li><a href="#">Shop</a>
                            <ul class="sub-menu">
                                <li><a href="shop.html">Shop</a></li>
                                <li><a href="shop-grid.html">Shop Grid</a></li>
                                <li><a href="shop-left-sidebar.html">Shop Left sidebar</a></li>
                                <li><a href="shop-right-sidebar.html">Shop right sidebar</a></li>
                                <li><a href="product-details.html">Shop details </a></li>
                                <li><a href="cart.html">Cart</a></li>
                                <li><a href="wishlist.html">Wishlist</a></li>
                                <li><a href="checkout.html">Checkout</a></li>
                                <li><a href="order-tracking.html">Order Tracking</a></li>
                                <li><a href="account.html">My Account</a></li>
                                <li><a href="login.html">Sign in</a></li>
                                <li><a href="register.html">Register</a></li>
                            </ul>
                        </li>
                        <li><a href="#">News</a>
                            <ul class="sub-menu">
                                <li><a href="blog.html">News</a></li>
                                <li><a href="blog-grid.html">News Grid</a></li>
                                <li><a href="blog-left-sidebar.html">News Left sidebar</a></li>
                                <li><a href="blog-right-sidebar.html">News Right sidebar</a></li>
                                <li><a href="blog-details.html">News details</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Pages</a>
                            <ul class="sub-menu">
                                <li><a href="about.html">About Us</a></li>
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio-2.html">Portfolio - 02</a></li>
                                <li><a href="portfolio-details.html">Portfolio Details</a></li>
                                <li><a href="faq.html">FAQ</a></li>
                                <li><a href="locations.html">Google Map Locations</a></li>
                                <li><a href="404.html">404</a></li>
                                <li><a href="contact.html">Contact</a></li>
                                <li><a href="coming-soon.html">Coming Soon</a></li>
                            </ul>
                        </li>
                        <li><a href="contact.html">Contact</a></li>
                    </ul>
                </div>
                <div class="ltn__utilize-buttons ltn__utilize-buttons-2">
                    <ul>
                        <li>
                            <a href="account.html" title="My Account">
                                <span class="utilize-btn-icon">
                                    <i class="icon-user"></i>
                                </span>
                                My Account
                            </a>
                        </li>
                        <li>
                            <a href="wishlist.html" title="Wishlist">
                                <span class="utilize-btn-icon">
                                    <i class="icon-heart"></i>
                                    <sup>3</sup>
                                </span>
                                Wishlist
                            </a>
                        </li>
                        <li>
                            <a href="cart.html" title="Shoping Cart">
                                <span class="utilize-btn-icon">
                                    <i class="icon-handbag"></i>
                                    <sup>5</sup>
                                </span>
                                Shoping Cart
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="ltn__social-media-2">
                    <ul>
                        <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                        <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                        <li><a href="#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                        <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Utilize Mobile Menu End -->

        <div class="ltn__utilize-overlay"></div>

        <!-- BREADCRUMB AREA START -->
        <div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ltn__breadcrumb-inner text-center">
                            <h1 class="ltn__page-title">Cart</h1>
                            <div class="ltn__breadcrumb-list">
                                <ul>
                                    <li><a href="index.html">Home</a></li>
                                    <li>Cart</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMB AREA END -->

        <!-- SHOPING CART AREA START -->
        <div class="liton__shoping-cart-area mb-100">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="shoping-cart-inner">
                            <div class="shoping-cart-table table-responsive">
                                <table class="table">
                                    <!-- <thead>
                                    <th class="cart-product-remove">Remove</th>
                                    <th class="cart-product-image">Image</th>
                                    <th class="cart-product-info">Product</th>
                                    <th class="cart-product-price">Price</th>
                                    <th class="cart-product-quantity">Quantity</th>
                                    <th class="cart-product-subtotal">Subtotal</th>
                                </thead> -->
                                    <tbody>
                                        <tr>
                                            <td class="cart-product-remove">x</td>
                                            <td class="cart-product-image">
                                                <a href="product-details.html"><img src="img/product/1.png" alt="#"></a>
                                            </td>
                                            <td class="cart-product-info">
                                                <h4><a href="product-details.html">Brake Conversion Kit</a></h4>
                                            </td>
                                            <td class="cart-product-price">$149.00</td>
                                            <td class="cart-product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </td>
                                            <td class="cart-product-subtotal">$298.00</td>
                                        </tr>
                                        <tr>
                                            <td class="cart-product-remove">x</td>
                                            <td class="cart-product-image">
                                                <a href="product-details.html"><img src="img/product/2.png" alt="#"></a>
                                            </td>
                                            <td class="cart-product-info">
                                                <h4><a href="product-details.html">OE Replica Wheels</a></h4>
                                            </td>
                                            <td class="cart-product-price">$85.00</td>
                                            <td class="cart-product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </td>
                                            <td class="cart-product-subtotal">$170.00</td>
                                        </tr>
                                        <tr>
                                            <td class="cart-product-remove">x</td>
                                            <td class="cart-product-image">
                                                <a href="product-details.html"><img src="img/product/3.png" alt="#"></a>
                                            </td>
                                            <td class="cart-product-info">
                                                <h4><a href="product-details.html">Wheel Bearing Retainer</a></h4>
                                            </td>
                                            <td class="cart-product-price">$75.00</td>
                                            <td class="cart-product-quantity">
                                                <div class="cart-plus-minus">
                                                    <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                </div>
                                            </td>
                                            <td class="cart-product-subtotal">$150.00</td>
                                        </tr>
                                        <tr class="cart-coupon-row">
                                            <td colspan="6">
                                                <div class="cart-coupon">
                                                    <input type="text" name="cart-coupon" placeholder="Coupon code">
                                                    <button type="submit" class="btn theme-btn-2 btn-effect-2">Apply Coupon</button>
                                                </div>
                                            </td>
                                            <td>
                                                <button type="submit" class="btn theme-btn-2 btn-effect-2-- disabled">Update Cart</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="shoping-cart-total mt-50">
                                <h4>Cart Totals</h4>
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Cart Subtotal</td>
                                            <td>$618.00</td>
                                        </tr>
                                        <tr>
                                            <td>Shipping and Handing</td>
                                            <td>$15.00</td>
                                        </tr>
                                        <tr>
                                            <td>Vat</td>
                                            <td>$00.00</td>
                                        </tr>
                                        <tr>
                                            <td><strong>Order Total</strong></td>
                                            <td><strong>$633.00</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <div class="btn-wrapper text-right">
                                    <a href="checkout.html" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- SHOPING CART AREA END -->

        <!-- BRAND LOGO AREA START -->
        <div class="ltn__brand-logo-area  ltn__brand-logo-1 section-bg-1 pt-35 pb-35 plr--5">
            <div class="container-fluid">
                <div class="row ltn__brand-logo-active">
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/1.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/2.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/3.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/4.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/5.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/1.png" alt="Brand Logo">
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="ltn__brand-logo-item">
                            <img src="img/brand-logo/2.png" alt="Brand Logo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BRAND LOGO AREA END -->

        <!-- FOOTER AREA START -->
        <footer class="ltn__footer-area ">
            <div class="footer-top-area  section-bg-5">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">My Accoout</h4>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="account.html">My account</a></li>
                                        <li><a href="checkout.html">Checkout</a></li>
                                        <li><a href="contact.html">Contact us</a></li>
                                        <li><a href="cart.html">Shopping Cart</a></li>
                                        <li><a href="wishlist.html">Wishlist</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Quick Links</h4>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="locations.html">Store Location</a></li>
                                        <li><a href="order-tracking.html">Orders Tracking</a></li>
                                        <li><a href="product-details.html">Size Guide</a></li>
                                        <li><a href="account.html">My account</a></li>
                                        <li><a href="faq.html">FAQs</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Information</h4>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="contact.html">Privacy Page</a></li>
                                        <li><a href="about.html">About us</a></li>
                                        <li><a href="contact.html">Careers</a></li>
                                        <li><a href="faq.html">Delivery Inforamtion</a></li>
                                        <li><a href="contact.html">Term & Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-menu-widget clearfix">
                                <h4 class="footer-title">Customer Service</h4>
                                <div class="footer-menu">
                                    <ul>
                                        <li><a href="product-details.html">Shipping Policy</a></li>
                                        <li><a href="contact.html">Help & Contact Us</a></li>
                                        <li><a href="account.html">Returns & Refunds</a></li>
                                        <li><a href="shop.html">Online Stores</a></li>
                                        <li><a href="contact.html">Terms and Conditions</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-md-6 col-sm-6 col-12">
                            <div class="footer-widget footer-about-widget">
                                <h4 class="footer-title">About Our Shop</h4>
                                <div class="footer-logo d-none">
                                    <div class="site-logo">
                                        <img src="img/logo.png" alt="Logo">
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmo incididunt ut labore et dolore</p>
                                <div class="footer-address">
                                    <ul>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-location-pin"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p>Brooklyn, New York, United States</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-phone"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><a href="tel:+0123-456789">+0123-456789</a></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="footer-address-icon">
                                                <i class="icon-envelope"></i>
                                            </div>
                                            <div class="footer-address-info">
                                                <p><a href="mailto:example@example.com">example@example.com</a></p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ltn__social-media mt-20 d-none">
                                    <ul>
                                        <li><a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#" title="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a href="#" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                                    </ul>
                                </div>
                                <div class="footer-payment-img">
                                    <img src="img/icons/payment-6.png" alt="Payment Image">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ltn__copyright-area ltn__copyright-2 section-bg-5">
                <div class="container ltn__border-top-2">
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="footer-copyright-left">
                                <div class="ltn__copyright-design clearfix">
                                    <p>&copy; <span class="current-year"></span> - Just For You</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 col-12 align-self-center">
                            <div class="footer-copyright-right text-right">
                                <div class="ltn__copyright-menu d-none">
                                    <ul>
                                        <li><a href="#">Terms & Conditions</a></li>
                                        <li><a href="#">Claim</a></li>
                                        <li><a href="#">Privacy & Policy</a></li>
                                    </ul>
                                </div>
                                <div class="ltn__social-media ">
                                    <ul>
                                        <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                                        <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                                        <li><a href="#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                                        <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- FOOTER AREA END -->

    </div>
    <!-- Body main wrapper end -->

    <!-- All JS Plugins -->
    <script src="js/plugins.js"></script>
    <!-- Main JS -->
    <script src="js/main.js"></script>
    <script>
        function updateCartItem(obj, id) {
            $.get("cartAction.php", {
                action: "updateCartItem",
                id: id,
                qty: obj.value
            }, function(data) {
                if (data == 'ok') {
                    location.reload();
                } else {
                    alert('Cart update failed, please try again.');
                }
            });
        }
    </script>

</body>

</html>