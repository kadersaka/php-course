<?php 
echo $_GET["nom"]. "\n";
echo $_GET["prenom"]. "\n";
echo $_GET["message"]."\n";

?> 


<body>

<form>

      <input type="text" id="nom" name="nom" placeholder="votre nom"/>
	  <input type="text" id="prenom" name="prenom" placeholder="votre prenom"/>
	  <textarea name="message" id="message" rows=5></textarea>
	  <input type="submit" name="envoyer"/>
	
	
</form>



</body>




