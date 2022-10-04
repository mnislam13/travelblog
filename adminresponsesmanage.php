<?php include("controlresponse.php"); 

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
  

  <title>Dashboard - Manage Responses | TravelBlog</title>

</head>
<body>
  
  <?php include("adminHeader.php"); ?>

  <!--Admin Page Wrapper-->
  <div class="admin-wrapper">

  <?php include("adminLeftmenu.php"); ?>


    <!--admin content-->
    <div class="admin-content">

        <div class="content">
            <h2 class="page-title">Manage Responses</h2>

            <?php include("msg.php"); ?>

            <table>
                <thead>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Time</th>
                    <th colspan="2">Execution</th>
                </thead>
                <tbody>
                  <?php foreach ($responses as $key => $r): ?>

                    <tr>
                        <td><?php echo $key + 1;  ?></td>
                        <td><?php echo $r['name']; ?></td>
                        <td><?php echo $r['email']; ?></td>
                        <td><?php echo date('F j, Y', strtotime($r['createdAt'])) ?></td>
                        
                        <td><a href="adminresponsesview.php?id=<?php echo $r['id']; ?>" class="edit">view</a></td>
                        <td><a href="adminresponsesmanage.php?delid=<?php echo $r['id']; ?>" class="delete">delete</a></td>
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