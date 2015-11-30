<?php
session_start(); 
 
// get the product id
$id = isset($_GET['id']) ? $_GET['id'] : "";
$name = isset($_GET['name']) ? $_GET['name'] : "";

unset($_SESSION['cart_items'][$id]);
header('Location: index.php?action=removed&id=' . $id . '&name=' . $name);

?>