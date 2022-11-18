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
                                            <td width="150px" class="cart-product-quantity">
                                                <input class="form-control text-center mb-0 p-0" name="quantity" type="text" value="<?php echo $item["qty"]; ?>" onchange="updateCartItem(this, '<?php echo $item["rowid"]; ?>')" />
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
                                    <td><?php echo CURRENCY_SYMBOL . $cart->total() . ' ' . CURRENCY; ?></strong></td>
                                </tr>
                                <tr>
                                    <td>Vat</td>
                                    <td>$00.00</td>
                                </tr>
                                <tr>
                                    <td><strong>Order Total</strong></td>
                                    <td><strong><?php echo CURRENCY_SYMBOL . $cart->total() . ' ' . CURRENCY; ?></strong></strong></td>
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
</div>
<!-- Body main wrapper end -->

<?php require_once 'includes/footer.php'; ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-touchspin/4.3.0/jquery.bootstrap-touchspin.min.js"></script>
<script>
    $("input[name='quantity']").TouchSpin({
        min: 0,
        max: 100,
        buttondown_class: "btn theme-btn-1 border-0 px-4",
        buttonup_class: "btn theme-btn-1 border-0 px-4"
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

        $('.cart-product-remove').on('click', function(e) {
            e.preventDefault();
            alert('hehe');
        });
    }
</script>

</body>

</html>