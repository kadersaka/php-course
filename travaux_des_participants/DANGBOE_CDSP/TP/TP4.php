
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>RENSEIGNER VOS DONNEES</title>
  </head>
  <body>
    <h1>RENSEIGNER VOS DONNEES</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>

<?php

?>


<div class="container">

<div class="row">

<form method="post" enctype="multipart/form-data" action="trait.php">

<div class="mb-3">
  <label for="nom" class="form-label">nom</label>
  <input type="nom" required="required"class="form-control" id="nom" name="nom">
</div>
<div class="mb-3">
  <label for="prenon" class="form-label">prenom</label>
  <input type="prenom" required="required" class="form-control" id="prenom" name="prenom">
</div>
<div class="mb-3">
  <label for="adresse" class="form-label">adresse</label>
  <input type="adresse" required="required" class="form-control" id="adresse" name="adresse">
</div>
<div class="mb-3">
  <label for="telephone" class="form-label">telephone</label>
  <input type="telephone" required="required" class="form-control" id="telephone" name="telephone">
</div>

<div class="mb-3">
    <label for="formFile" class="form-label">cv</label>
    <input class="form-control" required="required" type="file" id="cv" name="cv"> 
  </div>

  <div class="mb-3">
    <label for="formFile" class="form-label">diplome</label>
    <input class="form-control" required="required" type="file" id="diplome" name="diplome">
  </div>
  <div class="mb-3">
    <label for="exampleFormControlTextarea1" class="form-label">Votre lettre de motivation</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

  <button type="submit" class="btn btn-success">Postuler</button>
</form>

</div>

</div>

