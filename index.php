<?php 
include("./templates/header_index.php");
// include("../templates/data.php");
?>
    <main class="d-flex flex-wrap justify-content-around">
        <div class="card m-5 col-8 col-md-4 col-lg-3">
            <img src="./images/macchiato.png" class="card-img-top" alt="Macchiato">
            <div class="card-body">
              <h5 class="card-title">Macchiato</h5>
              <p class="description">Littéralement « Latte Macchiato » signifie « lait taché » en italien...</p>
              <p class="prix">Prix: 3.50€</p>
              <p class="volume">Volume: 20cl</p>
              <a href="./pages/macchiato.php" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
        <div class="card m-5 col-8 col-md-4 col-lg-3">
            <img src="./images/expresso.png" class="card-img-top" alt="Expresso">
            <div class="card-body">
              <h5 class="card-title">Expresso</h5>
              <p class="description">Un café intense aux arômes de céréales toastées...</p>
              <p class="prix">Prix: 2.50€</p>
              <p class="volume">Volume: 15cl</p>
              <a href="./pages/expresso.php" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
        <div class="card m-5 col-8 col-md-4 col-lg-3">
            <img src="./images/ristretto.png" class="card-img-top" alt="Ristretto">
            <div class="card-body">
              <h5 class="card-title">Ristretto</h5>
              <p class="description">Le Ristretto est l'essence même de la célèbre tradition italienne en matière de boisson...</p>
              <p class="prix">Prix: 2.50€</p>
              <p class="volume">Volume: 12cl</p>
              <a href="./pages/ristretto.php" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
        <div class="card m-5 col-8 col-md-4 col-lg-3">
            <img src="./images/cappuccino.png" class="card-img-top" alt="Cappuccino">
            <div class="card-body">
              <h5 class="card-title">Cappuccino</h5>
              <p class="description">Cette boisson est aussi célèbre que l'expresso...</p>
              <p class="prix">Prix: 5.50€</p>
              <p class="volume">Volume: 40cl</p>
              <a href="./pages/cappuccino.php" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
        <div class="card m-5 col-8 col-md-4 col-lg-3">
            <img src="./images/americano.png" class="card-img-top" alt="Americano">
            <div class="card-body">
              <h5 class="card-title">Americano</h5>
              <p class="description">Tordons d'emblée le coup des croyances populaires erronées, en insistant...</p>
              <p class="prix">Prix: 3.50€</p>
              <p class="volume">Volume: 40cl</p>
              <a href="./pages/americano.php" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
        <div class="card m-5 col-8 col-md-4 col-lg-3">
            <img src="./images/mocaccino.png" class="card-img-top" alt="Mocaccino">
            <div class="card-body">
              <h5 class="card-title">Mocaccino</h5>
              <p class="description">Cette boisson à base de café, de chocolat et de lait fait partie des recettes typiquement italiennes...</p>
              <p class="prix">Prix: 5.00€</p>
              <p class="volume">Volume: 20cl</p>
              <a href="./pages/mocaccino.php" class="btn btn-primary">En savoir plus</a>
            </div>
        </div>
    </main>
<?php 
include("./templates/footer_index.php");
?>