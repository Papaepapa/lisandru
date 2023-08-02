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
            <a class="nav-link js-scroll-trigger" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#projects">Wine</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#signup">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
    <!-- Signup Section -->
   <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Cosul tau de cumparaturi</h2>
          <div style="background-color:white; opacity:70%; ">
                <?php
	                session_start();
                    if (isset($_SESSION['cost']) and $_SESSION['cost']!=0){
                        if ( isset( $_SESSION[ 'vin_rose' ] ) ){
                            $vin_rose=$_SESSION['vin_rose'];
                            if ($vin_rose != 0){
                                echo "<br>";
                                echo "Sticle de vin Rose : ".$vin_rose;
                                echo "<br>";
                                echo "<br>";
                            }
                        }
                        if ( isset( $_SESSION[ 'vin_rosu' ] ) ){
                            $vin_rose=$_SESSION['vin_rosu'];
                            if ($vin_rose != 0){
                                echo "<br>";
                                echo "Sticle de vin Rosu : ".$vin_rose;
                                echo "<br>";
                                echo "<br>";
                            }
                        }
                        if ( isset( $_SESSION[ 'vin_alb' ] ) ){
                            $vin_rose=$_SESSION['vin_alb'];
                            if ($vin_rose != 0){
                                echo "<br>";
                                echo "Sticle de vin Alb : ".$vin_rose;
                                echo "<br>";
                                echo "<br>";
                            }
                        }

                        echo "Suma totala : ".$_SESSION['cost'];
                        echo " euro";
                    }
                    else{
                        echo "Cosul tau este gol";
                    }
	                
                   
                ?>
          </div>
          <br>
          <br>
          <?php 
            if (isset($_SESSION['cost']) and $_SESSION['cost']!=0){

                echo "<form class='form-inline d-flex' action='sterge_comanda.php' method='post' style='float:left;'>";
                echo "<button type='submit' class='btn btn-primary mx-auto' name='vinRose' value='vinRose'>Sterge</button>";
                echo "</form>";
                echo "<form class='form-inline d-flex' action='adauga_la comenzi.php' method='post' style='float:right;'>";
                echo "<button type='submit' class='btn btn-primary mx-auto'>Trimite comanda</button>";
                echo "</form>";
                }
                echo date("Y/m/d");


            


            
          
            
          ?>
          

        </div>
      </div>
    </div>
  </section>
  

 
  <!-- Contact Section -->
  <section class="contact-section bg-black">
    <div class="container">

      <div class="row">

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-map-marked-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Address</h4>
              <hr class="my-4">
              <div class="small text-black-50">4923 Market Street, Orlando FL</div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-envelope text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Email</h4>
              <hr class="my-4">
              <div class="small text-black-50">
                <a href="#">hello@yourdomain.com</a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-4 mb-3 mb-md-0">
          <div class="card py-4 h-100">
            <div class="card-body text-center">
              <i class="fas fa-mobile-alt text-primary mb-2"></i>
              <h4 class="text-uppercase m-0">Phone</h4>
              <hr class="my-4">
              <div class="small text-black-50">0761 946 367</div>
            </div>
          </div>
        </div>
      </div>

      <div class="social d-flex justify-content-center">
        <a href="#" class="mx-2">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#" class="mx-2">
          <i class="fab fa-github"></i>
        </a>
      </div>

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
