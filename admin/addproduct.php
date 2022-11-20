
<?php 
require_once 'includes/header.php'; 

require_once '../config/dbConnect.php';
    if(isset($_POST['submit'])){
        $tensp = $_POST['name'];
        $gia = $_POST['price'];
        $mota = $_POST['description'];
        $hinhanh = $_FILES['image']['name'];

        //Lay dia chi da tao
        $target_dir = "./images/";
        //tao duong dan truy cap 
        $target_file = $target_dir.$hinhanh;
        //check cac bien
        if(isset($tensp) && isset($gia) && isset($mota) && isset($hinhanh)){
            move_uploaded_file($_FILES['image']['tmp_name'], $target_file);

            $sqlQ = "INSERT INTO products(image, name, description, price, created) 
            VALUES  (?,?,?,?,NOW())";
            $stmt = $db->prepare($sqlQ);
            $stmt->bind_param("ssss",$db_image, $db_name, $db_des, $db_price);
            $db_image = $hinhanh;
            $db_name = $tensp;
            $db_price = $gia;
            $db_des = $mota;
            $insertOrder = $stmt->execute();

            

            if ($insertOrder) {
                echo "<script> alert('Thêm Sản Phẩm Thành Công') </script>";
                header("Location:index.php");
            }
            else{
                echo "fail".$sqlQ;
            }
        }
    }
