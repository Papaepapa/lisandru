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


</head>

<body id="page-top">


  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Lisandru</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5"><?php
                                                        session_start();
                                                        /*$servername = "localhost";
                                                        $username = "root";
                                                        $password = "";
                                                        $db_name = "lisandru";
                                                        // Create connection
                                                        $conn = new mysqli($servername, $username, $password, $db_name);
                                                        $user = ();
                                                        $save = ($_REQUEST['save']);
                                                        echo $save;
                                                        echo $user;*/
                                                        echo $email = $_POST['email'];
                                                        

                                                        echo "<form action='insert_pass.php' method='post'>";
                                                        
                                                        echo "<Input type = 'hidden' Name ='Email' value='$email'>";
                                                        echo "<label>Password</label><br>";
                                                        echo "<input type='password' name='psw' required><br><br>";
                                                        echo "<Input class='btn btn-primary js-scroll-trigger'  type = 'Submit'>";

                                                          
                                                        
                                                        ?></h2>
      </div>
    </div>
  </header>




</body>

</html>

