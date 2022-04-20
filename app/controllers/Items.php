<?php
class Items extends Controller {
    public function __construct() {
        $this->itemModel = $this->model('Item');
    }

    public function index() {
        $itemData = $this->itemModel->getItems();
        $rows = "";
        foreach($itemData as $value) {
            $rows .= $value->id . " " . $value->description . " " . $value->typenr . " " . $value->purchasedate . " " . $value->prijs . " " . "<a href='../itemsupdate/index/$value->id'>edit</a>". " " . "<a href='../items/delete/$value->id'>delete</a>";
            $rows .= "<br>";
        }

        $data = [
            'itemData' => $rows
        ];

        $this->view('items/index', $data);
    }
    public function delete($id) {
        $this->itemModel->deleteItem($id);
        $data = [
            'deletestatus' => "het record met het id = $id is verwijdert"
        ];
        $this->view('items/delete', $data);
        header("Refresh:2; url= ../items/index");
    }

    public function create() {
        $this->view('items/create');
    }
    public function itemCreate()
    {
        $description  = $_POST['description'];
        $typenr = $_POST['typenr'];
        $purchasedate = $_POST['purchasedate'];
        $prijs = $_POST['prijs'];
        $this->itemModel->itemCreate($description, $typenr, $purchasedate, $prijs);
        $this->redirect('items');
    }
}
