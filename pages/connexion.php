<?php
include("../templates/header.php");
?>
<main class="d-flex flex-wrap justify-content-around">
  <form action="./index_connect.php" class="col-8 my-5">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      <div id="emailHelp" class="form-text">Vos données resteront confidentielles</div>
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">J'accepte les CGV</label>
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
  </form>
</main>
<?php
include("../templates/footer.php");
?>