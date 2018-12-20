<?php include 'partials/_header.php'; ?>
<div id="wrapper">
  <?php include 'partials/_sidebar.php'; ?>
  <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Les communes</h1>
                    <a href="commune-form.php" class="btn btn-primary btn-xs">Ajouter une commune</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <br>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Liste des communes
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">


                                <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nom</th>
                                            <th>Longitude</th>
                                            <th>Latitude</th>

                                        </tr>
                                    </thead>
                                    <?php if (mysqli_num_rows($results) > 0) : ?>
                                      <tbody>
                                        <?php while ($row = $results -> fetch_assoc()): ?>
                                          <tr class="gradeA">
                                             <td><?php echo $row['id']; ?></td>
                                              <td><?php echo $row['nom']; ?></td>
                                              <td><?php echo $row['longitude']; ?> </td>
                                              <td><?php echo $row['latitude']; ?> </td>
                                          </tr>
                                        <?php  endwhile ?>

                                    </tbody>
                                    <?php endif; ?>
                                </table>
                                <!-- /.table-responsive -->

                            <?php if (mysqli_num_rows($results) == 0) : ?>
                              <div class="well">
                                  <h4>Oups !!</h4>
                                  <p>Aucune commune n'a ete enregistrer</p>
                                  <a class="btn btn-default btn-lg btn-block"  href="commune-form.php">Ajouter une commune</a>
                              </div>
                          <?php endif ?>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
</div>

<script src="assets/jquery/jquery.min.js"></script>

 <!-- Bootstrap Core JavaScript -->
 <script src="assets/bootstrap/js/bootstrap.min.js"></script>

 <!-- Metis Menu Plugin JavaScript -->
 <script src="assets/metisMenu/metisMenu.min.js"></script>

<script src="assets/datatables/js/jquery.dataTables.min.js"></script>
 <script src="assets/datatables-plugins/dataTables.bootstrap.min.js"></script>
 <script src="assets/datatables-responsive/dataTables.responsive.js"></script>

 <!-- Custom Theme JavaScript -->
<script src="assets/js/sb-admin-2.js"></script>
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
    </script>
