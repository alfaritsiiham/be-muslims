<?php include "../headers.php"; ?>
<?php 
    $web = mysqli_query($koneksi,"SELECT * FROM website WHERE id = '00001'");
    $r_web = mysqli_fetch_array($web);
?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Konfigurasi Website </h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
                <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Konfigurasi Website </h4>
                          <section id="unseen">

                          <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                            <form class="form-horizontal style-form" method="post" action="#" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Nama Web</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama" value="<?php echo $r_web['nama_web']; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Gambar Logo</label>
                                    <div class="col-sm-10">
                                        <img src="<?php echo $url_gbr; ?>/logo/<?php echo $r_web['logo'] ?>" width="120px" height="120px"><br>
                                        <input type="file" class="form-control" name="image">
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
                              $nama = $_POST['nama'];

                            if($_FILES["image"]["name"] != ""){
                                  $target_dir     = "../../images/logo/";
                                  $target_file    = $target_dir . basename("logo-".$_FILES["image"]["name"]);
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
                                    $image = "logo-".$_FILES['image']['name'];

                                    $queryupdate = mysqli_query($koneksi, "UPDATE website SET nama_web = '$nama', logo = '$image' WHERE id = '00001'");

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
                             $update = mysqli_query($koneksi,"UPDATE website SET nama_web = '$nama' WHERE id = '00001'");

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
