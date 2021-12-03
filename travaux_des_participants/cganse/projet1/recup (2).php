<?php
if(isset($_POST["nom"]) && isset($_POST["prenom"])  && isset($_POST["telephone"]) && isset($_POST["adresse"]) && isset($_POST["email"])  
&& isset($_POST["motivation"]) && isset($_FILES["cv"]) && isset($_FILES["diplome"]))

{
    
    //Testons si l'extension est autorisée
    $filesInfo= pathinfo($_FILES['cv']['name']);
    $filediplome= pathinfo($_FILES['diplome']['name']);
    
    // recuperer les extensions
    $extensioncv= $filesInfo["extension"];
    $extensiondiplome= $filediplome["extension"];
    // liste des extensions autorisées
    $allowedcvextensions= ["pdf", "doc", "docx"];
    
    if (!in_array($extensioncv, $allowedcvextensions)){
        echo ("Extension non autorisée");
        return;
    }
    
    if (!in_array($extensiondiplome, $allowedcvextensions)) {
        echo ("Extension non autorisée");
        return;
    }
    
    //valider le fichier et le stocker definitivement
    move_uploaded_file($_FILES["cv"] ["tmp_name"], 
    "tmp/" .basename($_FILES["cv"]["name"]));
    
    move_uploaded_file($_FILES["diplome"] ["tmp_name"], 
    "tmp/" .basename($_FILES["diplome"]["name"]));

    
}

else{ 
    
 echo "error";
 return;
}

?>

<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>CDSP</title>
  </head>
  <body>
 

<form>
        <div class="container">
            <h3>Votre dossier de candidature a été enregistré avec succès</h3>
        <div class="card">
                <div class="card-body">
                <h5 class="card-title"> Récapitulatif </h5>
                <p class="card-text"><b>Nom</b> : <?php echo $_POST["nom"]. " " .$_POST["prenom"]; ?> </p>
                <p class="card-text"><b>Email</b> : <?php echo $_POST["email"]; ?> </p>
                <p class="card-text"><b>Lettre de motivation</b> : <?php echo $_POST["motivation"]; ?> </p>
                <a href="tmp/cvpdf"><b>Mon CV</b></a>
        </div>
        </div>

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