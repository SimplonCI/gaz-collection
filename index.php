<?php
  session_start();
  include 'config/database.php';

  // deconnexion
  if (isset($_GET['logout'])) {
    // destruction de la sesssion
    session_destroy();
    // destruction des variables
    unset($_SESSION['logged_in']);
    unset($_SESSION['username']);
    unset($_SESSION['nom']);
    unset($_SESSION['prenom']);

    header('location: index.php');
  }
?>

<?php include 'views/index.views.php' ?>
