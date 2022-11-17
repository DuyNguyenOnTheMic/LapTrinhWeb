<?php require_once 'includes/compress.php';
require_once 'includes/header.php'; ?>

<?php
// Include the database connection file 
require_once 'config/dbConnect.php';

// Fetch products from the database 
$sqlQ = "SELECT * FROM products";
$stmt = $db->prepare($sqlQ);
$stmt->execute();
$result = $stmt->get_result();
?>

<!-- SLIDER AREA START (slider-6) -->
<div class="ltn__slider-area ltn__slider-3 ltn__slider-6 section-bg-1">
    <div class="ltn__slide-one-active slick-slide-arrow-1 slick-slide-dots-1 arrow-white---">
        <!-- ltn__slide-item  -->
        <div class="ltn__slide-item ltn__slide-item-8 text-color-white---- bg-image bg-overlay-theme-black-80---" data-bs-bg="img/slider/1.jpg">
            <div class="ltn__slide-item-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h1 class="slide-title animated ">Fresh Flower</h1>
                                            <h6 class="slide-sub-title ltn__body-color slide-title-line animated">Natural & Beautiful Flower Here</h6>
                                            <div class="slide-brief animated">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="service.html" class="theme-btn-1 btn btn-round">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="slide-item-img">
                                    <img src="img/slider/41-1.png" alt="#">
                                    <span class="call-to-circle-1"></span>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ltn__slide-item  -->
        <div class="ltn__slide-item ltn__slide-item-8 text-color-white---- bg-image bg-overlay-theme-black-80---" data-bs-bg="img/slider/3.jpg">
            <div class="ltn__slide-item-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h1 class="slide-title animated ">Fresh Flower</h1>
                                            <h6 class="slide-sub-title ltn__body-color slide-title-line animated">Natural & Beautiful Flower Here</h6>
                                            <div class="slide-brief animated">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore.</p>
                                            </div>
                                            <div class="btn-wrapper animated">
                                                <a href="service.html" class="theme-btn-1 btn btn-round">Shop Now</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- <div class="slide-item-img">
                                    <img src="img/slider/41-1.png" alt="#">
                                    <span class="call-to-circle-1"></span>
                                </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--  -->
    </div>
</div>
<!-- SLIDER AREA END -->

<!-- FEATURE AREA START ( Feature - 3) -->
<div class="ltn__feature-area mt-100 mt--65">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__feature-item-box-wrap ltn__feature-item-box-wrap-2 ltn__border section-bg-6 position-relative">
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="img/icons/svg/8-trolley.svg" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Free shipping</h4>
                            <p>On all orders over $49.00</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="img/icons/svg/9-money.svg" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>15 days returns</h4>
                            <p>Moneyback guarantee</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="img/icons/svg/10-credit-card.svg" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Secure checkout</h4>
                            <p>Protected by Paypal</p>
                        </div>
                    </div>
                    <div class="ltn__feature-item ltn__feature-item-8">
                        <div class="ltn__feature-icon">
                            <img src="img/icons/svg/11-gift-card.svg" alt="#">
                        </div>
                        <div class="ltn__feature-info">
                            <h4>Offer & gift here</h4>
                            <p>On all orders over</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FEATURE AREA END -->

<!-- BANNER AREA START -->
<div class="ltn__banner-area  mt-80">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="img/banner/1.jpg" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="img/banner/2.jpg" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="img/banner/3.jpg" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER AREA END -->

