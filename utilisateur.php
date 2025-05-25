<?php 
require_once 'database.php';
require_once 'utilisateurEntity.php'; 
class utilisateur { 
private $conn; 
public function __construct() { 
$db = new Database(); 
$this->conn = $db->connect(); 
} 

    public function create(utilisateurEntity $user ) { 
        $sql = "INSERT INTO utilisateur (nom, prenom, username, telephone, pass_word)
                VALUES (:nom, :prenom, :username, :telephone, :pass_word)"; 
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(['nom' =>$user->getNom(), 
                        'prenom' => $user->getPrenom(),
                        'username' => $user->getUsername(),
                        'telephone' => $user->getTelephone(),
                        'pass_word' => $user->getPass_word()]);
    }

    public function readAll() { 
        $sql = "SELECT * FROM utilisateur";
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(); 
        return $stmt->fetchAll(PDO::FETCH_ASSOC); 
    } 

    public function readById($id) { 
        $sql = "SELECT * FROM voiture v  
                WHERE id = :id"; 
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(['id' => $id]); 
        return $stmt->fetch(PDO::FETCH_ASSOC); 
    } 

    public function update(utilisateurEntity $user) {
        $sql = "UPDATE uitlisateur SET nom = :nom, prenom = :prenom, username = :username,
                      telephone = :telephone, pass_word = :pass_word
                WHERE id = :id"; 
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(['id' => $user->getId(),
                        'nom' =>$user->getNom(), 
                        'prenom' => $user->getPrenom(),
                        'username' => $user->getUsername(),
                        'telephone' => $user->getTelephone(),
                        'pass_word' => $user->getPass_word()]); 
    } 

    public function delete($id) { 
        $sql = "DELETE FROM utilisateur WHERE id = :id"; 
        $stmt = $this->conn->prepare($sql); 
        $stmt->execute(['id' => $id]); 
    } 
} 