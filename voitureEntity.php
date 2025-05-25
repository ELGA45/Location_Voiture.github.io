<?php 
  class voitureEntity { 
    private $id; 
    private $matricule;
    private $couleur;
    private $num_cartegrise; 
    private $annee;
    private $modele_id;
  
    // Getters et setters 
    public function getId() { 
      return $this->id; 
    } 
    public function setId($id) { 
      $this->id = $id; 
    } 
    public function getMatricule() { 
      return $this->matricule; 
    }
    public function setMatricule($matricule) { 
      $this->matricule = $matricule; 
    }
    public function getCouleur() { 
      return $this->couleur; 
    }
    public function setCouleur($couleur) { 
      $this->couleur = $couleur; 
    }
    public function getNumCartegrise() { 
      return $this->num_cartegrise; 
    }
    public function setNumCartegrise($num_cartegrise) { 
      $this->num_cartegrise = $num_cartegrise; 
    }

    public function getAnnee() { 
      return $this->annee; 
    }
    public function setAnnee($annee) { 
      $this->annee = $annee; 
    }
    public function getModeleId() { 
      return $this->modele_id; 
    }
    public function setModeleId($modele_id) { 
      $this->modele_id = $modele_id; 
    }
  } 