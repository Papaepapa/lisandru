<?php
session_start();
if(!empty($_POST['vin_rose'])){
	
	$vin_rose = $_POST['vin_rose'];
	$_SESSION['cost'] = $_SESSION['cost'] +$vin_rose*10;
	$_SESSION['vin_rose'] = $_SESSION['vin_rose']+$vin_rose;
	echo $vin_rose."<br>";
	echo "tu ai de platit : ".$vin_rose*10;
	echo " euro<br>";
	echo "sesiunea : ".$_SESSION['cost'];
	
	header("Location: index.php#rose");
}

if(!empty($_POST['vin_alb'])){
	
	$vin_alb = $_POST['vin_alb'];
	$_SESSION['cost'] = $_SESSION['cost'] +$vin_alb*10;
	$_SESSION['vin_alb'] = $_SESSION['vin_alb']+$vin_alb;
	echo $vin_alb."<br>";
	echo "tu ai de platit : ".$vin_alb*10;
	echo " euro<br>";
	echo "sesiunea : ".$_SESSION['cost'];
	
	header("Location: index.php#alb");
}
if(!empty($_POST['vin_rosu'])){
	
	$vin_rosu = $_POST['vin_rosu'];
	$_SESSION['cost'] = $_SESSION['cost'] +$vin_rosu*10;
	$_SESSION['vin_rosu'] = $_SESSION['vin_rosu']+$vin_rosu;
	echo $vin_rosu."<br>";
	echo "tu ai de platit : ".$vin_rosu*10;
	echo " euro<br>";
	echo "sesiunea : ".$_SESSION['cost'];
	
	header("Location: index.php#rosu");
}
header("Location: index.php#rose");
?>