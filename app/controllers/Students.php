<?php
class students extends Controller {
    public function __construct() {
        $this->studentModel = $this->model('student');
    }

    public function index() {
        $studentData = $this->studentModel->getstudents();
        $rows = "";
        foreach($studentData as $value) {
            $rows .= $value->firstname . " " . $value->lastname . " " . $value->infix . " " . $value->email . " " . $value->phonenumber . " " . $value->role . " " . $value->studentnr . " " . $value->class . " " . "<a href='../studentsupdate/index/$value->id'>edit</a>". " " . "<a href='../students/delete/$value->id'>delete</a>";
            $rows .= "<br>";
        }

        $data = [
            'studentData' => $rows
        ];

        $this->view('students/index', $data);
    }
}
?>