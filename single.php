<?php include("controlposts.php");

usersOnly();

if (isset($_GET['id'])) {
  $post = selectOne('posts', ['id' => $_GET['id']]);
  //dd($posts);
}

$pubposts = selectAll('posts', ['published' => 1]);


?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css"> <!-- css linking -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">

    <title><?php echo $post['title']; ?> | TravelBlog </title>

</head>

<body>
    <!--Facebook Page Plugin for Advertisement-->
    <div id="fb-root"></div>
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v8.0"
        nonce="gA2NOsXq"></script>
    <!--ends Facebook Page Plugin for Advertisement-->
    <!--NB:: include header-->
    <?php include("header.php"); ?>

    <!--Page Wrapper-->
    <div class="page-wrapper">

        <!--Post Slider-->
        <!--ends Post Slider-->
        <!--Content-->

        <div class="content clearfix">
            <div class="main-content-wrapper">
                <!--main content-->
                <div class="main-content single">
                    <h1 class="post-title"><?php echo $post['title']; ?></h1>

                    <div class="post-content">
                    <p><?php echo $post['body']; ?></p>

                    </div>

                </div>
            </div>
            <!--ends main content-->
            <!--sidebar-->
            <div class="sidebar single">
                <!--facebook plugin execution-->
                <div class="fb-page" data-href="https://www.facebook.com/travelersbangladeshtob255248" data-tabs=""
                    data-width="" data-height="" data-small-header="false" data-adapt-container-width="true"
                    data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/travelersbangladeshtob255248"
                        class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/travelersbangladeshtob255248">Travelers Of Bangladesh -
                            TOB</a>
                    </blockquote>
                </div>
                <!--ends facebook plugin execution-->

                <div>
                    <a>[..contact us for advertisement..]</a>
                </div>

                <div class="section popular">
                    <h2 class="section-title">Popular</h2>

                    <?php foreach ($pubposts as $key => $p): ?>

                    <div class="post clearfix">
                        <img src="<?php echo 'img/' . $p['image'] ?>" alt="">
                        <a href="single.php?id=<?php echo $p['id'] ?>" class="title"><?php echo $p['title']; ?></a>
                    </div>
                    
                    <?php endforeach; ?>

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
            <!--ends sidebar-->
        </div>

        <!--ends Content-->

    </div>
    <!--ends Page Wrapper-->



    <!--NB:: include footer-->
    <?php include("footer.php"); ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>