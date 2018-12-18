<?php
  include 'config/database.php';
  mysqli_query($db,"INSERT INTO users (nom,prenom,email,telephone,password,date_create) VALUES ('nom','prenom','email','telephone','password',$datepost)");
 ?>
