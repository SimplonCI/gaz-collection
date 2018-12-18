<?php include 'partials/_header.php'; ?>

<div class="container">
     <div class="row">
       <?php include 'partials/_errors.php'; ?>
         <div class="col-md-4 col-md-offset-4">
             <div class="login-panel panel panel-default">
                 <div class="panel-heading">
                     <h3 class="panel-title">Inscription</h3>
                 </div>
                 <div class="panel-body">
                     <form role="form" method="post" action="register.php">
                         <fieldset>
                             <div class="form-group">
                                 <input class="form-control" placeholder="Nom" name="nom" type="text" value="" >
                             </div>
                             <div class="form-group">
                                 <input class="form-control" placeholder="prenom" name="prenom" type="text" value="" >
                             </div>
                             <div class="form-group">
                                 <input class="form-control" placeholder="E-mail" name="email" type="email" value="" >
                             </div>
                             <div class="form-group">
                                 <input class="form-control" placeholder="telephone" name="telephone" type="tel" value="" >
                             </div>

                             <div class="form-group">
                                 <input class="form-control" placeholder="mot de passe" name="password" type="password">
                             </div>
                             <div class="form-group">
                                 <input class="form-control" placeholder="comfirmer le mot de passe" name="passwordconfirm" type="password">
                             </div>

                             <button type="submit" name="register" class="btn btn-lg btn-success btn-block">Je m' inscris</a>
                         </fieldset>
                     </form>
                 </div>
             </div>
         </div>
     </div>
 </div>
<?php include 'partials/_footer.php'; ?>
