<?php
   
  // Include database file
  include 'Employee.php';
 
  $employeeObj = new Employee();
 
  // Edit employee record
  if(isset($_GET['id']) && !empty($_GET['id'])) {
    $id = $_GET['id'];
    $employee = $employeeObj->displyaRecordById($id);
  }
 
  // Update Record in employee table
  if(isset($_POST['update'])) {
    $employeeObj->updateRecord($_POST);
  }  
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>CDSP Emplyee CMS</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"/>
</head>
<body>
 
<div class="card text-center" style="padding:15px;">
  <h4>CDSP Emplyee CMS</h4>
</div><br> 
 
<div class="container">
  <form action="edit.php" method="POST" enctype="multipart/form-data">
    <div class="mb-3">
        <label for="nom" class="form-label">Nom </label>
        <input type="text" class="form-control" value="<?php echo $employee["nom"] ?>" name="nom" id="nom" aria-describedby="emailHelp" required="required">
    </div>

    <div class="mb-3">
        <label for="prenom" class="form-label">Prénom </label>
        <input type="text" class="form-control" value="<?php echo $employee["prenom"] ?>" name="prenom" id="prenom" aria-describedby="emailHelp" required="required">
    </div>

    <div class="mb-3">
        <label for="matricule" class="form-label">Matricule </label>
        <input type="text" class="form-control" value="<?php echo $employee["matricule"] ?>"  name="matricule" id="matricule" aria-describedby="emailHelp" required="required">
    </div>

    <div class="mb-3">
        <label for="poste" class="form-label">Poste </label>
        <input type="text" class="form-control" value="<?php echo $employee["poste"] ?>"  name="poste" id="poste" aria-describedby="emailHelp" required="required">
    </div>

    <div class="mb-3">
        <label for="email" class="form-label">Email </label>
        <input type="email" class="form-control" value="<?php echo $employee["email"] ?>"  name="email" id="email" aria-describedby="emailHelp" required="required">
    </div>

    <div class="mb-3">
        <label for="naissance" class="form-label">Date de naissance </label>
        <input type="date" value="<?php echo $employee["naissance"] ?>" class="form-control" name="naissance" id="naissance" aria-describedby="emailHelp" required="required">
    </div>

    <div class="form-group mb-3">
        <label for="biblio">Biblio</label>
        <textarea class="form-control" value=""  id="biblio" name="biblio" rows="5" required="required"><?php echo $employee["biblio"] ?></textarea>
    </div>

    <div class="mb-3">
        <label for="photo" class="form-label">Votre photo</label>
        <input class="form-control" type="file" id="photo" name="photo" accept=".png,.jpeg,.jpg" >
    </div>

    <div class="form-group">
      <input type="hidden" name="id" value="<?php echo $employee['id']; ?>">
      <input type="submit" name="update" class="btn btn-primary" style="float:right;" value="Update">
    </div>

  </form>
</div>
 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>