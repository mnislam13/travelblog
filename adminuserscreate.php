<?php include("controlusers.php"); 

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
  

  <title>Dashboard - Add User | TravelBlog</title>

</head>
<body>
  
  <?php include("adminHeader.php"); ?>

  <!--Admin Page Wrapper-->
  <div class="admin-wrapper">

  <?php include("adminLeftmenu.php"); ?>


    <!--admin content-->
    <div class="admin-content">
        <div class="button-group">
            <a href="create.php" class="btn btn-big">Add User</a>
            <a href="manage.php" class="btn btn-big">Manage Users</a>
        </div>

        <div class="content">
            <h2 class="page-title">Add User</h2>

            <?php include("formErrors.php"); ?>

            <form action="adminuserscreate.php" method="post">
                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" value="<?php echo $username; ?>" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email" value="<?php echo $email; ?>" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" name="password" value="<?php echo $password; ?>" autocomplete="off" class="form-control">
                </div>
                <div class="form-group">
                    <label>Confirm Password</label>
                    <input type="password" name="passwordConf" autocomplete="off" class="form-control">
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
                    <button type="submit" name="admin-user" class="btn btn-big btn-success">Add User</button>
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