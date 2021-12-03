<?php


/**
 * Les formulaires HTML
 */
echo $_GET["hnom"];
echo $_GET["hprenom"];
echo $_GET["hmessage"];


 ?>

 <body>

    <form>
        <input type="text" id="nom" name="hnom" placeholder="votre nom"/>
        <input type="text" id="prenom" name="hprenom" placeholder="votre prenom"/>
        <textarea name="hmessage" id="message" rows=5></textarea>
        <input type="submit" name="envoyer"/>
    </form>

</body>