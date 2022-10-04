<?php

function validateUser($user) 
{
    $errors = array();
    $existingUser = selectOne('users', ['email' => $user['email']]);

    if (empty($user['username'])) {
        array_push($errors, 'Username is required.');
    }
    else if (empty($user['email'])) {
        array_push($errors, 'Email is required.');
    }
    else if ($existingUser) {
        array_push($errors, 'Email already exists');
    }
    else if (empty($user['password'])) {
        array_push($errors, 'Enter your password.');
    }
    else if (empty($user['passwordConf'])) {
        array_push($errors, 'Confirm your password.');
    }
    else if ($user['password'] != $_POST['passwordConf']) {
        array_push($errors, 'Password do not match.');
    }
    
    return $errors;
}


function validateSignin($user) 
{
    $errors = array();
    $checkingUser = selectOne('users', ['email' => $user['email']]);

    if (empty($user['email'])) {
        array_push($errors, 'Email is required.');
    }
    else if (!isset($checkingUser)) {
        array_push($errors, 'Email has no account.');
    }
    else if (empty($user['password'])) {
        array_push($errors, 'Enter your password.');
    }
   
    
    return $errors;
}


function validateUpdate($user) 
{
    $errors = array();


    if (empty($user['username'])) {
        array_push($errors, 'Username is required.');
    }
    else if (empty($user['email'])) {
        array_push($errors, 'Email is required.');
    }
    else if (empty($user['password'])) {
        array_push($errors, 'Enter your password.');
    }
    else if (empty($user['passwordConf'])) {
        array_push($errors, 'Confirm your password.');
    }
    else if ($user['password'] != $_POST['passwordConf']) {
        array_push($errors, 'Password do not match.');
    }
    
    return $errors;
}