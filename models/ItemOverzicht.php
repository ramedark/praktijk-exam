<?php
  class ItemOverzicht {
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
                        SET naam = :naam,
                            beschrijving = :beschrijving,
                            over = :over,
                            loaned = :loaned,
                        WHERE id= :id");
      
      $this->db->bind(':id',$post["id"], PDO::PARAM_INT);
      $this->db->bind(':naam',$post["naam"], PDO::PARAM_STR);
      $this->db->bind(':beschrijving',$post["beschrijving"], PDO::PARAM_STR);
      $this->db->bind(':over',$post["over"], PDO::PARAM_STR);
      $this->db->bind(':loaned',$post["loaned"], PDO::PARAM_STR);

      return $this->db->execute();
    }

    public function deleteUitleen($id) {
      $this->db->query("DELETE FROM itemstable WHERE id = :id");
      $this->db->bind("id", $id, PDO::PARAM_INT);
      return $this->db->execute();
    }

  }

?>