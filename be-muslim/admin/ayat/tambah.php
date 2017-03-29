<?php include "../headers.php"; ?>
<?php
  $id = $_GET['id'];
  $tabel = $_GET['tabel'];
?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Ayat</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
                <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Tambah Ayat</h4>
                          <section id="unseen">

                          <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                            <form class="form-horizontal style-form" method="post" action="#">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Ayat Ke-</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="ayat">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Arab</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor" name="arab"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Latin</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor2" name="latin"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Indo</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor3" name="indo"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Inggris</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor4" name="inggris"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Suara</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="suara">
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

                              $ayat = $_POST['ayat'];
                              $arab = $_POST['arab'];
                              $latin = $_POST['latin'];
                              $indo = $_POST['indo'];
                              $inggris = $_POST['inggris'];
                              $suara = $_POST['suara'];

                              $insert = mysqli_query($qkoneksi,"INSERT INTO $tabel (ayat,arab,latin,indo,inggris,suara,created_at) VALUES ('$ayat','$arab','$latin','$indo','$inggris','$suara',NOW())")or die(mysqli_error($koneksi));

                              if($insert){
                                header('location: index.php?id='.$id.'&tabel='.$tabel);
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
            CKEDITOR.replace( 'editor2' );
            CKEDITOR.replace( 'editor3' );
            CKEDITOR.replace( 'editor4' );
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
