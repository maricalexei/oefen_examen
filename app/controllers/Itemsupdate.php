<?php
class Itemsupdate extends Controller {
    public function __construct() {
        $this->itemModel = $this->model('ItemUpdate');
    }
    public function index($id = NULL) {
        $itemData = $this->itemModel->getItems($id);
        $data = [
            'itemData' => $itemData
        ];
        $this->view('itemsupdate/index', $data);
    }
}
