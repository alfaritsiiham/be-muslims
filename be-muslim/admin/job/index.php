<?php include "../headers.php"; ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Job & Appoinment</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
                <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Daftar Job & Appoinment</h4>
                          <section id="unseen">

                          <br><br>
                          <a href="tambah.php" class="btn btn-primary" style="margin-left: 50px">Tambah Surah</a>
                          <br><br>

                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Nama Job</th>
                                  <th>Oleh</th>
                                  <th>Prioritas</th>
                                  <th>Pada Tanggal</th>
                                  <th>Selesai</th>
                              </tr>
                              </thead>
                              <tbody>

                              <?php
                                $job = mysqli_query($koneksi,"SELECT * FROM job ORDER BY prio ASC");
                                if(mysqli_num_rows($job) == 0){
                                  echo "<td colspan='7'><center> Alhamdulillah,there is no job to-do </center></td>";
                                }else{
                                  while ($rjob = mysqli_fetch_array($job)) {
                              ?>

                              <tr>
                                  <td><?php echo $rjob['nama_job']; ?></td>
                                  <td><?php echo $rjob['oleh']; ?></td>
                                  <td><?php echo $rjob['prioritas']; ?></td>
                                  <td><?php echo $rjob['created_at']; ?></td>
                                  <td><a href="hapus.php?id=<?php echo $rjob['id_job']; ?>"> Selesai </a></td>
                              </tr>

                              <?php } } ?>

                              </tbody>
                          </table>
                          </section>
                </div><!-- /content-panel -->

          		</div>
          	</div>
			
		</section><! --/wrapper -->
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


    <!--common script for all pages-->
    <script src="<?php echo $base_url; ?>/assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
