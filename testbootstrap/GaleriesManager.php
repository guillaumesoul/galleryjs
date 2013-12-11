<?php
class GaleriesManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }


  public function add(Galerie $galerie)
  {

    $q = $this->_db->prepare('INSERT INTO galerie SET nomGalerie = :nom, descriptionGalerie = :description');

    $q->bindValue(':nom', $categorie->getNom());
    $q->bindValue(':description', $categorie->getDescriptionGalerie());

    $q->execute();
  }

  public function delete(Galerie $galerie)
  {
    $this->_db->exec('DELETE FROM galerie WHERE idGalerie = '.$galerie->getId());
  }

  public function get($id)
  {
    $id = (int) $id;

    $q = $this->_db->query('SELECT * FROM galerie WHERE idGalerie = '.intval($id));
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return ($donnees);
  }

  //retourne toutes les images de la DB
  public function getList()
  {
    $galerie = array();

    $q = $this->_db->query('SELECT * FROM categorie ORDER BY idCategorie');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $galerie[] = ($donnees);
     
    }
  }

  public function displayList($idgalerie)
  {
    $galerie = array();

    $q = $this->_db->query('SELECT * FROM galerie WHERE idGalerie = '.intval($idgalerie));

    //$q->bindValue(':idgalerie', $idcategorie->getIdGalerie());

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      echo "galeries n°: ".$donnees["idGalerie"]." nom : ".$donnees["nomalerie"]." <br>";
    }

    return $galerie;
  }

  public function update(Galerie $galerie)
  {

    $q = $this->_db->prepare('UPDATE galerie SET nomgalerie = :nom, descriptiongalerie = :description WHERE idGalerie = :id');

    $q->bindValue(':id', $galerie->getId());
    $q->bindValue(':nom', $galerie->getNom());
    $q->bindValue(':description', $galerie->getDescriptionGalerie());

    $q->execute();
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}

?>