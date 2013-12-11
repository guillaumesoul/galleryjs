<?php
session_start();
/*
// login
if($_GET['action'] == 'login')
{
	// récupération des variables
	$pseudo = $_POST['pseudo'];
	$password = $_POST['password'];
	
	
	//Vérification des données
	//Notez qu'il est possible de vérifier ces valeurs
	//dans une base de données pour gérer plusieurs utilisateurs
	
	if($password == 'pass' && $pseudo == 'toto')
	{
		$_SESSION['pseudo'] = 'toto'; // création d'une variable de session
		header("location: index.php"); // redirection
		exit;
	}
	// si le pseudo est faux
	else if($pseudo != 'toto')
	{
		header("location: index.php?erreur=1");
		exit;
	}
	// le mot de passe est faux
	else
	{
		header("location: index.php?erreur=2");
		exit;
	}
	
}
*/
// logout
if($_GET['action'] == 'logout')
{
	session_unset(); // suppression des variables de sessions
	session_destroy(); // destruction de la session
	header("location: connexion.php"); // redirection
}

?>