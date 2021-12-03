<p>Ceci sera ignoré par PHP et affiché au navigateur.</p>
<?php echo "Alors que ceci sera analysé par PHP.\n"; ?>
<p>Ceci sera aussi ignoré par PHP et affiché au navigateur.</p>

<?php
    echo "Ceci est un test\n"; // Ceci est un commentaire sur une seule ligne, style c++
    /* Ceci est un commentaire sur
       plusieurs lignes */
    echo "Ceci est un autre test\n";
    echo "Et un test final\n"; # Ceci est un commentaire style shell sur une seule ligne
?>

<?php
	//une variable
	$ma_variable = 5;
?>

<?php
	$a_bool = TRUE;   // un booléen
	$a_str  = "foo";  // une chaîne de caractères
	$a_str2 = 'foo';  // une chaîne de caractères
	$an_int = 12;     // un entier

	echo gettype($a_bool) ."\n"; // affiche :  boolean
	echo gettype($a_str) ."\n";  // affiche :  string

	var_dump($an_int);
	var_dump($a_str2);
?>