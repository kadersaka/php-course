<?php
/*

La boucle While
Structure:
while(condition){
    action
}

on peut ajoute run "break" après action pour quitter la boucle meme si la condition nes pas respecté

Exercice: random_int(int $min, int $max) permet de générer  un nombre entier donné entre min et max. Générer un nombre et inviter l'utilisateur à le déviner en saisissant un entier. si l'entier saisi
par l'utilisateur est plus petit ou plus grand que l'entier que vous avez généré avec random_int, vous lui direz. l'objectif sera que l'utilisateur dévine le nombre généré en faisant le moins d'éssais.
vous utiliserez pour celà une boucle while pour gérer les saisies.

$nombre = random_int(1, 50);
$saisie = 0;
while($saisie != $nombre){
    if($saisie > $nombre){
       // echo "le nombre est plus petit que $saisie";
        $saisie = readline("Saisissez un nombre plus petit que $saisie: ");
    }
    else{
        $saisie = readline("Saisissez un nombre plus grand que $saisie: ");
    }
}
echo "Félicitation, vous avez gagné";

*/



/*
La boucle For: 
Structure
for($i = valeur_initiale; $i < $valeur_condition_de_sortie; $i++){
    action;
}

Exercice: $presidents = ["Kerekou", "Soglo", "Kerekou", "Yayi", "Talon"];. affichez les éléments de ce tableau en utilisant une boucle for.


*/

for($i = 1; $i <= 10; $i++){
    echo "$i - Bonjour \n";
}

$presidents = ["Kerekou", "Soglo", "Kerekou", "Yayi", "Talon"];
for($i = 0; $i < count($presidents); $i++){
    echo "$i - $presidents[$i] \n";
}


foreach($presidents as $president){
    echo "$president \n";
}

///alerid

$prs = [
    "francais" => "Macron",
    "beninois" => "Talon"
];

foreach($prs as $pays =>$pr){
    echo "$pr est le président $pays \n";
}

$prenoms = [
    "africains" => ["Bio", "Biaou", "Boni", "Sankara", "Finagnon"],
    "francais" => ["Joseph", "Macron", "Cyril", "Dominique"],
];

foreach($prenoms as $origin => $list_prenoms){
    echo "$origin: \n";
    foreach($list_prenoms as $prenom){
        echo "- $prenom \n";
    }
    echo "\n";

}

