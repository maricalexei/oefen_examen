<?php
class Item {
	private $db;

    public function __construct() {
        $this->db = new Database;
	}

    public function getItems() {
        $this->db->query("SELECT * FROM item");
        $result = $this->db->resultSet();
        // var_dump($result);exit();
        return $result;
    }
}
