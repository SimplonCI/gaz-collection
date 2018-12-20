<?php include 'partials/_header.php'; ?>
<div id="wrapper">
  <?php include 'partials/_sidebar.php'; ?>
  <div id="page-wrapper">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Commune</h1>
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
          <div class="row">
              <div class="col-lg-12">
                  <div class="panel panel-default">
                      <div class="panel-heading">
                          Formulaire
                      </div>
                      <div class="panel-body">
                        <?php include 'partials/_errors.php'; ?>
                          <div class="row">
                              <div class="col-lg-12">
                                  <form role="form" method="post" action="commune-form.php">
                                      <div class="form-group">
                                          <label>Nom de la commune</label>
                                          <input class="form-control" type="text" name="nom" id="nom" value="<?php echo $nom ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Commentaire sur la commune</label>
                                          <textarea class="form-control" rows="3" name="description" value="<?php $description ?>" id="description"></textarea>
                                      </div>
                                      <button type="submit" class="btn btn-default" name="enregister">Enregistrer</button>
                                      <button type="reset" class="btn btn-default">Reintialiser</button>
                                  </form>
                              </div>

                          </div>
                          <!-- /.row (nested) -->
                      </div>
                      <!-- /.panel-body -->
                  </div>
                  <!-- /.panel -->
              </div>
              <!-- /.col-lg-12 -->
          </div>
          <!-- /.row -->
      </div>
      <!-- /#page-wrapper -->
</div>
<?php include 'partials/_footer.php'; ?>
