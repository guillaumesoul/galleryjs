<?php
	
	function chargerClasse($classe)
	{
	  require_once $classe . '.class.php'; 
	}
	include_once 'CategoriesManager.php';
	include_once 'connection.php';

	spl_autoload_register('chargerClasse'); 

	$manager = new CategoriesManager($db);

	$nom = $_POST['nomcategorie'];
	$idgalerie = intval($_POST['idgalerie']);
	$description = $_POST['descriptioncategorie'];

	$test = new Categorie($nom ,$idgalerie , $description);

	$manager->add($test);
	

?>