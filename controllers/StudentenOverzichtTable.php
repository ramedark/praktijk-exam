<?php
class StudentenOverzichtTable extends Controller {

  public function __construct() {
    $this->uitleenModel = $this->model('StudentenOverzicht');
  }

  public function index() {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $uitleenStudent = $this->uitleenModel->getUitleen();

    /**
     * Maak de inhoud voor de tbody in de view
     */
    $rows = '';
    foreach ($uitleenStudent as $value){
      $rows .= "<tr>
                  <td>$value->id</td>
                  <td>" . htmlentities($value->studentnumber, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->firstname, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->tussenvoegsel, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->lastname, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->email, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->telefoonnummer, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td>" . htmlentities($value->klas, ENT_QUOTES, 'ISO-8859-1') . "</td>
                  <td><a href='" . URLROOT . "/StudentenOverzichtTable/delete/$value->id'>delete</a></td>
                </tr>";
    }


    $data = [
      'title' => '<h1>Student List</h1>',
      'studentrows' => $rows
    ];
    $this->view('StudentenOverzichtTable/index', $data);
  }

  public function delete($id) {
   // echo $id;exit();
   $this->uitleenModel->deleteUitleen($id);

    $data =[
      'deleteStatus' => "Het record met id = $id is verwijdert"
    ];

    $this->view("StudentenOverzichtTable/delete", $data);
    header("Refresh:2; url=" . URLROOT . "/StudentenOverzichtTable/index");
  }
 
}

?>