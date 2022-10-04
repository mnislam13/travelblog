<?php include("controlresponse.php"); ?>
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


    <title>Send Us A Message | TravelBlog</title>

</head>

<body>
    <!--NB:: include header-->
    <?php include("header.php"); ?>


    <div class="user-content">
        <form action="contact.php" method="post">
            <h4 class="form-title">Send Us A Message</h4>

            <!--msg errors-->
            <?php include("formErrors.php"); ?>
            <!--ends msg errors-->
            

            <div>
                <label>Name</label>
                <input type="text" name="name" value="<?php echo $name; ?>" class="text-input">
            </div>
            <div>
                <label>Email</label>
                <input type="email" name="email" value="<?php echo $email; ?>" class="text-input">
            </div>
			<div class="form-group">
                <label>Message</label>
                <textarea class="form-control" name="message"><?php echo $message ?></textarea>
            </div>
            <div>
                <button type="submit" name="sendmsg" class="btn btn-primary">submit</button>
            </div>

        </form>
    </div>



    <!--NB:: include footer-->
    <?php include("footer.php"); ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>-->

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
</body>

</html>