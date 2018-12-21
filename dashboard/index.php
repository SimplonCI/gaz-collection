<?php
  session_start();
  include '../config/database.php';


  //  voir si l'utilisateur est connecte
  if (!isset($_SESSION['admin_in'])) {
    // redirection de l'utilisateur
     echo '<script language="Javascript">';
     echo 'document.location.replace("dashboard/login.php")'; // -->
     echo ' </script>';
  }


  // recuperation des informations
  // point de vente
  $point_de_vente = mysqli_query($db,"SELECT * FROM point_de_vente");
  $quartier = mysqli_query($db,"SELECT * FROM quartier");
  $commune = mysqli_query($db,"SELECT * FROM commune");


  // deconnexion
  if (isset($_GET['logout'])) {
    // destruction de la sesssion
    session_destroy();
    // destruction des variables
    unset($_SESSION['admin_in']);
    unset($_SESSION['username']);
    unset($_SESSION['nom']);
    unset($_SESSION['prenom']);


    // redirection de l'utilisateur
     echo '<script language="Javascript">';
     echo 'document.location.replace("./login.php")'; // -->
     echo ' </script>';
  }
?>


<?php include 'views/index.views.php' ?>
