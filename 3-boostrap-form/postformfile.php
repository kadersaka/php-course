<?php
/**
 * Traitement par post
 * Pour éviter la faille XSS, il faut d'appliquer la fonction htmlspecialchars  ou  strip_tags sur tous les textes envoyés par vos visiteurs 
 * || !isset($_FILES['cv']) || $_FILES['cv']['error'] > 0
 * $_FILES
 */

if (!isset($_POST['nom']) || !isset($_POST['motivation']) || !isset($_POST['email'])  || !isset($_FILES['cv']) || $_FILES['cv']['error'] > 0)
{
	echo("Rassurez-vous de fournir votre addresse nom, email, lettre de motivation, et cv");
	
    return;
}
else{
   // var_dump($_FILES['cv']);
   // var_dump($_FILES['diplome']);
    
    // Testons si l'extension est autorisée
    $fileInfoCv = pathinfo($_FILES['cv']['name']);
   // $fileInfoDiplome = pathinfo($_FILES['diplome']['name']);
    
    //array qui continet les infos du CV et du diplome
    //var_dump($fileInfoCv);
   // var_dump($fileInfoDiplome);
    
    //recuperer les extensions
    $extensionCv = $fileInfoCv['extension'];
   // $extensionDiplome = $fileInfoDiplome['extension'];
    
    //liste des extensions autorisées
    $allowedCvExtensions = ['pdf', 'doc', 'docx'];
    //$allowedDiplomeExtensions = ['pdf', 'doc', 'docx'];
    
    if (!in_array($extensionCv, $allowedCvExtensions))
    {
      echo("Extension non autorisée");
      return;
    }  
    /*
    if (!in_array($extensionDiplome, $extensionDiplome))
    {
      echo("Extension non autorisée");
      return;
    }
    */
      // valider le fichier et le stocker définitivement
      move_uploaded_file($_FILES['cv']['tmp_name'],
      'cvs/' . basename($_FILES['cv']['name']));
  /*    
      move_uploaded_file($_FILES['diplome']['tmp_name'],
      'diplomes/' . basename($_FILES['diplome']['name']));
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
 
$cv =  strip_tags('cvs/' . basename($_FILES['cv']['name']));

$nom = strip_tags($_POST['nom']);
$email = strip_tags($_POST['email']);
$motivation = strip_tags($_POST['motivation']);
//$naissance = new DateTime(strip_tags($_POST['naissance']));

$querry = 'INSERT INTO candidatures(nom, email, lm, cv) VALUES (:nom,  :email, :lm, :cv)';

$insertrow = $db->prepare($querry);

$insertrow->execute([
        "nom"=>$nom,
        "email"=>$email, 
        "lm"=>$motivation,
        "cv"=>$cv,
]);




    }

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
  <h1>Votre dossier de candidature a été enregistré!</h1>
        
        <div class="card">
            
            <div class="card-body">
                <h5 class="card-title">Récapitulatif</h5>
                <p class="card-text"><b>Nom</b> : <?php echo $_POST['nom']; ?></p>
                <p class="card-text"><b>Email</b> : <?php echo $_POST['email']; ?></p>
                <p class="card-text"><b>Motivation</b> : <?php echo $_POST['motivation']; ?></p>
                <p class="card-text"><a href="cvs/<?php echo $_FILES['cv']["name"]; ?>"><b>votre CV</b> : <?php echo $_FILES['cv']["name"]; ?></a></p>
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