<!-- PRODUCT AREA START -->
<div class="ltn__product-area ltn__product-gutter  pt-65 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">new arrival items</h1>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    $proImg = !empty($row["image"]) ? 'img/product/' . $row["image"] : 'images/demo-img.png';
            ?>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item text-center">
                            <div class="card" style="width: 18rem;">
                                <img src="<?php echo $proImg; ?>" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row["name"]; ?></h5>
                                    <h6 class="card-subtitle mb-2 text-muted">Price: <?php echo CURRENCY_SYMBOL . $row["price"] . ' ' . CURRENCY; ?></h6>
                                    <p class="card-text"><?php echo $row["description"]; ?></p>
                                    <a href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" class="btn btn-primary btnAddToCart">Add to Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                <?php }
            } else { ?>
                <p>Product(s) not found.....</p>
            <?php } ?>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="img/product/2.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-1">Hot</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Premium Joyful</a></h2>
                        <div class="product-price">
                            <span>$18.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="img/product/3.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-2">12%</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">The White Rose</a></h2>
                        <div class="product-price">
                            <span>$16.00</span>
                            <del>$19.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="img/product/4.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-1">Hot</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Red Rose Bouquet</a></h2>
                        <div class="product-price">
                            <span>$20.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="img/product/5.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-1">Hot</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Heart's Desire</a></h2>
                        <div class="product-price">
                            <span>$15.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="img/product/6.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-2">15%</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="ltn__product-countdown">
                            <div class="ltn__countdown" data-countdown="2021/12/25"></div>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Assorted Roses</a></h2>
                        <div class="product-price">
                            <span>$17.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="img/product/7.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-1">Hot</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Roses Surprise</a></h2>
                        <div class="product-price">
                            <span>$12.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="img/product/8.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-1">12%</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Tropical Peace Lily</a></h2>
                        <div class="product-price">
                            <span>$14</span>
                            <del>$25.00</del>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
<!-- PRODUCT SLIDER AREA END -->

<!-- BANNER AREA START -->
<div class="ltn__banner-area ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="img/banner/6.jpg" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="img/banner/7.jpg" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER AREA END -->

<!-- PRODUCT SLIDER AREA START -->
<div class="ltn__product-slider-area ltn__product-gutter  pt-60 pb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">top products</h1>
                </div>
            </div>
        </div>
        <div class="row ltn__product-slider-item-four-active slick-arrow-1">
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="img/product/1.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-2">10%</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Pink Flower Tree</a></h2>
                        <div class="product-price">
                            <span>$18.00</span>
                            <del>$21.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="img/product/2.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-1">Hot</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Premium Joyful</a></h2>
                        <div class="product-price">
                            <span>$18.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="img/product/3.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-2">12%</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">The White Rose</a></h2>
                        <div class="product-price">
                            <span>$16.00</span>
                            <del>$19.00</del>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="img/product/4.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-1">Hot</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Red Rose Bouquet</a></h2>
                        <div class="product-price">
                            <span>$20.00</span>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ltn__product-item -->
            <div class="col-12">
                <div class="ltn__product-item text-center">
                    <div class="product-img">
                        <a href="product-details.html"><img src="img/product/5.png" alt="#"></a>
                        <div class="product-badge">
                            <ul>
                                <li class="badge-1">Hot</li>
                            </ul>
                        </div>
                        <div class="product-hover-action product-hover-action-2">
                            <ul>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-magnifier"></i>
                                    </a>
                                </li>
                                <li class="add-to-cart">
                                    <a href="#" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                        <span class="cart-text d-none d-xl-block">Add to Cart</span>
                                        <span class="d-block d-xl-none"><i class="icon-handbag"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" title="Quick View" data-bs-toggle="modal" data-bs-target="#quick_view_modal">
                                        <i class="icon-shuffle"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="product-info">
                        <h2 class="product-title"><a href="product-details.html">Heart's Desire</a></h2>
                        <div class="product-price">
                            <span>$15.00</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- PRODUCT SLIDER AREA END -->

<!-- BANNER AREA START -->
<div class="ltn__banner-area ">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="img/banner/10.jpg" alt="Banner Image"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER AREA END -->

