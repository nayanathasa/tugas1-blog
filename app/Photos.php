<?php 

class Photos extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function input()
	{
		$date = $_POST['photo_date'];
		$title = $_POST['photo_title'];
		$text = $_POST['photo_text'];
		$post = $_POST['post_id'];

		$sql = "INSERT INTO tb_photos (photo_date, photo_title, photo_text, post_id) VALUES (
									:photo_date, :photo_title, :photo_text, :post_id)";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":photo_date", $date);
		$stmt->bindParam(":photo_title", $title);
		$stmt->bindParam(":photo_text", $text);
		$stmt->bindParam(":post_id", $post);
		$stmt->execute();

		return false;
	}

	public function tampil()
	{
		$sql = "SELECT tb_photos.*, tb_post.post_title as POST 
		FROM tb_photos, tb_post 
		WHERE tb_photos.post_id=tb_post.post_id ORDER BY tb_photos.photo_title";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($rows = $stmt->fetch()) {
			$data[] = $rows;
		}
		return $data;
	}

	public function listPost()
	{
		$sql = "SELECT * FROM tb_post";
		$stmt = $this->db->prepare($sql);
		$stmt->execute();

		$data = [];
		while ($row = $stmt->fetch()) {
			$data[] = $row;
		}

		return $data;
	}

	public function edit ($id)
	{
		$sql = "SELECT * FROM tb_photos WHERE photo_id=:photo_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":photo_id", $id);
		$stmt->execute();

		$row = $stmt->fetch();
		return $row;
	}

	public function update()
	{
		$date = $_POST['photo_date'];
		$title = $_POST['photo_title'];
		$text = $_POST['photo_text'];
		$post = $_POST['post_id'];
		$id = $_POST['photo_id'];

		$sql = "UPDATE tb_photos SET photo_date=:photo_date,  
								   photo_title=:photo_title, 
								   photo_text=:photo_text, 
								   post_id=:post_id 
							 WHERE photo_id=:photo_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":photo_date", $date);
		$stmt->bindParam(":photo_title", $title);
		$stmt->bindParam(":photo_text", $text);
		$stmt->bindParam(":post_id", $post);
		$stmt->bindParam(":photo_id", $id);
		$stmt->execute();

		return false;
	}

	public function delete($id)
	{
		$sql = "DELETE FROM tb_photos WHERE photo_id=:photo_id";
		$stmt = $this->db->prepare($sql);
		$stmt->bindParam(":photo_id", $id);
		$stmt->execute();

		return false;
	}
}

 ?>