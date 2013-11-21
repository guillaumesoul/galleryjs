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

    $q->bindValue(':nom', $image->afficherNom());
    $q->bindValue(':categorie', $image->afficherCategorie());
    $q->bindValue(':url', $image->afficherUrl());
    $q->bindValue(':description', $image->afficherDescription());

    $q->execute();
  }

  public function delete(Image $image)
  {
    $this->_db->exec('DELETE FROM image WHERE id = '.$image->afficherId());
  }

  public function get($id)
  {
    $id = (int) $id;

    $q = $this->_db->query('SELECT * FROM image WHERE idImage = '.$id);
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return new Image( $donnees->idImage , $donnees->nomImage , $donnees->idCategorie , $donnees->urlImage , $donnees->descriptionImage );
  }

  public function getList()
  {
    $images = array();

    $q = $this->_db->query('SELECT idImage, nomImage FROM image ORDER BY idImage');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $images[] = new Image( $donnees->idImage , $donnees->nomImage , $donnees->idCategorie , $donnees->urlImage , $donnees->descriptionImage );
    }

    return $images;
  }

  public function update(Image $image)
  {
    //UPDATE FROM FABIEN
    //$q = $this->_db->prepare('UPDATE image SET idImage = :nom, description = :description, location = :location, gallery_id = :gallery_id WHERE id = :id');

    $q = $this->_db->prepare('UPDATE image SET SET nomImage = :nom, idCategorie = :categorie , urlImage = :url  , descriptionImage = :description WHERE idImage = :id');

    $q->bindValue(':id', $image->afficherId());
    $q->bindValue(':nom', $image->afficherNom());
    $q->bindValue(':categorie', $image->afficherCategorie());
    $q->bindValue(':url', $image->afficherUrl());
    $q->bindValue(':description', $image->afficherDescription());

    $q->execute();
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}

?>