<?php
  require_once 'utilisateurEntity.php';
  require_once 'utilisateur.php';
  




  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    extract($_POST);
    $utilisateur = new utilisateur();
    $users = $utilisateur->readAll();
    $exist = false;
    foreach($users as $user){
        if($user['username'] == $username && $user['pass_word'] == $password){
          session_start();
          $_SESSION['connectedUser'] = $user;
          header('Location:accueil.php');
          $exist = true;
          exit();
        }
      }
      if (!$exist) {
        header('Location:login.php?error=1');
        exit();
      }
  }




?>








<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Connexion</title>
  <link rel="stylesheet" href="style/style2.css">
</head>
<body>
  <div class="form-container">
    <h2>Connexion</h2>
    <form action="" method="post">
      <label for="username">Nom d'utilisateur</label>
      <input type="text" id="username" name="username" required>

      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Se connecter</button>
    </form>
    <?php if (isset($_GET['error']) && $_GET['error'] == 1){ ?>
      <p class="error-message">Nom d'utilisateur ou mot de passe incorrect</p>
    <?php } ?>
    <?php if (isset($_GET['noAuth']) && $_GET['noAuth'] == 1){ ?>
      <p class="error-message">Merci de vous conneter</p>
    <?php } ?>
    <div class="link">
      <p>Pas encore de compte ? <a href="inscription.php">Créer un compte</a></p>
    </div>
    <div class="link">
      <p><a href="accueil.php">Retour</a></p>
    </div>
  </div>
</body>
</html>
