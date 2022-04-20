<?php
class Loan {
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public  function  getItems(){
        $this->db->query('SELECT * FROM `item`');
        return $this->db->resultSet();

    }

    public function getItemUpdate($id){
        $this->db->query('SELECT * FROM `item` WHERE id=:id');
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        return $this->db->single();
    }

    public function updateItem($post) {
        $this->db->query("UPDATE item
                              SET name = :name,
                                  description = :description,
                                  typenr = :typenr,
                                  rentaldate = :rentaldate,
                                  prijs = :prijs,
                                  aantal = :aantalr
                                  WHERE id = :id"
        );
        $this->db-bind('id',$_POST[":id"]);
        $this->db-bind('name',$_POST[":name"]);
        $this->db-bind('description',$_POST[":description"]);
        $this->db-bind('typenr',$_POST[":typenr"]);
        $this->db-bind('rentaldate',$_POST[":rentaldate"]);
        $this->db-bind('prijs',$_POST[":prijs"]);
        $this->db-bind('aantal',$_POST[":aantal"]);
    }
}