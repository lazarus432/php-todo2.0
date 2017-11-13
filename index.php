<?php
$connection = mysqli_connect('localhost', 'root', '', 'todo');

if(isset($_POST['add-item'])) {
    $task = $_POST['name'];

    $query = mysqli_query($connection, "INSERT INTO tasks(task) VALUES ('$task')");
    if(mysqli_query($connection, $query)) {
        echo "<h3>You have added an item to the database</h3>";
    }
    $query1 = mysqli_query($connection, "SELECT * FROM tasks");
    
    while($results = mysqli_fetch_array($query1)) {
        echo "\n" . $results['id'] . "\n" . $results['task'];
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Task Application</title>
        <style>
            body {
                background-color: lightgray;
                width: 100%;
                max-width: 600px;
                margin: 20px auto;
            }
            .container {
                background-color: white;
                padding: 20px;
            }
            .tasks {
                text-align: center;
            }
            ul {
                -webkit-padding-start: 0;
                list-style-type: none;
            }
            input {
                width: 100%;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="heading">
                <h1 align="center">Tasks</h1>
            </div>
            <div class="tasks">
                <ul>
                    <li>A task</li>
                </ul>
            </div>
            <form action="index.php" method="POST">
                <input align: "center" type="text" name="name">
                <br>
                <input type="submit" name="add-item" value="Add Item">
            </form>
        </div>
    </body>
</html>