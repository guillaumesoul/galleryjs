<?php
	
	function chargerClasse($classe)
	{
	  require_once $classe . '.class.php'; 
	}
	include_once 'GaleriesManager.php';
	include_once 'connection.php';

	spl_autoload_register('chargerClasse'); 

	$manager = new GaleriesManager($db);

	var_dump($_POST);
	$nom = $_POST['nomcategorie'];
	$description = $_POST['descriptioncategorie'];

	$test = new Galerie($nom, $description);

	$manager->add($test);
	

?>