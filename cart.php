<?php require_once 'includes/compress.php';
require_once 'includes/header.php'; ?>

<?php
// Include the configuration file 
require_once 'config/config.php';

// Initialize shopping cart class 
include_once 'Cart.class.php';
$cart = new Cart;
?>

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
                                <?php
                                if ($cart->total_items() > 0) {
                                    // Get cart items from session 
                                    $cartItems = $cart->contents();
                                    foreach ($cartItems as $item) {
                                        $proImg = !empty($item["image"]) ? 'img/product/' . $item["image"] : 'images/demo-img.png';
                                ?>
                                        <tr width="450px">
                                            <td width="50px" class="cart-product-remove" onclick="return confirm('Are you sure to remove cart item?')?window.location.href='cartAction.php?action=removeCartItem&id=<?php echo $item["rowid"]; ?>':false;" title="Remove Item">x</td>
                                            <td width="100px" class="cart-product-image">
                                                <a href="product-details.html"><img src="<?php echo $proImg; ?>" alt="#"></a>
                                            </td>
                                            <td width="100px" class="cart-product-info">
                                                <h4><a href="product-details.html"><?php echo $item["name"]; ?></a></h4>
                                            </td>
                                            <td width="100px" class="cart-product-price"><?php echo CURRENCY_SYMBOL . $item["price"] . ' ' . CURRENCY; ?></td>
                                            <td width="200px" class="cart-product-quantity">
                                                <input class="form-control text-center" name="quantity" type="text" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')" />
                                            </td>
                                            <td width="100px" class="cart-product-subtotal"><?php echo CURRENCY_SYMBOL . $item["subtotal"] . ' ' . CURRENCY; ?></td>
                                        </tr>
                                    <?php }
                                } else { ?>
                                    <tr>
                                        <td colspan="6">
                                            <p>Your cart is empty.....</p>
                                        </td>
                                    <?php } ?>
                                    <?php if ($cart->total_items() > 0) { ?>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td><strong>Cart Total</strong></td>
                                        <td><strong><?php echo CURRENCY_SYMBOL . $cart->total() . ' ' . CURRENCY; ?></strong></td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.0/jquery.bootstrap-touchspin.min.js"></script>
<script>
    $("input[name='quantity']").TouchSpin({
        min: 0,
        max: 100
    });

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