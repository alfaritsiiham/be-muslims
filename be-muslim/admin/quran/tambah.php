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
                      <h4><i class="fa fa-angle-right"></i> Tambah Surah</h4>
                          <section id="unseen">

                          <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                            <form class="form-horizontal style-form" method="post" action="" enctype="multipart/form-data">
        
				<div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Surah Ke-</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nomor">
                                    </div>
                                </div>                        
	
				<div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Nama Surah</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="surah">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Nama Tabel</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="tabel">
                                        <span class="help-block"><b>nama_surah</b> isikan seperti contoh,tidak ada spasi. </span>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Jumlah Ayat</label>
                                    <div class="col-sm-10">
                                        <input type="number" class="form-control" name="ayat">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Jenis Surah</label>
                                    <div class="col-sm-10">
                                        <select name="jenis">
                                          <option value="Makiyyah">Makiyyah</option>
                                          <option value="Madaniyyah">Madaniyyah</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Arti Surah</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="arti">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Cerita Dibalik Surah</label>
                                    <div class="col-sm-10">
                                        <textarea id="editor" name="cerita"></textarea>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Gambar Surah</label>
                                    <div class="col-sm-10">
                                        <input type="file" class="form-control" name="image" value="<?php echo $r_config['gbr_header'] ?>">
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
                               $surah = $_POST['surah'];
			      $nomor = $_POST['nomor'];
                              $tabel = $_POST['tabel'];
                              $ayat = $_POST['ayat'];
                              $jenis = $_POST['jenis'];
                              $arti = $_POST['arti'];
                              $cerita = $_POST['cerita'];

                            if($_FILES["image"]["name"] != ""){
                                  $target_dir     = "../../images/surah/";
                                  $target_file    = $target_dir . basename("$surah-".$_FILES["image"]["name"]);
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
                                    $image = "$surah-".$_FILES['image']['name'];

                                    $insert = mysqli_query($koneksi, "INSERT INTO surah (nomor,nama_surah,nama_tabel,jumlah_ayat,jenis_surah,arti_surah,cerita_dibalik,gbr_surah,created_at) VALUES ('$nomor','$surah','$tabel','$ayat','$jenis','$arti','$cerita','$image',NOW())")or die(mysqli_error($koneksi));

                                      if($insert){
                                        echo "success";
                                      }else{
                                        echo "Upss Something wrong.. ";
                                      }
                                } else {
                                    echo "Sorry, there was an error uploading your file.";
                              }
                            }
                          }else{
                             $insert = mysqli_query($koneksi,"INSERT INTO surah (nomor,nama_surah,nama_tabel,jumlah_ayat,jenis_surah,arti_surah,cerita_dibalik,created_at) VALUES ('$nomor','$surah','$tabel','$ayat','$jenis','$arti','$cerita',NOW())")or die(mysqli_error($koneksi));

                              if($insert){
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
