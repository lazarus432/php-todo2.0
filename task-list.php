<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
    <head>
        <title>Task List</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    </head>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" 
        data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" 
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <a class="navbar-brand" href="#">Nic</a>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
          <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                  <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">GitHub</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">LinkedIn</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown01" 
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
                        
                        <div class="dropdown-menu" aria-labelledby="dropdown01">
                            <a class="dropdown-item" href="task-list.php">Task-List</a>
                            <a class="dropdown-item" href="#">Store Item Catalog</a>
                            <a class="dropdown-item" href="#">SF Attractions</a>
                        </div>
                </li>
            </ul>
            <form class="form-inline my-2 my-md-0">
                <input class="form-control mr-sm-2" type="text" placeholder="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </nav>
    <body>
        <div class="container-fluid" style="margin:0; padding:0;">
            <div class="container">
                <div class="card parallax--box" style="background-color:#eceeef; margin:3em;"
            </div>
            <img class="card-img-top">
            <div class="alert alert-success" role="alert" style="margin:0;">
                <strong>Well done!</strong> You successfully read this important alert message.
            </div>
            <div id="particles-js">
            </div>
            <div class="card-body">
                <h2 class="card-title" align="center" style="width:100%;">
                    Task List
                </h2>
                <?php if(isset($error)) { ?>
                    <div class="alert alert-warning" role="alert" style="width:100%;padding:1em;text-align:center;"><?php echo $error; ?></div>
                <?php } ?>
                <form class="form-inline" action="task-list.php" method="POST">
                    <input class="form-control form-control-lg" style="width:100%;" type="text"  placeholder="Enter Task" name="name">
                    <button type="submit" class="btn btn-primary" style="margin-top: 15px;" name="add-item">Add Item</button>
                </form>
                <table class="table table-hover table-md-responsive">
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
                                <td><a href="#"><img src="images/edit-item.png"></a></td>
                                <td><a href="index.php?del=<?php echo $row['id']; ?>"><img src="images/trash-can.png"></a></td>
                            </tr>
                        </tbody>
                        <?php $id++; } ?>
                    </table>
                </div>
            </div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" 
            integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" 
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" 
            integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" 
            crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
        <script>
            particlesJS.load('particles-js', 'particles.json', function(){
                console.log('particles.json loaded...');
            });
            $(document).ready(function(){
                $('[data-toggle="popover"]').popover()
            });
            window.setTimeout(function() {
                $(".alert").fadeTo(500,0).slideUp(500, function(){
                    $(this).remove();
                    });
                }, 1000);
        </script>
    </body>
    <footer style="height:1000px;">
    </footer>
</html>