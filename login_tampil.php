<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
<div class="login">
	<center><h2>LOGIN</h2></center>
<form method="POST" action="login_proses.php">
	<table>
		<div class="form-group">
				<label class="label-login">USERNAME</label>
				<div class="input-group">
					<input class="input-login" type="text" name="user_name">
				</div>
			</div>

		<div class="form-group">
				<label class="label-login">PASSWORD</label>
				<div class="input-group">
					<i class="fas fa-key text-dark"></i>
					<input class="input-login" type="password" name="user_password">
				</div>
			</div>

		<div class="form-group">
			<input class="btn-login" type="submit" name="btn-login" value="LOGIN">
			</div>
	</table>
</form>
</div>