<?php
 
    class Employee
    {
        private $servername = "localhost";
        private $username   = "root";
        private $password   = "";
        private $database   = "cdsp_db";
        public  $con;
 
 
        //TODO: Sortir la connexion au db dans une autre clase et la faire hériter par Employee. Employee héritera du sonctruteur de son parent mais viendra avec ses méthodes
        // Database Connection 
        public function __construct()
        {
            $this->con = new mysqli($this->servername, $this->username,$this->password,$this->database, 3308);
            if(mysqli_connect_error()) {
             trigger_error("Failed to connect to MySQL: " . mysqli_connect_error());
            }else{
            return $this->con;
            }
        }
 
        // Insert employee data into employee table
        public function insertData($post, $files)
        {
           // var_dump($files); 
            //var_dump($post);
 
            $fileInfo = pathinfo($_FILES['photo']['name']);
            //var_dump($fileInfo);
            $extension = $fileInfo['extension'];
            $allowedExtensions = ['jpg', 'png', 'jpeg'];
            if (!in_array($extension, $allowedExtensions))
            {
              echo("Extension non autorisée");
              return;
            }
              // valider le fichier et le stocker définitivement
              move_uploaded_file($_FILES['photo']['tmp_name'], strip_tags('photos/' . basename($_FILES['photo']['name'])));
          

            $nom = $this->con->real_escape_string($_POST['nom']);
            $prenom = $this->con->real_escape_string($_POST['prenom']);
            $matricule = $this->con->real_escape_string($_POST['matricule']);
            $naissance = (new DateTime($this->con->real_escape_string($_POST['naissance'])))->format('Y-m-d');
            $email = $this->con->real_escape_string($_POST['email']);
            $poste = $this->con->real_escape_string($_POST['poste']);
            $biblio = $this->con->real_escape_string($_POST['biblio']);
            $photo =  strip_tags('photos/' . basename($_FILES['photo']['name']));
//            $photo = "";
            $query="INSERT INTO employees(nom, prenom, matricule, naissance, email, poste, biblio, photo) VALUES('$nom','$prenom','$matricule','$naissance','$email','$poste','$biblio','$photo')";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:index.php?msg1=insert");
            }else{
                echo "Erreur d'enregistrement!";
            }
 
        }
 
        // Fetch employee records for show listing
        public function displayData()
        {
            $query = "SELECT * FROM employees";
            $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $data = array();
            while ($row = $result->fetch_assoc()) {
                   $data[] = $row;
            }
             return $data;
            }else{
             echo "Aucun employer trouvé";
            }
        }
 
        // Fetch single data for edit from employee table
        public function displyaRecordById($id)
        {
            $query = "SELECT * FROM employees WHERE id = '$id'";
            $result = $this->con->query($query);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            return $row;
            }else{
            echo "Record not found";
            }
        }
 
        // Update employee data into employee table
        public function updateRecord($postData)
        {
            
            $id = $this->con->real_escape_string($_POST['id']);

            $nom = $this->con->real_escape_string($_POST['nom']);
            $prenom = $this->con->real_escape_string($_POST['prenom']);
            $matricule = $this->con->real_escape_string($_POST['matricule']);
            $naissance = (new DateTime($this->con->real_escape_string($_POST['naissance'])))->format('Y-m-d');
            $email = $this->con->real_escape_string($_POST['email']);
            $poste = $this->con->real_escape_string($_POST['poste']);
            $biblio = $this->con->real_escape_string($_POST['biblio']);
//            $photo =  strip_tags('photos/' . basename($_FILES['photo']['name']));
            $photo = "";


        if (!empty($id) && !empty($postData)) {
            $query = "UPDATE employees SET nom = '$nom', prenom = '$prenom', matricule = '$matricule', naissance = '$naissance', email = '$email', poste = '$poste' , biblio = '$biblio' , photo = '$photo' WHERE id = '$id'";
            $sql = $this->con->query($query);
            if ($sql==true) {
                header("Location:index.php?msg2=update");
            }else{
                echo "Erreur lors de la mise à jour!";
            }
            }
             
        }
 
 
        // Delete employee data from employee table
        public function deleteRecord($id)
        {
            $query = "DELETE FROM employees WHERE id = '$id'";
            $sql = $this->con->query($query);
        if ($sql==true) {
            header("Location:index.php?msg3=delete");
        }else{
            echo "Erreur lors de la tentative de suppression";
            }
        }
 
    }
?>
