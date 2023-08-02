<html lang="en">
<body>

Welcome <br>
Your email address is: <br>


<?php
$servername = "localhost";
$username = "root";
$password = "";
$db_name = "lisandru";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}else{
    echo "Connected successfully";
}
$quer = /** @lang text */
    'SELECT * FROM admin';
$rows = mysqli_query($conn,$quer);//$conn->query($quer);

if (mysqli_num_rows($rows) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($rows)) {
    echo "<br>id: " . $row["Name"]."<br>";
  }
}
else {
  echo "0 results";
}

?>
</body>
</html>
