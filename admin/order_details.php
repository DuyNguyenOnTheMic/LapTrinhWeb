<?php

$order_id =(int) $_GET['id'];
require_once 'includes/header.php'; 
require_once '../includes/compress.php';
require_once '../config/dbConnect.php';
// Fetch order details from the database 
$sqlQ = "SELECT * FROM orders WHERE id=?";
$stmt = $db->prepare($sqlQ);
$stmt->bind_param("i", $db_id);
$db_id = $order_id;
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $orderInfo = $result->fetch_assoc();
} 
?>
<div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        Order Details
    </h2>
    <!-- BEGIN: Transaction Details -->
    <div class="intro-y grid grid-cols-11 gap-5 mt-5">
                        <div class="col-span-12 lg:col-span-4 2xl:col-span-3">
                            <div class="box p-5 rounded-md">
                                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                                    <div class="font-medium text-base truncate">Order Info</div>
                                </div>
                                <div class="flex items-center"> <i data-lucide="clipboard" class="w-4 h-4 text-slate-500 mr-2"></i>                         
                                <p><b>Reference ID:</b> #<?php echo $orderInfo['id']; ?></p>
                                </div>
                                <div class="flex items-center mt-3"> <i data-lucide="credit-card" class="w-4 h-4 text-slate-500 mr-2"></i>
                                <p><b>Total:</b> <?php echo CURRENCY_SYMBOL . $orderInfo['grand_total'] . ' ' . CURRENCY; ?></p> 
                            </div>
                                <div class="flex items-center mt-3"> <i data-lucide="clock" class="w-4 h-4 text-slate-500 mr-2"></i>                         
                                <p><b>Placed On:</b> <?php echo $orderInfo['created']; ?></p>
                                </div>
                                <div class="flex items-center mt-3"> <i data-lucide="user" class="w-4 h-4 text-slate-500 mr-2"></i>                         
                                <p><b>Buyer Name:</b> <?php echo $orderInfo['first_name'] . ' ' . $orderInfo['last_name']; ?></p>
                                </div>
                                <div class="flex items-center mt-3"> <i data-lucide="mail" class="w-4 h-4 text-slate-500 mr-2"></i>                         
                                <p><b>Email:</b> <?php echo $orderInfo['email']; ?></p>
                                </div>
                                <div class="flex items-center mt-3"> <i data-lucide="map-pin" class="w-4 h-4 text-slate-500 mr-2"></i>                         
                                <p><b>Address:</b> <?php echo $orderInfo['address']; ?></p>
                                </div>
                                <div class="flex items-center mt-3"> <i data-lucide="clock" class="w-4 h-4 text-slate-500 mr-2"></i> Transaction Status: <span class=" text-danger rounded px-2 ml-1"><?php echo $orderInfo['status']; ?></span> </div>
                            </div>
                            
                        </div>
                        <div class="col-span-12 lg:col-span-7 2xl:col-span-8">
                            <div class="box p-5 rounded-md">
                                <div class="flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5 mb-5">
                                    <div class="font-medium text-base truncate">Order Details</div>
                                </div>
                                <div class="overflow-auto lg:overflow-visible -mt-3">
                                <table class="table table-report -mt-2">
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
                                $sqlQ = "SELECT i.*, p.name, p.price, p.image FROM order_items as i LEFT JOIN products as p ON p.id = i.product_id WHERE i.order_id=?";
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
                                        $proImg = !empty($item["image"]) ? '../img/product/' . $item["image"] : '../images/demo-img.png';
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
                            </div>
                        </div>
                    </div>
                    <!-- END: Transaction Details -->

</div>
<?php require_once 'includes/footer.php'; ?>