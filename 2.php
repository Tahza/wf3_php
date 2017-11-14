<?php

$pokedex = array (
	'0' => array(
		'nom' => 'Pikachu',
		'pv' => 25,
		'defense' => 10,
		'attaque' => 15
	),
	'1' => array(
		'nom' => 'Bulbizarre',
		'pv' => 30,
		'defense' => 20,
		'attaque' => 8
	),
);

echo "<p>Pikachu attaque bulbizarre</p>";
foreach ($pokedex as $pokemon) {
	if ($pokedex[0]['attaque'] >= $pokedex[1]['defense']) {
		
	} else {

	};
	
};

echo 'Nom : '.$pokedex[0]['nom'].'<br/>';
echo 'Attaque : '.$pokedex[0]['attaque'].'<br />';
echo 'PV : '.$pokedex[0]['pv'].'<br />';
echo 'Defense : '.$pokedex[0]['defense'].'<br /><br />';

echo 'Nom : '.$pokedex[1]['nom'].'<br/>';
echo 'Attaque : '.$pokedex[1]['attaque'].'<br />';
echo 'PV : '.$pokedex[1]['pv'].'<br />';
echo 'Defense : '.$pokedex[1]['defense'];

?>