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
    <body style="background-color:#e9e9e9;">
      <header class="parallax--bg">
      </header>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse" style="position:absolute; width:100%;">
            <button class="navbar-toggler navbar-toggler-right" type="button" 
              data-toggle="collapse" 
              data-target="#navbarsExampleDefault" 
              aria-controls="navbarsExampleDefault" 
              aria-expanded="false" 
              aria-label="Toggle navigation">
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
                  <a class="nav-link dropdown-toggle" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Projects</a>
                  <div class="dropdown-menu" aria-labelledby="dropdown01">
                    <a class="dropdown-item" href="task-list.php">Task-List</a>
                    <a class="dropdown-item" href="#">Store Item Catalog</a>
                    <a class="dropdown-item" href="#">SF Attractions</a>
                  </div>
                </li>
              </ul>
            </div>
          </nav>
        <section class="title1" style="text-align:center;">
          <div class="jumbotron jumbotron-fluid" style="background-color:white; margin-bottom:0;">
            <div class="container">
              <h1 class="display-4">Full Stack Web Developer</h1>
              <hr class="my-2">
              <p class="lead"><br>
                "These developers aren’t experts at everything; they simply have a functional knowledge 
                and ability to take a concept and turn it into a finished product. Such gurus make building 
                software much easier as they understand how everything works from top to bottom and can anticipate 
                problems accordingly."<br><b>-Hannah Westberg</b>
              </p>
            </div>
          </div>
        </section>
        <section class="parallax--bg2">
        </section>
        <section class="title2" style="text-align:center;">
          <div class="jumbotron jumbotron-fluid" style="background-color:white; margin-bottom:0;">
            <div class="container">
              <h1 class="display-4">Personal Projects</h1>
              <hr class="my-2">
              <p class="lead"><br>
                "The best way to learn is to teach."<br><b>-Frank Oppenheimer</b>
              </p>
            </div>
          </div>
        </section>
        <section style="width: 50%;">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
              <div class="carousel-item active">
                <img src="images/cali.jpg" style="text-align:center;" alt="First slide">
              </div>
              <div class="carousel-item">
                <img src="images/store.jpg" style="text-align:center;" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img src="images/ggb.jpg" style="text-align:center;" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </section>
        <section class="title2" style="text-align:center;">
          <div class="jumbotron jumbotron-fluid" style="background-color:white; margin-bottom:0;">
            <div class="container">
              <h1 class="display-4">Personal Projects</h1>
              <hr class="my-2">
              <p class="lead"><br>
                "The best way to learn is to teach."<br><b>-Frank Oppenheimer</b>
              </p>
            </div>
          </div>
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" 
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" 
            crossorigin="anonymous"></script>
        <script src=https://cdnjs.cloudflare.com/ajax/libs/animejs/2.2.0/anime.min.js></script>
        <script src="js/parallax.js"></script>
        <script>
          $('#btn-1').click(function() {
            window.location.href = './task-list.php';
            return false;
          });
          $('#btn-2').click(function() {
            window.location.href = './task-list.php';
            return false;
          });
          $('#btn-3').click(function() {
            window.location.href = './task-list.php';
            return false;
          });
          </script>
          <footer>
          </footer>  
    </body>
</html>