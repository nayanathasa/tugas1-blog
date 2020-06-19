<?php 

class Logout extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function logout()
	{
		session_start();
		session_destroy();
		header("location:index.php");
	}
}

 ?>