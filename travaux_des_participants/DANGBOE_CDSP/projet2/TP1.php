<?php
$nom="DANGBOE";
$prenom="Gérard";
$tel="97422911";
$email="gerardangboe@gmail.com";
$adresse= "Cotonou-Bénin";

$profil="Officier de Police Judiciare, chargé de contrôler la qualité des données enrégistrées provenant des unités chargées d'application de la loi, dans la bse de données CDSP-SIPAO";
$titre1="Curriculum Vitae";
$titre2=" Vitae";




$titre2="Validateur de données au CDSP-SIPAO";
$titre3="Profil";

?>
<DOCTYPE>
<html>
    <body>
        <h1><?php 
          echo $titre1; 
          ?>
        </h1>
    </body>
    <h1>
        <?php 
        echo $prenom,' ', $nom;
        ?>
    </h1>
    <ul>
        <li>
            <?php 
            echo $tel;
            ?>
        </li>
        <li>
            <?php 
            echo $email;
            ?>
        </li>
        <li>
            <?php 
            echo $adresse;
            ?>
        </li>
    </ul>
    
    
</html>




<h2>Profil</h2>

<p> Officier de Police Judiciare, chargé de contrôler la qualité des données enrégistrées provenant des unités chargées d'application de la loi, dans la bse de données CDSP-SIPAO </p>

<h2>Expériences professionnelles</h2>

<p>Vérificateur et Validateur CDSP-SIPAO</p>
<p>Gestionnaire des ressources humaines</p>
<p>Officier de Police Judiciare</p>

<h2>Langues parlées</h2>
<ul> 
<li>Francais</li>
<li>Fon</li>
<li>Sahouè</li>
<li>Mina</li>
</ul>

<h2>Langues écrites</h2>
<ul>
<li>Francais</li>
<li>Anglais</li>
<li>Fon</li>
</ul>