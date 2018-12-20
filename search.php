<?php

  include 'config/database.php';

  // declaration des variables
  $commune = '';
  $quartier = '';

  // quand le formulaire est soumis
  if (isset($_GET['rechercher'])) {
    $commune = strtolower(addslashes($_GET['commune']));
    $quartier = strtolower(addslashes($_GET['quartier']));
  

    // requete

    $query = "SELECT * FROM point_de_vente WHERE commune='$commune' OR quartier='$quartier'";

    $results = mysqli_query($db,$query);


  }

  $quartier = "SELECT * FROM quartier";
  $quartiers = mysqli_query($db,$quartier);

  // recuperation de tout les communes
  $commune = "SELECT * FROM commune";
  $communes = mysqli_query($db,$commune);


?>


<?php include 'views/search.views.php'; ?>
