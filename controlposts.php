<?php

include("db.php");
include("validatePost.php");
include("middleware.php");


$table = 'posts';

$cats = selectAll('categories');
$posts = selectAll($table);


$errors =array();

$id = "";
$title = "";
$body = "";
$cat_id = "";
$published = "";
$trending = "";


//edit
if(isset($_GET['id'])) {
    $post = selectOne($table, ['id' => $_GET['id']]);
    // dd($post);

    $id = $post['id'];
    $title = $post['title'];
    $body = $post['body'];
    $cat_id = $post['cat_id'];
    $published = $post['published'];
    $trending = $post['trending'];
}


//delete
if(isset($_GET['del_id'])) {
    adminOnly();

    $count = remove($table, $_GET['del_id']);

    $_SESSION['msg'] = "Post deleted succesfully";
    $_SESSION['type'] = "success";
    header('location: adminpostsmanage.php'); 
    exit();
}

//publish-unpublish
if(isset($_GET['published']) && ($_GET['p_id'])) {
    adminOnly();

    $published = $_GET['published'];
    $p_id = $_GET['p_id'];

    $count = edit($table, $p_id, ['published' => $published]);
    if ($published == 1) {
        $_SESSION['msg'] = "Post published succesfully";
    } else {
        $_SESSION['msg'] = "Post unpublished succesfully";
    }
    $_SESSION['type'] = "success";
    header('location: adminpostsmanage.php'); 
    exit();
}

//trending set-unset
if(isset($_GET['trending']) && ($_GET['t_id'])) {
    adminOnly();

    $trending = $_GET['trending'];
    $t_id = $_GET['t_id'];

    $count = edit($table, $t_id, ['trending' => $trending]);
    if ($trending == 1) {
        $_SESSION['msg'] = "Post set trending succesfully";
    } else {
        $_SESSION['msg'] = "Post unset trending succesfully";
    }
    $_SESSION['type'] = "success";
    header('location: adminpostsmanage.php'); 
    exit();
}


//post validation : add button event
if (isset($_POST['add-post'])) {
    adminOnly();

    // dd($_FILES['image']['name']);
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $img_name = time() . '_' . $_FILES['image']['name'];
        $destination = "C:/xampp/htdocs/travelblog/img/" . $img_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        
        if ($result) {
            $_POST['image'] = $img_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
        array_push($errors, "Post image required");
    }
    


    if (count($errors) == 0) {
        unset($_POST['add-post']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0; //tik dile 1 
        $_POST['trending'] = isset($_POST['trending']) ? 1 : 0;
        
        $post_id = create($table, $_POST);

        $_SESSION['msg'] = "Post created succesfully";
        $_SESSION['type'] = "success";
        header('location: adminpostsmanage.php'); 
        exit();

    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $cat_id = $_POST['cat_id'];
        $published = isset($_POST['published']) ? 1 : 0;
        $trending = isset($_POST['trending']) ? 1 : 0;
    }
    
}


//post validation : update button event
if (isset($_POST['update-post'])) {
    adminOnly();
    
    $errors = validatePost($_POST);

    if (!empty($_FILES['image']['name'])) {
        $img_name = time() . '_' . $_FILES['image']['name'];
        $destination = "C:/xampp/htdocs/travelblog/img/" . $img_name;

        $result = move_uploaded_file($_FILES['image']['tmp_name'], $destination);
        
        if ($result) {
            $_POST['image'] = $img_name;
        } else {
            array_push($errors, "Failed to upload image");
        }
    } else {
        array_push($errors, "Post image required");
    }


    if (count($errors) == 0) {
        $pid = $_POST['id'];
        unset($_POST['update-post'], $_POST['id']);
        $_POST['user_id'] = $_SESSION['id'];
        $_POST['published'] = isset($_POST['published']) ? 1 : 0; //tik dile 1 
        $_POST['trending'] = isset($_POST['trending']) ? 1 : 0;
        
        $count = edit($table, $pid, $_POST);

        $_SESSION['msg'] = "Post updated succesfully";
        $_SESSION['type'] = "success";
        header('location: adminpostsmanage.php'); 
        exit();

    } else {
        $title = $_POST['title'];
        $body = $_POST['body'];
        $cat_id = $_POST['cat_id'];
        $published = isset($_POST['published']) ? 1 : 0;
        $trending = isset($_POST['trending']) ? 1 : 0;
    }


}



?>