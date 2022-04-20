<?php
class studentmsupdate extends Controller {
    public function __construct() {
        $this->studentModel = $this->model('studentUpdate');
    }
    public function index($id = NULL) {
        $studentData = $this->studentModel->getStudents($id);
        $data = [
            'studentData' => $studentData
        ];
        $this->view('studentsupdate/index', $data);
    }
}
