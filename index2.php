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

	$age = 37;

	echo "J'ai $age ans";

	echo "<br />";

	if ($age > 18 && $prenom == "Jean") {
		echo "Majeur";	
	} elseif($age >= 15){
		echo "Ado";
	} else {
		echo "Enfant";
	}

	echo "<br />";

	$age2 = 35;
	echo $age <=> $age2;
	echo "<br />";
	echo 1 <=> 2;
	echo "<br />";
	echo 2 <=> 1;
	echo "<br />";

	//Déclaration de variables 
	$a = null;

	$c = 5;
	$b;
	$d;

	echo $a ?? $b ?? $c ?? $d;

	echo "<br />";

	$a = 5;
	$b = $a +5;

	echo "b vaut $b et a vaut $a";

	echo "<br />";

	$b = $a += 5; // $a = $a + 5
	echo "b vaut $b et a vaut $a";

	echo "<br />";

	$a++; // $a = $a + 1
	echo "a vaut $a <br />";

	++$a; // $a = $a + 1
	echo "a vaut $a <br />";

	// différence
	echo "avant a vaut " . ++$a . " ";
	echo "après a vaut " . $a;
	echo "<br />";
	echo "avant a vaut " . $a++ . " ";
	echo "après a vaut " . $a;
	echo "<pre>";
	print_r($a);
	echo "</pre>";
	echo "<pre>";
	var_dump($a);
	echo "ce code n'est pas interprété\n\ndu tout";
	echo "</pre>";
	$array = ["couleur" => "rouge", "taille" => 1.70];
	echo "<pre>";
	var_dump($array);
	echo "</pre>";
	die ("fini");

	?>

</body>
</html>