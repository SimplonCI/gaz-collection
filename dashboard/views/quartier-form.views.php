<?php include 'partials/_header.php'; ?>
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<div id="wrapper">
  <?php include 'partials/_sidebar.php'; ?>
  <div id="page-wrapper">
          <div class="row">
              <div class="col-lg-12">
                  <h1 class="page-header">Quartier</h1>
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
                                  <form role="form" method="post" action="quartier-form.php">
                                      <div class="form-group">
                                          <label>Nom du quartier</label>
                                          <input class="form-control" type="text" name="nom" id="nom" value="<?php echo $nom ?>">
                                      </div>
                                      
                                      <div class="form-group">
                                        <label for="commune">La commune</label>
                                        <select class="form-control" name="commune" id="commune">
                                            <?php if(mysqli_num_rows($communes) >0):?>
                                                <?php while($rows = $communes -> fetch_assoc()):?>
                                                    <option value="<?php echo $rows['nom']?>"><?php echo $rows['nom']?></option>
                                                <?php endwhile?>
                                            <?php endif ?>
                                        </select>
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

