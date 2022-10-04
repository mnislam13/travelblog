<?php 


include("db.php");
include("validateUser.php");
include("middleware.php");

$table = 'users';
$admin_users = selectAll($table);

$errors = array();
$username = '';
$email = '';
$password = '';
$passwordConf = '';
$admin = '';
$id = "";



function logUserIn($user) {
    $_SESSION['id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    $_SESSION['admin'] = $user['admin'];
    $_SESSION['msg'] = 'You are successfully logged in';
    $_SESSION['type'] = 'success';

    if ($_SESSION['admin']) {
        header('location: admindashboard.php');
    } else {
        header('location: index.php');
    }
    exit();
}

//User signup with logging in or admin-user creation
if(isset($_POST['signup-btn']) || isset($_POST['admin-user'])) {

    $errors = validateUser($_POST);

    if (count($errors) == 0) {
        unset($_POST['signup-btn'], $_POST['passwordConf']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        if (isset($_POST['admin-user'])) {
            unset($_POST['admin-user']);
            adminOnly();

            $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
            $user_id = create($table, $_POST);
            $_SESSION['msg'] = 'Admin user created succesfully';
            $_SESSION['type'] = 'success';
            header('location: adminusersmanage.php');
            exit();
        } else {
            $_POST['admin'] = 0;
            $user_id = create($table, $_POST);
            $user = selectOne($table, ['id' => $user_id]);
            // log user in
            logUserIn($user);
        }
        
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
        $admin = isset($_POST['admin']) ? 1 : 0;
    }
    
}


//update initialize
if(isset($_GET['id'])) {
    $user = selectOne($table, ['id' => $_GET['id']]);
    // dd($post);

    $username = $user['username'];
    $email = $user['email'];
    $admin = $user['admin'];
    $id = $user['id'];
}


//update
if (isset($_POST['update-user'])) {
    adminOnly();
    $errors = validateUpdate($_POST);

    if (count($errors) == 0) {
        $id =$_POST['id'];
        unset($_POST['update-user'], $_POST['passwordConf'], $_POST['id']);
        $_POST['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);
        
        $_POST['admin'] = isset($_POST['admin']) ? 1 : 0;
        $count = edit($table, $id, $_POST);
        $_SESSION['msg'] = 'Admin user updated succesfully';
        $_SESSION['type'] = 'success';
        header('location: adminusersmanage.php');
        exit();
        
    } else {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $passwordConf = $_POST['passwordConf'];
        $admin = isset($_POST['admin']) ? 1 : 0;
    }
} 



//sign-in
if (isset($_POST['signin-btn'])) {
    $errors = validateSignin($_POST);

    if (count($errors) == 0) {
        $user = selectOne($table, ['email' => $_POST['email']]);
        if (isset($user) && password_verify($_POST['password'], $user['password'])) {
            // log user in
            logUserIn($user);
        } else {
            array_push($errors, 'Incorrect Email or Password');
            $email = $_POST['email'];
            $password = $_POST['password'];
        } 

    } else {
        $email = $_POST['email'];
        $password = $_POST['password'];
    }
}

//delete
if(isset($_GET['del_id'])) {
    adminOnly();

    $count = remove($table, $_GET['del_id']);
    $_SESSION['msg'] = 'User account deleted succesfully';
    $_SESSION['type'] = 'success';
    header('location: adminusersmanage.php');
}



?>