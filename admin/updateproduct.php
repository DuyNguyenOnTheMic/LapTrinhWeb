
<?php require_once 'includes/header.php'; 
$sqlQ = "SELECT * FROM products WHERE id=?";
$stmt = $db->prepare($sqlQ);
$stmt->bind_param("i", $db_id);
$db_id = $order_id;
$stmt->execute();
$result = $stmt->get_result();
$img = $row['imgURL'];
$masp = (int) $_GET['id'];

require_once '../config/dbConnect.php';
    if(isset($_POST['submit'])){
        $tensp = $_POST['name'];
        $gia = $_POST['price'];
        $mota = $_POST['description'];
        $hinhanh = $_FILES['image']['name'];
        $ngay_tao = $_POST['craeted'];
        $thay_doi = $_POST['modified'];
        $trang_thai = $_POST['status'];


         if($hinhanh){
            if(file_exists("./images/".$img)) {
                unlink("./images/".$img);
            }
            $target_file = $target_dir.$hinhanh;
        }else{
            $target_file = $target_dir.$img;
            $hinhanh = $img;
        }
        
        if(isset($tensp) && isset($gia) && isset($mota) && isset($hinhanh)){
            move_uploaded_file($_FILES["hinhanh"]["tmp_name"],$target_file);
            $sqlQ = "UPDATE products SET name ='$tensp' ,price= '$gia',description= '$mota',`imgURL`= '$hinhanh'
            WHERE products.id = '$masp';";
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
            header("Location:trangchu.php");
            }
        }
    }
?>

                <div class="content">
                    <div class="intro-y flex items-center mt-8">
                        <h2 class="text-lg font-medium mr-auto">
                            CẬP NHẬT SẢN PHẨM
                        </h2>
                    </div>
                    <div class="grid grid-cols-11 gap-x-6 mt-5 pb-20">
                        <!-- BEGIN: Notification -->
                        <div class="intro-y col-span-11 alert alert-primary alert-dismissible show flex items-center mb-6" role="alert">
                            <span><i data-lucide="info" class="w-4 h-4 mr-2"></i></span>
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
                                                        <div class="font-medium">Hình ảnh sản phẩm</div>
                                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                                    </div>
                                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                                        <div>Định dạng hình ảnh là .jpg .jpeg .png và kích thước tối thiểu là 300 x 300 pixel (Để hình ảnh tối ưu sử dụng kích thước tối thiểu là 600 x 780 pixel).</div>
                                                        <div class="mt-2">Chọn ảnh sản phẩm hoặc kéo thả tối đa 5 ảnh cùng lúc vào đây. Bao gồm tối thiểu. 3 ảnh hấp dẫn để sản phẩm thu hút người mua hơn.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full mt-3 xl:mt-0 flex-1 border-2 border-dashed dark:border-darkmode-400 rounded-md pt-4">
                                                <div style="height: 300px;" class="grid grid-cols-100 gap-6 pl-4 pr-5 px-4 pb-4 mt-5 flex items-center justify-center cursor-pointer relative">
                                                    <div  class="col-span-11 h-full relative image-fit cursor-pointer zoom-in">
                                                        <img  class="rounded-md" alt="Midone - HTML Admin Template" src="dist/images/preview-5.jpg">
                                                        <div title="Remove this image?" class="tooltip w-5 h-5 flex items-center justify-center absolute rounded-full text-white bg-danger right-0 top-0 -mr-2 -mt-2"> <i data-lucide="x" class="w-4 h-4"></i> </div>
                                                    </div>
                                                </div>
                                                <div class="px-4 pb-4 mt-5 flex items-center justify-center cursor-pointer relative">
                                                    <i data-lucide="image" class="w-4 h-4 mr-2"></i> <span class="text-primary mr-1">Upload a file</span> or drag and drop 
                                                    <input id="horizontal-form-1" type="file" class="w-full h-full top-0 left-0 absolute opacity-0">
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
                                                        <div class="font-medium">Tên Sản Phẩm</div>
                                                        
                                                    </div>
                                                    <div class="leading-relaxed text-slate-500 text-xs mt-3"> Bao gồm tối thiểu. 40 ký tự để người mua dễ tìm thấy và hấp dẫn hơn, bao gồm loại sản phẩm, nhãn hiệu và thông tin như màu sắc, chất liệu hoặc loại. </div>
                                                </div>
                                            </div>
                                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                                <input id="product-name" type="text" class="form-control" placeholder="Product name">
                                                <div class="form-help text-right">Tối đa 0/70</div>
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
                                                        <div class="font-medium">GIá Sản Phẩm</div>
                                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                                    </div>
                                    
                                                </div>
                                            </div>
                                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                                <input id="product-name" type="text" class="form-control" placeholder="Product Price">
                                                <div class="form-help text-right">Tối đa 100 triệu</div>
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
                                                        <div class="font-medium">Mô tả sản phẩm</div>
                                                        <div class="ml-2 px-2 py-0.5 bg-slate-200 text-slate-600 dark:bg-darkmode-300 dark:text-slate-400 text-xs rounded-md">Required</div>
                                                    </div>
                                                    <div class="leading-relaxed text-slate-500 text-xs mt-3">
                                                        <div>Đảm bảo phần mô tả sản phẩm giải thích chi tiết về sản phẩm của bạn để người dùng dễ hiểu và dễ tìm thấy sản phẩm của bạn.</div>
                                                        <div class="mt-2">Bạn không nên nhập thông tin về số điện thoại di động, e-mail, v.v. vào phần mô tả sản phẩm để bảo vệ dữ liệu cá nhân của mình.</div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                            <input id="product-name" type="text" class="form-control" placeholder="Product Description">
                                                <div class="form-help text-right">Tối đa 0/2000</div>
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
                                                        <div class="font-medium">Trạng thái</div>
                                                        
                                                    </div>
                                                    <div class="leading-relaxed text-slate-500 text-xs mt-3"> Nếu trạng thái đang hoạt động, sản phẩm của bạn có thể được tìm kiếm bởi những người mua tiềm năng.</div>
                                                </div>
                                            </div>
                                            <div class="w-full mt-3 xl:mt-0 flex-1">
                                                <div class="form-check form-switch">
                                                    <input id="product-status-active" class="form-check-input" type="checkbox">
                                                    <label class="form-check-label" for="product-status-active">Active</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- END: Weight & Shipping -->
                            <div class="flex justify-end flex-col md:flex-row gap-2 mt-5">
                                <button type="button" class="btn py-3 border-slate-300 dark:border-darkmode-400 text-slate-500 w-full md:w-52"> <a href="index.php?id=<?= $row['id']?>">Hủy</a></button>
                                <button type="button" class="btn py-3 btn-primary w-full md:w-52"> <input type="submit" value = "Thêm sản phẩm" name = "submit"> </button>
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
                </div>
                <!-- END: Content -->
            </div>
        </div>
        <!-- END: Content -->
        <!-- BEGIN: Dark Mode Switcher-->
        <div data-url="top-menu-dark-add-product.html" class="dark-mode-switcher cursor-pointer shadow-md fixed bottom-0 right-0 box border rounded-full w-40 h-12 flex items-center justify-center z-50 mb-10 mr-10">
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

