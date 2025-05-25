<?php
  $couleurs = ["Noire", "Blanc", "Bleu", "Rouge", "Grise", "Verte"];

  $annees = [];
  $anneeActuelle = date("Y"); 
  for ($annee = 2010; $annee <= $anneeActuelle; $annee++){
    $annees []= $annee;
  }