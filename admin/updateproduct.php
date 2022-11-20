<?php
require_once 'includes/header.php';
require_once '../config/dbConnect.php';

$id = (int) $_GET['id'];
$sql = "SELECT * FROM  `products` WHERE `id` = '$id'";
$query = mysqli_query($db, $sql);
$row = mysqli_fetch_array($query);
$img = $row["image"];

if ($_POST) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];

    $target_dir = './images/';
    $target_file = $target_dir . $image;
    if ($image) {
    } else {
        $image = $img;
    }

    move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

    $sql = "UPDATE `products` SET `name`='$name',`price`='$price',`description`='$description',`image`='$image' WHERE `id` = '$id'";

    $result = mysqli_query($db, $sql);

    if ($result == true) {
        header("Location:index.php");
    } else {
        echo "lỗi!";
    }
}
?>

<div class="content">
    <div class="grid gap-x-6 mt-5">
        <div class="intro-y col-span-11 2xl:col-span-9">
            <!-- BEGIN: Upload Product -->
            <div class="intro-y box p-5">
                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> THÊM SẢN PHẨM </div>
                    <div class="mt-5">
                        <form id="update-product-form" method="POST" enctype="multipart/form-data">
                            <div id="input" class="p-5">
                                <div class="preview">
                                    <div>
                                        <label for="regular-form-1" class="form-label">Name: </label>
                                        <input id="regular-form-1" type="text" class="form-control" placeholder="Name" id="name" name="name" value="<?= $row["name"]; ?>" required>
                                    </div>
                                    <div class="mt-3">
                                        <label for="regular-form-2" class="form-label">Price: </label>
                                        <input id="regular-form-2" type="text" class="form-control" placeholder="Price" id="price" name="price" value="<?= $row["price"]; ?>" required>
                                    </div>
                                    <div class="mt-3">
                                        <label class="form-label">Description: </label>
                                        <div class="mt-2">
                                            <div class="editor">
                                                <p>Content of the editor.</p>
                                            </div>
                                        </div>
                                        <input type="hidden" id="description" name="description">
                                    </div>
                                    <div class="mt-3">
                                        <label class="form-label">Image: </label>
                                        <img id="imgOutput" src="./images/<?= $img ?>" class="text-center p-2" width="200" />
                                        <div class="file-input">
                                            <input type="file" name="image" id="image" onchange="loadFile(event)" class="file-input__input" />
                                            <label class="file-input__label" for="image">
                                                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="upload" class="svg-inline--fa fa-upload fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                                    <path fill="currentColor" d="M296 384h-80c-13.3 0-24-10.7-24-24V192h-87.7c-17.8 0-26.7-21.5-14.1-34.1L242.3 5.7c7.5-7.5 19.8-7.5 27.3 0l152.2 152.2c12.6 12.6 3.7 34.1-14.1 34.1H320v168c0 13.3-10.7 24-24 24zm216-8v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h136v8c0 30.9 25.1 56 56 56h80c30.9 0 56-25.1 56-56v-8h136c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path>
                                                </svg>
                                                <span>Upload file</span></label>
                                        </div>
                                    </div>
                                    <div class="text-right mt-5">
                                        <button type="button" class="btn btn-outline-secondary w-24 mr-1" onclick="window.location.href='index.php'">Cancel</button>
                                        <button type="submit" class="btn btn-primary w-24" id="submit" name="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- END: Upload Product -->
        </div>
    </div>
    <!-- END: Content -->

    <?php require_once 'includes/footer.php'; ?>