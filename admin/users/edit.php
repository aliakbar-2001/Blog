<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/contorollers/users.php"); 
adminOnly();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link style css -->
     <link rel="stylesheet" href="../../assets/css/style.css">

    <!-- link admin css -->
    <link rel="stylesheet" href="../../assets/css/admin.css">

    <!-- link google fonts -->
     <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet" >
    <title>Admin Section - Edit User</title>
</head>
<body>
    <!-- ================= Start Nav bar ==================-->
    <?php include(ROOT_PATH . "/app/includes/adminHeader.php"); ?>
    <!-- ================= End Nav bar ==================-->

    <!-- ================= Start Admin page warper ==================-->
    <div class="admin-warper">

    <!-- Left sidebar-->
    <?php include(ROOT_PATH . "/app/includes/adminSidebar.php"); ?>
    <!-- Left sidebar-->
        <!-- Admin content-->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.php" class="btn btn-big">Add User</a>
            <a href="index.php" class="btn btn-big">Manage Users</a>
        </div>

        <div class="content">
            <h2 class="page-title">Edit User</h2>

            <?php include(ROOT_PATH ."/app/helpers/formError.php"); ?>

            <form action="edit.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
                <div>
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" class="text-input">
                </div>
        
                <div>
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
                </div>
        
                <div>
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" class="text-input">
                </div>
        
                <div>
                    <label>Password Confirmation</label>
                    <input type="password" name="passwordConf" value="<?php echo $passwordConf; ?>" class="text-input">
                </div>

                <div>
                    <?php if(isset($admin) && $admin == 1): ?>
                        <label>
                            <input type="checkbox" name="admin" checked>
                            Admin
                        </label>
                    <?php else: ?>
                        <label>
                            <input type="checkbox" name="admin">
                            Admin
                        </label>
                    <?php endif; ?>
                </div>

                <div>
                        <button type="submit" name="update-user" class="btn btn-big">Update User</button>
                </div>
            </form>    
        </div>
    </div>
        <!-- Admin content-->

    </div>
    <!-- ================= End Admin page warper ==================-->

    <!-- JQuary link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- ckeditor link-->
    <script src="https://cdn.ckeditor.com/ckeditor5/12.2.0/classic/ckeditor.js"></script>

    <!-- link js-->
     <script src="../../assets/js/script.js"></script>
</body>
</html>