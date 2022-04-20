<?php
class ItemUpdate {
	private $db;
    public function __construct() {
        $this->db = new Database;
	}
    public function getItems($id) {
        $this->db->query("SELECT u.id, u.firstname, u.lastname, u.infix, u.email, u.phonenumber, u.role, s.studentnr,s.class, s.class FROM `user` as u,student as s WHERE u.id = s.userid");
        $this->db->bind(':id', $id, PDO::PARAM_INT);
        $result = $this->db->single();
        return $result;
    }
}
