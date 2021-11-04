<?php


///nomenclature: caractères alphanumériques. les ponctués sont acceptés mais les eviter. 
//$4site = 'pas encore';     // invalide : commence par un nombre
//$_4site = 'pas encore';    // valide : commence par un souligné
//$täyte = 'mansikka';    // valide : 'ä' est ASCII (étendu) 228.

$nom = "SAKA";
$prenom = "kader";
$note1 = 15;
$note2 = 12;
$moyenne = ($note1 + $note2)/2;

echo 'Bonjour je m\'appelle '.$nom.' '.$prenom.' jai eu '.(($note1 + $note2)/2).'de moyenne';
echo "\n Bonjour, je m'appelle $nom $prenom, j'ai eu $moyenne de moyenne"
?>

Bonjour je M'appelle Kader SAKA j'ai eu 15 de moyenne