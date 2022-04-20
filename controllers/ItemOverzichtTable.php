<?php
class ItemOverzichtTable extends Controller {

  public function __construct() {
    $this->uitleenModel = $this->model('ItemOverzicht');
  }

  public function index() {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $item = $this->uitleenModel->getUitleen();

    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($item as $value){
      $rows .= "<tr>
                  <td>$value->id</td>
                  <td>" . htmlentities($value->naam, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->beschrijving, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->over, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->loaned, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td><a href='" . URLROOT . "/ItemOverzichtTable/delete/$value->id'>delete</a></td>
                  <td><a href='" . URLROOT . "/ItemOverzichtTable/update/$value->id'>update</a></td>
                </tr>";
    }


    $data = [
      'title' => '<h1>Item Overzicht</h1>',
      'itemrows' => $rows
    ];
    $this->view('ItemOverzichtTable/index', $data);
  }

  public function delete($id) {
   // echo $id;exit();
   $this->uitleenModel->deleteUitleen($id);

    $data =[
      'deleteStatus' => "Het record met id = $id is verwijdert"
    ];

    $this->view("ItemOverzichtTable/delete", $data);
    header("Refresh:2; url=" . URLROOT . "/ItemOverzichtTable/index");
  }
 
}

?>