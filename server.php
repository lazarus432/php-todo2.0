<?php

//initialize variable
$task = "";
$id = "0";
$error = "";

//connect to database
$connection = mysqli_connect('localhost', 'root', '', 'todo');

//if add item is clicked
if(isset($_POST['add-item'])) {
    $task = $_POST['name'];
    if(empty($task)){
        $error = "Warning! You must first enter a task.";
    } else {
        $query = mysqli_query($connection, "INSERT INTO tasks(task) VALUES ('$task')");
        header('location: index.php'); // redirect to index page after query
    }
}

//delete task
if(isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($connection, "DELETE FROM tasks WHERE id=$id");
    header('location: index.php'); //redirect to index page after query
}

//retrieve information
$results = mysqli_query($connection, "SELECT * FROM tasks");

?>