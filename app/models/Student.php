<?php
class student {
	private $db;
    private $table = 'student';
    public function __construct() {
        $this->db = new Database;
	}
    public function getstudents() {
        $this->db->query("SELECT u.id, u.firstname, u.lastname, u.infix, u.email, u.phonenumber, u.role, s.studentnr,s.class, s.class FROM `user` as u,student as s WHERE u.id = s.userid");
        $result = $this->db->resultSet();
        return $result;
    }
}