<?php
/**
 * Nomenclature: caractères alphanumériques, Under score, tiret
 * ils peuvent ou pas prendre des paramètres
 * ils peuvent retourner une valeur (objet de leur traitement) ou non(void)
 * on peut afficher leur resultat ou l'insérer dans uen varible
 * 
 */
//Exemple de fonction
function disbonjour($nom)
{
    echo "Bonjour $nom";
}

///Appel de la finction
//disbonjour('Kader \n');

///On fait recours aux fonction pour éviter à réecrire le mem code de traitement plusieurs fois

function calculerage($annee_naissanec){
    $age = 2021 -$annee_naissanec;
    echo $age;
}

//Ali né en 1990
//Baké né en 1980
//Fati né en 2000
$age_ali = 2021 -1990;
echo $age_ali;

calculerage(1980);

?>