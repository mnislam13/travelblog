<?php include("controlcats.php"); 

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

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
  

  <title>Dashboard - Add Category | TravelBlog</title>

</head>
<body>
  
  <?php include("adminHeader.php"); ?>

  <!--Admin Page Wrapper-->
  <div class="admin-wrapper">

  <?php include("adminLeftmenu.php"); ?>


    <!--admin content-->
    <div class="admin-content">
        <div class="button-group">
            <a href="admincatscreate.php" class="btn btn-big">Add Category</a>
            <a href="admincatsmanage.php" class="btn btn-big">Manage Categories</a>
        </div>

        <div class="content">
            <h2 class="page-title">Add Category</h2>

            <?php include("formErrors.php"); ?>

            <form action="admincatscreate.php" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name" value="<?php echo $name; ?>" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description"><?php echo $description; ?></textarea>
                </div>
                <div>
                    <button type="submit" name="add-cat" class="btn btn-big btn-success">Add Category</button>
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