<?php
	
	function chargerClasse($classe)
	{
	  require_once $classe . '.class.php'; 
	}
	include_once 'CategoriesManager.php';
	include_once 'connection.php';

	spl_autoload_register('chargerClasse'); 
	

	$manager = new CategoriesManager($db);

	//var_dump($_GET);
	$nom = $_GET['nom'];
	$idgalerie = $_GET['idGalerie'];
	$description = $_GET['Description'];
	//var_dump($nom);

	$test = new Categorie($nom ,$idgalerie , $description);
	//$test = new Image(1,"nouvelle" ,2 , "url" , "description" );
	//var_dump($test);
	//echo "coucou";

	$manager->add($test);
	

?>