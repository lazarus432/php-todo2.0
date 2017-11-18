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
        <div class="container-fluid" style="margin:0; padding:0;">
            <div id="particles-js">
                <div class="container">
                    <div class="card" style="position:absolute; padding:2em; width:100%;transform: translate(0%, 20%);">
                        <div class="card-body">
                            <h2 class="card-title" align="center" style="width:100%;">Task List</h2>
                                <form class="form-inline" action="index.php" method="POST">
                                    <?php if(isset($error)) { ?>
                                        <div class="alert alert-warning" role="alert" style="width:100%;padding:1em;text-align:center;"><?php echo $error; ?></div>
                                    <?php } ?>
                                    <script>
                                        window.setTimeout(function() {
                                            $(".alert").fadeTo(500,0).slideUp(500, function(){
                                                $(this).remove();
                                            });
                                        }, 1000);
                                    </script>
                                        <input class="form-control form-control-lg" style="width:100%;" type="text"  placeholder="Enter Task" name="name">
                                        <button type="submit" class="btn btn-primary" style="margin-top: 15px;" name="add-item">Add Item</button>
                                </form>
                                <table class="table table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Priority</th>
                                            <th>Task</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <?php $id = 1; while ($row = mysqli_fetch_array($results)) { ?>
                                    <tbody>
                                        <tr>
                                            <td><?php echo $id; ?></td>
                                            <td><a href="#"><img src="images/priority.png"></a></td>
                                            <td><?php echo $row['task']; ?></td>
                                            <td><a href="#"><img src="images/edit.png"></a></td>
                                            <td><a href="index.php?del=<?php echo $row['id']; ?>"><img src="images/trash-bin.png"></a></td>
                                        </tr>
                                    </tbody>
                                    <?php $id++; } ?>
                                </table>
                        </div>
                    </div>
                </div>
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