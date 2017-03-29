<?php include "../headers.php"; ?>
<?php
     $id = $_GET['id'];
     $get_dakwah = mysqli_query($koneksi,"SELECT * FROM dakwah WHERE id_dakwah = '$id'");
     $r_dakwah = mysqli_query($get_dakwah);
?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Dakwah</h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
                <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Tambah Dakwah</h4>
                          <section id="unseen">

                          <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                            <form class="form-horizontal style-form" method="post" action="" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Judul</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="judul" value="<?php echo $r_dakwah['judul']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Dikutip dari</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="dari" value="<?php echo $r_dakwah['dari']; ?>">
                                        <span class="help-block">Isikan <b>Admin</b> jika tidak mengutip dari siapapun </span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Isi</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor" name="isi"><?php echo $r_dakwah['isi']; ?></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Gambar Artikel</label>
                                    <div class="col-sm-10">
					<img src="<?php echo $url_gbr; ?>/artikel/<?php echo $r_dakwah['gambar']; ?>">
                                        <input type="file" class="form-control" name="image">
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

                            if($_FILES["image"]["name"] != ""){
                                  $target_dir     = "../../images/artikel/";
                                  $target_file    = $target_dir . basename("artikel-".$_FILES["image"]["name"]);
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
                                    $image = "artikel-".$_FILES['image']['name'];

                                    $update = mysqli_query($koneksi,"UPDATE dakwah SET judul = '$judul', dari = '$dari', isi = '$isi', gambar = '$image', update_at = NOW()");

                                      if($update){
                                        echo "success";
                                      }else{
                                        echo "Upss Something wrong.. ";
                                      }
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                              }
                            }
                        }else{
                          $update = mysqli_query($koneksi,"UPDATE dakwah SET judul = '$judul', dari = '$dari', isi = '$isi', update_at = NOW()");
			  if($update){
                            echo "success";
                          }else{
                            echo "Upss Something wrong.. ";
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
    <script src="<?php echo $base_url; ?>/assets/js/jquery.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/jquery-ui-1.9.2.custom.min.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/jquery.ui.touch-punch.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo $base_url; ?>/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="https://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace( 'editor' );
    </script>

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
