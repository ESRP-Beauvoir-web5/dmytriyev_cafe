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
      <label for="message" class="form-label">Votre message</label>
      <textarea class="form-control" id="message" rows="8"></textarea>
    </div>
    <div class="mb-3 form-check">
      <input type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">J'accepte d'être recontacté par mail</label>
    </div>
    <button type="submit" class="btn btn-primary">Envoyer</button>
  </form>
</main>
<?php
include("../templates/footer.php");
?>