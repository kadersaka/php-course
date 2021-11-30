<?php
//Comment créeer une variable
//nomenclature: caractères alpahnumérique
$prenom = "Kader";
$nom = "SAKA";
$age =  10;
$prenom2 = "Sero";

$math = 12;
$physique = 18;
$bilogie = 10;

//calculons le total 
$total = $math+$physique+$bilogie;

//calculons la moyenne
$moy =$total/3;
echo "Ma note en math est : ";
echo $math;

//concatenation
echo "Ma note en math est : ".$math;

$ph =  "Ma note en math est : ".$math;
echo $ph;

//concatenation
echo "\n";
echo "\n affichage avec concatenation";
echo "\n--------------------------------";


echo "Ma note en physique est : ".$physique."\n";
echo "Ma note en biologie est : ".$bilogie."\n";
echo "Ma la est : ".$math."\n";
echo "Ma note en math est : ".$math."\n";

?>
bonjour et bienvenue � cette session de formation sur PHP

<?php 

echo $nom;
echo $prenom;
echo $prenom2;