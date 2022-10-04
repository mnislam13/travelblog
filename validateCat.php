<?php

function validateCat($cat) 
{
    $errors = array();
    $existingCat = selectOne('categories', ['name' => $cat['name']]);

    if (empty($cat['name'])) {
        array_push($errors, 'Category name is required.');
    }
    else if ($existingCat) {
        array_push($errors, 'Category already exists');
    }
    
    return $errors;
}

//for update
function validateUpdate($cat) 
{
    $errors = array();

    if (empty($cat['name'])) {
        array_push($errors, 'Category name is required.');
    }
    
    return $errors;
}
