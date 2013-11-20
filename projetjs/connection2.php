<?php 
$username = "root"; //mysql username
$password = "root"; //mysql password
$hostname = "localhost"; //hostname
$connectionDB = mysql_connect($hostname, $username, $password);
if (!$connectionDB)
{
    die('Could not connect: ' . mysql_error());
}   
?>