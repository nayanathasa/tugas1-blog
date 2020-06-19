<?php 

	session_start();
	if (!isset($_SESSION['user_name'])) {
		header("location:index.php");
		exit();
	}	else {
		$username = $_SESSION['user_name'];
	}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Praktikum 8 Pemrograman Web Lanjutan</title>
	<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
</head>
<body>
	<div class="container">
		<div class="header">
			<img src="layout/assets/images/Logo.png">
		</div>

		<div class="menu">
			<a href="dashboard.php">Dashboard</a>
			<a href="dashboard.php?page=kategori_tampil">Kategori</a>
			<a href="dashboard.php?page=post_tampil">Post</a>
			<a href="dashboard.php?page=photo_tampil">Photo</a>
			<a href="dashboard.php?page=album_tampil">Album</a>
			<a href="dashboard.php?page=user_tampil">Users</a>
			<a href="logout_proses.php" name="btn-logout">Logout</a>
		</div>

		<div class="main">
			<?php 
				if (isset($_GET['page'])) {
					include $_GET['page'] . ".php";
				} else {
					include "main.php";
				}
			 ?>
		</div>

		<div class="footer">
			<center>Copyright 2020. SI Blog</center>
		</div>
	</div>
</body>
</html>