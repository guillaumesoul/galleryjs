<?php
	function chargerClasse($classe)
	{
	  require $classe . '.class.php'; // On inclut la classe correspondante au paramètre passé.
	}
	include 'ImagesManager.php';

	spl_autoload_register('chargerClasse'); // On enregistre la fonction en autoload pour qu'elle soit appelée dès qu'on instanciera une classe non déclarée.
	//$voiture1 = new Image(1 , "mercedes" , "gallerie1" , "url");


	$PARAM_hote='localhost'; // le chemin vers le serveur
	$PARAM_port='3306';
	$PARAM_nom_bd='galeriejs'; // le nom de votre base de données
	$PARAM_utilisateur='root'; // nom d'utilisateur pour se connecter
	$PARAM_mot_passe='root'; // mot de passe de l'utilisateur pour se connecter
	
	$db = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);

	// On admet que $db est un objet PDO.
	$requestImage = $db->query('SELECT * FROM image');
	$requestGalerie = $db->query('SELECT * FROM galerie');
	    
	
	while ($donnees = $requestImage->fetch(PDO::FETCH_ASSOC)) // Chaque entrée sera récupérée et placée dans un array.
	{
		// On passe les données (stockées dans un tableau) concernant le personnage au constructeur de la classe.
		// On admet que le constructeur de la classe appelle chaque setter pour assigner les valeurs qu'on lui a données aux attributs correspondants.

		$voiture = new Image($donnees['idImage'] , $donnees['idCategorie'] ,$donnees['nomImage'] ,$donnees['urlImage']  );
		echo 'id : ' , $voiture->afficherId(), " ", "categorie : " , $voiture->afficherGallerie(), " ", $voiture->afficherNom(), " ", $voiture->afficherUrl(),"<br>";  
	}
	

	while ($donnees = $requestGalerie->fetch(PDO::FETCH_ASSOC)) 
	{
		$galerie = new Galerie($donnees['idGalerie'] , $donnees['nomGalerie']);
		echo 'id : ' , $galerie->afficherId(), " ", " nom : " , $galerie->afficherNom(),"<br>";  
	}

	

?>