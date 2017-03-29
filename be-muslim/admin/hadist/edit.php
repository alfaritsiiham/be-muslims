<?php include "../headers.php"; ?>
<?php 
     id=$_GET['id'];
     $get_hadist = mysqli_query($koneksi,"SELECT * FROM hadist WHERE id_hadist = '$id'");
     $r_hadist = mysqli_query($get_hadist);
?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Hadist</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
                <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Tambah Hadist</h4>
                          <section id="unseen">

                          <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                            <form class="form-horizontal style-form" method="post" action="#">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul" value="<?php echo $r_hadist['judul']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Dari</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="dari" value="<?php echo $r_hadist['oleh']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Isi</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor" name="isi"><?php echo $r_hadist['isi']; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Arti Indonesia</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor1" name="indo"><?php echo $r_hadist['indo']; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Arti Inggris</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor2" name="inggris"><?php echo $r_hadist['inggris']; ?></textarea>
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

                              $judul = $_POST['judul'];
                              $dari = $_POST['dari'];
                              $isi = $_POST['isi'];
                              $indo = $_POST['indo'];
                              $inggris = $_POST['inggris'];

                              $update = mysqli_query($koneksi,"UPDATE hadist SET judul = '$judul', oleh = '$dari', isi = '$isi', indo = '$indo', inggris = '$inggris', updated_at = NOW()");

                              if($update){
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
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace( 'editor' );
            CKEDITOR.replace( 'editor1' );
            CKEDITOR.replace( 'editor2' );
    </script>

    <!--common script for all pages-->
    <script src="assets/js/common-scripts.js"></script>

    <!--script for this page-->
    
  <script>
      //custom select box

      $(function(){
          $('select.styled').customSelect();
      });

  </script>

  </body>
</html>
