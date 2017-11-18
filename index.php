<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Task Application</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" 
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" 
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
        <script async>
            particlesJS.load('particles-js', 'particles.json', function(){
                console.log('particles.json loaded...');
            });
        </script>
    </body>
</html>