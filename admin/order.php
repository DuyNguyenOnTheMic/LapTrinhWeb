<?php 
require_once 'includes/header.php'; 
require_once '../includes/compress.php';

require_once '../config/dbConnect.php';
$sqlQ = "SELECT * FROM `orders`";
$stmt = $db->prepare($sqlQ);
$stmt->execute();
$result = $stmt->get_result();
?>

<!-- BEGIN: Content -->
<div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        Order List
        </h2>
    <div class="grid grid-cols-12 gap-6 mt-5">
        <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">

            <div class="w-full sm:w-auto mt-3 sm:mt-0 sm:ml-auto md:ml-0">
                <div class="w-56 relative text-slate-500">
                    <input type="text" class="form-control w-56 box pr-10" placeholder="Search...">
                    <i class="w-4 h-4 absolute my-auto inset-y-0 mr-3 right-0" data-lucide="search"></i>
                </div>
            </div>
        </div>
        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">ID</th>
                        <th class="whitespace-nowrap">Grand_total</th>
                        <th class="text-center whitespace-nowrap">Name</th>
                        <th class="text-center whitespace-nowrap">Phone</th>
                        <th class="text-center whitespace-nowrap">Address</th>
                        <th class="text-center whitespace-nowrap">Email</th>
                        <th class="text-center whitespace-nowrap">STATUS</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                <?php
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr class="intro-x">
                        <td class="w-40">
                            <div class="flex">
                            <?php echo $row["id"]; ?>
                            </div>
                        </td>
                        <td>
                            <a href="" class="font-medium whitespace-nowrap"><?php echo $row["grand_total"]; ?></a>
                        </td>
                        <td class="text-center"><?php echo $row["first_name"];?>  <?php echo $row["last_name"];?></td>
                        <td class="text-center">
                            <?php echo $row["phone"]; ?> 
                        </td>
                        <td class="text-center">
                            <?php echo $row["address"]; ?> 
                        </td>
                        <td class="text-center">
                            <?php echo $row["email"]; ?> 
                        </td>
                        <td class="text-center">
                            <?php echo $row["status"]; ?> 
                        </td>
                        <td class="table-report__action w-56">
                            <div class="flex justify-center items-center">
                                <a class="flex items-center mr-3" href="order_details.php?id=<?= $row['id']?>"> <i data-lucide="check-square" class="w-4 h-4 mr-1"></i> Details </a>
                            </div>
                        </td>
                    </tr>
                    <?php }
            } else { ?>
                <p>Order(s) not found.....</p>
            <?php } ?>
                 
                   
                </tbody>
            </table>
        </div>
        <!-- END: Data List -->
      
    </div>
    <!-- BEGIN: Delete Confirmation Modal -->
    <div id="delete-confirmation-modal" class="modal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="p-5 text-center">
                        <i data-lucide="x-circle" class="w-16 h-16 text-danger mx-auto mt-3"></i>
                        <div class="text-3xl mt-5">Are you sure?</div>
                        <div class="text-slate-500 mt-2">
                            Do you really want to delete these records?
                            <br>
                            This process cannot be undone.
                        </div>
                    </div>
                    <div class="px-5 pb-8 text-center">
                        <button type="button" data-tw-dismiss="modal" class="btn btn-outline-secondary w-24 mr-1">Cancel</button>
                        <button type="button" class="btn btn-danger w-24">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
</div>
<!-- END: Content -->

<?php require_once 'includes/footer.php'; ?>