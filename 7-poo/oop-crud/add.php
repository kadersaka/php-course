<?php
 
  // Include database file
  include 'Employee.php';
 
  $employeeObj = new Employee();
 
  // Insert Record in customer table
  if(isset($_POST['submit'])) {
    $employeeObj->insertData($_POST, $_FILES);
  }
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CDSP Employee CMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
 
<div class="card text-center" style="padding:15px;">
  <h4>CDSP Employee CMS</h4>
</div><br> 
 
<div class="container">
  <form action="add.php" method="POST" enctype="multipart/form-data">
    

    <div class="mb-3">
        <label for="nom" class="form-label">Nom </label>
        <input type="text" class="form-control" name="nom" id="nom" aria-describedby="emailHelp" required="required">
    </div>

    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom </label>
        <input type="text" class="form-control" name="prenom" id="prenom" aria-describedby="emailHelp" required="required">
    </div>

    <div class="mb-3">
        <label for="matricule" class="form-label">Matricule </label>
        <input type="text" class="form-control" name="matricule" id="matricule" aria-describedby="emailHelp" required="required">
    </div>

    <div class="mb-3">
        <label for="poste" class="form-label">Poste </label>
        <input type="text" class="form-control" name="poste" id="poste" aria-describedby="emailHelp" required="required">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email </label>
        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" required="required">
    </div>

    <div class="mb-3">
        <label for="naissance" class="form-label">Date de naissance </label>
        <input type="date" value="1990-06-01" class="form-control" name="naissance" id="naissance" aria-describedby="emailHelp" required="required">
    </div>

    <div class="form-group mb-3">
        <label for="biblio">Biblio</label>
        <textarea class="form-control" id="biblio" name="biblio" rows="5" required="required"></textarea>
    </div>

    <div class="mb-3">
        <label for="photo" class="form-label">Votre photo</label>
        <input class="form-control" type="file" id="photo" name="photo" accept=".png,.jpeg,.jpg"  required="required">
    </div>


    <input type="submit" name="submit" class="btn btn-primary" style="float:right;" value="Submit">
  </form>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>