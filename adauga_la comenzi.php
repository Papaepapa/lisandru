<?php
    session_start();
    $user = $_SESSION['user'];
    $email = $_SESSION['email'];
    $telefon = $_SESSION['telefon'];
    $data = date("d/m/Y");;
    echo $user;
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
            $vin_rosu=$_SESSION['vin_rosu'];
            if ($vin_rosu != 0){
                echo "<br>";
                echo "Sticle de vin Rosu : ".$vin_rosu;
                echo "<br>";
                echo "<br>";
            }
        }
        if ( isset( $_SESSION[ 'vin_alb' ] ) ){
            $vin_alb=$_SESSION['vin_alb'];
            if ($vin_alb != 0){
                echo "<br>";
                echo "Sticle de vin Alb : ".$vin_alb;
                echo "<br>";
                echo "<br>";
            }
        }
    }
    else{
        echo "Cosul tau este gol";
    }

	$text="<h1>Comenzi</h1>
        <!-- Project One Row -->
    
    <div class='col-lg-6'>
        <div class='bg-black text-center h-100 project'>
        <div class='d-flex h-100'>
            <div class='project-text w-100 my-auto text-center text-lg-left'>
            <h4 class='text-white'>$user</h4>
            <p class='mb-0 text-white-50'>Email   : $email</p>
            <p class='mb-0 text-white-50'>Telefon : $telefon</p>
            <hr class='d-none d-lg-block mb-0 ml-0'>
            <p  class='mb-0 text-white-50'>Sticle de vin Rosu : $vin_rosu</p>
            <p  class='mb-0 text-white-50'>Sticle de vin Alb : $vin_alb</p>
            <p  class='mb-0 text-white-50'>Sticle de vin Rose : $vin_rose</p>
            <p  class='mb-0 text-white-50'> $data</p>
            </div>
        </div>
        </div>
    </div><br>";

    $path_to_file = 'comanda.php';
    $file_contents = file_get_contents($path_to_file);
    $file_contents = str_replace("<h1>Comenzi</h1>",$text,$file_contents);
    file_put_contents($path_to_file,$file_contents);

?>