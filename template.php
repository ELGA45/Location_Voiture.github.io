 <!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
    <link rel="stylesheet" href="style/style1.css" />
    <script>
    // Vérifie le mode au chargement de la page
    document.addEventListener('DOMContentLoaded', function() {
        const savedMode = localStorage.getItem('darkMode');
        const modeToggle = document.getElementById('modeToggle');
        
        if (savedMode === 'enabled') {
            document.body.classList.add('darkMode');
            modeToggle.textContent = 'light_mode'; // Icône soleil quand mode sombre actif
        } else {
            modeToggle.textContent = 'dark_mode'; // Icône lune quand mode clair actif
        }
    });

    function toggleDarkMode() {
        const body = document.body;
        const modeToggle = document.getElementById('modeToggle');
        
        body.classList.toggle('darkMode');
        const darkModeEnabled = body.classList.contains('darkMode');
        
        localStorage.setItem('darkMode', darkModeEnabled ? 'enabled' : 'disabled');
        
        // Change l'icône en fonction du mode
        modeToggle.textContent = darkModeEnabled ? 'light_mode' : 'dark_mode';
    }
  </script>
</head>
<body>
    <nav>
      <h1>Location<span>Voiture</span></h1>
      <ul>
        <li>
          <a href="accueil.php">Acceuil</a>
        <li>
          <a href="ajout_voiture.php">Ajouter une Voiture</a>
        </li>
        <li>
          <a href="liste_voitures.php">Liste des voitures</a>
        </li>
      </ul>
      <div class="right">
          <?php
            session_start();
            if (isset($_SESSION["connectedUser"])) {
                $user = $_SESSION["connectedUser"]; ?>
                <button><a href="deconnexion.php">Se deconnecter</a></button>
            <?php } else { ?>
                <button><a href="login.php">Se connecter</a></button>
            <?php } ?>
            <i id="modeToggle" class="material-icons mode-toggle" onclick="toggleDarkMode()">dark_mode</i>
      </div>
    </nav>
    <main class="main-content">





  <?php
            /*session_start();
            if (isset($_SESSION["connectedUser"])) {
                $user = $_SESSION["connectedUser"]; ?>
                <div class="user-info">
                    <span class="user-name"><?php echo "{$user['prenom']} {$user['nom']}" ?></span>
                </div>
            <?php } else { ?>
                <button><a href="login.php">Se connecter</a></button>
            <?php } */?>