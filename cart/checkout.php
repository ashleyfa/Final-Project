<?php
    session_start();
    require '../db/connection.php';
	if(isset($_SESSION['Login'])){
    	if($_SESSION['Login'] != "YES") { // 
    		header("Location: ../account/login");
			die();
        }
        else{
        

        }
    }
    else{
        header("Location: ../account/login");
		die();
    }
?>
