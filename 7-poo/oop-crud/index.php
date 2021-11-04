<?php
   
  // Include database file
  include 'Employee.php';
 
  $employeeObj = new Employee();
 
  // Delete record from table
  if(isset($_GET['id']) && !empty($_GET['id'])) {
      $id = $_GET['id'];
      $employeeObj->deleteRecord($id);
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
</div><br><br> 
 
<div class="container">
  <?php
    if (isset($_GET['msg1']) == "insert") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Your Registration added successfully
            </div>";
      } 
    if (isset($_GET['msg2']) == "update") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Your Registration updated successfully
            </div>";
    }
    if (isset($_GET['msg3']) == "delete") {
      echo "<div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              Record deleted successfully
            </div>";
    }
  ?>
  <h2>View Records
    <a href="add.php" class="btn btn-primary" style="float:right;">Add New Record</a>
  </h2>
  <table class="table table-hover">
    <thead>
      <tr>

        <th>#</th>
        <th>Photo</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Matricule</th>
        <th>Email</th>
        <th>Poste</th>
        <th>Action</th>

      </tr>
    </thead>
    <tbody>
        <?php 
          $employees = $employeeObj->displayData(); 
          foreach ($employees as $employee) {
        ?>
        <tr>
          <td><?php echo $employee['id'] ?></td>
          <td><?php echo $employee['photo'] ?></td>
          <td><?php echo $employee['nom'] ?></td>
          <td><?php echo $employee['prenom'] ?></td>
          <td><?php echo $employee['matricule'] ?></td>
          <td><?php echo $employee['email'] ?></td>
          <td><?php echo $employee['poste'] ?></td>
          <td>
            <a href="edit.php?id=<?php echo $employee['id'] ?>" style="color:green">
              <i class="fa fa-pencil" aria-hidden="true"></i></a>&nbsp
            <a href="index.php?id=<?php echo $employee['id'] ?>" style="color:red" onclick="confirm('Are you sure want to delete this record')">
              <i class="fa fa-trash" aria-hidden="true"></i>
            </a>
          </td>
        </tr>
      <?php } ?>
    </tbody>
  </table>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>