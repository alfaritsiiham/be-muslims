<?php include "../headers.php"; ?>
<?php 
  $surah = $_GET['id'];
  $tabel = $_GET['tabel'];

  $get_surah = mysqli_query($koneksi,"SELECT * FROM surah WHERE id_surah = '$surah'");
  $r_surah = mysqli_fetch_array($get_surah);
?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> <?php echo $r_surah['nama_surah']; ?></h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
                <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Ayat <?php echo $r_surah['nama_surah']; ?></h4>
                          <section id="unseen">

                          <br><br>
                          <a href="tambah.php?id=<?php echo $r_surah['id_surah']; ?>&tabel=<?php echo $tabel; ?>" class="btn btn-primary" style="margin-left: 50px">Tambah Ayat</a>
                          <br><br>

                            <table id="myTable" class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Ayat</th>
                                  <th>Arab</th>
                                  <th>Latin</th>
                                  <th>Indo</th>
                                  <th>Hapus</th>
                              </tr>
                              </thead>
                              <tbody>

                              <?php
                                $ayat = mysqli_query($qkoneksi,"SELECT * FROM $tabel");
                                if(mysqli_num_rows($ayat) == 0){
                                  echo "<td colspan='7'><center> Astaghfirullah,where did the datas gone? :( </center></td>";
                                }else{
                                  while ($r_ayat = mysqli_fetch_array($ayat)) {
                              ?>

                              <tr>
                                  <td><?php echo $r_ayat['ayat']; ?></td>
                                  <td><?php echo $r_ayat['arab']; ?></td>
                                  <td><?php echo $r_ayat['latin']; ?></td>
                                  <td><?php echo $r_ayat['indo']; ?></td>
                                  <td><a href="hapus.php?tabel=<?php echo $r_surah['nama_tabel']; ?>&id=<?php echo $r_ayat['id_ayat']; ?>"> Hapus </a></td>
                              </tr>

                              <?php } } ?>

                              </tbody>
                          </table>
                          </section>
                </div><!-- /content-panel -->

          		</div>
          	</div>
			
		</section><!--/wrapper -->
      </section><!-- /MAIN CONTENT -->

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="blank.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo $base_url; ?>/assets/js/jquery.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo $base_url; ?>/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

    <!--common script for all pages-->
    <script src="<?php echo $base_url; ?>/assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      $(document).ready(function(){
       $('#myTable').DataTable();
       responsive : true;
      });
  </script>

  </body>
</html>
