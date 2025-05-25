<?php

  require 'template.php';
  if(!isset($_SESSION["connectedUser"])){
    header("Location:login.php?noAuth=1");
  }
  else{
    require_once 'marque.php';
    require_once 'modele.php';
    require_once 'voiture.php';

    $voiture = new voiture();
    $voitures = $voiture->readAll();

    if($voitures){
      echo "<main>";
      echo "<h2>Liste des Voitures</h2>";
      echo "<table border=2>";
      echo "<tr>
              <th>Matricule</th>
              <th>Numero Cartegrise</th>
              <th>Marque</th>
              <th>Modele</th>
              <th>Année</th>
              <th>Couleur</th>
              <th>Action</th>
            </tr>";
      foreach($voitures as $car){
        echo "<tr>";
              echo "<td>".$car['matricule']."</td>";
              echo "<td>".$car['num_cartegrise']."</td>";
              echo "<td>".$car['marque']."</td>";
              echo "<td>".$car['modele']."</td>";
              echo "<td>".$car['annee']."</td>";
              echo "<td>".$car['couleur']."</td>";
              echo "<td><a href=\"edit.php?id=".$car['id']."\">Modifier</a>
                        <a href=\"delete.php?id=".$car['id']."\">Supprimer</a>
                    </td>";
            echo "</tr>";
      }
      echo "</table>";
    }
    else{
      echo "pas de  VOIRTURE";
    }

    require 'footer.php';
  }