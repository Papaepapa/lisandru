<!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>vinlisandru</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/grayscale.min.css" rel="stylesheet">
  <script src="checkBox.js"></script>
  <style>
    
  .link-button { 
     background : none;
     border: solid;
     border-radius: 10%;
     color: #FFD700;
     cursor: pointer; 
    }
  .link-button:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
    
  </style>


</head>

<body id="page-top">



<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="index.php">Vin Lisandru</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">
                
                <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $db_name = "lisandru";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $db_name);
                
                session_start();
                
                echo  $_SESSION['user'];
                
                
                ?>
            </a>
          </li>
          <li class="nav-item">
            <div class="nav-link js-scroll-trigger">
                <?php
                    
                    if (!isset($_SESSION['user'])){
                        echo "<a href='login.php'>"."Log in"."</a>";
                    }
                    else{
                        echo "<a href='logout.php'>Log out</a>";
                    }
                ?>

            </div>
          </li>
          <li class="nav-item">
            <div class="nav-link js-scroll-trigger">
                <?php

                    if (isset($_SESSION['cost'])){
                        
                        echo "<a href='continut_cos.php'>cosul tau ".($_SESSION['cost']/10)."</a>";
                        
                    }
                    
                ?>

            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Lisandru</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5">Pentru ca vinul se mai face si din struguri</h2>
      </div>
    </div>
  </header>

  

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <h1>Comenzi</h1>
        <!-- Project One Row -->
    
    <div class='col-lg-6'>
        <div class='bg-black text-center h-100 project'>
        <div class='d-flex h-100'>
            <div class='project-text w-100 my-auto text-center text-lg-left'>
            <h4 class='text-white'>PAPA</h4>
            <p class='mb-0 text-white-50'>Email   : alex94_ex@yahoo.com</p>
            <p class='mb-0 text-white-50'>Telefon : 0761946367</p>
            <hr class='d-none d-lg-block mb-0 ml-0'>
            <p  class='mb-0 text-white-50'>Sticle de vin Rosu : 0</p>
            <p  class='mb-0 text-white-50'>Sticle de vin Alb : 1</p>
            <p  class='mb-0 text-white-50'>Sticle de vin Rose : 1</p>
            <p  class='mb-0 text-white-50'> 30/11/2020</p>
            </div>
        </div>
        </div>
    </div><br>
        <!-- Project One Row -->
    
    <div class='col-lg-6'>
        <div class='bg-black text-center h-100 project'>
        <div class='d-flex h-100'>
            <div class='project-text w-100 my-auto text-center text-lg-left'>
            <h4 class='text-white'>PAPA</h4>
            <p class='mb-0 text-white-50'>Email   : alex94_ex@yahoo.com</p>
            <p class='mb-0 text-white-50'>Telefon : 0761946367</p>
            <hr class='d-none d-lg-block mb-0 ml-0'>
            <p  class='mb-0 text-white-50'>Sticle de vin Rosu : 30</p>
            <p  class='mb-0 text-white-50'>Sticle de vin Alb : 0</p>
            <p  class='mb-0 text-white-50'>Sticle de vin Rose : 0</p>
            <p  class='mb-0 text-white-50'> 30/11/2020</p>
            </div>
        </div>
        </div>
    </div><br>
        <!-- Project One Row -->
    
    <div class='col-lg-6'>
        <div class='bg-black text-center h-100 project'>
        <div class='d-flex h-100'>
            <div class='project-text w-100 my-auto text-center text-lg-left'>
            <h4 class='text-white'>PAPA</h4>
            <p class='mb-0 text-white-50'>Email   : alex94_ex@yahoo.com</p>
            <p class='mb-0 text-white-50'>Telefon : 0761946367</p>
            <hr class='d-none d-lg-block mb-0 ml-0'>
            <p  class='mb-0 text-white-50'>Sticle de vin Rosu : 10</p>
            <p  class='mb-0 text-white-50'>Sticle de vin Alb : 4</p>
            <p  class='mb-0 text-white-50'>Sticle de vin Rose : 7</p>
            <p  class='mb-0 text-white-50'> 30/11/2020</p>
            </div>
        </div>
        </div>
    </div><br>
        
        

    </div>   
  </section>

  

  

  <!-- Footer -->
  <footer class="bg-black small text-center text-white-50">
    <div class="container">
      Copyright &copy; Your Website 2019
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/grayscale.min.js"></script>

</body>

</html>
