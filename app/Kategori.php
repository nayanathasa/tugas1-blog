<?php 

class Kategori extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input()
	{
		$nama = $_POST['kat_nama'];
		$text = $_POST['kat_text'];

		$sql = "INSERT INTO tb_category (kat_nama, kat_text) VALUES (
										:kat_nama, :kat_text)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":kat_nama", $nama);
		$stmt->bindParam(":kat_text", $text);
		$stmt->execute();

		return false;
	}

	public function tampil()
	{
		$sql = "SELECT * FROM tb_category";
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
		$sql = "SELECT * FROM tb_category WHERE kat_id=:kat_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":kat_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();
		return $row;
	}

	public function update()
	{
		$nama = $_POST['kat_nama'];
		$ket = $_POST['kat_text'];
		$id = $_POST['kat_id'];

		$sql = "UPDATE tb_category SET kat_nama=:kat_nama, kat_text=:kat_text WHERE kat_id=:kat_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":kat_nama", $nama);
		$stmt->bindParam(":kat_text", $ket);
		$stmt->bindParam(":kat_id", $id);
		$stmt->execute();

		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_category WHERE kat_id=:kat_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":kat_id", $id);
		$stmt->execute();

		return false;
	}
}

 ?>