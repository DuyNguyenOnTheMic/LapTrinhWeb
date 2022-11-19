<?php
    require("dbConnect.php");
    $masp =(int) $_GET['id'];
    $image = "SELECT image FROM `products` where `products`.`id` = $masp";
    $query = mysqli_query($conn,$image);
    $after = mysqli_fetch_assoc($query);

    //delete file img
    if (file_exists("./admin/images/".$after['image'])){
        unlink("./admin/images/".$after['image']);
    }
    $sql = "DELETE FROM `products` where `products`.`id` = $masp";
    mysqli_query($conn, $sql);
    header("location:admin/index.php");
?>