<?php

function validatePost($post) 
{
    $errors = array();

    $existingPost = selectOne('posts', ['title' => $post['title']]);
    if (empty($post['title'])) {
        array_push($errors, 'Title is required.');
    }
    else if (empty($post['body'])) {
        array_push($errors, 'Blog body is empty.');
    }
    else if (empty($post['cat_id'])) {
        array_push($errors, 'Select a Category.');
    }

    
    return $errors;
}


?>