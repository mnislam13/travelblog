<?php include("controlposts.php"); 

adminOnly();

?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/style.css"> <!-- css linking -->

    <link rel="stylesheet" href="css/admin.css"> <!-- css linking -->

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css"
        integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">


    <title>Dashboard - Edit Post</title>

</head>

<body>

    <?php include("adminHeader.php"); ?>

    <!--Admin Page Wrapper-->
    <div class="admin-wrapper">

        <?php include("adminLeftmenu.php"); ?>


        <!--admin content-->
        <div class="admin-content">
            <div class="button-group">
                <a href="adminpostscreate.php" class="btn btn-big">Add Post</a>
                <a href="adminpostsmanage.php" class="btn btn-big">Manage Posts</a>
            </div>

            <div class="content">
                <h2 class="page-title">Edit Post</h2>

                <?php include("formErrors.php"); ?>

                <form action="adminpostsedit.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?php echo $id ?>">         
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" name="title" value="<?php echo $title ?>" autocomplete="off"
                            class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Body</label>
                        <textarea class="form-control" name="body"><?php echo $body ?></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" name="image" autocomplete="off" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Categories</label>
                        <select name="cat_id" class="form-control">
                            <option value=""></option>
                            <?php foreach ($cats as $key => $cat): ?>
                            <?php if(!empty($cat_id) && $cat_id == $cat['id']): ?>
                            <option selected value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
                            <?php else: ?>
                            <option value="<?php echo $cat['id'] ?>"><?php echo $cat['name'] ?></option>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div>
                        <?php if(empty($published) && $published == 0): ?>
                        <label>
                            <input type="checkbox" name="published">
                            Publish
                        </label>
                        <?php else: ?>
                        <label>
                            <input type="checkbox" name="published" checked>
                            Publish
                        </label>
                        <?php endif; ?>
                    </div>
                    <div>
                        <?php if(empty($trending) && $trending == 0): ?>
                        <label>
                            <input type="checkbox" name="trending">
                            Trending
                        </label>
                        <?php else: ?>
                        <label>
                            <input type="checkbox" name="trending" checked>
                            Trending
                        </label>
                        <?php endif; ?>
                    </div>
                    <div>
                        <button type="submit" name="update-post" class="btn btn-big btn-success">Update Post</button>
                    </div>

                </form>
            </div>
        </div>
        <!--ends admin content-->

    </div>
    <!--ends Page Wrapper-->


    <div class="admin-footer">
        &copy; travelblogbd.com | Designed by Mohammad Najrul Islam
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>