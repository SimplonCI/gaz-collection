<?php include 'partials/_header.php'; ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
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
                                        <label>Nom du quartier</label>
                                          <select class="form-control" name="quartier" id="quartier">
                                            <?php if (mysqli_num_rows($quartiers) > 0) : ?>
                                                <?php while ($row = $quartiers -> fetch_assoc()): ?>
                                                  <option value="<?php echo $row['nom']; ?>"><?php echo $row['nom']; ?></option>
                                                <?php  endwhile ?>
                                            <?php endif; ?>
                                          </select>
                                          <!-- <input class="form-control" type="text" name="quartier" id="quartier" value="<?php echo $quartier ?>"> -->
                                      </div>
                                      <div class="form-group">
                                        <label>Nom de la commune</label>
                                        <select class="form-control" name="commune" id="commune">
                                          <?php if (mysqli_num_rows($communes) > 0) : ?>
                                              <?php while ($row = $communes -> fetch_assoc()): ?>
                                                <option value="<?php echo $row['nom']; ?>"><?php echo $row['nom']; ?></option>
                                              <?php  endwhile ?>
                                          <?php endif; ?>
                                        </select>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
        $("#commune").select2();
        $("#quartier").select2();
      });
      // var el = document.getElementById('quartier');
      // el.style.width = '300px';
</script>
