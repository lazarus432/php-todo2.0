<?php

//initialize variable
$task = "";
$id = "0";

//connect to database
$connection = mysqli_connect('localhost', 'root', '', 'todo');

//if add item is clicked
if(isset($_POST['add-item'])) {
    $task = $_POST['name'];
    $query = mysqli_query($connection, "INSERT INTO tasks(task) VALUES ('$task')");
    header('location: index.php'); // redirect to index page after query
}

//retrieve information
$results = mysqli_query($connection, "SELECT * FROM tasks");

?>