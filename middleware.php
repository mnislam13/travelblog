<?php


function usersOnly($redirect = 'index.php') 
{
    if (empty($_SESSION['id'])) {
        $_SESSION['msg'] = "you need to sign-in first";
        $_SESSION ['type'] = "error";
        header('location: signin.php');
        exit(0);
    }
}


function adminOnly($redirect = 'index.php') 
{
    if (empty($_SESSION['id']) || empty($_SESSION['admin'])) {
        $_SESSION['msg'] = "you are not authorized";
        $_SESSION ['type'] = "error";
        header('location: index.php');
        exit(0);
    }
}


function guestOnly($redirect = 'index.php') 
{
    if (empty($_SESSION['id']) || empty($_SESSION['admin'])) {
        header('location: index.php');
        exit(0);
    }
}



?>