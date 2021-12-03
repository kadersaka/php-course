<?php

//ARRAY ou Tablleau
$participants=["TREKPO", "HOUNGUIA", "TOCHEKANDE"];
"\n";
echo $participants[0];
echo $participants[1];
echo $participants[2];

$note=["math"=>18, "physique"=>17, "technologie"=>15.5];
echo "NOTES"."\n";
echo "MATHEMATIQUE:".$note["math"]."\n";
echo "PHYSIQUE:".$note["physique"]."\n";
echo "TECHNOLOGIE:".$note["technologie"]."\n";

$total_notes=($note["math"]+$note["physique"]+$note["technologie"]);
$nombre_matieres=3;
$moyenne=$total_notes/$nombre_matieres;


echo "MOYENNE:".$moyenne;


?>
