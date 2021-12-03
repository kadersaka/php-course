<?php
/* syntaxe: la condition est une variable booléenne
if(condition) {action}
elseif(condition2) {action 2}
else {action par defaut}
*/

$saluations=["Bonjour","Bon après midi","Bonsoir","Bonne nuit"];

$heure=15;

if(0<=$heure && $heure<=12){
    //Bonjour
    echo $saluations[0];
}
elseif($heure>=12 && $heure<15){
    //Bon après midi
    echo $saluations[1];

}
elseif($heure>=15 && $heure<20){
    //Bonsoir
    echo $saluations[2];
}
else{
    //Bonne nuit
    echo $saluations[3];
}


/* les opérateurs de comparaison
> Supérieur
< Inférieur
<= Inférieur ou égal
>= Supérieur ou égal
== égale
=== égale et de même type
!= différent
=== est un == qui en plus de la com

les operateurs: ET et OU
&& ET
|| OU
(vrai) et (faux) = (faux)
(faux) et (vrai) = (faux)
(vrai) et (vrai) = (vrai)
(faux) et (faux) = (faux)

(vrai) ou (faux) = (vrai)
(faux) ou (vrai) = (vrai)
(vrai) ou (vrai) = (vrai)
(faux) ou (faux) = (faux)
*/