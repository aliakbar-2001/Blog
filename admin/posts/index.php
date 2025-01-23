<?php include("../../path.php"); ?>
<?php include(ROOT_PATH . "/app/contorollers/posts.php"); 
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
    <title>Admin Section - Manage Posts</title>
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
                <a href="create.php" class="btn btn-big">Add Post</a>
                <a href="index.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">
                <h2 class="page-title">Manage Posts</h2>

                <?php include(ROOT_PATH."/app/includes/messages.php"); ?> 

                <table>
                    <thead>
                        <th>SN</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th colspan="3">Action</th>
                    </thead>
                    <tbody>
                        <?php foreach ($posts as $key => $post): ?>
                            <tr>
                                <td><?php echo $key + 1; ?></td>
                                <td><?php echo $post['title'] ?></td>
                                <td>Awa</td>
                                <td><a href="edit.php?id=<?php echo $post['id']; ?>" class="edit">Edit</a></td>
                                <td><a href="edit.php?delete_id=<?php echo $post['id']; ?>" class="delete">Delete</a></td>

                                <?php if($post['published']): ?>
                                    <td><a href="edit.php?published=0&p_id=<?php echo $post['id'] ?>" class="unpublish">unpublish</a></td>
                                <?php else: ?>
                                    <td><a href="edit.php?published=1&p_id=<?php echo $post['id'] ?>" class="publish">Publish</a></td>
                                <?php endif; ?>
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