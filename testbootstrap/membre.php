<?php
session_start();

// si la variable de session "pseudo" n'existe pas, le visiteur
// n'a rien � faire ici
if(!isset($_SESSION['pseudo']))
{
	header("location: index.php"); // redirection
	exit; // arr�t du script
}

echo 'Bienvenue dans la zone membre, ' . $_SESSION['pseudo'] . '<br>';
echo '<a href="log.php?action=logout">Logout</a><br><br>';
?>