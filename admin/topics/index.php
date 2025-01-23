<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/contorollers/topics.php"); 
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
    <title>Admin Section - Manage Topic</title>
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
                <a href="create.php" class="btn btn-big">Add Topic</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">

                <h2 class="page-title">Manage Topics</h2>

                <?php include(ROOT_PATH."/app/includes/messages.php"); ?>

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Name</th>
                        <th colspan="2">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($topics as $key => $topic): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $topic['name']; ?></td>
                                <td><a href="edit.php?id=<?php echo $topic ['id']; ?>" class="edit">Edit</a></td>
                                <td><a href="index.php?del_id=<?php echo $topic['id']; ?>" class="delete">Delete</a></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
         </div>
        <!-- Admin content-->
    </div>
    <!-- ================= End Admin page warper ==================-->

    <!-- JQuary link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- link js-->
     <script src="../../assets/js/script.js"></script>
</body>
</html>