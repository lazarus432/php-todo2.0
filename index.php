<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Task Application</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div id="particles-js">
            <div class="container">
                <form action="index.php" method="POST">
                    <?php if(isset($error)) { ?>
                        <p><?php echo $error; ?></p>
                    <?php } ?>
                        <input type="text" name="name">
                        <button type="submit" class="button" name="add-item">Add Item</button>
                        <br>
                        <?php $id = 1; while ($row = mysqli_fetch_array($results)) { ?>
                            <ul>
                                <li><?php echo $id; ?></li>
                                <li><?php echo $row['task']; ?></li>
                                <li><a href="#">Edit</a></li>
                                <li><a href="index.php?del=<?php echo $row['id']; ?>">Delete</a></li>
                            </ul>
                        <?php $id++; } ?>
                </form>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
        <script async>
            particlesJS.load('particles-js', 'particles.json', function(){
                console.log('particles.json loaded...');
            });
        </script>
    </body>
</html>