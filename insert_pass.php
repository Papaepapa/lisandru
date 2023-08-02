<html lang="en">
<body>

<?php
//session_start();
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "lisandru";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

$pass    = $_POST['psw'];
$email   = $_POST['Email'];

//$DB_pass = $_POST['parola'];
echo $email;
echo $pass;
//echo $DB_pass;

$sql_select = "SELECT * FROM user where Email='$email'";
$rows = mysqli_query($conn,$sql_select);
if (mysqli_num_rows($rows) > 0) {
    // output data of each row
        while($row = mysqli_fetch_assoc($rows)) {
                $parola = $row["parola"];
                $user   = $row["User_Name"];
                $telefon = $row["Telefon"];
        }
    }
if ($pass==$parola){

    $quer = /** @lang text */
        "UPDATE user SET flag='1' WHERE Email='$email'";
    $rows = mysqli_query($conn,$quer);//$conn->query($quer);
    session_destroy();
    session_start();
    $_SESSION['user'] = $user;
    $_SESSION['cost'] = 0;
    $_SESSION['vin_rose'] = 0;
    $_SESSION['vin_alb'] = 0;
    $_SESSION['vin_rosu'] = 0;
    $_SESSION['email'] = $email;
    $_SESSION['telefon'] = $telefon;
    
    header('Location: index.php');
    
 }
 else{
      header("Refresh:0; url=login.php");
      echo '<script>alert("Datele de conectare nu sunt corecte! Te rog sa ma incerci.")</script>'; 
      //echo "your password is not correct :)";
 }




?>
</body>
</html>
