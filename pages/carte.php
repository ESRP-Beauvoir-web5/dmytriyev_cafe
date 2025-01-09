<?php
include("../templates/header.php");
include("../templates/data.php");
?>
    <main class="d-flex flex-wrap justify-content-around">
        <table class="table m-5">
            <thead>
              <tr>
                <th scope="col">Nom produit</th>
                <th scope="col">Volume</th>
                <th scope="col">Prix</th>
                <th scope="col">Fonction</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Macchiato</td>
                <td>20cl</td>
                <td>3.50€</td>
                <td><a class="btn btn-primary me-3" href="./macchiato.php">Voir</a><a class="btn btn-success" href="#">Acheter</a></td>
              </tr>
              <tr>
                <td>Expresso</td>
                <td>15cl</td>
                <td>2.50€</td>
                <td><a class="btn btn-primary me-3" href="./expresso.php">Voir</a><a class="btn btn-success" href="#">Acheter</a></td>
              </tr>
              <tr>
                <td>Ristretto</td>
                <td>12cl</td>
                <td>2.50€</td>
                <td><a class="btn btn-primary me-3" href="./ristretto.php">Voir</a><a class="btn btn-success" href="#">Acheter</a></td>
              </tr>
              <tr>
                <td>Cappuccino</td>
                <td>40cl</td>
                <td>5.50€</td>
                <td><a class="btn btn-primary me-3" href="./cappuccino.php">Voir</a><a class="btn btn-success" href="#">Acheter</a></td>
              </tr>
              <tr>
                <td>Americano</td>
                <td>40cl</td>
                <td>3.50€</td>
                <td><a class="btn btn-primary me-3" href="./americano.php">Voir</a><a class="btn btn-success" href="#">Acheter</a></td>
              </tr>
              <tr>
                <td>Mocaccino</td>
                <td>20cl</td>
                <td>5.00€</td>
                <td><a class="btn btn-primary me-3" href="./mocaccino.php">Voir</a><a class="btn btn-success" href="#">Acheter</a></td>
              </tr>
            </tbody>
         </table>
    </main>
<?php
include("../templates/footer.php");
?>