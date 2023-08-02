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
<?php


//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
} //whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
} //whether ip is from remote address
else {
    $ip_address = $_SERVER['REMOTE_ADDR'];
}

$cookie_name = $ip_address;
$cookie_value =  "mere";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

?>


<!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Vin Lisandru</a>
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
          <li class="nav-item">
            <?php
                session_start();
                if( isset($_SESSION['email']) and ($_SESSION['email'] == "alex94_ex@yahoo.com")){
                    echo "<a class='nav-link js-scroll-trigger' href='comanda.php'>Comenzi</a>";
                }
            ?>
            
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">
                
                <?php

                $servername = "localhost";
                $username = "root";
                $password = "";
                $db_name = "lisandru";
                // Create connection
                $conn = new mysqli($servername, $username, $password, $db_name);
                
                //session_start();
                if(isset($_SESSION['user'])){
                    echo  $_SESSION['user'];
                }
                else if ((isset($_POST['not_logged_in']) and $_POST['not_logged_in']=='not_logged_in' ) or isset($_SESSION['not_logged_in'])){
                    echo "You are not loged in";
                    if (!isset($_SESSION['not_logged_in'])){
                        $_SESSION['not_logged_in'] = $_POST['not_logged_in'];
                    }
                    
                }
                else if (!isset($_SESSION['user'])){
                    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
                        $ip_address = $_SERVER['HTTP_CLIENT_IP'];
                    } //whether ip is from proxy
                    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
                        $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
                    } //whether ip is from remote address
                    else {
                        $ip_address = $_SERVER['REMOTE_ADDR'];
                    }

                    $stack = array();
                    $sql_select = "SELECT * FROM user where ip_adress='$ip_address'";
                    $rows = mysqli_query($conn,$sql_select);
                    if (mysqli_num_rows($rows) > 0) {
                        while($row = mysqli_fetch_assoc($rows)) {
                            array_push($stack, $row["Email"]);
                            //$_SESSION[$row["id"]] = $row["Email"]; 
                            //echo $row["Email"];
                            }
                        $_SESSION['users'] = $stack;
                        header('Location: recognition_user.php');
                    }
                }
                
                else{
                    echo  $_SESSION['user'];
                }
                
                
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
        <a href="#about" class="btn btn-primary js-scroll-trigger">Get Started</a>
      </div>
    </div>
  </header>

  <!-- About Section -->
  <section id="about" class="about-section text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 mx-auto">
          <h2 class="text-white mb-4">Lisandru, vin de casa</h2>
          <p class="text-white-50">Vinul din colectia lisndru nu este doar o bautura ci mai degraba un elixir creeat cu grija pentru orice persoana care is doreste sa deguste si sa savureze o bautura cu adevarat speciala.
            <!--<a href="http://startbootstrap.com/template-overviews/grayscale/">the preview page</a>. The theme is open source, and you can use it for any purpose, personal or commercial.</p>-->
        </div>
      </div>
      <img src="img/label.jpg" class="img-fluid" alt="">
    </div>
  </section>

  <!-- Projects Section -->
  <section id="projects" class="projects-section bg-light">
    <div class="container">

      <!-- Featured Project Row -->
      <div class="row align-items-center no-gutters mb-4 mb-lg-5">
        <div class="col-xl-4 col-lg-7">
          <img class="img-fluid mb-3 mb-lg-0" src="img/eticheta.jpeg" alt="">
        </div>
        <div class="col-xl-4 col-lg-5">
          <div class="featured-text text-center text-lg-left">
            <h4>Descriere</h4>
            <p class="text-black-50 mb-0">Crescuti si urmariti cu grija, strugurii albi de cramposie, struguri negrii  de ananas, cu bob rotund sau cu bob lung cu textura carnoasa sau plini de zeama toti acestia sunt actori principali si in egala masura importanti in obtinerea celor trei soiuri de vinuri din colectia Lisandru.
            </p>
          </div>
        </div>
      </div>

      <!-- Project One Row -->
      <div id="rosu" class="row justify-content-center no-gutters mb-5 mb-lg-0" style='background-color:white;'>
        <div class="col-lg-6">
          <img style="width:30%;" src="img/vinRosu2.jpg" alt="">
          <div style="float:right;  margin-top:10%; border-left: 3px solid black;height: 100px;">
			
				<h4>
						&nbsp;Lisandru - Rosu
				</h4>
				<p>&nbsp;&nbsp;10 euro</p>
                <?php
                    
                    if (!isset($_SESSION['user'])){
                        //echo "<a href='login.php' class='btn btn-primary js-scroll-trigger' style= 'margin-left:10%; width:100%'>Adaugă în coș</a>";
                        echo "<form action='login.php' method='post'>";
                        echo "<button class='link-button' style= 'margin-left:10%; text:'7%';width:100%'>Adaugă în coș</button><br><br>";
                        echo "</form>";
                    }
                    else{
                        echo "<form action='add_in_cos.php' method='post'>";
                        echo "&nbsp;&nbsp;<input type='number' min='0' name='vin_rosu' style='width:20%;'> Sticle";
                        echo "<button class='link-button' style= 'margin-left:10%; text:'7%';width:100%'>Adaugă în coș</button><br><br>";
                        echo "</form>";
                    }
                    if (isset($_SESSION['vin_rosu'])){
                        echo "Sticle in cosul tau ".$_SESSION['vin_rosu'];
                    }
                    
                ?>
			
		  </div>
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Roșu</h4>
                <p class="mb-0 text-white-50">Vinul rosu, rubiniu ,puternic dar si cuminte,cu un gust puternic fructat te duce in vie la fiecare sorbitura si aduce la suprafata ce e mai pur si mai inocent in ficare dintre noi.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- Project Two Row -->
      <div id="alb" class="row justify-content-center no-gutters" style='background-color:white;'>
        <div class="col-lg-6">
		<div style='float:right;'>
          <img style="width:30%;" src="img/vinAlb1.jpg" alt="">
          <div style="float:left;  margin-top:10%; border-right: 3px solid black;height: 100px;">
			
				<h4>
						&nbsp;Lisandru - Alb
				</h4>
				<p>&nbsp;&nbsp;10 euro</p>
                <?php
                    
                    if (!isset($_SESSION['user'])){
                        echo "<form action='login.php' method='post'>";
                        echo "<button class='link-button' style= 'margin-left:10%; text:'7%';width:100%'>Adaugă în coș</button><br><br>";
                        echo "</form>";
                        
                    }
                    else{
                        echo "<form action='add_in_cos.php' method='post'>";
                        echo "&nbsp;&nbsp;<input type='number' min='0' name='vin_alb' style='width:20%;'> Sticle";
                        echo "<button class='link-button' style= 'margin-left:10%; text:'7%';width:100%'>Adaugă în coș</button><br><br>";
                        echo "</form>";
                    }
                    if (isset($_SESSION['vin_alb'])){
                        echo "Sticle in cosul tau ".$_SESSION['vin_alb'];
                    }
                    
                    
                ?>
			
		  </div>
		</div> 
        </div>
        <div class="col-lg-6 order-lg-first">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-right">
                <h4 class="text-white">Alb</h4>
                <p class="mb-0 text-white-50">Vinul alb-clar, vinul pur, adevarul in picaturi mici, aspru dar linistitor te tine cu picioarele pe pamant si iti aminteste de ceea ce e cu adevarat bun.</p>
                <hr class="d-none d-lg-block mb-0 mr-0">
              </div>
            </div>
          </div>
        </div>
      </div>
	  
	  <!-- Project Two Row -->
      <div id="rose" class="row justify-content-center no-gutters mb-5 mb-lg-0" style='background-color:white;'>
        <div class="col-lg-6">
          <img style="width:30%;" src="img/vinRose.jpg">
		  <div style="float:right;  margin-top:10%; border-left: 3px solid black;height: 100px;">
			
				<h4>
						&nbsp;Lisandru - Rose
				</h4>
				<p>&nbsp;&nbsp;10 euro</p>
                <?php
                    
                    if (!isset($_SESSION['user'])){
                        echo "<form action='login.php' method='post'>";
                        echo "<button class='link-button' style= 'margin-left:10%; text:'7%';width:100%'>Adaugă în coș</button><br><br>";
                        echo "</form>";
                        
                    }
                    else{
                        echo "<form action='add_in_cos.php' method='post'>";
                        echo "&nbsp;&nbsp;<input type='number' min='0' name='vin_rose' style='width:20%;'> Sticle";
                        echo "<button class='link-button' style= 'margin-left:10%; text:'7%';width:100%'>Adaugă în coș</button><br><br>";
                        echo "</form>";
                    }
                    if (isset($_SESSION['vin_rose'])){
                        echo "Sticle in cosul tau ".$_SESSION['vin_rose'];
                    }
                    
                ?>
			
		  </div>
        </div>
        <div class="col-lg-6">
          <div class="bg-black text-center h-100 project">
            <div class="d-flex h-100">
              <div class="project-text w-100 my-auto text-center text-lg-left">
                <h4 class="text-white">Rose</h4>
                <p class="mb-0 text-white-50">Vinul rose, fratele mai mic si putin jucaus, uneori agitant alte ori impaciuitor reuseste sa creeze o legatura intre trup si suflet cum nici un alt vin nu o poate face.</p>
                <hr class="d-none d-lg-block mb-0 ml-0">
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </section>

  <!-- Signup Section -->
  <section id="signup" class="signup-section">
    <div class="container">
      <div class="row">
        <div class="col-md-10 col-lg-8 mx-auto text-center">

          <i class="far fa-paper-plane fa-2x mb-2 text-white"></i>
          <h2 class="text-white mb-5">Subscribe to receive updates!</h2>

          <form class="form-inline d-flex" action="action_page.php" method="post">
            <input type="email" class="form-control flex-fill mr-0 mr-sm-2 mb-3 mb-sm-0" name="email" id="inputEmail" placeholder="Enter email address...">
            <button type="submit" class="btn btn-primary mx-auto">Subscribe</button>
          </form>

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
