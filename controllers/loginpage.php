<?php

class loginpage extends Controller {

  public function __construct() {
    $this->uitleenModel = $this->model('login');
    
  } 
  

  public function index() {
    /**
     * Haal via de method getFruits() uit de model Fruit de records op
     * uit de database
     */
    $uitleenStudent = $this->uitleenModel->getUitleen();


    $rows = '';



    $data = [
      'title' => '<h1>Student List</h1>',

    ];
    $this->view('login/index', $data);
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