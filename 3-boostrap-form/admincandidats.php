<?php
/**
 * intégrer boostrap
 * intégrer le tableau
 * récuperer et afficher la liste des candidats dans le tableau
 */

try
{
	$db = new PDO(
        'mysql:host=localhost;dbname=cdsp_db;charset=utf8',
        'root',
        ''
    );
}
catch (Exception $e)
{
        die('Impossible de se connecter, erreur : ' . $e->getMessage());
}

$candstsmt = $db->prepare('SELECT * FROM candidatures');
$candstsmt->execute();
$candidats = $candstsmt->fetchAll();

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>GET</title>
  </head>
  <body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href=""><img src="logo.png" width="50" height="50" class="d-inline-block align-text-top" /></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="formsfilecandidature.php">Accueil</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Apropos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Services
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Formation</a></li>
            <li><a class="dropdown-item" href="#">Service 2</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Service 3</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Recrutement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Annonces</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="admincandidats.php">Administration</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Recherche" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Recherche</button>
      </form>
    </div>
  </div>
</nav>
<div class="container">

<div class="row">
<h1 class="mt-5">Toutes les candidatures</h1>

</div>

</div>
  
<div class="container py-4">


<div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4">


<table class="table">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nom</th>
      <th scope="col">Email</th>
      <th scope="col">Motivation</th>
      <th scope="col">CV</th>
    </tr>
  </thead>
  <tbody>
  <?php 
    foreach ($candidats as $candidat) {
        ?>

    <tr>
      <th scope="row"><?php echo $candidat["id"] ?></th>
      <td><?php echo $candidat["nom"] ?></td>
      <td><?php echo $candidat["email"] ?></td>
      <td><?php echo $candidat["lm"] ?></td>
      <td><a href="cvs/<?php echo $candidat["cv"]; ?>" class="btn btn-primary"><b>Télécharger le  CV</b> </a></td>
    </tr>

  <?php
    }
  ?>



  </tbody>
</table>



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