<?php include "../headers.php"; ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Surah</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
                <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Daftar Surah</h4>
                          <section id="unseen">

                          <br><br>
                          <a href="tambah.php" class="btn btn-primary" style="margin-left: 50px">Tambah Surah</a>
                          <br><br>

                            <table id="myTable" class="table table-bordered table-striped table-condensed">
                              <thead>
                              <tr>
				  <th>Nomor</th>
                                  <th>Nama Surah</th>
                                  <th>Arti Surah</th>
                                  <th>Nama Tabel</th>
                                  <th>Jumlah Ayat</th>
                                  <th>Jenis Surah</th>
                                  <th>Detail</th>
                                  <th>Edit</th>
                                  <th>Hapus</th>
                              </tr>
                              </thead>
                              <tbody>

                              <?php
                                $surah = mysqli_query($koneksi,"SELECT * FROM surah ORDER BY nomor ASC");
                                if(mysqli_num_rows($surah) == 0){
                                  echo "<td colspan='7'><center> Astaghfirullah,where did the datas gone? :( </center></td>";
                                }else{
                                  while ($rsurah = mysqli_fetch_array($surah)) {
                              ?>

                              <tr>
				  <td><center><b> <?php echo $rsurah['nomor']; ?> </b></center></td>
                                  <td><?php echo $rsurah['nama_surah']; ?></td>
                                  <td><?php echo $rsurah['arti_surah']; ?></td>
                                  <td><?php echo $rsurah['nama_tabel']; ?></td>
                                  <td><?php echo $rsurah['jumlah_ayat']; ?></td>
                                  <td><?php echo $rsurah['jenis_surah']; ?></td>
                                  <td><a href="../ayat/index.php?id=<?php echo $rsurah['id_surah']; ?>&tabel=<?php echo $rsurah['nama_tabel']; ?>"> Detail </a></td>
                                  <td><a href="edit.php?id=<?php echo $rsurah['id_surah']; ?>"> Edit </a></td>
                                  <td><a href="hapus.php?id=<?php echo $rsurah['id_surah']; ?>"> Hapus </a></td>
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
