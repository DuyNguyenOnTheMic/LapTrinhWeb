
<?php
include '../config/dbConnect.php';

$id = (int) $_GET["id"];
$sql = "DELETE FROM `order_items` WHERE `order_id` = '$id'";
mysqli_query($db, $sql);
$sql = "DELETE FROM `orders` WHERE `id` = '$id'";
mysqli_query($db, $sql);

// Head back to home page
header("Location:order.php");
?>