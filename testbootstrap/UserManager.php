<?php
class UserManager
{
  private $_db; // Instance de PDO

  public function __construct($db)
  {
    $this->setDb($db);
  }

  //test si utilisateur existen en base de données
  public function checkUser($login,$password)
  {
    session_start();
    $q = $this->_db->query('SELECT * FROM utilisateur WHERE ( login = "'.$login.'" and password = "'.$password.'" ) ');
    $donnees = $q->fetch(PDO::FETCH_ASSOC);
    if (! $donnees) {
      echo "Le couple pseudo / mot de passe ne correspond pas a un utilisateur de la base de donnees.";
    }
    else {    
      $_SESSION['pseudo'] = $donnees["login"];
      echo $donnees["login"];
    }
  }  

  public function setDb(PDO $db)
  {
    $this->_db = $db;
  }
}

?>