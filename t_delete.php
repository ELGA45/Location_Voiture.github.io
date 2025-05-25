<?php
  if ($_POST["del"] === "oui") {
    require_once 'voiture.php';
    $voiture = new voiture();
    $voiture->delete($_POST["id"]);
    header("Location:liste_voitures.php");
  }
  else{
    header("Location:liste_voitures.php");
  }