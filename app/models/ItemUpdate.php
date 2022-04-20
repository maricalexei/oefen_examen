<?php
class ItemUpdate {
	private $db;

    public function __construct() {
        $this->db = new Database;
	}

    public function getItems($id) {
        $this->db->query("SELECT * FROM item where id = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        $result = $this->db->single();
        //var_dump($result);exit();
        return $result;
    }
}
