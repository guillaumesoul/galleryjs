<?php

class Image{

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

	public function setCategorie($value) {
	    if (is_integer($value))
	    {
	      $this->_categorie = $value;
	    }
	}

	public function getCategorie() {
		return $this->_categorie;
	}

	public function setUrl($value) {
	    if (is_string($value))
	    {
	      $this->_url = $value;
	    }
	}

	public function getUrl() {
		return $this->_url;
	}

	public function setDescription($value) {
	    if (is_string($value))
	    {
	      $this->_description = $value;
	    }
	}

	public function getDescription() {
		return $this->_description;
	}	
}

$test = new Image(1, "new" , 2 , "url" , "description");
var_dump($test);

?>

