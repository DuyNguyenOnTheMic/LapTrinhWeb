<?php
// include header
require_once 'includes/header.php';

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
                                        $proImg = !empty($item["image"]) ? 'admin/images/' . $item["image"] : 'images/demo-img.png';
                                ?>
                                        <tr>
                                            <td class="cart-product-remove" data-id="<?php echo $item["rowid"]?>" title="Remove Item">x</td>
                                            <td class="cart-product-image">
                                                <a href="product-details.html"><img src="<?php echo $proImg; ?>" alt="#"></a>
                                            </td>
                                            <td class="cart-product-info">
                                                <h4 class="text-wrap" style="width: 6rem;"><a href="product-details.html"><?php echo $item["name"]; ?></a></h4>
                                            </td>
                                            <td class="cart-product-price"><?php echo number_format( $item["price"]) . ' ' . CURRENCY; ?></td>
                                            <td class="cart-product-quantity">
                                                <input style="width: 3rem;" class="form-control text-center mb-0 p-0" name="quantity" type="text" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')" />
                                            </td>
                                            <td class="cart-product-subtotal"><?php echo number_format( $item["subtotal"]) . ' ' . CURRENCY; ?></td>
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
                                        <td><strong><?php echo number_format( $cart->total() ). ' ' . CURRENCY; ?></strong></td>
                                        <td></td>
                                    </tr>
                                <?php } ?>
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
                                    <td><?php echo number_format( $cart->total() ). ' ' . CURRENCY; ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Vat</td>
                                    <td>0 VND</td>
                                </tr>
                                <tr>
                                    <td><strong>Order Total</strong></td>
                                    <td><strong><?php echo number_format( $cart->total()) . ' ' . CURRENCY; ?></strong></strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="btn-wrapper text-right">
                            <a href="checkout.php" class="theme-btn-1 btn btn-effect-1">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- SHOPING CART AREA END -->

<?php require_once 'includes/footer.php'; ?>