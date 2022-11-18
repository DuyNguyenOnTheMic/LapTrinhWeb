<?php
// include header
require_once 'includes/header.php';

// Include the configuration file 
require_once 'config/config.php';

// Initialize shopping cart class 
include_once 'Cart.class.php';
$cart = new Cart;

// If the cart is empty, redirect to the products page 
if ($cart->total_items() <= 0) {
    header("Location: index.php");
}

// Get posted form data from session 
$postData = !empty($_SESSION['postData']) ? $_SESSION['postData'] : array();
unset($_SESSION['postData']);

// Get status message from session 
$sessData = !empty($_SESSION['sessData']) ? $_SESSION['sessData'] : '';
if (!empty($sessData['status']['msg'])) {
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>

<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Checkout</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Checkout</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->

<!-- WISHLIST AREA START -->
<div class="ltn__checkout-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__checkout-inner">
                    <div class="ltn__checkout-single-content ltn__returning-customer-wrap">
                        <h5>Returning customer? <a class="ltn__secondary-color" href="#ltn__returning-customer-login" data-bs-toggle="collapse">Click here to login</a></h5>
                        <div id="ltn__returning-customer-login" class="collapse ltn__checkout-single-content-info">
                            <div class="ltn_coupon-code-form ltn__form-box">
                                <p>Please login your accont.</p>
                                <form action="#">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="input-item input-item-name ltn__custom-icon">
                                                <input type="text" name="ltn__name" placeholder="Enter your name">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="input-item input-item-email ltn__custom-icon">
                                                <input type="email" name="ltn__email" placeholder="Enter email address">
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase">Login</button>
                                    <label class="input-info-save mb-0"><input type="checkbox" name="agree"> Remember me</label>
                                    <p class="mt-30"><a href="register.html">Lost your password?</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__checkout-single-content ltn__coupon-code-wrap">
                        <h5>Have a coupon? <a class="ltn__secondary-color" href="#ltn__coupon-code" data-bs-toggle="collapse">Click here to enter your code</a></h5>
                        <div id="ltn__coupon-code" class="collapse ltn__checkout-single-content-info">
                            <div class="ltn__coupon-code-form">
                                <p>If you have a coupon code, please apply it below.</p>
                                <form action="#">
                                    <input type="text" name="coupon-code" placeholder="Coupon code">
                                    <button class="btn theme-btn-2 btn-effect-2 text-uppercase">Apply Coupon</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__checkout-single-content mt-50">
                        <h4 class="title-2">Billing Details</h4>
                        <div class="ltn__checkout-single-content-info">
                            <form method="POST">
                                <h6>Personal Information</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <input type="text" name="first_name" value="<?php echo !empty($postData['first_name']) ? $postData['first_name'] : ''; ?>" placeholder="First name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <input type="text" name="last_name" value="<?php echo !empty($postData['last_name']) ? $postData['last_name'] : ''; ?>" placeholder="Last name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-email ltn__custom-icon">
                                            <input type="email" name="email" value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>" placeholder="email address">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="input-item input-item-phone ltn__custom-icon">
                                            <input type="text" name="phone" value="<?php echo !empty($postData['phone']) ? $postData['phone'] : ''; ?>" placeholder="phone number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <h6>Address</h6>
                                        <div class="row">
                                            <div class="input-item">
                                                <input type="text" name="address" value="<?php echo !empty($postData['address']) ? $postData['address'] : ''; ?>" placeholder="House number and street name">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <p><label class="input-info-save mb-0"><input type="checkbox" name="agree"> Create an account?</label></p>
                                <h6>Order Notes (optional)</h6>
                                <div class="input-item input-item-textarea ltn__custom-icon">
                                    <textarea name="ltn__message" placeholder="Notes about your order, e.g. special notes for delivery."></textarea>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ltn__checkout-payment-method mt-50">
                    <h4 class="title-2">Payment Method</h4>
                    <div id="checkout_accordion_1">
                        <!-- card -->
                        <div class="card">
                            <h5 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-1" aria-expanded="false">
                                Check payments
                            </h5>
                            <div id="faq-item-2-1" class="collapse" data-bs-parent="#checkout_accordion_1">
                                <div class="card-body">
                                    <p>Please send a check to Store Name, Store Street, Store Town, Store State / County, Store Postcode.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h5 class="ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-2" aria-expanded="true">
                                Cash on delivery
                            </h5>
                            <div id="faq-item-2-2" class="collapse show" data-bs-parent="#checkout_accordion_1">
                                <div class="card-body">
                                    <p>Pay with cash upon delivery.</p>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card">
                            <h5 class="collapsed ltn__card-title" data-bs-toggle="collapse" data-bs-target="#faq-item-2-3" aria-expanded="false">
                                PayPal <img src="img/icons/payment-3.png" alt="#">
                            </h5>
                            <div id="faq-item-2-3" class="collapse" data-bs-parent="#checkout_accordion_1">
                                <div class="card-body">
                                    <p>Pay via PayPal; you can pay with your credit card if you don’t have a PayPal account.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ltn__payment-note mt-30 mb-30">
                        <p>Your personal data will be used to process your order, support your experience throughout this website, and for other purposes described in our privacy policy.</p>
                    </div>
                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" type="submit">Place order</button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="shoping-cart-total mt-50">
                    <h4 class="title-2">Cart Totals</h4>
                    <table class="table">
                        <tbody>
                            <?php
                            if ($cart->total_items() > 0) {
                                // Get cart items from session 
                                $cartItems = $cart->contents();
                                foreach ($cartItems as $item) {
                            ?>
                                    <tr>
                                        <td><?php echo $item["name"]; ?> <strong>× <?php echo $item["qty"]; ?></strong></td>
                                        <td><?php echo CURRENCY_SYMBOL . $item["price"]; ?></td>
                                    </tr>
                            <?php }
                            } ?>
                            <tr>
                                <td><strong>Order Total (VND)</strong></td>
                                <td><strong><?php echo CURRENCY_SYMBOL . $item["subtotal"]; ?></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- WISHLIST AREA START -->

<div class="container">
    <h1>CHECKOUT</h1>
    <div class="col-12">
        <div class="checkout">
            <div class="row">
                <?php if (!empty($statusMsg) && ($statusMsgType == 'success')) { ?>
                    <div class="col-md-12">
                        <div class="alert alert-success"><?php echo $statusMsg; ?></div>
                    </div>
                <?php } elseif (!empty($statusMsg) && ($statusMsgType == 'error')) { ?>
                    <div class="col-md-12">
                        <div class="alert alert-danger"><?php echo $statusMsg; ?></div>
                    </div>
                <?php } ?>

                <div class="col-md-4 order-md-2 mb-4">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-muted">Your Cart</span>
                        <span class="badge badge-secondary badge-pill"><?php echo $cart->total_items(); ?></span>
                    </h4>
                    <ul class="list-group mb-3">
                        <?php
                        if ($cart->total_items() > 0) {
                            // Get cart items from session 
                            $cartItems = $cart->contents();
                            foreach ($cartItems as $item) {
                        ?>
                                <li class="list-group-item d-flex justify-content-between lh-condensed">
                                    <div>
                                        <h6 class="my-0"><?php echo $item["name"]; ?></h6>
                                        <small class="text-muted"><?php echo CURRENCY_SYMBOL . $item["price"]; ?>(<?php echo $item["qty"]; ?>)</small>
                                    </div>
                                    <span class="text-muted"><?php echo CURRENCY_SYMBOL . $item["subtotal"]; ?></span>
                                </li>
                        <?php }
                        } ?>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (<?php echo CURRENCY; ?>)</span>
                            <strong><?php echo CURRENCY_SYMBOL . $cart->total(); ?></strong>
                        </li>
                    </ul>
                    <a href="index.php" class="btn btn-sm btn-info">+ add items</a>
                </div>
                <div class="col-md-8 order-md-1">
                    <h4 class="mb-3">Contact Details</h4>
                    <form method="post" action="cartAction.php">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="first_name">First Name</label>
                                <input type="text" class="form-control" name="first_name" value="<?php echo !empty($postData['first_name']) ? $postData['first_name'] : ''; ?>" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="last_name">Last Name</label>
                                <input type="text" class="form-control" name="last_name" value="<?php echo !empty($postData['last_name']) ? $postData['last_name'] : ''; ?>" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" value="<?php echo !empty($postData['email']) ? $postData['email'] : ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" name="phone" value="<?php echo !empty($postData['phone']) ? $postData['phone'] : ''; ?>" required>
                        </div>
                        <div class="mb-3">
                            <label for="last_name">Address</label>
                            <input type="text" class="form-control" name="address" value="<?php echo !empty($postData['address']) ? $postData['address'] : ''; ?>" required>
                        </div>
                        <input type="hidden" name="action" value="placeOrder" />
                        <input class="btn btn-success btn-block" type="submit" name="checkoutSubmit" value="Place Order">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>