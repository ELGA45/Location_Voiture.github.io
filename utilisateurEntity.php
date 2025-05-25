<?php 
  class utilisateurEntity { 
    private $id;  
    private $nom;
    private $prenom;  
    private $username;
    private $telephone; 
    private $pass_word;
    
    // Getters et setters 
    public function getId() { 
      return $this->id; 
    } 
    public function setId($id) { 
      $this->id = $id; 
    } 
    public function getNom() { 
      return $this->nom; 
    }
    public function setNom($nom) { 
      $this->nom = $nom; 
    }
    public function getPrenom() { 
      return $this->prenom; 
    }
    public function setPrenom($prenom) { 
      $this->prenom = $prenom; 
    }
    public function getUsername() { 
      return $this->username; 
    }
    public function setUsername($username) { 
      $this->username = $username; 
    }
    public function getTelephone() { 
      return $this->telephone; 
    }
    public function setTelephone($telephone) { 
      $this->telephone = $telephone; 
    }
    public function getPass_word() { 
      return $this->pass_word; 
    }
    public function setPass_word($pass_word) { 
      $this->pass_word = $pass_word; 
    }
    
  } 