<?php
///les index des tableaux partent de 0 à n-1 pour un tableau contenant n éléments

///PHP a beaucoup évoulé: la nouvelle convention pour créer un tableau
$mon_tableau1 = [10, 20, "Cotonou"];
echo $mon_tableau1;
echo "\n$mon_tableau1[0]";

///L'ancienne convention
$mon_tableau2 = array("10", 20, "abc");
echo "\n$mon_tableau2[0]";


///on peut imbriquer des tableaux
$nom_etudiant = "kader SAKA";
$filiere_etudiant = "GL";
$notes_etudiant = [10, 20, 15, 9, 14];

$apprenant = [$nom_etudiant, $filiere_etudiant, $notes_etudiant];

echo "\n".$apprenant[2][2];

///les tableaux associatifs
$mon_tableau_associatif =  ['nom' => "SAKA", "prenom" =>"Kader", "notes" =>["maths" => 10, "physique" => 15, "anglais" => 20]];

echo "\n".$mon_tableau_associatif["nom"];
echo "\n".$mon_tableau_associatif["prenom"];
echo "\n".$mon_tableau_associatif["notes"];
echo "\n".$mon_tableau_associatif["notes"]["maths"];

///modifier une entrée

$mon_tableau_associatif["prenom"] = "Sero";

echo "\n".$mon_tableau_associatif["nom"];
echo "\n".$mon_tableau_associatif["prenom"];
echo "\n";
print_r($mon_tableau_associatif["notes"]);
echo "\n";
var_dump($mon_tableau_associatif["notes"]);
echo "\n".$mon_tableau_associatif["notes"]["maths"];
