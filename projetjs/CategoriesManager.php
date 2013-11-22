<?php
class CategoriesManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }


  public function add(categorie $categorie)
  {

    $q = $this->_db->prepare('INSERT INTO categorie SET nomCategorie = :nom, idGalerie = :galerie , descriptionCategorie = :description');

    $q->bindValue(':nom', $categorie->getNom());
    $q->bindValue(':galerie', $categorie->getIdGalerie());
    $q->bindValue(':description', $categorie->getDescriptionCategorie());

    $q->execute();
  }

  public function delete(categorie $categorie)
  {
    $this->_db->exec('DELETE FROM categorie WHERE idCategorie = '.$categorie->getId());
  }

  public function get($id)
  {
    $id = (int) $id;

    $q = $this->_db->query('SELECT * FROM categorie WHERE idCategorie = '.intval($id));
    $donnees = $q->fetch(PDO::FETCH_ASSOC);

    return ($donnees);
  }

  //retourne toutes les images de la DB
  public function getList()
  {
    $categories = array();

    $q = $this->_db->query('SELECT * FROM categorie ORDER BY idCategorie');

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      $categories[] = ($donnees);
     
    }
  }

  public function displayList($idgalerie)
  {
    $categories = array();

    $q = $this->_db->query('SELECT * FROM categorie WHERE idGalerie = '.intval($idgalerie));

    //$q->bindValue(':idgalerie', $idcategorie->getIdGalerie());

    while ($donnees = $q->fetch(PDO::FETCH_ASSOC))
    {
      echo "catégories n°: ".$donnees["idCategorie"]." nom : ".$donnees["nomCategorie"]." <br>";
    }

    return $categories;
  }

  public function update(categorie $categorie)
  {

    $q = $this->_db->prepare('UPDATE categorie SET nomCategorie = :nom, idGalerie = :idgalerie , descriptionCategorie = :description WHERE idImage = :id');

    $q->bindValue(':id', $categorie->getId());
    $q->bindValue(':nom', $categorie->getNom());
    $q->bindValue(':idgalerie', $categorie->getIdGalerie());
    $q->bindValue(':description', $categorie->getDescriptionCategorie());

    $q->execute();
  }

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}

?>