<?php 
include_once "app/Controller.php";
include_once "app/Photos.php";

$photo = new Photos();

if ($_POST['btn-simpan']) {
	$photo->input();
	header("location:dashboard.php?page=photo_tampil");
}

if ($_POST['btn-edit']) {
	$photo->update();
	header("location:dashboard.php?page=photo_tampil");
}

if ($_GET['delete-id']) {
	$photo->delete($_GET['delete-id']);
	header("location:dashboard.php?page=photo_tampil");
}

 ?>