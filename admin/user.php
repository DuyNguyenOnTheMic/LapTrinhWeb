<?php
require_once 'includes/header.php';
require_once '../includes/compress.php';

require_once '../config/dbConnect.php';
$sqlQ = "SELECT * FROM `users`";
$stmt = $db->prepare($sqlQ);
$stmt->execute();
$result = $stmt->get_result();
?>

<!-- BEGIN: Content -->
<div class="content">
    <h2 class="intro-y text-lg font-medium mt-10">
        User List
    </h2>
    <div class="intro-y col-span-12 flex flex-wrap sm:flex-nowrap items-center mt-2">
            <button class="btn btn-primary shadow-md mr-2"> <a href="addUser.php">Add User</a> </button>

          
        </div>
    <div class="grid grid-cols-12 gap-6 mt-5">

        <!-- BEGIN: Data List -->
        <div class="intro-y col-span-12 overflow-auto lg:overflow-visible">
            <table class="table table-report -mt-2">
                <thead>
                    <tr>
                        <th class="whitespace-nowrap">ID</th>
                        <th class=" text-center whitespace-nowrap">Name</th>
                        <th class="text-center whitespace-nowrap">Email</th>
                        <th class="text-center whitespace-nowrap">ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                    ?>
                            <tr class="intro-x">
                                <td>
                                    <div class="flex">
                                        <?php echo $row["id"]; ?>
                                    </div>
                                </td>
                              
                                <td class="text-center"><?php echo $row["first_name"]; ?> <?php echo $row["last_name"]; ?></td>
                                
                                <td class="text-center">
                                    <?php echo $row["email"]; ?>
                                </td>
                              
                                <td class="table-report__action w-56">
                                <div class="flex justify-center items-center">
                                    <a class="flex items-center text-danger btn-delete" href="javascript:;" data-id="<?= $row['id'] ?>" data-tw-toggle="modal" data-tw-target="#delete-confirmation-modal"> <i data-lucide="trash-2" class="w-4 h-4 mr-1"></i> Delete </a>
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
                        <button type="button" class="btn btn-danger w-24" id="btn-confirm_user">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END: Delete Confirmation Modal -->
</div>
<!-- END: Content -->

<?php require_once 'includes/footer.php'; ?>