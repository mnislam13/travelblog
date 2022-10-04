<?php

include("db.php");
include("validateCat.php");
include("middleware.php");


$table ='categories';

$errors = array();
$id = '';
$name = '';
$description = '';

$cats = selectAll($table);

if (isset($_POST['add-cat'])) {
    adminOnly();

    $errors = validateCat($_POST);

    if (count($errors) == 0) {
        unset($_POST['add-cat']);
        $cats_id = create($table, $_POST);
        $_SESSION['msg'] = 'Category created succesfully';
        $_SESSION['type'] = 'success';
        header('location: admincatsmanage.php');
        exit();
    } else {
        $name = $_POST['name'];
        $description = $_POST['description'];
    }

    
}


if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cats = selectOne($table, ['id' => $id]);

    $id = $cats['id'];
    $name = $cats['name'];
    $description = $cats['description'];

}


if (isset($_GET['del_id'])) {
    adminOnly();

    $del_id = $_GET['del_id'];
    $count = remove($table, $del_id);
    $_SESSION['msg'] = 'Category deleted succesfully';
    $_SESSION['type'] = 'success';
    header('location: admincatsmanage.php');
    exit();
}


if (isset($_POST['update-cat'])) {
    adminOnly();
    
    $errors = validateUpdate($_POST);

    if (count($errors) == 0) {
        $id = $_POST['id'];
        unset($_POST['update-cat'], $_POST['id']);
        $cat_id = edit($table, $id, $_POST);
        $_SESSION['msg'] = 'Category updated succesfully';
        $_SESSION['type'] = 'success';
        header('location: admincatsmanage.php');
        exit();
    } else {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $description = $_POST['description'];
    }


    
}

?>