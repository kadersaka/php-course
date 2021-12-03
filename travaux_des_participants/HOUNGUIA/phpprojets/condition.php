<?php

/*Syntaxe : la codition est une variable booléenne

if(condition){
	action 
}
elseif{codition 2){
	action 2
}
else{
	action par défaut
}
*/

$salutations=["bonjour", "Bon après midi", "Bonsoir", "Bonne nuit"];
$heure=22;
/* if(0h à 11h59){
dis bonjour
}
elseif(12h00 à 15h00){
dis bon après midi
}

elseif(15h01 à 20h00){
dis bonsoir
}

else{
dis bonne nuit
}


/* LES OPERANTES PHP
	< = inférieure
	<= = inferieure ou égale
	> = supérieure
	>= = supérieure ou égale
	= = égale
	== = égale de même type
	&& = et
	|| = ou
	
	(vrai) ET (vrai) = (vrai)
	(vrai) ET (faux) = (faux)
	(faux) ET (faux) = (faux)
	(faux) ET (vrai) = (faux)

	(vrai) OU (vrai) = (vrai)
	(vrai) OU (faux) = (vrai)
	(faux) OU (vrai) = (vrai)
	(faux) OU (faux) = (faux)
	
*/ 

if($heure >= 0 && $heure < 12){
	//Bonjour
	echo $salutations[0];
}
elseif($heure >= 12 && $heure < 15){
	//Bon après midi
	echo $salutations[1];
}
elseif($heure >= 15 && $heure < 20){
	//Bonsoir
	echo $salutations[2];
}
else{
	//Bonne nuit
	echo $salutations[3];
}


?>

