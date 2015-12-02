<?php
    session_start();
    $totalprice = $_GET["totalprice"];
    require '../db/connection.php';
    date_default_timezone_set('Pacific/Honolulu');
	if(isset($_SESSION['Login'])){
    	if($_SESSION['Login'] != "YES") { // 
    		header("Location: ../account/login");
			die();
        }
        else{
            $sql = "SELECT * FROM users WHERE email='". $_SESSION['email']."'";
            $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
            $row = mysqli_fetch_assoc($result);

            $sql = "INSERT INTO orders (user_id, datepurchase, totalprice) VALUES ('".$row['id'] ."','" .date("F j, Y") . "', '". $totalprice. "')";
            mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);

            $sql = "SELECT * FROM orders WHERE user_id='". $row['id']."' AND datepurchase='" . date("F j, Y")."'";
            $result = mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
            $ordernum = mysqli_fetch_assoc($result);

        
            foreach($_SESSION['cart_items'] as $product_id=>$value){
            $sql = "INSERT INTO order_list (order_num, user_id, product_id, category) VALUES ('".$ordernum['order_num'] ."','" . $row['id'] . "', '". $product_id. "','". $value['category'] . "')";
            mysqli_query($conn, $sql) or trigger_error("SQL", E_USER_ERROR);
            }


            unset($_SESSION['cart_items']);
            header("Location: ../account");

        }
    }
    else{
        header("Location: ../account/login");
		die();
    }
?>
