<?php
// on se connecte à notre base
$base = mysql_connect ('localhost', 'root', 'root');
mysql_select_db ('galleriejs', $base) ;
?>
<html>
<head>
<title>URL image</title>
</head>
<body>
<?php
// lancement de la requete
$sql = 'SELECT url FROM image WHERE id = 1';

// on lance la requête (mysql_query) et on impose un message d'erreur si la requête ne se passe pas bien (or die)
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());

// on recupere le resultat sous forme d'un tableau
$data = mysql_fetch_array($req);

// on libère l'espace mémoire alloué pour cette interrogation de la base
mysql_free_result ($req);
mysql_close ();
?>
L'URL de l'image1 est :<br />
<?php echo $data['url']; ?>
petit encule<br>
</body>
</html>