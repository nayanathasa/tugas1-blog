<?php 

class User extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input()
	{
		$name = $_POST['user_name'];
		$password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
		$email = $_POST['user_email'];
		$nama_lengkap = $_POST['user_nama_lengkap'];
		$role = $_POST['user_role'];

		if (!empty($name) AND !empty($password)) {

		$sql = "INSERT INTO tb_user (user_name, user_password, user_email, user_nama_lengkap, user_role) 
				VALUES (:user_name, :user_password, :user_email, :user_nama_lengkap, :user_role)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":user_name", $name);
		$stmt->bindParam(":user_password", $password);
		$stmt->bindParam(":user_email", $email);
		$stmt->bindParam(":user_nama_lengkap", $nama_lengkap);
		$stmt->bindParam(":user_role", $role);
		$stmt->execute();

		}

		return false;
	}

	public function tampil()
	{
		$sql = "SELECT * FROM tb_user";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()) {
			$data[] = $rows;
		}
		return $data;
	}

	public function edit ($id)
	{
		$sql = "SELECT * FROM tb_user WHERE user_id=:user_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":user_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();
		return $row;
	}

	public function update()
	{
		$name = $_POST['user_name'];
		$password = password_hash($_POST['user_password'], PASSWORD_DEFAULT);
		$email = $_POST['user_email'];
		$nama_lengkap = $_POST['user_nama_lengkap'];
		$role = $_POST['user_role'];
		$id = $_POST['user_id'];

		if(!empty($_POST['user_password'])) {
		$sql = "UPDATE tb_user SET user_name=:user_name, 
								   user_password=:user_password, 
								   user_email=:user_email, 
								   user_nama_lengkap=:user_nama_lengkap, 
								   user_role=:user_role 
							 WHERE user_id=:user_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":user_name", $name);
		$stmt->bindParam(":user_password", $password);
		$stmt->bindParam(":user_email", $email);
		$stmt->bindParam(":user_nama_lengkap", $nama_lengkap);
		$stmt->bindParam(":user_role", $role);
		$stmt->bindParam(":user_id", $id);
		$stmt->execute();
	} else {
		$sql = "UPDATE tb_user SET user_name=:user_name, 
								   user_password=:user_password, 
								   user_email=:user_email, 
								   user_nama_lengkap=:user_nama_lengkap, 
								   user_role=:user_role 
							 WHERE user_id=:user_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":user_name", $name);
		$stmt->bindParam(":user_password", $password);
		$stmt->bindParam(":user_email", $email);
		$stmt->bindParam(":user_nama_lengkap", $nama_lengkap);
		$stmt->bindParam(":user_role", $role);
		$stmt->bindParam(":user_id", $id);
		$stmt->execute();
	}

		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_user WHERE user_id=:user_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":user_id", $id);
		$stmt->execute();

		return false;
	}
}

 ?>