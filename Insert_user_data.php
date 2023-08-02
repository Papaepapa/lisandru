<?php
session_start();
$servername = "localhost";
$username   = "root";
$password   = "";
$db_name    = "lisandru";


// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

if (!empty($_POST['Nume']) and !empty($_POST['email']) and !empty($_POST['telefon']) and !empty($_POST['psw'])){ 
        $email = $_POST['email'];
        $user_name = $_POST['Nume'];
        $phone_number = $_POST['telefon'];
        $parola     = $_POST["psw"];

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
        $cookie_value = $email;
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

        $sql_select = "SELECT * FROM user where Email='$email'";
        $rows = mysqli_query($conn,$sql_select);
        if (mysqli_num_rows($rows) > 0) {
            // output data of each row
            echo "this register exist";
            while($row = mysqli_fetch_assoc($rows)) {
                echo "<br>id: " . $row["User_Name"]."<br>";
            }
        }
        else{

            $sql_insert = "INSERT INTO `user` (`id`, `Email`, `User_Name`, `Telefon`, `ip_adress`, `parola`) VALUES (NULL, '$email', '$user_name', '$phone_number', '$ip_address', '$parola')";
            if (mysqli_query($conn, $sql_insert)) {
                echo "New record created successfully";
                session_destroy();
                session_start();
                $_SESSION['user'] = $user_name;
                header('Location: index.php');
            } else {
                echo '<script>alert("Welcome to Geeks for Geeks")</script>'; 
                //echo "Error: " . $sql_insert . "<br>" . mysqli_error($conn);
            }
        }
    }   
else{
    
    header("Refresh:0; url=login.php");
    echo '<script>alert("Unul din campuri este gol! Te rog sa ma incerci.")</script>'; 
    }


?>






