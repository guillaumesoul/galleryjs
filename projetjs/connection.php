<?php 
$username = "root"; //mysql username
$password = "root"; //mysql password
$hostname = "localhost"; //hostname
$databasename = 'galleriejs'; //databasename
$connecDB = mysql_connect($hostname, $username, $password);
if (!$connecDB) {
  	echo("non connecte");
  	die('Could not connect: ' . mysql_error());
  }
$db_selected = mysql_select_db($databasename,$connecDB);
// Check DB
if (!$db_selected) {
  die ('Can\'t use  : ' . mysql_error());
  }
$sql = 'SELECT url FROM image WHERE id = 1';
$req = mysql_query($sql) or die('Erreur SQL !<br />'.$sql.'<br />'.mysql_error());
$data = mysql_fetch_array($req);
mysql_free_result ($req);
mysql_close($connecDB);
?>
<html>
L'URL de l'image 1 est toto :<br />
<?php echo $data['url']; ?>
<br>encule
</html>