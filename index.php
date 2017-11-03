<!DOCTYPE HTML>
<html>
<head>
	<title>Exemple</title>
</head>
<body>

	<?php
	$nom = 'Dupont';
	$prenom = 'Jean';

	echo "Bonjour je suis " . $nom . " " . $prenom;

	echo "<br />";

	$age = 38;

	echo "J'ai $age ans";

	echo "<br />";

	if ($age > 18 && $prenom == "Jean") {
		echo "Majeur";	
	} elseif($age >= 15){
		echo "Ado";
	} else {
		echo "Enfant";
	}

	?>

</body>
</html>