<?php
/**+
 * Boostrap form
 * différents éléments du formulaire
 *  Attribut "name"
 */

 /**
  * 1- intégrer boostrap
  * 2- Créer un formulaire: nom, prenom, 
  * addrsse, telephone, 
  * email, lettre de motivation(saisir), cv, 
  * diplome
  * Boutton: Postuler (de couleur bleu)
  * recupere les données et les afficher 
  * à lutilisateur
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

    <title>Contact</title>
  </head>
  <body>
    <h1>Contactez-nous ici</h1>
    <form method="post" action="postform.php" class="p-5">
  <div class="form-group">
    <label for="email">Email</label>
    <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com" required="required">
  </div>
  <div class="form-group">
    <label for="objet">Objet</label>
    <select class="form-control" id="objet" name="objet">
      <option>Information</option>
      <option>Reclamation</option>
      <option>Support</option>
      <option>Autre</option>
    </select>
  </div>
  <div class="form-group">
    <label for="message">Votre message</label>
    <textarea class="form-control" id="message" name="message" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary" name="envoyer">Envoyer</button>
</form>
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
