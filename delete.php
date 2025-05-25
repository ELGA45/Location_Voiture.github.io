<?php
  require 'template.php';
  if(!isset($_SESSION["connectedUser"])){
    header("Location:login.php?noAuth=1");
  }
  else{
    require_once 'voiture.php';

    if(isset($_GET['id']) ){
      $voiture = new voiture();
      $delVoiture = $voiture->readById($_GET['id']);

      if($delVoiture){ ?>

      <form action="t_delete.php" method="post">
        <input type="hidden" name="id" value="<?php echo $_GET["id"]; ?>">
        <center>
        <label for="del">Etes-vous sur de vouloir supprimer la voiture de matricule <?php echo $delVoiture['matricule']?></label><br>
        </center>
        <button type="submit" name="del" value="oui">OUI</button>
        <button type="submit" name="del" value="non">NON</button>
      </form>

  <?php }
      else{
        echo "Pas de voirture avec cet id ".$_GET['id'];
        echo "<a href=\"liste_voitures.php\">Retour</a>";
      }
    }
    else{
      header("Location:liste_voitures.php");
    }

    require 'footer.php';
  }
  