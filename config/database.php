<?php
  $servername = 'localhost';
  $dbname = 'gaz-collector';
  $username = 'root';
  $password = 'NeverGiveUp92';
  $datepost = date("Y-m-d");
  // connection to database
  $db = mysqli_connect($servername,$username,$password,$dbname);

  if (!$db) {
    die('Database connexion failed : '.mysqli_connect_error());
  }

?>
