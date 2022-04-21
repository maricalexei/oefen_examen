<?php
class Loans extends Controller {
    public function __construct() {
        $this->itemModel = $this->model('Loan');
    }

    public function loans() {
        $itemData = $this->itemModel->getItems();

        $rows = '';
        foreach($itemData as $value){
            $rows .= "<tr>
                  <td>$value->id</td>
                  <td>$value->name</td>
                  <td>$value->description</td>
                  <td>$value->typenr</td>
                  <td>$value->rentaldate</td>
                  <td>$value->prijs</td>
                  <td>$value->aantal</td>
                  <td><a href='" . URLROOT ."/loans/update/$value->id'>update</a></td>
                  <td><a href='" . URLROOT ."/loans/delete/$value->id'>delete</a></td>
                </tr>";
        }

        $data = [
            'itemData' => $rows
        ];


        $this->view('pages/loan', $data);
    }

    public function update($id = null){
//        var_dump($id);exit;
//        var_dump($_SERVER);EXIT;

        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
            $this->itemModel->updateItems($_POST);
        } else {
            $row = $this->itemModel->getItemUpdate($id);
            $data = [
                'title' => '<h1>Update items</h1>',
                'row' => $row
            ];
            $this->view("pages/update", $data);
        }


    }
}