<?php

session_start();
require('dbconnect.php');

/*
function dd($value)   //to be deleted.. it's just to observe outputs
{
    echo "<pre>", print_r($value, true). "</pre>";
    die();
}
*/


//helping function for selectAll and selectOne function to execute statement
function exeuteQuery($sql, $data)
{
    global $con;
    $statement = $con->prepare($sql);
    $values = array_values($data);
    $types = str_repeat('s', count($values));
    $statement->bind_param($types, ...$values);
    $statement->execute();
    return $statement;
}

//$sql = "SELECT * FROM users WHERE username='Najrul" AND admin='1';
//$sql = "SELECT * FROM users
function selectAll($table, $conditions = [])
{
    global $con;
    $sql = "SELECT * FROM $table";
    if (empty($conditions)) {
        $statement = $con->prepare($sql);
        $statement->execute();
        $records = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    } else {
        //returns records that match the '$conditions'

        $i = 0;
        foreach ($conditions as $key => $value) {
            if ($i == 0) {
                $sql = $sql . " WHERE $key = ?";
            } else {
                $sql = $sql . " AND $key = ?";
            }
            $i++;
        }
        
        $statement = exeuteQuery($sql, $conditions);
        $records = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
        return $records;
    }
}


//$sql = "SELECT * FROM users WHERE username='Najrul" AND admin='1' LIMIT 1";
function selectOne($table, $conditions) //must match the '$conditions'
{
    global $con;
    $sql = "SELECT * FROM $table";

    $i = 0;
    foreach ($conditions as $key => $value) {
        if ($i == 0) {
            $sql = $sql . " WHERE $key=?";
        } else {
            $sql = $sql . " AND $key=?";
        }
        $i++;
    }

    $sql = $sql . " LIMIT 1";
        
    $statement = exeuteQuery($sql, $conditions);
    $records = $statement->get_result()->fetch_assoc();
    return $records;
    
}


//$sql = "INSERT INTO users SET username=?, admin=?, email=?, password=?"
function create($table, $data)
{
    global $con;
    $sql = "INSERT INTO $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i == 0) {
            $sql = $sql . "$key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }
    
    $statement = exeuteQuery($sql, $data);
    $id = $statement->insert_id;
    return $id;
}


//$sql = "UPDATE users SET username=?, admin=?, email=?, password=? WHERE id=?"
function edit($table, $check, $data)
{
    global $con;
    $sql = "UPDATE $table SET ";

    $i = 0;
    foreach ($data as $key => $value) {
        if ($i == 0) {
            $sql = $sql . "$key=?";
        } else {
            $sql = $sql . ", $key=?";
        }
        $i++;
    }

    $sql = $sql . " WHERE id=?";

    $data['check'] = $check;
    $statement = exeuteQuery($sql, $data);
    return $statement->affected_rows;
}


//using//$sql = "DELETE FROM users WHERE id=?"
function remove($table, $check)
{
    global $con;
    $sql = "DELETE FROM $table WHERE id=?";

    $statement = exeuteQuery($sql, ['check' => $check]);
    return $statement->affected_rows;
}

/*
$data = [
    'email' => 'cba@gmail.com',
    'password' => '4321',
];


$id = selectOne('users', $data);
dd($id);
*/


function searchPosts($term) 
{
    $match ='%' . $term . '%';
    global $con;
    $sql ="SELECT
        p.*, u.username
    FROM posts AS p
    JOIN users AS u ON p.user_id=u.id 
    WHERE p.published=?
    AND p.title LIKE ? OR p.body LIKE ?";

    $statement = exeuteQuery($sql, ['published' => 1, 'title' => $match, 'body' => $match]);
    $records = $statement->get_result()->fetch_all(MYSQLI_ASSOC);
    return $records;

}
