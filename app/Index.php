<?php 

class Index extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function album()
	{
		$sql = "SELECT tb_album.*, tb_photos.photo_title as PHOTO
		FROM tb_album, tb_photos 
		WHERE tb_album.photo_id=tb_photos.photo_id ORDER BY tb_album.album_nama";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()) {
			$data[] = $rows;
		}
		return $data;
	}
		
		public function login()
		{
			session_start();
			$name = $_POST['user_name'];
			$password = $_POST['user_password'];
			$sql = "SELECT * FROM tb_user WHERE user_name = :user_name AND user_password = :user_password";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(":user_name", $name);
			$stmt->bindParam(":user_password", $password);
			$stmt->execute();

			$data = $stmt->fetch();
		if ($stmt->rowcount() > 0){
			$_SESSION['user_name'] = $name['user_name'];
			header("location:index.php");
		}
		else {
			echo "Gagal Masuk";
		}

	}
	}

 ?>