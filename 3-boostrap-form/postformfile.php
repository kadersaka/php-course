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
    var_dump($_FILES['cv']);
    // Testons si l'extension est autorisée
    $fileInfo = pathinfo($_FILES['cv']['name']);
    var_dump($fileInfo);
    $extension = $fileInfo['extension'];
    $allowedExtensions = ['pdf', 'doc', 'docx'];
    if (!in_array($extension, $allowedExtensions))
    {
      echo("Extension non autorisée");
      return;
    }
      // valider le fichier et le stocker définitivement
      move_uploaded_file($_FILES['cv']['tmp_name'], 'cvs/' . basename($_FILES['cv']['name']));
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