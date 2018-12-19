<?php
  //  voir si l'utilisateur est connecte
  if (!isset($_SESSION['admin_in'])) {
    // redirection de l'utilisateur
     echo '<script language="Javascript">';
     echo 'document.location.replace("./login.php")'; // -->
     echo ' </script>';
  }

 ?>
