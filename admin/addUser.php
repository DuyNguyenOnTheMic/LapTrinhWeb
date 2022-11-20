<?php
require_once 'includes/header.php';
require_once("entities/user.class.php");

require_once '../config/dbConnect.php';
if ($_POST) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];


    //check cac bien
    if (isset($first_name) && isset($last_name) && isset($email) && isset($password)  && isset($confirm_password) && $password ==   $confirm_password) {
        $account = new User($first_name, $last_name, $email, $password);
        $result = $account->Save();
        if (!$result) {
            ?>
            <script>alert('Có lỗi đã xảy ra, vui lòng kiểm tra lại')</script>
            <?php
        }
        else {
            header("Location: user.php");
        }
        
    }
}

?>


<div class="content">
    <form id="add-user-form" method="POST" enctype="multipart/form-data">
        <div class="grid gap-x-6 mt-5">
            <div class="intro-y col-span-11 2xl:col-span-9">
                <!-- BEGIN: Upload Product -->
                <div class="intro-y box p-5">
                    <div class="border border-slate-200/60 dark:border-darkmode-400 rounded-md p-5">
                        <div class="font-medium text-base flex items-center border-b border-slate-200/60 dark:border-darkmode-400 pb-5"> <i data-lucide="chevron-down" class="w-4 h-4 mr-2"></i> ADD USER </div>
                        <div class="mt-5">
                            <div id="input" class="p-5">
                                <div class="preview">
                                    <div >
                                        <label for="regular-form-1" class="form-label">First name </label>
                                        <input id="regular-form-1" type="text" class="form-control" placeholder="First name" id="first_name" name="first_name" required>
                                    </div>
                                    <div>
                                        <label for="regular-form-2" class="form-label">Last name </label>
                                        <input id="regular-form-2" type="text" class="form-control" placeholder="Last name" id="last_name" name="last_name" required>
                                    </div>
                                    <div class="mt-3">
                                        <label for="regular-form-3" class="form-label">Email: </label>
                                        <input id="regular-form-3" type="text" class="form-control" placeholder="Email" id="email" name="email" required>
                                    </div>
                                    <div class="mt-3">
                                        <label for="regular-form-4" class="form-label">Password: </label>
                                        <input id="regular-form-4" type="password" class="form-control" placeholder="Password" id="password" name="password" required>
                                    </div>
                                    <div class="mt-3">
                                        <label for="regular-form-5" class="form-label">Confirm password: </label>
                                        <input id="regular-form-5" type="password" class="form-control" placeholder="Confirm password" id="confirm_password" name="confirm_password" required>
                                    </div>
                                    
                                    <div class="text-right mt-5">
                                        <button type="button" class="btn btn-outline-secondary w-24 mr-1" onclick="window.location.href='index.php'">Cancel</button>
                                        <button type="submit" class="btn btn-primary w-24" id="submit" name="submit">Save</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- END: Upload Product -->
            </div>
    </form>
</div>
<!-- END: Content -->

<?php require_once 'includes/footer.php'; ?>