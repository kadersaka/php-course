<?php 
// le if clause


/*Syntaxe: la condition est une variable 
booléenne
if(conditi){
  action  
}
elseif(condition 2){
    action 2
}
else{
    action par defaut
}

*/

/*
les opérateurs de comparaison
> Supérieur
< Inférieur
<= Inférieur ou égal
>= Supérieur ou égal
== égale
=== égal et de meme type
!= different
=== est un == qui en plus de la comparaison des valeurs, compare aussi les types

Exercie: 
1- Ecrire une boucle if else pour dire si selon l'age on est adulte ou mineur
2- Ajouter une sous condition pour tester si un mineur est ado 
3- Créer un tableau salutation avec les 
données suivantes:
-bonjour
-bon appres midi
-bonsoir
-bonne nuit.
créer une variable heure et donnez lui l'heure 
que vous voulez.
ecrire la clause if else pour afficher un message 
par rapport à la variable heure

*/

$heure =10;
$salutations=["bonjour", "Bonsoir", "Bon aores midi", 'Bonne nuit'];
if($heure >= 0 && $heure <12){
    //Bonjour
    echo $salutations[0];
}
elseif($heure  >= 12  && $heure<15 ){
    //Bon apres midi
    echo $salutations[1];
}
elseif($heure >= 15 && $heure <20){
    //Bonsoir
    echo $salutations[2];
}
else{
    //Bonne nuit
    echo $salutations[3];
}

$age = readline("Entrez votre age: ");
if($age > 17){
    echo "vous êtes un adulte";
}
else{
    if($age>=12) echo 'Vous êtes un ado';
    else echo 'Vous êtes mineur';
}

/*
Les opérateurs ET et OU
&& ET 
|| OU

(vrai) et (faux) = faux
(faux) et (vrai) = faux
(vrai) et (vrai) = vrai
(faux) et (faux) = faux

(vrai) ou (faux) = vrai
(faux) ou (vrai) = vrai
(vrai) ou (vrai) = vrai
(faux) ou (faux) = faux

Exercice: Ecrire une boucle if else pour vérifier si une entrée entiere est une heure d'ouveture ou une heure de ferméture. les heures d'ouverture sont 08h-12h et 15h-17h

*/

$heure = readline("Entrez l'heure : ");
if( (($heure >= 8) && ($heure<12)) ||  (($heure >= 15) && ($heure<17)) ){
    echo "Nous sommes ouvert";
}
else{
    echo "Désolé, nous sommes actuellement fermé";

}


/*
Switch case ou bloucle Switch
Switch(variable){
    case valeur1:
        action1;
        break;
    case valeur2:
        action2;
        break;
    ...

    default:
        action default;
}
*/

$operation = readline("entrez l'opération: (1: addition, 2: soustraction, 3: produit, 4: quotient)");

if($operation == 1){

}
elseif($operation == 2){

}
elseif($operation == 3){

}
elseif($operation == 4){

}
else{

}

//ou on fait un switch case: 

switch($operation){
    case 1:
        echo "vous avez choisi l'addition";
        break;
    case 2: 
        echo "vous avez choisi la différnece";
        break;

    default: 
    echo "Opérationinconne";
}