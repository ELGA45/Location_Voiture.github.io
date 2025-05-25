<?php
  require 'template.php';
?>

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

      <section nos-marques>
        <p id="trait-haut"></p>
        <h3>Nos Marque de voiture</h3>
        <p id="trait-bas"></p>
        <div class="cards">
          <div class="card">
            <img src="img/bmw/bmw.jpg" alt="bmw" />
            <h4>BMW</h4>
            <button><a href="all_model.php?model=bmw">Voir les modeles</a></button>
          </div>
          <div class="card">
            <img src="img/benz/mercedes.webp" alt="mercedes" />
            <h4>Mercedes Benz</h4>
            <button><a href="all_model.php?model=benz">Voir les modeles</a></button>
          </div>
          <div class="card">
            <img src="img/ford/ford.jpg" alt="Ford" />
            <h4>Ford</h4>
            <button><a href="all_model.php?model=ford">Voir les modeles</a></button>
          </div>
          <div class="card">
            <img src="img/chev/chevrolet.webp" alt="chevrolet" />
            <h4>Chevrolet</h4>
            <button><a href="all_model.php?model=chev">Voir les modeles</a></button>
          </div>
          <div class="card">
            <img src="img/audi/audi.webp" alt="audi" />
            <h4>Audi</h4>
            <button><a href="all_model.php?model=audi">Voir les modeles</a></button>
          </div>
          <div class="card">
            <img src="img/vw/vw.jpeg" alt="vw" />
            <h4>VolsWagen</h4>
            <button><a href="all_model.php?model=vols">Voir les modeles</a></button>
        </div>
      </section>

<?php
  require 'footer.php';

