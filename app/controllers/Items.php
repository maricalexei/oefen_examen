<?php
class Items extends Controller {
    public function __construct() {
        $this->itemModel = $this->model('Item');
    }

    public function index() {
        $itemData = $this->itemModel->getItems();
        $rows = "";
        foreach($itemData as $value) {
            $rows .= $value->id . " " . $value->description . " " . $value->typenr . " " . $value->purchasedate . " " . $value->prijs . " " . "<a href='../itemsupdate/index/$value->id'>edit</a>". " " . "<a href='../itemsupdate/index'>delete</a>";
            $rows .= "<br>";
        }

        $data = [
            'itemData' => $rows
        ];

        $this->view('items/index', $data);
    }
}
