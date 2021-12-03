<?php
//comment créer une variable
//nommenclature alphanumérique
$nom="HOUNGUIA";
$prenoms="Casimir";
$profession="Technicien";
$age= 60;
//si la variable est un nombre entier, on omet les cotes 


?>
Merci monsieur le Directeur du CDSP
Merci messieurs les formateurs
Bienvenus, chers heureux participants à cette formation sur PHP
************

<?php
echo $nom;
echo $prenoms;
echo $profession;
echo $age;

$note_math=17;
$note_physique=16;
$note_technologie=18.5;
$note_anglais=8.5;
$note_francais=13;
$note_conduite=18;

// calcul de la moyenne
$moyenne=($note_math+$note_physique+$note_technologie+$note_anglais+$note_francais+$note_conduite)/6;

echo "MATHEMATIQUE:".$note_math;
echo "PHYSIQUE:". $note_physique;
echo "TECHNOLOGIE :".$note_technologie;
echo "ANGLAIS:".$note_anglais;
echo "FRANCAIS:".$note_francais;
echo "CONDUITE:".$note_conduite;

echo "Ma moyenne est :";
echo $moyenne;

// Affichage de la avec concaténation (utiliser '.' entre les varables) 
// Retour à la ligne (."\n")
echo "Affichage avec retour à la ligne et concatenation";
echo "MES NOTES";
echo "MATHEMATIQUE:".$note_math."\n";
echo "PHYSIQUE:".$note_physique."\n";
echo "TECHNOLOGIE :".$note_technologie."\n";
echo "ANGLAIS:".$note_anglais."\n";
echo "FRANCAIS:".$note_francais."\n";
echo "CONDUITE:".$note_conduite."\n";
echo "Ma moyenne est :".$moyenne."\n";

// ARRAY : création de tableau
$Participants=["Casimir
 
?>
Bravo ...
J'ai bien réussi mon premier fichier PHP !!!
