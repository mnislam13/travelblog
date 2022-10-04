<?php

include("db.php");
include("middleware.php");


function validateResponse($response) 
{
    $errors = array();

    if (empty($response['name'])) {
        array_push($errors, 'Name is required.');
    }
    else if (empty($response['email'])) {
        array_push($errors, 'Email is required.');
    }
    else if (empty($response['message'])) {
        array_push($errors, 'Message is empty.');
    }
    
    return $errors;
}


$table = 'responses';
$responses = selectAll($table);

$errors =array();

$id = "";
$name = "";
$email = "";
$message = "";


//message insertion to db
if (isset($_POST['sendmsg'])) {

    global $con;
    $errors = validateResponse($_POST);
    if (count($errors) == 0) {
        unset($_POST['sendmsg']);

        $response_id = create($table, $_POST);
        
        $_SESSION['msg'] = 'Response submitted succesfully';
        $_SESSION['type'] = 'success';
        header('location: index.php');
        exit();
    } else {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
    }
    
}




//view
if(isset($_GET['id'])) {
    adminOnly();
    $response = selectOne($table, ['id' => $_GET['id']]);
    // dd($post);
    $name = $response['name'];
    $email = $response['email'];
    $message = $response['message'];
    $id = $response['id'];
}


//delete
if(isset($_GET['delid'])) {
    adminOnly();

    $count = remove($table, $_GET['delid']);
    $_SESSION['msg'] = 'Response message deleted succesfully';
    $_SESSION['type'] = 'success';
    header('location: adminresponsesmanage.php');
}

?>