<?php 
include_once "app/Controller.php";
include_once "app/Album.php";

$album = new Album();

if ($_POST['btn-simpan']) {
	$album->input();
	header("location:dashboard.php?page=album_tampil");
}

if ($_POST['btn-edit']) {
	$album->update();
	header("location:dashboard.php?page=album_tampil");
}

if ($_GET['delete-id']) {
	$album->delete($_GET['delete-id']);
	header("location:dashboard.php?page=album_tampil");
}

 ?>