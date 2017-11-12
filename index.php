<?php
$connection = mysqli_connect('localhost', 'root', '', 'todo');

$query = mysqli_query($connection, "SELECT * FROM tasks");

while($results = mysqli_fetch_array($query)) {
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