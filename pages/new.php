<?php 
include("../templates/header_connect.php");
?>
<main class="d-flex flex-wrap justify-content-around">
  <form action="../pages/backoffice.php" class="col-8 my-5" method="get">
      <div class="row mb-3">
        <label for="nom" class="col-sm-2 col-form-label">Nom</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="nom" name="nom">
        </div>
      </div>
      <div class="row mb-3">
        <label for="prix" class="col-sm-2 col-form-label">Prix en €</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="prix" name="prix">
        </div>
      </div>
      <div class="row mb-3">
        <label for="volume" class="col-sm-2 col-form-label">Volume en cl</label>
        <div class="col-sm-10">
          <input type="number" class="form-control" id="volume" name="volume">
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputPassword3" class="col-sm-2 col-form-label">Description</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="inputPassword3" name="description"></textarea>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-10 offset-sm-2">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="café" name="ingredients" value="cafe">
            <label class="form-check-label" for="cafe">Café</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="sucre" name="ingredients" value="sucre">
            <label class="form-check-label" for="sucre">Sucre</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="lait" name="ingredients" value="lait">
            <label class="form-check-label" for="lait">Lait</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="sirop_cafe" name="ingredients" value="siro de café">
            <label class="form-check-label" for="sirop_cafe">Sirop de café</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="sucre_canne" name="ingredients" value="sucre de canne">
            <label class="form-check-label" for="sucre_canne">Sucre de canne</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="sirop_framboise" name="ingredients" value="sirop de framboise">
            <label class="form-check-label" for="sirop_framboise">Sirop de framboise</label>
          </div>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="cacao_poudre" name="ingredients" value="cacao en poudre">
            <label class="form-check-label" for="cacao_poudre">Cacao en poudre</label>
          </div>
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Créer</button>
    </form>
</main>
<?php 
include("../templates/footer.php");
?>