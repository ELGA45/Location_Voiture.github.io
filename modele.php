<?php 
require_once 'database.php'; 
class Modele { 
private $conn; 
public function __construct() { 
$db = new Database(); 
$this->conn = $db->connect(); 
} 

    public function create($libelle, $marque_id) { 
        $sql = "INSERT INTO modele (libelle, marque_id) VALUES (:libelle, :marque_id)"; 
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(['libelle' => $libelle, 'marque_id' => $marque_id]); 
    } 

    public function readAll() { 
        $sql = "SELECT mo.id, mo.libelle AS modele_libelle, ma.libelle AS marque_libelle  
                FROM modele mo  
                INNER JOIN marque ma ON mo.marque_id = ma.id"; 
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(); 
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    } 

    public function readById($id) { 
        $sql = "SELECT * FROM modele WHERE id = :id"; 
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(['id' => $id]); 
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    } 

    public function update($id, $libelle, $marque_id) { 
        $sql = "UPDATE modele SET libelle = :libelle, marque_id = :marque_id WHERE id = :id"; 
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(['id' => $id, 'libelle' => $libelle, 'marque_id' => $marque_id]); 
    } 

    public function delete($id) { 
        $sql = "DELETE FROM modele WHERE id = :id"; 
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(['id' => $id]); 
    } 

    public function readByMarque($marque_id) {
        $sql = "SELECT id, libelle FROM modele WHERE marque_id = :marque_id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['marque_id' => $marque_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
    
} 