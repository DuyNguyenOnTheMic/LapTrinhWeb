<?php
if (empty($_REQUEST['id'])) {
    header("Location: index.php");
}
// include header
require_once 'includes/header.php';
$order_id = base64_decode($_REQUEST['id']);
// Include the database connection file 
require_once 'config/dbConnect.php';
// Fetch order details from the database 
$sqlQ = "SELECT * FROM orders WHERE id=?";
$stmt = $db->prepare($sqlQ);
$stmt->bind_param("i", $db_id);
$db_id = $order_id;
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $orderInfo = $result->fetch_assoc();
} else {
    header("Location: index.php");
}
?>
<!-- BREADCRUMB AREA START -->
<div class="ltn__breadcrumb-area ltn__breadcrumb-area-4 ltn__breadcrumb-color-white---">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="ltn__breadcrumb-inner text-center">
                    <h1 class="ltn__page-title">Order status</h1>
                    <div class="ltn__breadcrumb-list">
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Order status</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- BREADCRUMB AREA END -->
<div class="liton__shoping-cart-area mb-100">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if (!empty($orderInfo)) { ?>
                    <div class="col-md-12">
                        <div class="alert alert-success">Your order has been placed successfully.</div>
                    </div>

                    <!-- Order status & shipping info -->
                    <div class="row col-lg-12 ord-addr-info">
                        <div class="hdr">Order Info</div>
                        <p><b>Reference ID:</b> #<?php echo $orderInfo['id']; ?></p>
                        <p><b>Total:</b> <?php echo CURRENCY_SYMBOL . $orderInfo['grand_total'] . ' ' . CURRENCY; ?></p>
                        <p><b>Placed On:</b> <?php echo $orderInfo['created']; ?></p>
                        <p><b>Buyer Name:</b> <?php echo $orderInfo['first_name'] . ' ' . $orderInfo['last_name']; ?></p>
                        <p><b>Email:</b> <?php echo $orderInfo['email']; ?></p>
                        <p><b>Phone:</b> <?php echo $orderInfo['phone']; ?></p>
                        <p><b>Address:</b> <?php echo $orderInfo['address']; ?></p>
                    </div>

                    <!-- Order items -->
                    <div class="row col-lg-12">
                        <table class="table table-hover cart">
                            <thead>
                                <tr>
                                    <th width="10%"></th>
                                    <th width="45%">Product</th>
                                    <th width="15%">Price</th>
                                    <th width="10%">QTY</th>
                                    <th width="20%">Sub Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                // Get order items from the database 
                                $sqlQ = "SELECT i.*, p.name, p.price FROM order_items as i LEFT JOIN products as p ON p.id = i.product_id WHERE i.order_id=?";
                                $stmt = $db->prepare($sqlQ);
                                $stmt->bind_param("i", $db_id);
                                $db_id = $order_id;
                                $stmt->execute();
                                $result = $stmt->get_result();

                                if ($result->num_rows > 0) {
                                    while ($item = $result->fetch_assoc()) {
                                        $price = $item["price"];
                                        $quantity = $item["quantity"];
                                        $sub_total = ($price * $quantity);
                                        $proImg = !empty($row["image"]) ? 'img/product/' . $row["image"] : 'images/demo-img.png';
                                ?>
                                        <tr>
                                            <td class="cart-product-image">
                                                <a href="product-details.html"><img src="<?php echo $proImg; ?>" alt="#"></a>
                                            </td>
                                            <td><?php echo $item["name"]; ?></td>
                                            <td><?php echo CURRENCY_SYMBOL . $price . ' ' . CURRENCY; ?></td>
                                            <td><?php echo $quantity; ?></td>
                                            <td><?php echo CURRENCY_SYMBOL . $sub_total . ' ' . CURRENCY; ?></td>
                                        </tr>
                                <?php }
                                } ?>
                            </tbody>
                        </table>
                    </div>

                    <div class="col mb-2">
                        <div class="row">
                            <div class="col-sm-12  col-md-6">
                                <a href="index.php" class="theme-btn-1 btn btn-effect-1"><i class="ialeft"></i>Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                <?php } else { ?>
                    <div class="col-md-12">
                        <div class="alert alert-danger">Your order submission failed!</div>
                    </div>
                <?php } ?>
            </div>

        </div>
    </div>
</div>

<?php require_once 'includes/footer.php'; ?>