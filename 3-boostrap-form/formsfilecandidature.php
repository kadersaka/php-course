<?php
/**+
 * Boostrap form
 * différents éléments du formulaire
 *  Attribut "name"
 */


?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Recrutement d'un expert IT</title>
  </head>
  <body>

    <div class="container">
      <div class="row">
      <h1>Remplissez le formulaire ci-dessous pour postuler au poste d'expert IT</h1>
      </div>
    </div>


<div class="container">
  <div class="row">
    <form method="post" action="postformfile.php" class="p-5" enctype="multipart/form-data">
  <div class="form-group mb-3">
    <label for="nom">Nom</label>
    <input type="nom" class="form-control" name="nom" id="nom" placeholder="Votre nom" required="required">
  </div>
  <div class="form-group mb-3">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required="required">
  </div>
  <div class="form-group mb-3">
    <label for="motivation">Votre Lettre de motivation</label>
    <textarea class="form-control" id="motivation" name="motivation" rows="5"></textarea>
  </div>
  <div class="mb-3">
  <label for="cv" class="form-label">Votre CV (word, PDF)</label>
  <input class="form-control" type="file" id="cv" name="cv" accept=".pdf,.doc,.docx">
</div>
  <button type="submit" class="btn btn-primary" name="envoyer">Envoyer</button>
</form>

  </div>
</div>

 


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