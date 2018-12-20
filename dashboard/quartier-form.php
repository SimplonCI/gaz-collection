<?php
   session_start();
   include 'partials/_connecte.php';
   include '../config/database.php';

   // declaration de variable
   $nom = '';
   $description = '';

   // tableau d'erreur
   $errors = array();

   $success = array();

   // quand le formulaire est soumit
   if (isset($_POST['enregister'])) {
     // il ne faut pas faire confiance a l'utilisateur
     $nom = strtolower(addslashes($_POST['nom']));
     $description = addslashes($_POST['description']);



     // validation du formulaire
     if (empty($nom)) {
       array_push($errors,"Le nom de la commune est obligatoire");
     }





     // verification s'il n'y a pas eu d'erreur
     if (count($errors) == 0) {
       // requete d'insertion

       $query = "INSERT INTO quartier (nom,description)
                VALUES('$nom','$description')";

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
