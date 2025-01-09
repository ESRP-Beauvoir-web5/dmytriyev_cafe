<?php 
include("../templates/header_connect.php");
?>
<main class="d-flex flex-wrap justify-content-around">
  <form action="../pages/backoffice.php" class="col-8 my-5">
      <div class="row mb-3">
        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nom" value="Macchiato">
        </div>
      </div>
      <div class="row mb-3">
        <label for="url_image" class="col-sm-2 col-form-label">url image</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="url_image" value="https://www.nespresso.com/ncp/res/uploads/recipes/nespresso-recipes-Latte-Macchiato.jpg">
        </div>
      </div>
      <div class="row mb-3">
        <label for="prix" class="col-sm-2 col-form-label">Prix en €</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="prix" value="3.5">
        </div>
      </div>
      <div class="row mb-3">
        <label for="volume" class="col-sm-2 col-form-label">Volume en cl</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="volume" value="20">
        </div>
      </div>
      <div class="row mb-3">
        <label for="dexcription" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="dexcription" rows="5">Littéralement « Latte Macchiato » signifie « lait taché » en italien. Le lait chaud et la mousse de lait onctueuse accueillent la délicieuse empreinte du café pour un résultat spectaculaire et voluptueux. Pour le plus grand plaisir des gourmands !</textarea>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="cafe" checked>
            <label class="form-check-label" for="cafe">Café</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="sucre" checked>
            <label class="form-check-label" for="sucre">Sucre</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="lait" checked>
            <label class="form-check-label" for="lait">Lait</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="sirop_cafe">
            <label class="form-check-label" for="sirop_cafe">Sirop de café</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="sucre_canne">
            <label class="form-check-label" for="sucre_canne">Sucre de canne</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="sirop_framboise">
            <label class="form-check-label" for="sirop_framboise">Sirop de framboise</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="cacao_poudre">
            <label class="form-check-label" for="cacao_poudre">Cacao en poudre</label>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Modifier</button>
    </form>
</main>
<?php 
include("../templates/footer.php");
?>