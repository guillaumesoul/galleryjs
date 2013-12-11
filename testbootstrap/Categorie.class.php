<?php

class Categorie{

	private $_id;
	private $_nom;
	private $_idGalerie;
	private $_descriptionGalerie;

    
    public function __construct( $nom , $idGalerie , $descriptionGalerie) // Constructeur demandant 2 paramètres
    {
    	echo 'Appel du constructeur ! '; // Message s'affichant une fois que tout objet est créé.
    	$this->setNom($nom);
    	$this->setIdGalerie($idGalerie);
    	$this->setDescriptionCategorie($descriptionGalerie); 
    }

	public function setId($value) {
		$this->_id = $value;
	}
	

	public function getId()
    {
    	return $this->_id;
    }   

	public function setNom($value) {
	    // On vérifie qu'il s'agit bien d'une chaîne de caractères.
	    if (is_string($value))
	    {
	      $this->_nom = $value;
	    }
	}

	public function getNom() {
		return $this->_nom;
	}

	public function setIdGalerie($value) {
		$this->_idGalerie = $value;
	}
	

	public function getIdGalerie()
    {
    	return $this->_idGalerie;
    }

	public function setDescriptionCategorie($value) {
		$this->_descriptionGalerie = $value;
	}
	

	public function getDescriptionCategorie()
    {
    	return $this->_descriptionGalerie;
    }    	

}

?>

