<?php include("controlcats.php"); 


$poststitle = "All Posts";
$pubposts = array();

if (isset($_POST['search-term'])) {
  $poststitle = "You searched for '" . $_POST['search-term'] . "'";
  $pubposts = searchPosts($_POST['search-term']);
} 
else if (isset($_GET['cat_id'])) {
  $c = selectOne('categories', ['id' => $_GET['cat_id']]);
  $poststitle = "All posts on '" . $c['name'] . "'";
  $pubposts = selectAll('posts', ['published' => 1, 'cat_id' => $_GET['cat_id']]);
}
else {
  $pubposts = selectAll('posts', ['published' => 1]);
}

$trending = selectAll('posts', ['published' => 1, 'trending' => 1]); //posts equals or greater than rating 4
//dd($trending);


?>

<!DOCTYPE html>
<html>
<head>
	
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/style.css"> <!-- css linking -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
  

  <title>Blogs | TravelBlog</title>

</head>
<body>
  <!--NB:: include header-->
  <?php include("header.php"); ?>

  <?php include("msg.php"); ?>
  

  

  <!--Page Wrapper-->
  <div class="page-wrapper">

    <!--Post Slider-->
    <div class="post-slider">
      <h1 class="slider-title">Trending Posts</h1>
      <i class="fas fa-chevron-left prev"></i>
      <i class="fas fa-chevron-right next"></i>

      <div class="post-wrapper">

        <?php foreach ($trending as $key => $post): ?>
          <?php $tempU = selectOne('users', ['id' => $post['user_id']]); ?>
          <?php $tempC = selectOne('categories', ['id' => $post['cat_id']]); ?>
          <div class="post">
            <img src="<?php echo 'img/' . $post['image'] ?>" alt="" class="slider-img">
            <div class="post-info">
              <h4><a href="single.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a></h4>
              <div class="post-ad">
                <i class="fas fa-user"> <?php echo $tempU['username']; ?></i>
                &nbsp;
                <i class="fas fa-calendar"> <?php echo date('F j, Y' .'  |  ' . 'h:i a', strtotime($post['createdAt'])) ?></i>
                &nbsp;
                <i class="fas fa-map-marker-alt"> <?php echo $tempC['name']; ?></i>
              </div> 
            </div>
          </div>

        <?php endforeach; ?>
        
      </div>
      <!--ends post wrapper-->
    </div>
    <!--ends Post Slider-->

    <!--Content-->
    <div class="content clearfix">
      <!--main content-->
      <div class="main-content">
        <h1 class="recent-post-title"><?php echo $poststitle ?></h1>

        <?php foreach ($pubposts as $key => $post): ?>
          <?php $tempU = selectOne('users', ['id' => $post['user_id']]); ?>
          <?php $tempC = selectOne('categories', ['id' => $post['cat_id']]); ?>
          <div class="post clearfix">
            <img src="<?php echo 'img/' . $post['image'] ?>" alt="" class="post-img">
            <div class="post-preview">
              <h3><a href="single.php?id=<?php echo $post['id'] ?>"><?php echo $post['title'] ?></a></h3>
              <i class="fas fa-user"> <?php echo $tempU['username']; ?></i>
              &nbsp;
              <i class="fas fa-calendar"> <?php echo date('F j, Y' .'  |  ' . 'h:i a', strtotime($post['createdAt'])) ?></i>
              &nbsp;
              <i class="fas fa-map-marker-alt"> <?php echo $tempC['name']; ?></i>
              <p class="preview-test">
                <?php echo substr($post['body'], 0, 150) . '...' ?>
              </p>
              <a href="single.php?id=<?php echo $post['id'] ?>" class="btn read-more">read more..</a>
            </div>
          </div>
        <?php endforeach; ?>
        
      </div>
      <!--ends main content-->
      <!--sidebar category-->
      <div class="sidebar">
        <div class="section search">
          <h2 class="section-title">Search</h2>
          <form action="index.php" method="post">
            <input type="text" name="search-term" class="text-input" placeholder="type here..">
          </form>
        </div>

        <div class="section topics">
          <h2 class="section-title">Categories</h2>
          <ul>
            <?php foreach ($cats as $key => $cat): ?>
              <li><a href="index.php?cat_id=<?php echo $cat['id'] ?>"><?php echo $cat['name']; ?></a></li>
            <?php endforeach; ?>
            
          </ul>
        </div>
      </div>
      <!--ends sidebar category-->

    </div>

    <!--ends Content-->

  </div>
  <!--ends Page Wrapper-->

<!--NB:: include footer-->
<?php include("footer.php"); ?>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="js/scripts.js"></script>
</body>
</html>