<?php include "../headers.php"; ?>
<?php session_start(); $gusername = $_SESSION['username']; ?>
<?php
    $config = mysqli_query($koneksi,"SELECT * FROM admin WHERE username = '$gusername'");
    $r_config = mysqli_fetch_array($config);
?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper site-min-height">
          	<h3><i class="fa fa-angle-right"></i> Akun </h3>
          	<div class="row mt">
          		<div class="col-lg-12">
          		
                <div class="content-panel">
                      <h4><i class="fa fa-angle-right"></i> Konfigurasi Akun</h4>
                          <section id="unseen">

                          <div class="form-panel">
                            <h4 class="mb"><i class="fa fa-angle-right"></i> Form Elements</h4>
                            <form class="form-horizontal style-form" method="post" action="#" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Nama</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="nama" value="<?php echo $r_config['nama']; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Username</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="username" value="<?php echo $r_config['username']; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="pass" value="<?php echo $r_config['password']; ?>" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-sm-2 col-sm-2 control-label">Re-type Password</label>
                                    <div class="col-sm-10">
                                        <input type="password" class="form-control" name="upass" required>
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
                              $username = $_POST['username'];
                              $nama = $_POST['nama'];
                              $pass = $_POST['pass'];
                              $upass = $_POST['upass'];

                            if($pass != $upass){
                              echo "Maaf,Password dan Ulang Password Tidak Sama!";
                            }else{
                             $update = mysqli_query($koneksi,"UPDATE admin SET nama = '$nama', username = '$username', password = '$password' WHERE username = '$gusername'");

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
