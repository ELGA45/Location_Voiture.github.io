<?php
  require 'template.php';
  if (isset($_GET['model'])){ ?>
      <header>
        <div class="header-content">
          <h2>Location de voitures</h2>
          <p>
            Découvrez notre large sélection de voitures à louer pour tous vos
            besoins. Que ce soit pour un voyage d'affaires, des vacances en
            famille ou une escapade entre amis, nous avons la voiture qu'il vous
            faut.
          </p> 
      </header>
  <?php }
  if (isset($_GET['model']) && $_GET['model'] == 'bmw') { ?>
  <section nos-modeles>
      <p id="trait-haut"></p>
        <h3>Nos Modele de BMW</h3>
      <p id="trait-bas"></p>
        <div class="cards">
          <div class="card">
            <img src="img/bmw/bmwx4.jpeg" alt="bmw" />
            <h4>BMW X4</h4>
          </div>
          <div class="card">
            <img src="img/bmw/bmwx6.jpeg" alt="bmw" />
            <h4>BMW X6</h4>
          </div>
          <div class="card">
            <img src="img/bmw/bmwix.jpeg" alt="bmw" />
            <h4>BMW IX</h4>
          </div>
          <div class="card">
            <img src="img/bmw/bmwI4.jpeg" alt="bmw" />
            <h4>BMW I4</h4>
          </div>
          <div class="card">
            <img src="img/bmw/bmwx.jpeg" alt="bmw" />
            <h4>BMW X</h4>
          </div>
          <div class="card">
            <img src="img/bmw/serie7.jpeg" alt="bmw" />
            <h4>BMW SERIE 7</h4>
          </div>
        </div>
    <section>
  <?php
  require 'footer.php';

  } elseif (isset($_GET['model']) && $_GET['model'] == 'benz') { ?>
      <section nos-modeles>
        <p id="trait-haut"></p>
          <h3>Nos Modele de Mercedes</h3>
        <p id="trait-bas"></p>
        <div class="cards">
          <div class="card">
            <img src="img/benz/cle.jpeg" alt="benz" />
            <h4>Mercedes-Benz CLE</h4>
          </div>
          <div class="card">
            <img src="img/benz/g580.jpeg" alt="benz" />
            <h4>Mercedes-AMG G580</h4>
          </div>
          <div class="card">
            <img src="img/benz/glc.jpeg" alt="benz" />
            <h4>Mercedes-Benz GLC</h4>
          </div>
          <div class="card">
            <img src="img/benz/gle.jpeg" alt="benz" />
            <h4>Mercedes-Benz GLE</h4>
          </div>
          <div class="card">
            <img src="img/benz/amg.jpeg" alt="benz" />
            <h4>Mercedes-AMG GT</h4>
          </div>
          <div class="card">
            <img src="img/benz/merce.jpeg" alt="benz" />
            <h4>Mercedes-Benz</h4>
          </div>
      </section>
  <?php
  require 'footer.php';

    } elseif (isset($_GET['model']) && $_GET['model'] == 'ford') { ?>
      <section nos-modeles>
        <p id="trait-haut"></p>
          <h3>Nos Modele de Ford</h3>
        <p id="trait-bas"></p>
        <div class="cards">
            <div class="card">
              <img src="img/ford/ford.jpeg" alt="bmw" />
              <h4>Ford</h4>
            </div>
            <div class="card">
              <img src="img/ford/fusion.jpeg" alt="bmw" />
              <h4>Ford Fusion</h4>
            </div>
            <div class="card">
              <img src="img/ford/skype.jpeg" alt="bmw" />
              <h4>Ford Skype</h4>
            </div>
            <div class="card">
              <img src="img/ford/must.jpeg" alt="bmw" />
              <h4>Ford Mustang</h4>
            </div>
            <div class="card">
              <img src="img/ford/kuga.jpeg" alt="bmw" />
              <h4>Ford Kuga</h4>
            </div>
            <div class="card">
              <img src="img/ford/f50.jpeg" alt="bmw" />
              <h4>Ford F50</h4>
            </div>
        </div>
      </section>
  <?php
  require 'footer.php';

    } elseif (isset($_GET['model']) && $_GET['model'] == 'chev') { ?>
        <section nos-modeles>
          <p id="trait-haut"></p>
            <h3>Nos Modele de Chevrolet</h3>
          <p id="trait-bas"></p>
          <div class="cards">
            <div class="card">
              <img src="img/chev/cev.jpeg" alt="bmw" />
              <h4>Chevrolet</h4>
            </div>
            <div class="card">
              <img src="img/chev/camaro.jpeg" alt="bmw" />
              <h4>Chevrolet Camaro</h4>
            </div>
            <div class="card">
              <img src="img/chev/equi.jpeg" alt="bmw" />
              <h4>Chevrolet Equinox</h4>
            </div>
            <div class="card">
              <img src="img/chev/cap.jpeg" alt="bmw" />
              <h4>Chevrolet Captiva</h4>
            </div>
            <div class="card">
              <img src="img/chev/trax.jpeg" alt="bmw" />
              <h4>Chevrolet Trax</h4>
            </div>
            <div class="card">
              <img src="img/chev/sil.jpeg" alt="bmw" />
              <h4>Chevrolet Silverado</h4>
            </div>
          </div>
        </section>
  <?php
  require 'footer.php'; 
  
    } elseif (isset($_GET['model']) && $_GET['model'] == 'audi') { ?>
        <section nos-modeles>
          <p id="trait-haut"></p>
            <h3>Nos Modele de Audi</h3>
          <p id="trait-bas"></p>
          <div class="cards">
            <div class="card">
              <img src="img/audi/aud.jpeg" alt="bmw" />
              <h4>Audi</h4>
            </div>
            <div class="card">
              <img src="img/audi/a3.jpeg" alt="bmw" />
              <h4>Audi A3</h4>
            </div>
            <div class="card">
              <img src="img/audi/a4.jpeg" alt="bmw" />
              <h4>Audi A4</h4>
            </div>
            <div class="card">
              <img src="img/audi/q5.jpeg" alt="bmw" />
              <h4>Audi Q5</h4>
            </div>
            <div class="card">
              <img src="img/audi/q6.jpeg" alt="bmw" />
              <h4>Audi Q6</h4>
            </div>
            <div class="card">
              <img src="img/audi/rs.jpeg" alt="bmw" />
              <h4>Audi RS</h4>
            </div>
          </div>
        </section>
  <?php
  require 'footer.php';

    } elseif (isset($_GET['model']) && $_GET['model'] == 'vols') { ?>
      <p id="trait-haut"></p>
        <h3>Nos Modele de VolsWagen</h3>
      <p id="trait-bas"></p>
  <?php
  require 'footer.php';

    } else {
      header('Location:accueil.php');
  }