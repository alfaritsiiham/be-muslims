<?php include "../headers.php"; ?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Doa</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
                <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Tambah Doa</h4>
                          <section id="unseen">

                          <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                            <form class="form-horizontal style-form" method="post" action="#">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Dikutip</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="dikutip">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Deskripsi</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor" name="deskripsi"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Arab</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor2" name="arab"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Latin</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor3" name="latin"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Arti Indonesia</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor4" name="indo"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Arti Inggris</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor5" name="inggris"></textarea>
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
                              $deskripsi = $_POST['deskripsi'];
                              $dikutip = $_POST['dikutip'];
                              $arab = $_POST['arab'];
                              $latin = $_POST['latin'];
                              $indo = $_POST['indo'];
                              $inggris = $_POST['inggris'];

                              $insert = mysqli_query($koneksi,"INSERT INTO doa (judul,deskripsi,dikutip,arab,latin,indo,inggris,created_at) VALUES ('$judul','$deskripsi','$dikutip','$arab','$latin','$indo','$inggris',NOW())");

                              if($insert){
                                header('location:hadist.php');
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
            CKEDITOR.replace( 'editor2' );
            CKEDITOR.replace( 'editor3' );
            CKEDITOR.replace( 'editor4' );
            CKEDITOR.replace( 'editor5' );
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
