<?php
class ImagesManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }


  public function add(Image $image)
  {

    $q = $this->_db->prepare('INSERT INTO image SET nomImage = :nom, idCategorie = :categorie , urlImage = :url  , descriptionImage = :description');

    $q->bindValue(':nom', $image->getNom());
    $q->bindValue(':categorie', $image->getCategorie());
    $q->bindValue(':url', $image->getUrl());
    $q->bindValue(':description', $image->getDescription());

    $q->execute();
  }

  public function delete(Image $image)
  {
    $this->_db->exec('DELETE FROM image WHERE idImage = '.$image->getId());
  }

  public function get($id)
  {
    $id = (int) $id;

    $q = $this->_db->query('SELECT * FROM image WHERE idImage = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return ($donnees);
  }

  //retourne toutes les images de la DB
  public function getList()
  {
    $images = array();

    $q = $this->_db->query('SELECT idImage, nomImage FROM image ORDER BY idImage');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $images[] = ($donnees);
     
    }
  }

  public function displayList()
  {
    $images = array();

    $q = $this->_db->query('SELECT * FROM image ORDER BY idImage');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      echo "<img id=".$donnees["idImage"]." src=".$donnees["urlImage"]." width=210>";
    }

    return $images;
  }

  public function update(Image $image)
  {
    //UPDATE FROM FABIEN
    //$q = $this->_db->prepare('UPDATE image SET idImage = :nom, description = :description, location = :location, gallery_id = :gallery_id WHERE id = :id');

    $q = $this->_db->prepare('UPDATE image SET nomImage = :nom, idCategorie = :categorie , urlImage = :url  , descriptionImage = :description WHERE idImage = :id');

    $q->bindValue(':id', $image->getId());
    $q->bindValue(':nom', $image->getNom());
    $q->bindValue(':categorie', $image->getCategorie());
    $q->bindValue(':url', $image->getUrl());
    $q->bindValue(':description', $image->getDescription());

    $q->execute();
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}

?>