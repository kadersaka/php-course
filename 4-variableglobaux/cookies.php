<?php
/**
 * Un cookie est un fichier enregistré sur l'ordinateur d'un visiteur d'un site web. 
 * le fichier contient des informations concernant l'utilisateur, telle que les informations de session quona  précédement enregistré
 * les cookies ne sont pas dangereux
 * un cookie contient généralement une seule info par exemple l'email
 * 
 * un cookie contient généralement: le nom, la valeur et la date d'expiration
 * la date d'expiration ets un timestamp: represente le nombre de séconde écoulées depuis unix (1er janvier 1970)
 * en PHP on obtient le timestamp en appelant la fonction time()
 * donc la date d'expiration est égal au timestamp + le délais en secondes
 * 
 * setcookie s'invoque avant tout code HTML
 * la valeur doit etre un string, int. ne supporte pas des variables complexs: array, objets
 * 
 */

setcookie(
    'email',
    "user99@cdsp.bj",
    [
        'expires' => time() + 365*24*3600,//expire dasn 1an
        'secure' => true,
        'httponly' => true,
    ]
);

/*
setcookie(
    'user',
    ["nom"=>"SAKA", "prenom"=>"Sero", "matricule"=>"4GT98OE4"],
    [
        'expires' => time() + 365*24*3600,//expire dasn 1an
        'secure' => true,
        'httponly' => true,
    ]
);
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

        <title>Hello, world!</title>
    </head>
    <body>

    <div class="container mt-5">
        <div class="row">
            Bonjour   <?php echo $_COOKIE['email'] ?>   
        </div>
        <!--div class="row">
            <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button type="button" class="btn btn-success"><?php echo $_COOKIE['user']['nom'] ?></button>
            <button type="button" class="btn btn-warning"><?php echo $_COOKIE['user']['prenom'] ?></button>
            <button type="button" class="btn btn-danger"><?php echo $_COOKIE['user']['matricule'] ?></button>
            </div>

        </div-->
    </div>
 

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>