<?php
    include("../config/dbConnect.php");
    $id =(int) $_GET['id'];
    $image = "SELECT image FROM `products` where `products`.`id` = $id";
    $query = mysqli_query($db,$image);
    $after = mysqli_fetch_assoc($query);

    //delete file img
    if (file_exists("../admin/images/".$after['image'])){
        unlink("../admin/images/".$after['image']);
    }
    $sql = "DELETE FROM `products` where `products`.`id` = $id";
    mysqli_query($db, $sql);
    // Head back to home page
    header("location:index.php");
?>