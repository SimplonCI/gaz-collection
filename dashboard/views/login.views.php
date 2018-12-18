<?php include 'partials/_header.php'; ?>
<div class="container">
     <div class="row">
       <?php include 'partials/_errors.php'; ?>
         <div class="col-md-4 col-md-offset-4">
             <div class="login-panel panel panel-default">
                 <div class="panel-heading">
                     <h3 class="panel-title">Connexion</h3>
                 </div>
                 <div class="panel-body">
                     <form role="form" method="post" action="login.php">
                         <fieldset>
                             <div class="form-group">
                                 <input class="form-control" placeholder="E-mail ou telephone" name="username" type="text" value="<?php echo $username ?>">
                             </div>
                             <div class="form-group">
                                 <input class="form-control" placeholder="mot de passe" name="password" type="password" value="">
                             </div>

                             <button type="submit" name="login"  class="btn btn-lg btn-success btn-block">Je me connecte</a>
                         </fieldset>
                     </form>

                 </div>
             </div>
         </div>
     </div>
 </div>
<?php include 'partials/_footer.php'; ?>
