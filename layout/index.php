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
			<a href="index.php">Home</a>
			<a href="index.php?page=index_album">Album</a>
			<a href="login_tampil.php" name="btn-login">Login</a>
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