<!-- BLOG AREA START (blog-3) -->
<div class="ltn__blog-area  pt-60 pb-30">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h1 class="section-title section-title-border">latest news</h1>
                </div>
            </div>
        </div>
        <div class="row  ltn__blog-slider-one-active slick-arrow-1">
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/1.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title blog-title-line"><a href="blog-details.html">Lorem ipsum dolor sit amet con adipisicing elit sed </a></h3>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/2.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title blog-title-line"><a href="blog-details.html">Lorem ipsum dolor sit amet con adipisicing elit sed </a></h3>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/3.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title blog-title-line"><a href="blog-details.html">Lorem ipsum dolor sit amet con adipisicing elit sed </a></h3>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/4.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title blog-title-line"><a href="blog-details.html">Lorem ipsum dolor sit amet con adipisicing elit sed </a></h3>
                    </div>
                </div>
            </div>
            <!-- Blog Item -->
            <div class="col-lg-12">
                <div class="ltn__blog-item">
                    <div class="ltn__blog-img">
                        <a href="blog-details.html"><img src="img/blog/5.jpg" alt="#"></a>
                    </div>
                    <div class="ltn__blog-brief">
                        <div class="ltn__blog-meta">
                            <ul>
                                <li class="ltn__blog-author d-none">
                                    <a href="#">by: Admin</a>
                                </li>
                                <li>
                                    <span> Nov 18, 2020</span>
                                </li>
                                <li class="ltn__blog-comment">
                                    <a href="#"><i class="icon-speech"></i> 2</a>
                                </li>
                            </ul>
                        </div>
                        <h3 class="ltn__blog-title blog-title-line"><a href="blog-details.html">Lorem ipsum dolor sit amet con adipisicing elit sed </a></h3>
                    </div>
                </div>
            </div>
            <!--  -->
        </div>
    </div>
</div>
<!-- BLOG AREA END -->

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

<?php require_once 'includes/footer.php'; ?>

<!-- MODAL AREA START (Quick View Modal) -->
<div class="ltn__modal-area ltn__quick-view-modal-area">
    <div class="modal fade" id="quick_view_modal" tabindex="-1">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        <!-- <i class="fas fa-times"></i> -->
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ltn__quick-view-modal-inner">
                        <div class="modal-product-item">
                            <div class="row">
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-img">
                                        <img src="img/product/4.png" alt="#">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-12">
                                    <div class="modal-product-info shop-details-info pl-0">
                                        <h3>Pink Flower Tree Red</h3>
                                        <div class="product-price-ratting mb-20">
                                            <ul>
                                                <li>
                                                    <div class="product-price">
                                                        <span>$49.00</span>
                                                        <del>$65.00</del>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="product-ratting">
                                                        <ul>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li><a href="#"><i class="icon-star"></i></a></li>
                                                            <li class="review-total"> <a href="#"> ( 95 Reviews )</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="modal-product-brief">
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dignissimos repellendus repudiandae incidunt quidem pariatur expedita, quo quis modi tempore non.</p>
                                        </div>
                                        <div class="modal-product-meta ltn__product-details-menu-1 mb-20">
                                            <ul>
                                                <li>
                                                    <div class="ltn__color-widget clearfix">
                                                        <strong class="d-meta-title">Color</strong>
                                                        <ul>
                                                            <li class="theme"><a href="#"></a></li>
                                                            <li class="green-2"><a href="#"></a></li>
                                                            <li class="blue-2"><a href="#"></a></li>
                                                            <li class="white"><a href="#"></a></li>
                                                            <li class="red"><a href="#"></a></li>
                                                            <li class="yellow"><a href="#"></a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="ltn__size-widget clearfix mt-25">
                                                        <strong class="d-meta-title">Size</strong>
                                                        <ul>
                                                            <li><a href="#">S</a></li>
                                                            <li><a href="#">M</a></li>
                                                            <li><a href="#">L</a></li>
                                                            <li><a href="#">XL</a></li>
                                                            <li><a href="#">XXL</a></li>
                                                        </ul>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__product-details-menu-2 product-cart-wishlist-btn mb-30">
                                            <ul>
                                                <li>
                                                    <div class="cart-plus-minus">
                                                        <input type="text" value="02" name="qtybutton" class="cart-plus-minus-box">
                                                    </div>
                                                </li>
                                                <li>
                                                    <a href="#" class="theme-btn-1 btn btn-effect-1 d-add-to-cart" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#add_to_cart_modal">
                                                        <span>ADD TO CART</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#" class="btn btn-effect-1 d-add-to-wishlist" title="Add to Cart" data-bs-toggle="modal" data-bs-target="#liton_wishlist_modal">
                                                        <i class="icon-heart"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__social-media mb-30">
                                            <ul>
                                                <li class="d-meta-title">Share:</li>
                                                <li><a href="#" title="Facebook"><i class="icon-social-facebook"></i></a></li>
                                                <li><a href="#" title="Twitter"><i class="icon-social-twitter"></i></a></li>
                                                <li><a href="#" title="Pinterest"><i class="icon-social-pinterest"></i></a></li>
                                                <li><a href="#" title="Instagram"><i class="icon-social-instagram"></i></a></li>

                                            </ul>
                                        </div>
                                        <div class="modal-product-meta ltn__product-details-menu-1 mb-30 d-none">
                                            <ul>
                                                <li><strong>SKU:</strong> <span>12345</span></li>
                                                <li>
                                                    <strong>Categories:</strong>
                                                    <span>
                                                        <a href="#">Flower</a>
                                                    </span>
                                                </li>
                                                <li>
                                                    <strong>Tags:</strong>
                                                    <span>
                                                        <a href="#">Love</a>
                                                        <a href="#">Flower</a>
                                                        <a href="#">Heart</a>
                                                    </span>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ltn__safe-checkout d-none">
                                            <h5>Guaranteed Safe Checkout</h5>
                                            <img src="img/icons/payment-2.png" alt="Payment Image">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL AREA END -->

