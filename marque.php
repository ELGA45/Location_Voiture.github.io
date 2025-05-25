<?php 
  require_once 'database.php'; 
  
  class Marque { 
      private $conn; 
  
      public function __construct() { 
          $db = new Database(); 
          $this->conn = $db->connect(); 
      }

      public function create($libelle) { 
          $sql = "INSERT INTO marque (libelle) VALUES (:libelle)"; 
          $stmt = $this->conn->prepare($sql); 
          $stmt->execute(['libelle' => $libelle]); 
      } 

      public function readAll() { 
        $sql = "SELECT * FROM marque"; 
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(); 
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
      } 
      
    public function readById($id) { 
      $sql = "SELECT * FROM marque WHERE id = :id"; 
      $stmt = $this->conn->prepare($sql); 
      $stmt->execute(['id' => $id]); 
      return $stmt->fetch(PDO::FETCH_ASSOC); 
    } 

    public function update($id, $libelle) { 
      $sql = "UPDATE marque SET libelle = :libelle WHERE id = :id"; 
      $stmt = $this->conn->prepare($sql); 
      $stmt->execute(['id' => $id, 'libelle' => $libelle]); 
    }

    public function delete($id) { 
      $sql = "DELETE FROM marque WHERE id = :id"; 
      $stmt = $this->conn->prepare($sql); 
      $stmt->execute(['id' => $id]); 
    } 
  } 