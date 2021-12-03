<?php
//comment créer une variable
//nommenclature: caractère alphanumérique
$prenom="Gérard";
$nom="DANGBOE";
$age=32;
$prenom2="DG";

?>
bonjour et bienvenu @ cette sesssion de formation sur php

<?php

echo $nom;
echo $prenom;
echo $prenom2;
echo $age;

echo "ma moyenne est :";
$math=19;
$physique=18;
$biologie=17;
$moyenne=($math+$physique+$biologie)/3;

echo $moyenne;

// concatenation
echo "Ma note en math est :".$math;
$pm= "Ma note en math est :".$math;
echo $pm;

echo "Ma note en physique est :".$physique;
$pp= "Ma note en physique est :".$physique;
echo $pp;

echo "Ma note en biologie est :".$biologie;
$pc= "Ma note en biologie est :".$biologie;
echo $pc;

//concatenation
echo "\n";
echo "\n affiche avec concatenation";