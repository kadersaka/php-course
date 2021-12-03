<?php

/*les formulaires HTML

*/

echo $_GET["nom"];
echo $_GET["prenom"];
echo $_GET["message"];


?><body>

<form>
	<input type="texte" id="nom" name="nom" placeholder="Votre nom"/>
	<input type="texte" id="prenom" name="prenom" placeholder="Vos prenoms"/>
	<textarea name="message" id="message"rows=5></textarea>
	<input type="submit" name="envoyer"/>

</form>

</body>
