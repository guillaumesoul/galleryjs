<?php

	function chargerClasse($classe)
	{
	  require_once $classe . '.class.php'; // On inclut la classe correspondante au paramètre passé.
	}
	include_once 'ImagesManager.php';

	spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.


	$PARAM_hote='localhost'; // le chemin vers le serveur
	$PARAM_port='3306';
	$PARAM_nom_bd='galeriejs'; // le nom de votre base de données
	$PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
	$PARAM_mot_passe='root'; // mot de passe de l'utilisateur pour se connecter
	
	$db = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
   
	$image = new Image(23,"image de ouf",3,"url de ouf","alleluiah tralala");
	//var_dump($image);
	//$id = 5;
	$manager = new ImagesManager($db);

	$manager->update($image);
	//var_dump($manager->update($image));

?>