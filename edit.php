<?php
  require 'template.php';
  require_once 'marque.php';
  require_once 'modele.php';
  require_once 'voiture.php';
  require_once 'color_year.php';


  $marque = new Marque();
  $marques = $marque->readAll();

  $modele = new Modele();

  if(isset($_GET['id']) ){
    $voiture = new voiture();
    $editVoiture = $voiture->readById($_GET['id']);

    if($editVoiture){

      $editMarque = $editVoiture['id_marque'];
      $editModele = $editVoiture['id_modele'];

      if (isset($_POST['marque']) && $_POST['marque'] !== "") {
          $editMarque = $_POST['marque'];
          $modeles = $modele->readByMarque($editMarque);
          $editModele = (isset($_POST['modele_id']) && $_POST['modele_id'] !== "") ? $_POST['modele_id'] : '';
      }
      else {
          $modeles = $modele->readByMarque($editMarque);
      }

      if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['modifier'])){
        extract($_POST);
        $car = new voitureEntity ();
        $car->setId($_GET['id']);
        $car->setMatricule($matricule);
        $car->setCouleur($couleur);
        $car->setNumCartegrise($num_cartegrise);  
        $car->setAnnee($annee);
        $car->setModeleId($modele_id);
        $voiture->update($car);
        header("Location: liste_voitures.php");
        exit();
      }
    }

    if(!isset($_SESSION["connectedUser"])){
    header("Location:login.php?noAuth=1");
  }
  else{
  ?>

  <main>
    <form method="POST">
      Matricule: <input type="text" name="matricule" value="<?php echo $editVoiture['matricule'] ?>" required><br>

      Couleur: 
      <select name="couleur" required>
        <option value="">Choisissez une couleur</option>
        <?php foreach($couleurs as $couleur){ ?>
          <option <?php echo $couleur === $editVoiture['couleur']?"selected":""; ?>
            value="<?php echo $couleur; ?>"><?php echo $couleur; ?></option>
        <?php } ?>
      </select><br>

      Numéro carte grise: <input type="text" name="num_cartegrise" value="<?php echo $editVoiture['num_cartegrise'] ?>" required><br>

      Année: 
      <select name="annee" required>
        <option value="">Choisissez une année</option>
        <?php foreach($annees as $an){ ?>
          <option <?php echo (intval($an) == intval($editVoiture['annee']))?"selected":""; ?>
            value="<?php echo $an; ?>"><?php echo $an; ?></option>
        <?php } ?>
      </select><br>

      Marque :
      <select name="marque" required onchange="this.form.submit()">
        <option value="">Choisissez une marque</option>
        <?php foreach($marques as $m){ ?>
          <option value="<?= $m['id']; ?>" <?= $m['id'] == $editMarque ? 'selected' : '' ?>>
            <?= $m['libelle']; ?>
          </option>
        <?php } ?>
      </select><br>

      Modèle :
      <select name="modele_id" required>
        <option value="">Sélectionnez un modèle</option>
        <?php foreach($modeles as $mod){ ?>
          <option value="<?= $mod['id']; ?>" <?= $mod['id'] == $editModele ? 'selected' : '' ?>>
            <?= $mod['libelle']; ?>
          </option>
        <?php } ?>
      </select><br>

      <button type="submit" name="modifier">Modifier</button>
    </form >

    <?php } 
    
      require 'footer.php';
        }
    ?>