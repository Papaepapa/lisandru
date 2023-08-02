<?php
	                session_start();
                    if (isset($_SESSION['cost']) and $_SESSION['cost']!=0){
                        $_SESSION['cost']=0;
                        if ( isset( $_SESSION[ 'vin_rose' ] ) ){
                            $_SESSION['vin_rose']=0;
                            
                        }
                        if ( isset( $_SESSION[ 'vin_rosu' ] ) ){
                            $_SESSION['vin_rosu']=0;
                            
                        }
                        if ( isset( $_SESSION[ 'vin_alb' ] ) ){
                            $_SESSION['vin_alb']=0;
                            
                        }

                    }
                    else{
                        echo "Cosul tau este gol";
                    }
	                header("Location: index.php");
                   
                ?>