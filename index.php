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
        <section class="parallax--bg">
          <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
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
          <div id="welcomeBox" class="welcome" style="background-color: #292b2c!important; position:absolute; top:20em; right:20em;">
              <pre style="color: #FFF;">{"Loading":"8%"}</pre>
          </div>
          <div class="card text-white bg-dark mb-3 d-inline-block parallax--box" style="max-width:17rem; background-color: #292b2c!important; position:absolute; top: 10em; right: 3%;">
            <div class="card-header" style="background-color: #e9e9e9; color:black;">Header</div>
              <div class="card-body">
                <h4 class="card-title">Primary card title</h4>
                <p class="card-text">
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                  Some quick example text to build on the card title and make up the bulk of the card's content.
                </p>
              </div>
            </div>
          <svg id="svg" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: block;width:100%;height:100%;"><path class="path" d="M163.756 31.569 C 156.355 35.584,155.017 44.242,154.343 92.500 L 153.811 130.500 150.299 137.724 C 143.576 151.554,120.636 169.698,113.000 167.225 C 107.143 165.328,107.547 164.053,116.734 155.451 C 141.592 132.174,139.260 104.160,113.440 115.888 C 97.615 123.076,89.726 160.018,101.839 170.211 C 114.313 180.707,139.540 170.114,149.972 150.000 C 155.370 139.592,155.894 141.573,160.634 190.233 C 161.327 197.350,165.613 204.000,169.506 204.000 C 170.878 204.000,172.000 203.630,172.000 203.177 C 172.000 202.725,170.844 193.612,169.432 182.927 C 168.019 172.242,166.042 156.653,165.039 148.285 L 163.213 133.070 167.670 119.285 C 177.406 89.171,182.925 60.812,181.669 47.355 C 180.401 33.780,172.505 26.822,163.756 31.569 M173.130 42.750 C 175.986 50.019,170.441 85.549,162.634 110.000 C 159.432 120.030,160.781 63.785,164.080 49.762 C 166.108 41.136,171.005 37.342,173.130 42.750 M89.665 46.256 C 88.053 47.435,87.724 49.951,86.952 67.048 C 86.453 78.075,84.967 93.863,83.521 103.500 C 82.117 112.850,80.723 122.525,80.422 125.000 C 79.642 131.425,75.911 146.937,75.013 147.492 C 72.417 149.096,60.587 111.969,57.512 92.564 C 55.750 81.449,54.989 80.000,50.913 80.000 C 47.204 80.000,47.667 78.954,36.678 112.144 C 31.494 127.803,25.283 144.856,22.876 150.038 L 18.500 159.461 17.850 153.480 C 17.493 150.191,16.472 136.475,15.582 123.000 C 12.262 72.750,11.818 70.000,7.025 70.000 C 0.681 70.000,-0.782 73.456,1.443 83.188 C 2.801 89.126,4.953 109.530,8.488 150.000 C 10.472 172.711,10.779 174.490,13.077 176.570 C 19.932 182.773,32.164 159.081,48.635 107.703 C 49.422 105.249,50.175 107.022,54.795 122.203 C 64.425 153.846,74.787 171.432,80.186 165.297 C 84.884 159.959,95.914 88.949,96.282 61.673 L 96.500 45.500 93.999 45.208 C 92.624 45.047,90.673 45.519,89.665 46.256 M273.625 102.798 C 271.885 105.613,270.893 173.225,272.565 175.072 C 276.059 178.932,279.684 177.634,280.442 172.250 C 282.837 155.258,295.921 119.827,298.350 123.757 C 298.663 124.265,298.829 132.964,298.717 143.090 C 298.486 164.044,299.035 166.329,304.177 165.808 C 306.981 165.524,307.437 164.909,309.961 158.000 C 313.002 149.676,321.413 132.481,322.890 131.568 C 323.907 130.940,324.512 133.311,325.553 142.000 C 327.084 154.788,332.683 162.000,341.077 162.000 C 344.734 162.000,346.000 162.377,346.000 163.465 C 346.000 169.250,357.456 175.497,366.822 174.819 C 378.105 174.003,399.770 154.779,399.958 145.417 C 400.039 141.386,398.607 142.094,390.093 150.295 C 373.990 165.805,364.567 170.283,358.734 165.200 C 357.083 163.761,357.541 163.123,365.734 155.451 C 387.009 135.529,390.011 113.958,371.500 114.026 C 357.381 114.077,345.000 131.217,345.000 150.710 C 345.000 154.333,344.689 155.000,343.000 155.000 C 337.619 155.000,334.351 147.790,332.475 131.783 C 330.030 110.921,322.190 111.052,311.999 132.125 C 307.531 141.364,307.010 140.533,306.985 124.125 C 306.950 100.892,294.868 103.391,283.825 128.915 L 280.976 135.500 281.633 120.739 C 282.228 107.374,282.120 105.791,280.490 103.989 C 278.694 102.004,274.559 101.287,273.625 102.798 M196.500 114.866 C 182.007 121.466,169.906 155.095,177.012 169.024 C 183.427 181.598,212.461 169.299,227.823 147.500 L 229.937 144.500 229.968 150.201 C 230.085 171.245,244.036 182.575,255.270 170.750 C 265.581 159.896,271.971 132.318,265.948 124.661 C 262.046 119.701,244.413 113.000,235.261 113.000 C 229.316 113.000,226.448 116.627,229.621 120.133 C 230.934 121.584,231.110 123.147,230.550 128.376 L 229.859 134.827 219.680 144.710 C 208.016 156.033,201.991 160.448,194.696 163.017 C 175.152 169.900,184.750 133.636,206.098 119.937 C 215.396 113.971,207.558 109.830,196.500 114.866 M125.164 127.000 C 124.980 128.925,124.121 132.004,123.257 133.842 C 120.013 140.739,104.737 154.766,106.347 149.369 C 106.654 148.341,107.218 146.150,107.601 144.500 C 110.967 129.991,126.347 114.666,125.164 127.000 M374.164 127.000 C 373.980 128.925,373.121 132.004,372.257 133.842 C 369.013 140.739,353.737 154.766,355.347 149.369 C 355.654 148.341,356.218 146.150,356.601 144.500 C 359.967 129.991,375.347 114.666,374.164 127.000 M252.575 127.405 C 262.992 132.175,262.002 148.137,250.498 160.870 C 242.326 169.916,239.496 165.865,239.512 145.142 C 239.530 121.820,239.742 121.531,252.575 127.405 " stroke="black" fill="none" fill-rule="evenodd"></path>
        </svg>
        </section>
        <section class="title1" style="width:75%; text-align:center;">
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
        <section class="projects">
        <div class="card-group">
          <div class="card" style="background-color: #e9e9e9;">
            <div class="card-body">
              <h4 class="card-title">San Francisco Attractions Map</h4>
              <img src="images/sf.jpg" alt="San Francisco">
              <div class="overlay">
                <div class="project-text">
                  <button id="btn-1" type="button">See Project</button>
                </div>
              </div>
              <div class="card-body">
                <p class="card-text">
                  August 2017
                </p>
              </div>
            </div>
          </div>
          <div class="card" style="background-color: #e9e9e9;">
            <div class="card-body">
              <h4 class="card-title">Store Catalog</h4>
              <img src="images/mountain.jpg" alt="Mountains">
              <div class="overlay">
                <div class="project-text">
                  <button id="btn-2" type="button">See Project</button>
                </div>
              </div>
              <div class="card-body">
                <p class="card-text">
                  September 2017
                </p>
              </div>
            </div>
          </div>
          <div class="card" style="background-color: #e9e9e9;">
            <div class="card-body">
              <h4 class="card-title">Linux Configuration</h4>
              <img src="images/golden.jpg" alt="Golden Gate Bridge">
              <div class="overlay">
                <div class="project-text">
                  <button id="btn-3" type="button">See Project</button>
                </div>
              </div>
              <div class="card-body">
                <p class="card-text">
                  October 2017
                </p>
              </div>
            </div>
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

          var obj = { Loading: '0%' };
          
          var welcomeBox = anime({
            targets: obj,
            Loading: '100%',
            round: 1,
            easing: 'linear',
            update: function() {
              var el = document.querySelector('#welcomeBox pre');
              el.innerHTML = JSON.stringify(obj);
            }
          });
        </script>
    </body>
    <footer style="height:100px;">
    </footer>
</html>