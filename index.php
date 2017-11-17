<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Task Application</title>
        <link rel="stylesheet" type="text/css" href="style.css"
    </head>
    <body>
        <div class="container">
            <div class="heading">
                <h1 align="center">Tasks</h1>
            </div>
            <div class="tasks">
                <?php $id = 1; while ($row = mysqli_fetch_array($results)) { ?>
                    <ul>
                        <li><?php echo $id; ?></li>
                        <li><?php echo $row['task']; ?></li>
                        <li><a href="#">Edit</a></li>
                        <li><a href="index.php?del=<?php echo $row['id']; ?>">Delete</a></li>
                    </ul>
                <?php $id++; } ?>
            </div>
            <form action="index.php" method="POST">
            <?php if(isset($error)) { ?>
                <p><?php echo $error; ?></p>
            <?php } ?>
                <input align: "center" type="text" name="name">
                <br>
                <input type="submit" name="add-item" value="Add Item">
            </form>
        </div>
    </body>
</html>