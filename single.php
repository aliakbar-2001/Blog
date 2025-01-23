<?php include("path.php"); ?>
<?php include(ROOT_PATH."/app/contorollers/posts.php"); 

if(isset($_GET['id'])){
    $post = selectOne('posts', ['id' => $_GET['id']]);
}

$topics = selectAll('topics');
$posts = selectAll('posts', ['published' => 1]);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- font Awesome link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!-- link css -->
     <link rel="stylesheet" href="assets/css/style.css">
    <!-- link google fonts -->
     <link href="https://fonts.googleapis.com/css?family=Candal|Lora" rel="stylesheet" >
    <title><?php echo $post['title']; ?> | AwaInspires</title>
</head>
<body>
    <!-- Facebook Page Plugin SDK -->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v21.0"></script>
    <!-- Facebook Page Plugin SDK -->

    
    <?php include(ROOT_PATH."/app/includes/header.php"); ?>


    <!-- ================= Start page warper ==================-->
    <div class="page-warper">

        <!-- Start Content -->
         <div class="content clearfix">

            <!-- Start Main Content -->
        <div class="main-content-warpper">
            <div class="main-content single">
                <h1 class="post-title"><?php echo $post['title']; ?></h1>
                <div class="post-content">
                    <?php echo html_entity_decode($post['body']); ?>
                </div>
            </div>
        </div> 

            <!-- End Main Content -->

             <!-- Start Sidebar -->
            <div class="sidebar single">

                <div class="section popular">
                    <!-- fb page-->
                    <div class="fb-page" data-href="https://www.facebook.com/Piece-of-Advice-1055745464557488/" data-tabs="" data-width="" data-height="" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/Piece-of-Advice-1055745464557488/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Piece-of-Advice-1055745464557488/">Piece of Advice</a></blockquote></div>
                    <!-- fb page-->

                    <h2 class="section-tirle">Popular</h2>
            <?php foreach($posts as $p): ?>
                <div class="post clearfix">
                    <img src="<?php echo BASE_URL . '/assets/images/' . $p['image']; ?>" alt="">
                    <a href="" class="title"><h4><?php echo $p['title']; ?></h4></a>
                </div>
            <?php endforeach; ?>

                </div>
                <div class="section topics">
                    <h2 class="section-title">Topics</h2>
                    <ul>
                        <?php foreach($topics as $topic): ?>
                            <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <!-- End Sidebar -->
         </div>
        <!-- End Content -->
    </div>
    <!-- ================= End page warper ==================-->

    <?php include(ROOT_PATH."/app/includes/footer.php"); ?>

    <!-- JQuary link-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Slick Caursol -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

    <!-- link js-->
     <script src="assets/js/script.js"></script>
</body>
</html>