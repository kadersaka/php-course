<?php
/**+
* Bootstrap

*/

/**
	* 1- intégrer bootstrap
	* 2- créer un formulaire : nom, prénoms, adresse, téléphone, 
			* email, lettre de motivation (à saisir), cv, diplôme,
	* 3- Bouton : Postuler (de couleur bleue)
	* 4- Récupérer les donnér et les afficher à l'utilisateur

*/


$nom=$_POST["nom"];
$prenoms=$_POST["prenoms"];
$adresse=$_POST["adresse"];
$telephone=$_POST["telephone"];
$email=$_POST["email"];
$cv=$_FILES["cv"];
$diplomes=$_FILES["diplomes"];

if(isset($_POST["nom"]) && if(isset($_POST["prenoms"]) && if(isset($adresse=$_POST["adresse"]) && if(isset($telephone=$_POST["telephone"]) && if (isset($email=$_POST["email"]) && if(isset($cv=$_FILES["cv"]) && if(isset($diplomes=$_FILES["diplomese"])

{;
var_dump($_FILES["cv"]);
var_dump($_FILES["diplomes"]);

// Testons si l'extension est autorisée
$fileinfoCv= pathinfo($_FILES["cv"] ["name"]);
$fileinfoDiplomes= pathinfo($_FILES["dilpomes"] ["name"]);

//array


// récupération des extensions
$extensionCV = $fileinfoCv["extension"];
$extensionDiplomes = $fileinfoDiplomes["extension"];

// Liste des extensions




?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->

<form methode=""post"" enctype="multipart/form-data" action="#">
	<input type="texte" id="nom" name="nom" placeholder="votre nom"/>
	<input type="texte" id="prenoms" name="prenoms" placeholder="vos prenoms"/>
	<input type="texte" id="adresse" name="adresse" placeholder="votre adresse"/>
	<input type="texte" id="telephone" name="telephone" placeholder="votre téléphone"/>
	<input type="texte" id="email" name="email" placeholder="votre email"/>
	<textarea name="Lettre de motivation" id="lettre de motivation"rows=4></textarea>
	<input type="submit" name="Recuperer"/>
	<input type="file" id="cv" name="cv" placeholder="votre cv"/>
	<input type="file" id="diplomes" name="diplomes" placeholder="vos diplômes"/>

</form>




  </body>
</html>







