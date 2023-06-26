<?php

try {

    $conn = new PDO('mysql:host=php_todo_list.local;dbname=php_todo_list', 'root', '');
    // echo "successful database connection";
} catch (PDOException $error) {
    echo "Error connection database: " . $error->getMessage();
}

$sql = "SELECT * FROM todolist";
$resultToConnect = $conn->query($sql);



?>