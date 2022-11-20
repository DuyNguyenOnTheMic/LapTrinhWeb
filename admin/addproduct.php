<?php
require_once 'includes/header.php';

require_once '../config/dbConnect.php';
if ($_POST) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $image = $_FILES['image']['name'];

    //Lay dia chi da tao
    $target_dir = "./images/";
    //tao duong dan truy cap 
    $target_file = $target_dir . $image;
    //check cac bien
    if (isset($name) && isset($price) && isset($description) && isset($image)) {
        move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

        $sqlQ = "INSERT INTO products(`image`, `name`, `description`, `price`, `created`) VALUES  (?,?,?,?,NOW())";
        $stmt = $db->prepare($sqlQ);
        $stmt->bind_param("ssss", $db_image, $db_name, $db_des, $db_price);
        $db_image = $image;
        $db_name = $name;
        $db_price = $price;
        $db_des = $description;

        $insertProduct = $stmt->execute();

        if ($insertProduct) {
            echo "<script> alert('Thêm Sản Phẩm Thành Công') </script>";
            header("Location:index.php");
        } else {
            echo "fail" . $sqlQ;
        }
    }
}
?>

<div class="content">
    <form id="add-product-form" method="POST" enctype="multipart/form-data">
        <div class="grid gap-x-6 mt-5 pb-20">
            <div class="intro-y col-span-11 2xl:col-span-9">
                <!-- BEGIN: Upload Product -->
                <div class="intro-y box p-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> THÊM SẢN PHẨM </div>
                        <div class="mt-5">
                            <div class="form-inline items-start flex-col xl:flex-row">
                                <div id="input" class="p-5">
                                    <div class="preview">
                                        <div>
                                            <label for="regular-form-1" class="form-label">Name: </label>
                                            <input id="regular-form-1" type="text" class="form-control" placeholder="Name" id="name" name="name">
                                        </div>
                                        <div class="mt-3">
                                            <label for="regular-form-2" class="form-label">Price: </label>
                                            <input id="regular-form-2" type="text" class="form-control" placeholder="Price" id="price" name="price">
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
                                            <label for="regular-form-4" class="form-label">State: </label>
                                            <div class="form-check form-switch">
                                                <input class="form-check-input" type="checkbox" id="status" name="status">
                                                <label class="form-check-label" for="product-status-active">Active</label>
                                            </div>
                                        </div>
                                        <div class="mt-3">
                                            <label class="form-label">Description: </label>
                                            <img id="imgOutput" class="text-center p-4" width="200" />
                                            <input class="form-control mb-3" type="file" id="image" name="image" onchange="loadFile(event)" required>
                                        </div>
                                        <div class="text-right mt-5">
                                            <button type="button" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                                            <button type="submit" class="btn btn-primary w-24" id="submit" name="submit">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Upload Product -->
                <!-- BEGIN: Product Information -->
                <div class="intro-y box p-5 mt-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> THÔNG TIN SẢN PHẨM </div>
                    </div>
                </div>
            </div>
    </form>
</div>
<!-- END: Content -->

<?php require_once 'includes/footer.php'; ?>