<?php
	function chargerClasse($classe)
	{
	  require_once $classe . '.class.php'; // On inclut la classe correspondante au paramètre passé.
	}
	include_once 'CategoriesManager.php';
	include_once 'connection.php';

	spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.

	$manager = new CategoriesManager($db);

	//var_dump($_GET);
	//$nom = $_GET['nom'];
	//$idgalerie = $_GET['idGalerie'];

	$newcategorie = new Categorie("nom" , 2 , "description");
	var_dump($newcategorie);
	//echo "coucou ma bite";

	//$manager->add($newcategorie);
	

?>