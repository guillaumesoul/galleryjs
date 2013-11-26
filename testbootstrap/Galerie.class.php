<?php

class Galerie{
	/*
	private $_id = 1;
	private $_nom="voiture1";
	private $_gallerie="voiture";
	private $_url="images/gallerie1/1.jpg";
	*/

	private $_id;
	private $_nom;	
    
    public function __construct($id , $nom ) // Constructeur demandant 2 paramètres
    {
    	echo 'Appel du constructeur ! '; // Message s'affichant une fois que tout objet est créé.
    	$this->setId($id);
    	$this->setNom($nom); 
    }

	public function setId($value) {
		$this->_id = $value;
	}
	

	public function afficherId()
    {
    	echo $this->_id;
    }   

	public function setNom($value) {
	    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
	    if (is_string($value))
	    {
	      $this->_nom = $value;
	    }
	}

	public function afficherNom() {
		echo $this->_nom;
	}

}

?>

