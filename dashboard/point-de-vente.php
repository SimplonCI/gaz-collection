<?php
   session_start();
   include 'partials/_connecte.php';
   include '../config/database.php';

   // requete pour tout selectionner les points de vente de base de donnees
   // requete
   $query = "SELECT * FROM point_de_vente";
   // execution de la requete
   $results = mysqli_query($db,$query);

   
 ?>


<?php include 'views/point-de-vente.views.php'; ?>
