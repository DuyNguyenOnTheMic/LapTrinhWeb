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

<?php if (!empty($statusMsg) && ($statusMsgType == 'success')) { ?>
    <div class="col-md-12">
        <div class="alert alert-success"><?php echo $statusMsg; ?></div>
    </div>
<?php } elseif (!empty($statusMsg) && ($statusMsgType == 'error')) { ?>
    <div class="col-md-12">
        <div class="alert alert-danger"><?php echo $statusMsg; ?></div>
    </div>
<?php } ?>

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
                  
                    <div class="ltn__checkout-single-content mt-50">
                        <h4 class="title-2">Billing Details</h4>
                        <div class="ltn__checkout-single-content-info">
                            <form method="POST" action="cartAction.php" id="orderForm">
                                <h6>Personal Information</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="input-item input-item-name ltn__custom-icon">
                                            <input type="text" name="first_name" value="<?php echo !empty($postData['first_name']) ? $postData['first_name'] : ''; ?>" placeholder="First name" required>
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
                                <input type="hidden" name="action" value="placeOrder" />
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ltn__checkout-payment-method mt-50">
                    
                    
                    <p><?php $sessData ?></p>
                    <button class="btn theme-btn-1 btn-effect-1 text-uppercase" id="btnHehe" type="submit">Place order</button>
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
                                        <td><?php echo number_format( $item["price"]); ?></td>
                                    </tr>
                            <?php }
                            } ?>
                            <tr>
                                <td><strong>Order Total (VND)</strong></td>
                                <td><strong><?php echo number_format( $cart->total() ). ' ' . CURRENCY; ?></strong></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- WISHLIST AREA START -->

<?php require_once 'includes/footer.php'; ?>