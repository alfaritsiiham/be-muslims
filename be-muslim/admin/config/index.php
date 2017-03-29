<?php include "../headers.php"; ?>
<?php 
    $config = mysqli_query($koneksi,"SELECT * FROM config WHERE id_config = '00001'");
    $r_config = mysqli_fetch_array($config);
    $header = $r_config['header'];
?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Konfigurasi </h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
                <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Konfigurasi Dasar</h4>
                          <section id="unseen">

                          <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                            <form class="form-horizontal style-form" method="post" action="#" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Title Depan</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="title" value="<?php echo $r_config['title']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">About Us</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor" name="about"><?php echo $r_config['about']; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Instagram</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="instagram" value="<?php echo $r_config['instagram']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Pilih Header</label>
                                    <div class="col-sm-10">
                                      <?php if($header == 0){ ?>
                                        <input type="radio" class="frm-control" name="pilih" value="0" checked> Gambar &nbsp; &nbsp;
                                        <input type="radio" class="frm-control" name="pilih" value="1"> Video
                                      <?php }elseif ($header == 1) { ?>
                                        <input type="radio" class="frm-control" name="pilih" value="0"> Gambar &nbsp; &nbsp;
                                        <input type="radio" class="frm-control" name="pilih" value="1" checked> Video
                                      <?php } ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Youtube Header</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="yt_header" value="<?php echo $r_config['yt_header']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Gambar Header</label>
                                    <div class="col-sm-10">
                                        <img src="<?php echo $url_gbr; ?>/website/<?php echo $r_config['gbr_header'] ?>" width="200px" height="120px"><br>
                                        <input type="file" class="form-control" name="image" value="<?php echo $r_config['gbr_header'] ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Youtube About</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="yt_about" value="<?php echo $r_config['yt_about']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-sm-10">
                                        <center><input type="submit" class="form-control btn btn-primary" value="Kirim" name="submit"></center>
                                    </div>
                                </div>
                            </form>
                          </div>

                          <?php

                          if(isset($_POST['submit'])){
                              $title = $_POST['title'];
                              $about = $_POST['about'];
                              $instagram = $_POST['instagram'];
                              $pilih = $_POST['pilih'];
                              $yt_header = $_POST['yt_header'];
                              $yt_about = $_POST['yt_about'];

                            if($_FILES["image"]["name"] != ""){
                                  $target_dir     = "../../images/website/";
                                  $target_file    = $target_dir . basename("header-".$_FILES["image"]["name"]);
                                  $uploadOk       = 1;
                                  $imageFileType  = pathinfo($target_file,PATHINFO_EXTENSION);
                            
                                    if(isset($_POST["submit"])) {
                                        $check = getimagesize($_FILES["image"]["tmp_name"]);
                                        if($check !== false) {
                                            echo "File is an image - " . $check["mime"] . ".";
                                            $uploadOk = 1;
                                        } else {
                                            echo "File is not an image.";
                                            $uploadOk = 0;
                                        }
                                    }

                            // Check file size
                            if ($_FILES["image"]["size"] > '50000000000') {
                                echo "Sorry, your file is too large.";
                                $uploadOk = 0;
                            }
                            // Allow certain file formats
                            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                            && $imageFileType != "gif" ) {
                                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                                $uploadOk = 0;
                            }
                            // Check if $uploadOk is set to 0 by an error
                            if ($uploadOk == 0) {
                                echo "Sorry, your file was not uploaded.";
                            // if everything is ok, try to upload file
                            } else {
                                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                                    $image = "header-".$_FILES['image']['name'];

                                    $queryupdate = mysqli_query($koneksi, "UPDATE config SET title = '$title', about = '$about', instagram = '$instagram', header = '$pilih', yt_header = '$yt_header', gbr_header = '$image', yt_about = '$yt_about' WHERE id_config = '00001'");

                                      if($queryupdate){
                                        echo "success";
                                      }else{
                                        echo "Upss Something wrong.. ";
                                      }
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                              }
                            }
                          }else{
                             $update = mysqli_query($koneksi,"UPDATE config SET title = '$title', about = '$about', instagram = '$instagram', header = '$pilih', yt_header = '$yt_header', yt_about = '$yt_about' WHERE id_config = '00001'");

                              if($update){
                                header('location:index.php');
                              }else{
                                echo "<center><h3>Maaf,ada yang salah!!</h3></center>";
                              }
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
