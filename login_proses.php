<?php 
include_once "app/Controller.php";
include_once "app/Index.php";

$login = new Index();

if ($_POST['btn-login']) {
	$login->login();
	header("location:dashboard.php");
}

 ?>