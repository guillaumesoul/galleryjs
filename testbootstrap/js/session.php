<?php

$login = $_GET['login'];
$password = $_GET['password'];

session_start();
if (!isset($_SESSION['count'])) {
  $_SESSION['count'] = 0;
} else {
  $_SESSION['count']++;
}
?>