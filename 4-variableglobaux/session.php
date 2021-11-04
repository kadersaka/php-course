<?php
session_start();
/**
 * Les sessions permettent de transmettre des données relatives à l'utilisateur courant de page en page sur un site web donnée
 * $_SESSION
 * fait partir des variales globales telles que $_POST et $_GET
 * création: $_SESSION['nom_de_la_variable'] on peut créer autant de variables enregistrée pour une unique sessione t y accéder sur importe quel page du site
 * 
 * session_start() : initialise la session sessions. doit être appelé à la premiere ligne de code sur chaque page où on veut créer ou utiliser les variables session
 * session_destroy() : ferme la session du visiteur généralement lorsquil se déconnecte
 */
$_SESSION['nom'] = "SAKA";
$_SESSION['prenom'] = "Kader";
$_SESSION['matricule'] = "A48GE9D";

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

    <div class="container mt-5">
        <div class="row">
            Votre dashboard        
        </div>
        <div class="row">
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-success"><?php echo $_SESSION['nom'] ?></button>
            <button type="button" class="btn btn-warning"><?php echo $_SESSION['prenom'] ?></button>
            <button type="button" class="btn btn-danger"><?php echo $_SESSION['matricule'] ?></button>
            </div>

        </div>
    </div>
 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>