<!-- MODAL AREA START (Add To Cart Modal) -->
<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="add_to_cart_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ltn__quick-view-modal-inner">
                        <div class="modal-product-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-add-to-cart-content clearfix">
                                        <div class="modal-product-img">
                                            <img src="img/product/1.png" alt="#">
                                        </div>
                                        <div class="modal-product-info">
                                            <h5><a href="product-details.html">Heart's Desire</a></h5>
                                            <p class="added-cart"><i class="fa fa-check-circle"></i> Successfully added to your Cart</p>
                                            <div class="btn-wrapper">
                                                <a href="cart.php" class="theme-btn-1 btn btn-effect-1">View Cart</a>
                                                <a href="checkout.html" class="theme-btn-2 btn btn-effect-2">Checkout</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- additional-info -->
                                    <div class="additional-info d-none--">
                                        <p>We want to give you <b>10% discount</b> for your first order, <br> Use (fiama10) discount code at checkout</p>
                                        <div class="payment-method">
                                            <img src="img/icons/payment.png" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL AREA END -->

<!-- MODAL AREA START (Wishlist Modal) -->
<div class="ltn__modal-area ltn__add-to-cart-modal-area">
    <div class="modal fade" id="liton_wishlist_modal" tabindex="-1">
        <div class="modal-dialog modal-md" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="ltn__quick-view-modal-inner">
                        <div class="modal-product-item">
                            <div class="row">
                                <div class="col-12">
                                    <div class="modal-product-img">
                                        <img src="img/product/7.png" alt="#">
                                    </div>
                                    <div class="modal-product-info">
                                        <h5><a href="product-details.html">Brake Conversion Kit</a></h5>
                                        <p class="added-cart"><i class="fa fa-check-circle"></i> Successfully added to your Wishlist</p>
                                        <div class="btn-wrapper">
                                            <a href="wishlist.html" class="theme-btn-1 btn btn-effect-1">View Wishlist</a>
                                        </div>
                                    </div>
                                    <!-- additional-info -->
                                    <div class="additional-info d-none">
                                        <p>We want to give you <b>10% discount</b> for your first order, <br> Use discount code at checkout</p>
                                        <div class="payment-method">
                                            <img src="img/icons/payment.png" alt="#">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- MODAL AREA END -->

</div>
<!-- Body main wrapper end -->

<!-- preloader area start -->
<div class="preloader d-none" id="preloader">
    <div class="preloader-inner">
        <div class="spinner">
            <div class="dot1"></div>
            <div class="dot2"></div>
        </div>
    </div>
</div>
<!-- preloader area end -->

<!-- All JS Plugins -->
<script src="js/plugins.js"></script>
<!-- Main JS -->
<script src="js/main.js"></script>
<script>
    $('.btnAddToCart').on('click', function(e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('href'),
        }).done(function(data) {
            location.reload();
        });
    });
</script>

</body>

</html>