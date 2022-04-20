<?php
  class login {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getUitleen() {
      $this->db->query("SELECT * FROM `itemstable`;");

      $result = $this->db->resultSet();

      return $result;
    }

    public function getSingleUitleen($id) {
      $this->db->query("SELECT * FROM itemstable WHERE id = :id");
      $this->db->bind(':id', $id, PDO::PARAM_INT);
      return $this->db->single();
    }

    public function updateCountry($post) {
      $this->db->query("UPDATE itemstable
                        SET docentnumber = :docentnumber,
                            firstname = :firstname,
                            tussenvoegsel = :tussenvoegsel,
                            lastname = :lastname,
                            email = :email,
                            telefoonnummer = :telefoonnummber,
                            mentorklas = mentorklas
                        WHERE id= :id");
      
      $this->db->bind(':id',$post["id"], PDO::PARAM_INT);
      $this->db->bind(':docentnumber',$post["docentnumber"], PDO::PARAM_STR);
      $this->db->bind(':firstname',$post["firstname"], PDO::PARAM_STR);
      $this->db->bind(':tussenvoegsel',$post["tussenvoegsel"], PDO::PARAM_STR);
      $this->db->bind(':lastname',$post["lastname"], PDO::PARAM_STR);
      $this->db->bind(':email',$post["email"], PDO::PARAM_STR);
      $this->db->bind(':telefoonnummer',$post["telefoonnummer"], PDO::PARAM_INT);
      $this->db->bind(':mentorklas',$post["mentorklas"], PDO::PARAM_INT);

      return $this->db->execute();
    }

    public function deleteUitleen($id) {
      $this->db->query("DELETE FROM docenttable WHERE id = :id");
      $this->db->bind("id", $id, PDO::PARAM_INT);
      return $this->db->execute();
    }

  }

?>