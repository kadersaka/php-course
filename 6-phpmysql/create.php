<?php
/**
 * ...créer l'objet $db PDO 
 * 
 * 
 * **/

  
try
{
	$db = new PDO(
        'mysql:host=localhost;port=3308;dbname=cdsp_db;charset=utf8',
        'root',
        ''
    );
}
catch (Exception $e)
{
        die('Impossible de se connecter, erreur : ' . $e->getMessage());
}
/*

// Ecriture de la requête
$querry = 'INSERT INTO employees(nom, prenom, matricule, naissance, email, poste, biblio) VALUES (:nom, :prenom, :matricule, :naissance, :email, :poste, :biblio)';

// Préparation
$insertrow = $db->prepare($querry);

// Exécution ! La recette est maintenant en base de données
$insertrow->execute([
        "nom"=>"DOE",
        "prenom" => "John", 
        "matricule" => "A45GT6SQ", 
        "naissance"=>"1990-06-22", 
        "email"=>"jdoe@cdsp.bj", 
        "poste"=>"Architecte",
        "biblio"=>"Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, mollitia laudantium cupiditate quam quia tenetur a ab, doloribus quas alias molestiae voluptates atque, reprehenderit expedita eligendi architecto illo odit rerum.",
]);
*/

/*
$updatequerry = 'UPDATE employees SET email = :newemail, prenom = :newprenom WHERE id = :id';
$updaterow = $db->prepare($updatequerry);

$updaterow->execute([
    "newprenom" => "Jane", 
    "newemail"=>"jane@cdsp.bj", 
    "id"=>4,
]);
*/
$delquerry = 'DELETE FROM employees WHERE id = :id';
$deletestmt = $db->prepare($delquerry);
$deletestmt->execute([
    'id' => 4,
]) or die(print_r($db->errorInfo()));

?>
