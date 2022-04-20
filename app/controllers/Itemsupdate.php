<?php
class Itemsupdate extends Controller {
    public function __construct() {
        $this->itemModel = $this->model('ItemUpdate');
    }

    public function index($id = NULL) {
        //echo $id;exit();
        $itemData = $this->itemModel->getItems($id);
        //var_dump($itemData);exit();
            // $rows = $itemData->id . " " . $itemData->description . " " . $itemData->typenr . " " . $itemData->purchasedate . " " . $itemData->prijs . " " . "<a href='../itemsupdate/index'>edit</a>". " " . "<a href='../itemsupdate/index'>delete</a>";
            // $rows .= "<br>";

        $data = [
            'itemData' => $itemData
        ];

        $this->view('itemsupdate/index', $data);
    }
}
