<?php 

class Controller {

	protected $db;

	public function __construct() {
		try {
			
			$this->db = new PDO ("mysql:host=localhost;dbname=praktikum_8", "root", "");
		} catch (PDOException $e) {
			die ("Error" . $e->getMessage());
		}
	}
}