<?php

//tableau idexé
$participant =["Dangboe Gérard","Ouorou Facki ","Azonnandou Désiré","Trékpo Lazar"];
echo $participant[0];
echo $participant[1];
echo $participant[2];
echo $participant[3];


for($i=0; $i<=10; $i++){
    echo "$i - bonjour \n";
}
for($i=0; $i<=2; $i++){
    echo "$i - ".$participant[$i]."\n";
}

foreach($participant as $participant){
    echo "$participant \n";
}
// tableau association
$note=["math"=>19,"physique"=>18,"biologie"=>17];
echo $note["math"];
echo $note["physique"];
echo $note["biologie"];

// concatenation
echo "\n Ma note en math est :".$note["math"];
echo "\n Ma note en physique est :".$note["physique"];
echo "\n Ma note en biologie est :".$note["biologie"];
$moyenne=($note["math"]+$note["physique"]+$note["biologie"])/3;

echo "\n ma moyenne totale est ".$moyenne;
