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
    <body style="background-color:#FFF;">
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
        <section style=" position: absolute; width: 40%;">
        </section>
        <div class="container social" style="width:100%; margin:0; display:inline-block;">
          <div class="row">
            <div class="col-sm">
              <svg version="1.1" id="Capa_1"xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
              <path id="github" d="M256,0C114.615,0,0,114.615,0,256s114.615,256,256,256s256-114.615,256-256S397.385,0,256,0z M408.027,408.027
                c-19.76,19.759-42.756,35.267-68.354,46.094c-6.502,2.75-13.105,5.164-19.801,7.246V423c0-20.167-6.916-35-20.75-44.5
                c8.668-0.833,16.625-2,23.875-3.5s14.918-3.667,23-6.5c8.084-2.833,15.334-6.208,21.75-10.125c6.418-3.917,12.584-9,18.5-15.25
                c5.918-6.25,10.875-13.333,14.875-21.25s7.168-17.417,9.5-28.5c2.334-11.083,3.5-23.292,3.5-36.625c0-25.833-8.416-47.833-25.25-66
                c7.668-20,6.834-41.75-2.5-65.25l-6.25-0.75c-4.332-0.5-12.125,1.333-23.375,5.5s-23.875,11-37.875,20.5
                c-19.832-5.5-40.416-8.25-61.749-8.25c-21.5,0-42,2.75-61.5,8.25c-8.833-6-17.208-10.958-25.125-14.875s-14.25-6.583-19-8
                s-9.167-2.292-13.25-2.625s-6.708-0.417-7.875-0.25s-2,0.333-2.5,0.5c-9.333,23.667-10.167,45.417-2.5,65.25
                c-16.833,18.167-25.25,40.167-25.25,66c0,13.333,1.167,25.542,3.5,36.625s5.5,20.583,9.5,28.5s8.958,15,14.875,21.25
                s12.083,11.333,18.5,15.25s13.667,7.292,21.75,10.125s15.75,5,23,6.5s15.208,2.667,23.875,3.5c-13.667,9.333-20.5,24.167-20.5,44.5
                v39.115c-7.549-2.247-14.99-4.902-22.3-7.994c-25.597-10.827-48.594-26.335-68.353-46.094
                c-19.758-19.758-35.267-42.756-46.093-68.354C46.679,313.195,41,285.043,41,256s5.679-57.195,16.879-83.675
                c10.827-25.597,26.335-48.594,46.093-68.353c19.758-19.759,42.756-35.267,68.353-46.093C198.805,46.679,226.957,41,256,41
                s57.195,5.679,83.676,16.879c25.598,10.827,48.594,26.335,68.354,46.093c19.758,19.758,35.266,42.756,46.092,68.353
                C465.32,198.805,471,226.957,471,256s-5.68,57.195-16.879,83.675C443.295,365.271,427.785,388.27,408.027,408.027z"/>
            </svg>
            </div>
            <div class="col-sm">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 485 485" style="enable-background:new 0 0 485 485;" xml:space="preserve">
              <rect x="89.016" y="189.906" width="67.506" height="203.096"/>
              <path id="linkedin" d="M122.323,162.186h0.446c23.551,0,38.194-15.601,38.194-35.101c-0.442-19.928-14.643-35.087-37.752-35.087
                C100.107,91.998,85,107.157,85,127.085C85,146.585,99.678,162.186,122.323,162.186z"/>
	            <path id="linkedin" d="M261.4,393.002V279.576c0-6.086,0.464-12.119,2.24-16.459c4.887-12.149,15.978-24.693,34.641-24.693
		            c24.439,0,34.195,18.629,34.195,45.92v108.657H400V276.535c0-62.379-33.307-91.398-77.744-91.398
		            c-35.871,0-51.883,19.74-60.856,33.547v0.665h-0.442c0.118-0.219,0.306-0.442,0.442-0.665v-28.779h-67.537
		            c0.905,19.053,0,203.096,0,203.096H261.4z"/>
	            <path id="linkedin" d="M0,0v485h485V0H0z M455,455H30V30h425V455z"/>
              </svg>
            </div>
            <div class="col-sm">
              <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" xml:space="preserve">
              <path id="email" d="M511.609,197.601c-0.001-0.77-0.173-1.933-0.472-2.603c-0.787-2.854-2.536-5.461-5.154-7.281l-73.292-50.948V82.153
                c0-7.24-5.872-13.112-13.112-13.112H335.26l-71.743-49.878c-4.484-3.121-10.437-3.134-14.935-0.026l-72.206,49.904H92.426
                c-7.242,0-13.112,5.872-13.112,13.112v53.973L5.666,187.027c-3.623,2.504-5.583,6.507-5.645,10.6
                C0.017,197.704,0,197.777,0,197.857l0.391,284.235c0.005,3.477,1.391,6.81,3.852,9.266c2.458,2.451,5.788,3.827,9.26,3.827
                c0.007,0,0.012,0,0.018,0l485.385-0.667c7.24-0.01,13.104-5.889,13.094-13.13L511.609,197.601z M432.69,168.708l41.898,29.118
                l-41.898,29.128V168.708z M256.015,45.884l33.31,23.156h-66.812L256.015,45.884z M105.538,95.265h300.928v149.921L305.43,315.428
                l-41.194-31.954c-0.064-0.05-0.119-0.081-0.181-0.126c-4.604-3.454-11.116-3.581-15.894,0.126l-41.493,32.185l-101.13-69.893
                V95.265z M79.314,168.003v59.64l-43.146-29.819L79.314,168.003z M26.258,222.867l158.669,109.655L26.578,455.346L26.258,222.867z
                M51.875,468.909l204.324-158.484l203.591,157.923L51.875,468.909z M327.144,332.271l158.276-110.036l0.32,233.059
                L327.144,332.271z"/>
		          <path id="email" d="M344.77,147.713H167.234c-7.24,0-13.112,5.872-13.112,13.112s5.872,13.112,13.112,13.112H344.77
			          c7.242,0,13.112-5.872,13.112-13.112S352.012,147.713,344.77,147.713z"/>
		          <path id="email" d="M344.77,215.895H167.234c-7.24,0-13.112,5.872-13.112,13.112c0,7.24,5.872,13.112,13.112,13.112H344.77
			          c7.242,0,13.112-5.872,13.112-13.112C357.882,221.767,352.012,215.895,344.77,215.895z"/>
              </svg>
            </div>
          </div>
        </div>
        <section class="title2" style="text-align:center;width:100%;">
          <div class="jumbotron jumbotron-fluid" style="display:flex;width:100%;background-color:white;margin-bottom:0;">
            <div class="container" style="width:100%;margin:0;">
              <h1 class="display-4">Personal Projects</h1>
              <hr class="my-2">
              <p class="lead"><br>
                "The best way to learn is to teach."<br><b>-Frank Oppenheimer</b>
              </p>
              <div id="carouselControls" class="carousel slide" data-ride="carousel" style="position:absolute;left:0;">
                <div class="carousel-inner" role="listbox">
                  <div class="carousel-item active">
                    <img src="images/cali.jpg" alt="First slide">
                  </div>
                  <div class="carousel-item">
                    <img src="images/store.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item">
                    <img src="images/ggb.jpg" alt="Third slide">
                  </div>
                </div>
                  <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                  </a>
              </div>
              </div>
            </div>
          </div>
          <div id="chartContainer" style="width:100%;">
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" 
            crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" 
            crossorigin="anonymous"></script>
        <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
        <script src="js/parallax.js"></script>
        <script>
          window.onload = function () {
            var chart = new CanvasJS.Chart("chartContainer", {
	          animationEnabled: true,
	          theme: "light2",
	          title:{
              text: "Programming Languages"
              },
              axisY: {
                title: "Skill Level"
                },
                data: [{
                  type: "pie",  
                  dataPoints: [      
                    { y: 85, label: "HTML" },
                    { y: 70,  label: "CSS" },
			              { y: 55,  label: "JavaScript" },
                    { y: 70,  label: "Python" },
                    { y: 50,  label: "PHP" },
                    { y: 40, label: "SQL" }
                  ]
                }]
              });
            chart.render();
          }
        </script>
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