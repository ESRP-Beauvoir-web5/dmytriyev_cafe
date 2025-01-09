<?php
include("../templates/header.php");
?>
<main class="d-flex flex-wrap justify-content-around">
  <div class="card m-5 col-8">
    <img src="../images/expresso.png" class="card-img-top" alt="Expresso">
    <div class="card-body">
      <h5 class="card-title">Expresso</h5>
      <p class="description">Un café intense aux arômes de céréales toastées. Une seconde note boisée vient ajouter de la profondeur à ce café, tandis que des notes de noisette et d'épices brunes renforcent son caractère intense.</p>
      <p>Ingrédients:
        <ul>
          <li>Café</li>
          <li>Sucre</li>
        </ul>
      </p>
      <p class="prix">Prix: 2.50€</p>
      <p class="volume">Volume: 15cl</p>
      <a href="../index.php" class="btn btn-primary">Retour à l'accueil</a>
    </div>
  </div>
</main>
<?php
include("../templates/footer.php");
?>