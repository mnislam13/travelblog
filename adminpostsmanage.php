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

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.14.0/css/all.css" integrity="sha384-HzLeBuhoNPvSl5KYnjx0BT+WB0QEEqLprO+NBkkk5gbc67FTaL7XIGa2w1L0Xbgc" crossorigin="anonymous">
  
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Candal&family=Lora&display=swap" rel="stylesheet">
  

  <title>Dashboard - Manage Posts | TravelBlog</title>

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
            <h2 class="page-title">Manage Posts</h2>

            <?php include("msg.php"); ?>

            <table>
                <thead>
                    <th>SN</th>
                    <th>Title</th>
                    <th>Author</th>
                    <th colspan="4">Execution</th>
                </thead>
                <tbody>

                  <?php foreach ($posts as $key => $post): ?>
                    <?php $temp = selectOne('users', ['id' => $post['user_id']]); ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>
                        <td><?php echo $post['title']; ?></td>
                        <td><?php echo $temp['username']; ?></td>
                        <td><a href="adminpostsedit.php?id=<?php echo $post['id']; ?>" class="edit">edit</a></td>
                        <td><a href="adminpostsmanage.php?del_id=<?php echo $post['id']; ?>" class="delete">delete</a></td>
                        
                        <?php if ($post['published']): ?>
                          <td><a href="adminpostsedit.php?published=0&p_id=<?php echo $post['id']; ?>" class="unpublish">unpublish</a></td>
                        <?php else: ?>
                          <td><a href="adminpostsedit.php?published=1&p_id=<?php echo $post['id']; ?>" class="publish">publish</a></td>
                        <?php endif; ?>

                        <?php if ($post['trending']): ?>
                          <td><a href="adminpostsedit.php?trending=0&t_id=<?php echo $post['id']; ?>" class="unpublish">unset-trending</a></td>
                        <?php else: ?>
                          <td><a href="adminpostsedit.php?trending=1&t_id=<?php echo $post['id']; ?>" class="publish">set-trending</a></td>
                        <?php endif; ?>
                    </tr>
                  <?php endforeach; ?>

                </tbody>
            </table>
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