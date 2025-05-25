<?php
  require 'template.php';
  require_once 'marque.php';
  require_once 'modele.php';
  require_once 'voiture.php';
  require_once 'voitureEntity.php';  
  require_once 'color_year.php';

  $marque = new Marque();
  $marques = $marque->readAll();

  $modeles = [];
  if (isset($_POST['marque']) && $_POST['marque'] != '') {
      $modele = new Modele();
      $modeles = $modele->readByMarque($_POST['marque']);
  }

  if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['enregistre'])){
    extract($_POST);
    $car = new voitureEntity ();
    $car->setMatricule($matricule);
    $car->setCouleur($couleur);
    $car->setNumCartegrise($num_cartegrise);  
    $car->setAnnee($annee);
    $car->setModeleId($modele_id);
    $voiture = new Voiture();
    if($voiture->create($car)){
      echo "<p>Voiture ajoutée avec succès !</p>";
    }
  }

  if(!isset($_SESSION["connectedUser"])){
    header("Location:login.php?noAuth=1");
  }
  else{
?>

  <main>
    <h2>Ajouter une Voiture</h2>
    <form method="POST">
      <label for="martricule">Matricule :</label> 
      <input type="text" name="matricule" required value="<?php echo isset($_POST['matricule'])?$_POST['matricule']:""; ?>"><br>

      <label for="Couleur">Couleur :</label> 
      <select name="couleur" required>
        <option value="">Choisissez une couleur</option>
        <?php foreach($couleurs as $couleur){ 
          $selectedColor = $couleur === $_POST['couleur']?'selected':"";
          ?>
          <option <?php echo $selectedColor ?> value="<?php echo $couleur; ?>"><?php echo $couleur; ?></option>
        <?php } ?>
      </select><br>

      <label for="Numero carte grise">Numero carte grise :</label> 
      <input type="text" name="num_cartegrise" required value="<?php echo isset($_POST['num_cartegrise'])?$_POST['num_cartegrise']:""; ?>"><br>

      <label for="annee">Année:</label> 
      <select name="annee" required>
        <option value="">Sélectionnez une année</option>
        <?php foreach($annees as $an){ 
          $selectedAn = intval($an) === intval($_POST['annee'])?'selected':"";
          ?>
          <option <?php echo $selectedAn ?> value="<?php echo $an ?>"><?php echo $an ?></option>
        <?php } ?>
      </select><br>

      <label for="marque">Marque :</label> 
      <select name="marque" required onchange="this.form.submit()">
        <option value="">Choisissez une marque</option>
        <?php foreach($marques as $m){ ?>
          <option value="<?php echo $m['id']; ?>" 
            <?php if(isset($_POST['marque']) && $_POST['marque'] == $m['id']) echo 'selected'; ?>>
            <?php echo $m['libelle']; ?>
          </option>
        <?php } ?>
      </select><br>

      <label for="modele">Modèle :</label>
      <select name="modele_id" required>
        <option value="">Sélectionnez un modèle</option>
        <?php foreach($modeles as $mod){ ?>
          <option value="<?php echo $mod['id']; ?>"><?php echo $mod['libelle']; ?></option>
        <?php } ?>
      </select><br>

      <button type="submit" name="enregistre">Enregistrer</button>
    </form>

<?php
  require 'footer.php';
}
