<?php include "../headers.php"; ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Artikel</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
                <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Daftar Artikel &nbsp; | &nbsp; <small>Setiap hari jum'at harus diupdate!</small></h4>
                          <section id="unseen">

                          <br><br>
                          <a href="tambah.php" class="btn btn-primary" style="margin-left: 50px">Tambah Artikel</a>
                          <br><br>

                            <table class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
                                  <th>Judul</th>
                                  <th>Tanggal</th>
                                  <th>Dikutip dari</th>
                                  <th>Edit</th>
                                  <th>Hapus</th>
                              </tr>
                              </thead>
                              <tbody>

                              <?php
                                $dakwah = mysqli_query($koneksi,"SELECT * FROM dakwah");
                                if(mysqli_num_rows($dakwah) == 0){
                                  echo "<td colspan='7'><center> Astaghfirullah,where did the datas gone? :( </center></td>";
                                }else{
                                  while ($rdakwah = mysqli_fetch_array($dakwah)) {
                              ?>

                              <tr>
                                  <td><?php echo $rdakwah['judul']; ?></td>
                                  <td><?php echo $rdakwah['created_at']; ?></td>
                                  <td><?php echo $rdakwah['dari']; ?></td>
                                  <td><a href="edit.php?id=<?php echo $rdakwah['id_dakwah']; ?>"> Edit </a></td>
                                  <td><a href="hapus.php?id=<?php echo $rdakwah['id_dakwah']; ?>"> Hapus </a></td>
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
