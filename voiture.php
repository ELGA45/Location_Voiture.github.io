<?php 
require_once 'database.php';
require_once 'voitureEntity.php'; 
class Voiture { 
private $conn; 
public function __construct() { 
$db = new Database(); 
$this->conn = $db->connect(); 
} 

    public function create(voitureEntity $car) { 
        $sql = "INSERT INTO voiture (matricule, couleur, num_cartegrise, annee, modele_id)
                VALUES (:matricule, :couleur, :num_cartegrise, :annee, :modele_id)"; 
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(['matricule' =>$car->getMatricule(), 
                        'couleur' => $car->getCouleur(),
                        'num_cartegrise' => $car->getNumCartegrise(),
                        'annee' => $car->getAnnee(),
                        'modele_id' => $car->getModeleId()]);
    }

    public function readAll() { 
        $sql = "SELECT v.id, v.matricule, v.couleur, v.num_cartegrise, v.annee,
                        mo.libelle AS modele, 
                        ma.libelle AS marque
                FROM voiture v  
                JOIN modele mo ON v.modele_id = mo.id
                JOIN marque ma ON mo.marque_id = ma.id";
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(); 
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    } 

    public function readById($id) { 
        $sql = "SELECT v.id, v.matricule, v.couleur, v.num_cartegrise, v.annee,
                        mo.id AS id_modele, mo.libelle AS modele, mo.marque_id AS id_marque, 
                        ma.libelle AS marque
                FROM voiture v  
                JOIN modele mo ON v.modele_id = mo.id
                JOIN marque ma ON mo.marque_id = ma.id
                WHERE v.id = :id"; 
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(['id' => $id]); 
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    } 

    public function update(VoitureEntity $car,) {
        $sql = "UPDATE voiture SET matricule = :matricule, couleur = :couleur, 
        num_cartegrise = :num_cartegrise, annee = :annee, modele_id = :modele_id
        WHERE id = :id"; 
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(['id' => $car->getId(),
                        'matricule' => $car->getMatricule(),
                        'couleur' => $car->getCouleur(),
                        'num_cartegrise' => $car->getNumCartegrise(),
                        'annee' => $car->getAnnee(),
                        'modele_id' => $car->getModeleId()]); 
    } 

    public function delete($id) { 
        $sql = "DELETE FROM voiture WHERE id = :id"; 
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(['id' => $id]); 
    } 
} 