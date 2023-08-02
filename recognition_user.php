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
     background: none;
     border: none;
     color: #00CC66;
     cursor: pointer; 
    }
  .link-button:hover {
    transform: scale(1.5); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
}
    </style>

</head>

<body id="page-top">


  <!-- Header -->
  <header class="masthead">
    <div class="container d-flex h-100 align-items-center">
      <div class="mx-auto text-center">
        <h1 class="mx-auto my-0 text-uppercase">Lisandru</h1>
        <h2 class="text-white-50 mx-auto mt-2 mb-5"><?php
                                                        session_start();
                                                       
                                                        foreach($_SESSION['users'] as $key=>$value)
                                                        {   
                                                            echo "<form action='password.php' method='post'>";
                                                            echo "<a href='password.php'><Input class='link-button'  type = 'Submit' name = 'email' value = '$value'></a><br>";
                                                            echo "</form>";
                                                        }

                                                        echo "<form action='index.php' method='post'>";
                                                        echo "<Input type = 'hidden' Name ='not_logged_in' value='not_logged_in' checked>";
                                                        echo "<br><Input class='link-button'  type = 'Submit'  value = 'Vreau sa intru fara sa ma logez'><br>";
                                                        echo "</form>"
                                                        /*$servername = "localhost";
                                                        $username = "root";
                                                        $password = "";
                                                        $db_name = "lisandru";
                                                        // Create connection
                                                        $conn = new mysqli($servername, $username, $password, $db_name);

                                                        if (session_status ( )== 0 ){
                                                            
                                                            header('Location: index.php');
                                                        }
                                                        else{
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

                                                            

                                                            $sql_select = "SELECT * FROM user where ip_adress='$ip_address'";
                                                            $rows = mysqli_query($conn,$sql_select);
                                                            if (mysqli_num_rows($rows) > 0) {
                                                                // output data of each row
                                                                    echo "Confirma daca esti unul dintre acesti utilizatori :<br>";        
                                                                    echo "<FORM name ='form1' method ='post' action ='index.php'>" ;
                                                                    while($row = mysqli_fetch_assoc($rows)) {
                                                                            echo $row["Email"]."<Input type = 'Radio' Name ='name' value=".$row['Email']."><br>"; 
                                                                    }
                                                                    echo "Nici una dintre obtiuni nu e corecta <Input type = 'Radio' Name ='name' value='nu' checked><br><br>"; 
                                                                    echo "Remember me <Input type = 'checkbox' Name ='save_pass' value='save'><br>";
                                                                    echo "<Input class='btn btn-primary js-scroll-trigger' type = 'Submit' Name = 'Submit1' VALUE = 'Sent'>";
    
                                                            }
                                                        }*/
                                                        ?></h2>
      </div>
    </div>
  </header>




</body>

</html>

