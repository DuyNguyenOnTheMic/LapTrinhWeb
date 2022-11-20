<?php
include '../config/dbConnect.php';

$id = (int) $_GET["id"];
$sql = "DELETE FROM `products` WHERE `id` = '$id'";
mysqli_query($db, $sql);

// Head back to home page
header("Location:index.php");
?>