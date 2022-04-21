<?php
class Item {
	private $db;
    private $table = 'item';
    public function __construct() {
        $this->db = new Database;
	}
    public function getItems() {
        $this->db->query("SELECT * FROM item");
        $result = $this->db->resultSet();
        return $result;
    }
    public function deleteitem($id){
        $this->db->query("DELETE FROM `item` WHERE `item`.`id` = :id");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->execute();
    }
    public function itemCreate($description, $typenr, $purchasedate, $prijs)
    {
        $this->db->query("INSERT INTO {$this->table} (`id`, `description`, `typenr`, `purchasedate`, `prijs`) VALUES (NULL, :description, :typenr, :purchasedate, :prijs)");
        $this->db->bind(':description', $description);
        $this->db->bind(':typenr', $typenr);
        $this->db->bind(':purchasedate', $purchasedate);
        $this->db->bind(':prijs', $prijs);
        return $this->db->execute();
    }
}
