<?php include 'partials/_header.php'; ?>
<div id="wrapper">
  <?php include 'partials/_sidebar.php'; ?>
  <div id="page-wrapper">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Point de vente</h1>
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
                                  <form role="form" method="post" action="point-de-vente-form.php">
                                      <div class="form-group">
                                          <label>Nom de l'etablissement ou du point de vente</label>
                                          <input class="form-control" type="text" name="nom" id="nom" value="<?php echo $nom ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Telephone du point de vente</label>
                                          <input class="form-control" type="tel" name="telephone" id="telephone" value="<?php echo $telephone ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Nom du quartier ou se localise le point de vente</label>
                                          <input class="form-control" type="text" name="quartier" id="quartier" value="<?php echo $quartier ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Nom de la commune ou se localise le point de vente</label>
                                          <input class="form-control" type="text" name="commune" id="commune" value="<?php echo $commune ?>">
                                      </div>

                                      <div class="form-group">
                                          <label>Assurer vous la livraison a domicile ?</label>
                                          <select class="form-control" name="livraison">
                                              <option value="1">oui</option>
                                              <option value="0">non</option>

                                          </select>
                                      </div>

                                      <div class="form-group">
                                          <label>Longitude</label>
                                          <input class="form-control" type="text" name="longitude" id="longitude" value="<?php echo $longitude ?>">
                                      </div>
                                      <div class="form-group">
                                          <label>Latitude</label>
                                          <input class="form-control" type="text" name="latitude" id="latitude" value="<?php echo $latitude ?>">
                                      </div>



                                      <!-- <div class="form-group">
                                          <label>File input</label>
                                          <input type="file">
                                      </div> -->
                                      <div class="form-group">
                                          <label>Commentaire sur le point de vente</label>
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
