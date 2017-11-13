<?php
$connection = mysqli_connect('localhost', 'root', '', 'todo');

if(isset($_POST['add-item'])) {
    $task = $_POST['name'];

    $query = mysqli_query($connection, "INSERT INTO tasks(task) VALUES ('$task')");
    if(mysqli_query($connection, $query)) {
        echo "<h3>You have added an item to the database</h3>";
    }
}

$query1 = mysqli_query($connection, "SELECT * FROM tasks");

while($results = mysqli_fetch_array($query1)) {
    echo "\n" . $results['id'] . "\n" . $results['task'];
}
?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width.initial-scale=1">
    <title>Task Application</title>
    </head>
    <body>
        <div class="container">
        <form action="index.php" method="POST">
            <input type="text" name="name">
            <br>
            <input type="submit" name="add-item" value="Add Item">
        </form>
        </div>
    </body>
</html>