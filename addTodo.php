<?php

try {
	$conn = new PDO('mysql:host=php_todo_list.local;dbname=php_todo_list', 'root', '');
	// echo "successful database connection";
} catch (PDOException $error) {
	echo "Error connection database: " . $error->getMessage();
}

// add todo
if (isset($_POST['add_todo'])) {
	$todo = ($_POST['todo']);
	$sql = 'INSERT INTO todolist (title) VALUE(?)';
	$sqlAddTodo = $conn->prepare($sql);
	$sqlAddTodo->execute([$todo]);
}

// delete todo
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = 'DELETE FROM todolist WHERE id=?';
	$sqlDeleteTodo = $conn->prepare($sql);
	$sqlDeleteTodo->execute(([$id]));
}

// update todo
if (isset($_POST['id'])) {
	$id = ($_POST['id']);
	$completed = (isset($_POST['todo_checked'])) ? 1 : 0;
	$sql = 'UPDATE todolist SET completed=? WHERE id=?';
	$isChecked = $conn->prepare($sql);
	$isChecked->execute(([$completed, $id]));
}

$sql = "SELECT * FROM todolist";

$resultToConnect = $conn->query($sql);

