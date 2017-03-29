<?php include "../headers.php"; ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Job and appoinment</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
                <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Tambah Job</h4>
                          <section id="unseen">

                          <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                            <form class="form-horizontal style-form" method="post" action="#">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Prioritas</label>
                                    <div class="col-sm-10">
                                        <select name="prioritas">
                                          <option value="Low">Low</option>
                                          <option value="Medium">Medium</option>
					  <option value="High">High</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <center><input type="submit" class="form-control btn btn-primary" value="Kirim" name="kirim"></center>
                                    </div>
                                </div>
                            </form>
                          </div>

                          <?php

                            if(isset($_POST['kirim'])){
                               $nama = $_POST['nama'];
                              $prioritas = $_POST['prioritas'];
			      $oleh = $_SESSION['username'];
				
				if($prioritas == 'Low'){
				   $prio = '3';
				}else if($prioritas == 'Medium'){
				   $prio = '2';
				}else if($prioritas == 'High'){
				   $prio = '1';
				}

                              
                             $insert = mysqli_query($koneksi,"INSERT INTO job (nama_job,oleh,prioritas,prio,created_at) VALUES ('$nama','$oleh','$prioritas','$prio',NOW())");

                              if($insert){
                                header('location:index.php');
                              }else{
                                echo "<center><h3>Maaf,ada yang salah!!</h3></center>";
                              }
                          }
                          ?>

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
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace( 'editor' );
    </script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
