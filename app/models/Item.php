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
    
    public function deleteItems() {
        $this->db->query("DELETE FROM `item` WHERE `item`.`id` = `{$id}`");
        // $result = $this->db->resultSet();
        // var_dump($result);exit();
        // return $result;
    }
}
