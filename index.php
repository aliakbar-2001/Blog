<?php 

include("path.php");
include(ROOT_PATH . "/app/contorollers/topics.php");

$posts = array();
$postTitle = 'Recent Posts';

if(isset($_GET['t_id'])){
    $posts = getPostsByTopicId($_GET['t_id']);
    $postTitle = "You search For Posts Under '" . $_GET['name'] . "'";
}else if(isset($_POST['search-term'])){
    $postTitle = "You search For '" . $_POST['search-term'] . "'";
    $posts = searchPost($_POST['search-term']);
}else{ 
    $posts = getPublishedPosts();
}

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
    <title>Blog</title>
</head>
<body>
    
     <?php include(ROOT_PATH."/app/includes/header.php"); ?>
     <?php include(ROOT_PATH."/app/includes/messages.php"); ?>
 

    <!-- ================= Start page warper ==================-->
    <div class="page-warper">
        <!-- Start Post Slider -->
         <div class="post-slider">
            <h1 class="slider-title">Trending Posts</h1>
            <i class="fas fa-chevron-left prev"></i>
            <i class="fas fa-chevron-right next"></i>
            <div class="post-warper">

        <?php foreach ($posts as $post): ?>
            <div class="post">
                <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="slider-image">
                    <div class="post-info">
                        <h4><a href="single.php?id=<?php echo $post['id']; ?>">
                        <?php echo $post['title']; ?></a></h4>
                        <i class="far fa-user"></i>   <?php echo $post['username']; ?>
                        &nbsp;
                        <i class="far fa-calendar"></i> <?php echo date('F j, Y', strtotime($post['created_at'])); ?>
                    </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
        <!-- End Post Slider -->

    <!-- Start Content -->
    <div class="content clearfix">
        <!-- Start Main Content -->
        <div class="main-content">
        <h1 class="recent-post-title"><?php echo $postTitle ?></h1>
                
        <?php foreach ($posts as $post): ?>   
            <div class="post clearfix">
            <img src="<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>" alt="" class="post-image">
                <div class="post-preview">
                    <h2><a href="single.php?id=<?php echo $post['id']; ?>">
                    <?php echo $post['title']; ?></a></h2>
                    <i class="far fa-user"></i>  <?php echo $post['username']; ?> 
                    &nbsp;
                    <i class="far fa-calendar"></i><?php echo date('F j, Y', strtotime($post['created_at'])); ?> 
                    <p class="preview-text">
                        <?php echo html_entity_decode(substr($post['body'], 0, 150) . '...') ?>
                    </p>
                    <a href="single.php?id=<?php echo $post['id']; ?>" class="btn read-more">
                    Read More</a>
                </div>
            </div>
        <?php endforeach; ?>
    </div>

    <!-- End Main Content -->
    <div class="sidebar">
        <div class="section search">
            <h2 class="section-title">Search</h2>
            <form action="index.php" method="post">
                <input type="text" name="search-term" class="text-input"placeholder="Search...">
            </form>
        </div>

        <div class="section topics">
            <h2 class="section-title">Topics</h2>
            <ul>
                <?php foreach ($topics as $key => $topic): ?>
                    <li><a href="<?php echo BASE_URL . '/index.php?t_id=' . $topic['id'] . '&name=' . $topic['name'] ?>"><?php echo $topic['name']; ?></a></li>
                <?php endforeach; ?>
                </ul>
            </div>
        </div>
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