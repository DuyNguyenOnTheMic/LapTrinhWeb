<?php
// include header
require_once 'includes/header.php';

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
        <div class="ltn__slide-item ltn__slide-item-8 text-color-white---- bg-image bg-overlay-theme-black-80---" data-bs-bg="img/banner/coverr.jpg" style="background-size: 100% 175%;">
            <div class="ltn__slide-item-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 align-self-center">
                            <div class="slide-item-info">
                                <div class="slide-item-info-inner ltn__slide-animation">
                                    <div class="slide-item-info">
                                        <div class="slide-item-info-inner ltn__slide-animation">
                                            <h1 class="slide-title animated ">Big sale</h1>
                                            <h6 class="slide-sub-title ltn__body-color slide-title-line animated">Year end big sale is coming... 😍</h6>
                                            <div class="slide-brief animated">
                                                <p>Black friday is coming, don't forget to get huge discounts from Laptopnganngo 🥳</p>
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
        <div class="ltn__slide-item ltn__slide-item-8 text-color-white---- bg-image bg-overlay-theme-black-80---" data-bs-bg="img/banner/coverr.jpg" style="background-size: 100% 175%;">
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
                        <a href="shop.html"><img src="admin/images/banner1.gif" alt="Banner Image" width="494" height="250"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="admin/images/banner2.gif" alt="Banner Image" width="494" height="250"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="admin/images/banner3.gif" alt="Banner Image" width="494" height="250"></a>
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
                    $proImg = !empty($row["image"]) ? 'admin/images/' . $row["image"] : 'images/demo-img.png';
            ?>
                    <!-- ltn__product-item -->
                    <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                        <div class="ltn__product-item text-center">
                            <div class="product-img">
                                <a href="product-details.html"><img src="<?php echo $proImg; ?>" height="200" alt="image"></a>
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
                                            <a class="btnAddToCart" href="cartAction.php?action=addToCart&id=<?php echo $row["id"]; ?>" title="Add to Cart">
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
                                <h2 class="product-title"><a href="product-details.html"><?php echo $row["name"]; ?></a></h2>
                                <div class="product-price">
                                    <span><?php echo  number_format($row["price"]) . ' ' . CURRENCY; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ltn__product-item -->
                <?php }
            } else { ?>
                <p>Product(s) not found.....</p>
            <?php } ?>
        </div>
    </div>
</div>

<!-- BANNER AREA START -->
<div class="ltn__banner-area ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="img/banner/cover2.webp" alt="Banner Image" width="650" height="283"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ltn__banner-item">
                    <div class="ltn__banner-img">
                        <a href="shop.html"><img src="img/banner/banner5.gif" alt="Banner Image" width="650" height="283"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BANNER AREA END -->

<?php require_once 'includes/footer.php'; ?>