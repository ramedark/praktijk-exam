<?php
  class StudentenOverzicht {
    private $db;

    public function __construct() {
      $this->db = new Database();
    }

    public function getUitleen() {
      $this->db->query("SELECT * FROM `studenttable`;");

      $result = $this->db->resultSet();

      return $result;
    }

    public function getSingleUitleen($id) {
      $this->db->query("SELECT * FROM country WHERE id = :id");
      $this->db->bind(':id', $id, PDO::PARAM_INT);
      return $this->db->single();
    }

    public function updateCountry($post) {
      $this->db->query("UPDATE studenttable
                        SET studentnumber = :studentnumber,
                            firstname = :firstname,
                            tussenvoegsel = :tussenvoegsel,
                            lastname = :lastname,
                            email = :email,
                            telefoonnummer = :telefoonnummber,
                            klas = klas
                        WHERE id= :id");
      
      $this->db->bind(':id',$post["id"], PDO::PARAM_INT);
      $this->db->bind(':studentnumber',$post["studentnumber"], PDO::PARAM_STR);
      $this->db->bind(':firstname',$post["firstname"], PDO::PARAM_STR);
      $this->db->bind(':tussenvoegsel',$post["tussenvoegsel"], PDO::PARAM_STR);
      $this->db->bind(':lastname',$post["lastname"], PDO::PARAM_STR);
      $this->db->bind(':email',$post["email"], PDO::PARAM_STR);
      $this->db->bind(':telefoonnummer',$post["telefoonnummer"], PDO::PARAM_INT);
      $this->db->bind(':klas',$post["klas"], PDO::PARAM_INT);

      return $this->db->execute();
    }

    public function deleteUitleen($id) {
      $this->db->query("DELETE FROM studenttable WHERE id = :id");
      $this->db->bind("id", $id, PDO::PARAM_INT);
      return $this->db->execute();
    }

  }

?>