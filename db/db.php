<?php

/*require_once 'dbconfig.php';*/


$host = 'localhost';
$dbname = 'test1';
$username = 'root';
$password = '';


try {
  $pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

  //echo ("Connecteted to $dbname at $host succesfuly.");
} catch (Exception $e) {
  error_log($e->getMessage());
  exit('Something weird happened'); //something a user can understand
}