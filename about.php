<?php session_start(); ?>
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
  

  <title>About | TravelBlog</title>

</head>
<body>
  <!--NB:: include header-->
  <?php include("header.php"); ?>


  <!--Page Wrapper-->
  <div class="page-wrapper">

    <!--Content-->
    <div class="content clearfix">
      <!--main content-->
      <div class="main-content">
        <h1 class="recent-post-title">Meet the developer</h1>

        <div class="post clearfix">
          <img src="img/061.jpg" alt="" class="post-img">
          <div class="post-preview">
            <h2><a href=""><span>Mohammad Najrul Islam</span></a></h2>

            <p class="preview-test">
            Hi, I’m Najrul. 
            I am student of ahsanullah science and engineering university, department of cse. I've done this project with html, css, php and a basic javascript etc.
            I'm very confident and curious, 
            and always working on trying out new things. Always improving myself.
            </p>

            <a href=""><i class="fab fa-facebook-f fa-2x mr-3 footer-social-info"></i></a>
            <a href=""><i class="fab fa-pinterest fa-2x mr-3 footer-social-info"></i></a>
            <a href=""><i class="fab fa-twitter fa-2x mr-3 footer-social-info"></i></a>
            <a href=""><i class="fab fa-linkedin fa-2x mr-3 footer-social-info"></i></a>
          </div>
        </div>

      </div>
      <!--ends main content-->

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