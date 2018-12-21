<?php
   session_start();
   include 'partials/_connecte.php';
   include '../config/database.php';
   
    // recuperation de toute les communes
    // requete
    $queryCommune = "SELECT * FROM commune";
    $communes = mysqli_query($db,$queryCommune);


   // declaration de variable
   $nom = '';
   $commune = '';

   // tableau d'erreur
   $errors = array();

   $success = array();

   // quand le formulaire est soumit
   if (isset($_POST['enregister'])) {
     // il ne faut pas faire confiance a l'utilisateur
     $nom = strtolower(addslashes($_POST['nom']));
     $commune = addslashes($_POST['commune']);



     // validation du formulaire
     if (empty($nom)) {
       array_push($errors,"Le nom du quartier est obligatoire");
     }

     if (empty($commune)) {
      array_push($errors,"Le nom de la commune est obligatoire");
    }





     // verification s'il n'y a pas eu d'erreur
     if (count($errors) == 0) {
       // requete d'insertion

       $query = "INSERT INTO quartier (nom,commune) VALUES('$nom','$commune')";

       // execution de la requete
       $results = mysqli_query($db,$query);

       if (!mysqli_error($results)) {
         array_push($success,"Un quartier ajouter");
       } else {
         array_push($error," Error : ".$db->error);
       }

     }
     mysqli_close($db);
   }

 ?>


<?php include 'views/quartier-form.views.php'; ?>
