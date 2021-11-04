<?php

///Liste de sutilisateurs


$users_json = json_decode('[
    {
        "email": "user1@cdsp.bj",
        "password": "azerty"
    },
    
    {
        "email": "user2@cdsp.bj",
        "password": "azerty"
    },
    
    {
        "email": "user3@cdsp.bj",
        "password": "azerty"
    }
    
]');

$users = [["email"=>"user1@cdsp.bj", "password"=>"azerty"], ["email"=>"user2@cdsp.bj", "password"=>"azerty"], ["email"=>"user3@cdsp.bj", "password"=>"azerty"], ];

var_dump($users);

if (isset($_POST['email']) && trim($_POST['email']) != "" &&  isset($_POST['password'])) {
    foreach ($users as $user) {
        if ( $user['email'] == $_POST['email'] && $user['password'] === $_POST['password']) {
            $loggedinuser =   $user;
        } else {
            $error = "mauvais email ou mot de passe";
        }
    }
}
?>

<!--
   Si utilisateur/trice est non identifié(e), on affiche le formulaire
-->



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

  <?php if(!isset($loggedinuser)): ?>

    <div class="container">
        <div class="row">
        <form method="post" action="">
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password">
            </div>
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

  </div>

  </div>
<!-- 
    Si utilisateur/trice bien connectée on affiche un message de succès
-->
<?php else: ?>
    <div class="container">
        <div class="row">
            <div class="alert alert-success" role="alert">
                Bonjour   et bienvenue <?php echo $loggedinuser['email']; ?>! Vous êtes connecté
            </div>
        </div>
    </div>
    <?php include_once('homeinclude.php'); ?>
<?php endif; ?>

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
