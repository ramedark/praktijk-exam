<?php
class DocentenOverzichtTable extends Controller {

  public function __construct() {
    $this->uitleenModel = $this->model('DocentenOverzicht');
  }

  public function index() {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $uitleenDocent = $this->uitleenModel->getUitleen();

    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($uitleenDocent as $value){
      $rows .= "<tr>
                  <td>$value->id</td>
                  <td>" . htmlentities($value->docentnumber, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->firstname, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->tussenvoegsel, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->lastname, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->email, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->telefoonnummer, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->mentorklas, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td><a href='" . URLROOT . "/DocentenOverzichtTable/delete/$value->id'>delete</a></td>
                </tr>";
    }


    $data = [
      'title' => '<h1>Docent List</h1>',
      'docentrows' => $rows
    ];
    $this->view('DocentenOverzichttable/index', $data);
  }

  public function delete($id) {
   // echo $id;exit();
   $this->uitleenModel->deleteUitleen($id);

    $data =[
      'deleteStatus' => "Het record met id = $id is verwijdert"
    ];

    $this->view("DocentenOverzichttable/delete", $data);
    header("Refresh:2; url=" . URLROOT . "/DocentenOverzichttable/index");
  }
 
}

?>