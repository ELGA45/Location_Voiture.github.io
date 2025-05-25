<?php
  require_once 'utilisateurEntity.php';
  require_once 'utilisateur.php';

  if ($_SERVER['REQUEST_METHOD'] === 'POST'){
    extract($_POST);
    $utilisateur = new utilisateur();
    $user = new utilisateurEntity();
    $user->setNom($nom);
    $user->setPrenom($prenom);
    $user->setUsername($username);
    $user->setTelephone($telephone);
    $user->setPass_word($password);

    $existingUsers = $utilisateur->readAll();
    foreach ($existingUsers as $existingUser) {
        if ($existingUser['username'] === $username) {
            header('Location:inscription.php?error=1');
            exit();
        }
    }

    $utilisateur->create($user);
    header('Location:login.php');
  }




?>


<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription</title>
  <link rel="stylesheet" href="style/style2.css">
</head>
<body>
  <div class="form-container">
    <h2>Inscription</h2>
    <form action="" method="post">
      <label for="nom">Nom</label>
      <input type="text" id="nom" name="nom" required>

      <label for="prenom">Prénom</label>
      <input type="text" id="prenom" name="prenom" required>

      <label for="username">Nom d'utilisateur</label>
      <input type="text" id="username" name="username" required>

      <label for="telephone">Téléphone</label>
      <input type="tel" id="telephone" name="telephone" required>

      <label for="password">Mot de passe</label>
      <input type="password" id="password" name="password" required>

      <button type="submit">Créer un compte</button>
    </form>
    <?php if (isset($_GET['error']) && $_GET['error'] == 1){ ?>
      <p class="error-message">Nom d'utilisateur existant</p>
    <?php } ?>
    <div class="link">
      <p>Déjà inscrit ? <a href="login.php">Se connecter</a></p>
    </div>
    <div class="link">
      <p><a href="accueil.php">Retour</a></p>
    </div>
  </div>
</body>
</html>
