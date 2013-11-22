<?php

class Image{
	/*
	private $_id = 1;
	private $_nom="voiture1";
	private $_gallerie="voiture";
	private $_url="images/gallerie1/1.jpg";
	*/

	private $_id;
	private $_nom;
	private $_categorie;
	private $_url;	
	private $_description;	
    
    public function __construct($id , $nom , $categorie ,   $url , $description) // Constructeur demandant 2 paramètres
    {
    	echo 'Appel du constructeur ! '; // Message s'affichant une fois que tout objet est créé.
    	$this->setId($id);
    	$this->setNom($nom); 
    	$this->setCategorie($categorie);    	
    	$this->setUrl($url);
    	$this->setDescription($description);
    }

	public function setId($value) {
		$this->_id = $value;
	}
	

	public function afficherId()
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

	public function afficherNom() {
		return $this->_nom;
	}

	public function setCategorie($value) {
	    if (is_integer($value))
	    {
	      $this->_categorie = $value;
	    }
	}

	public function afficherCategorie() {
		return $this->_categorie;
	}

	public function setUrl($value) {
	    if (is_string($value))
	    {
	      $this->_url = $value;
	    }
	}

	public function afficherUrl() {
		return $this->_url;
	}

	public function setDescription($value) {
	    if (is_string($value))
	    {
	      $this->_description = $value;
	    }
	}

	public function afficherDescription() {
		return $this->_description;
	}	
	//$voiture1 = new Image(1 , "mercedes" , "categorie1" , "url");
	
	//fonction d'hydratation
	public function hydrate(array $donnees)
	{
		if (isset($donnees['id']))
		{
		$this->setId($donnees['id']);
		}

		if (isset($donnees['nom']))
		{
		$this->setNom($donnees['nom']);
		}
	    
	  // …
	}	

}

?>