?>
<div class="content">
                    <div class="intro-y flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            Thêm Sản Phẩm
                        </h2>
                    </div>
                    <form action="" method="post" enctype = "multipart/form-data">
                    <div class="grid grid-cols-11 gap-x-6 mt-5 pb-20">
                    
                        <!-- BEGIN: Notification -->
                        <div class="intro-y col-span-11 alert alert-primary alert-dismissible show flex items-center mb-6" role="alert">
                            <span><i data-lucide="info" class="w-4 h-4 mr-2"></i></span>
                            <span>Starting May 10, 2021, there will be changes to the Terms & Conditions regarding the number of products that may be added by the Seller. <a href="https://themeforest.net/item/midone-jquery-tailwindcss-html-admin-template/26366820" class="underline ml-1" target="blank">Learn More</a></span>
                            <button type="button" class="btn-close text-white" data-tw-dismiss="alert" aria-label="Close"> <i data-lucide="x" class="w-4 h-4"></i> </button>
                        </div>
                        <!-- BEGIN: Notification -->
                        <div class="intro-y col-span-11 2xl:col-span-9">
                            <!-- BEGIN: Uplaod Product -->
                            <div class="intro-y box p-5">
                                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Upload Product </div>
                                    <div class="mt-5">
                                        <div class="form-inline items-start flex-col xl:flex-row mt-10">
                                            <div class="form-label w-full xl:w-64 xl:!mr-10">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Product Photos</div>
                                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                                    </div>
                                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                                        <div>The image format is .jpg .jpeg .png and a minimum size of 300 x 300 pixels (For optimal images use a minimum size of 700 x 700 pixels).</div>
                                                        <div class="mt-2">Select product photos or drag and drop up to 5 photos at once here. Include min. 3 attractive photos to make the product more attractive to buyers.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full mt-3 xl:mt-0 flex-1 border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4">
                                                <div style="height: 260px;" class="grid grid-cols-100 gap-6 pl-4 pr-5 px-4 pb-4 mt-5 flex items-center justify-center cursor-pointer relative">
                                                    <div  class="col-span-11 h-full relative image-fit cursor-pointer zoom-in">
                                                        <img  class="rounded-md" alt="Midone - HTML Admin Template" src="admin/images/preview-5.jpg">
                                                        <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div>
                                                    </div>
                                                </div>
                                                <div class="px-4 pb-4 mt-5 flex items-center justify-center cursor-pointer relative">
                                                    <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span class="text-primary mr-1">Upload a file</span> or drag and drop 
                                                    <input id="horizontal-form-1" type="file" class="w-full h-full top-0 left-0 absolute opacity-0" name = "image">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Uplaod Product -->
                            <!-- BEGIN: Product Information -->
                            <div class="intro-y box p-5 mt-5">
                                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Product Information </div>
                                    <div class="mt-5">
                                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                            <div class="form-label xl:w-64 xl:!mr-10">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Product Name</div>
                                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                                    </div>
                                                    <div class="leading-relaxed text-slate-500 text-xs mt-3"> Include min. 40 characters to make it more attractive and easy for buyers to find, consisting of product type, brand, and information such as color, material, or type. </div>
                                                </div>
                                            </div>
                                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                                <input id="product-name" type="text" class="form-control" placeholder="Product name" name = "name">
                                                <div class="form-help text-right">Maximum character 0/70</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="intro-y box p-5 mt-5">
                                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Product Price </div>
                                    <div class="mt-5">
                                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                            <div class="form-label xl:w-64 xl:!mr-10">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Product Price</div>
                                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                                    </div>
                                                    <div class="leading-relaxed text-slate-500 text-xs mt-3"> Gía nào mắc nhất thế giới thì gắn dô. </div>
                                                </div>
                                            </div>
                                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                                <input id="product-name" type="text" class="form-control" placeholder="Product Price" name = "price">
                                                <div class="form-help text-right">Maximum 100 triệu</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Product Information -->
                            <!-- BEGIN: Product Detail -->
                            <div class="intro-y box p-5 mt-5">
                                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Product Detail </div>
                                    <div class="mt-5">
                                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                            <div class="form-label xl:w-64 xl:!mr-10">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Product Description</div>
                                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                                    </div>
                                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                                        <div>Make sure the product description provides a detailed explanation of your product so that it is easy to understand and find your product.</div>
                                                        <div class="mt-2">It is recommended not to enter info on mobile numbers, e-mails, etc. into the product description to protect your personal data.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                
                                                <input id="product-name" type="text" class="form-control" placeholder="Product Description" name = "description">
                                                <div class="form-help text-right">Maximum character 0/2000</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="intro-y box p-5 mt-5">
                                <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                                    <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> Product Management </div>
                                    <div class="mt-5">
                                        <div class="form-inline items-start flex-col xl:flex-row mt-5 pt-5 first:mt-0 first:pt-0">
                                            <div class="form-label xl:w-64 xl:!mr-10">
                                                <div class="text-left">
                                                    <div class="flex items-center">
                                                        <div class="font-medium">Product Status</div>
                                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                                    </div>
                                                    <div class="leading-relaxed text-slate-500 text-xs mt-3"> If the status is active, your product can be searched for by potential buyers. </div>
                                                </div>
                                            </div>
                                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                                <div class="form-check form-switch">
                                                    <input id="product-status-active" class="form-check-input" type="checkbox" name ="status">
                                                    <label class="form-check-label" for="product-status-active">Active</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Weight & Shipping -->
                            <div class="flex justify-end flex-col md:flex-row gap-2 mt-5">
                                <button type="button" class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52"> <a href="index.php">Cancel</a> </button>
                                <button type="submit" class="btn py-3 btn-primary w-full md:w-52" name ="submit">Save</button>
                            </div>
                        </div>
                        <div class="intro-y col-span-2 hidden 2xl:block">
                            <div class="pt-10 sticky top-0">
                                <ul class="text-slate-500 relative before:content-[''] before:w-[2px] before:bg-slate-200 before:dark:bg-darkmode-600 before:h-full before:absolute before:left-0 before:z-[-1]">
                                    <li class="mb-4 border-l-2 pl-5 border-primary dark:border-primary text-primary font-medium"> <a href="">Upload Product</a> </li>
                                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Product Information</a> </li>
                                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Product Detail</a> </li>
                                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Product Variant</a> </li>
                                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Product Variant (Details)</a> </li>
                                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Product Management</a> </li>
                                    <li class="mb-4 border-l-2 pl-5 border-transparent dark:border-transparent"> <a href="">Weight & Shipping</a> </li>
                                </ul>
                                <div class="mt-10 bg-warning/20 dark:bg-darkmode-600 border border-warning dark:border-0 rounded-md relative p-5">
                                    <i data-lucide="lightbulb" class="w-12 h-12 text-warning/80 absolute top-0 right-0 mt-5 mr-3"></i> 
                                    <h2 class="text-lg font-medium">
                                        Tips
                                    </h2>
                                    <div class="mt-5 font-medium">Price</div>
                                    <div class="leading-relaxed text-xs mt-2 text-slate-600 dark:text-slate-500">
                                        <div>The image format is .jpg .jpeg .png and a minimum size of 300 x 300 pixels (For optimal images use a minimum size of 700 x 700 pixels).</div>
                                        <div class="mt-2">Select product photos or drag and drop up to 5 photos at once here. Include min. 3 attractive photos to make the product more attractive to buyers.</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
                
                <!-- END: Content -->
            </div>
        </div>
        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="side-menu-dark-add-product.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
            <div class="mr-4 text-slate-600 dark:text-slate-200">Dark Mode</div>
            <div class="dark-mode-switcher__toggle border"></div>
        </div>
        <!-- END: Dark Mode Switcher-->
        
        <!-- BEGIN: JS Assets-->
        <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=["your-google-map-api"]&libraries=places"></script>
        <script src="admin/js/app.js"></script>
        <!-- END: JS Assets-->
        <script src="admin/js/ckeditor-classic.js"></script>

    </body>
</html>
