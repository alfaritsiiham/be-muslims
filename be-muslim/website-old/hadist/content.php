<?php include "../headers.php"; ?>
<?php
    $id = $_GET['id'];

    $get_hadist = mysqli_query($koneksi,"SELECT * FROM hadist WHERE id_hadist = '$id'");
    $r_hadist = mysqli_fetch_array($get_hadist);

?>
        <!--
        ==================================================
        Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2><?php echo $r_hadist['judul']; ?></h2>
                            <ol class="breadcrumb">
                                <li>
                                    Dari <?php echo $r_hadist['oleh']; ?>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            </section><!--/#Page header-->
            <section id="gallery" class="gallery" style="margin-left: -60px">
                <div class="container">
                    <div class="row">

                    <center>
                        <h2><?php echo $r_hadist['isi']; ?></h2>
                        <br>
                        <?php echo $r_hadist['indo']; ?><br><br>
                        <?php echo $r_hadist['inggris']; ?>
                    </center>

                    </div>
                </div>
            </section>
            <!--
            ==================================================
            Call To Action Section Start
            ================================================== -->
            <section id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="block">
                                <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">SO WHAT YOU THINK ?</h1>
                                <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="500ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,<br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                <a href="#" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>
            <!--
            ==================================================
            Footer Section Start
            ================================================== -->
            <footer id="footer">
                <div class="container">
                    <div class="col-md-8">
                        <p class="copyright">Copyright: <span>2015</span> . Design and Developed by <a href="http://www.Themefisher.com">Themefisher</a></p>
                    </div>
                    <div class="col-md-4">
                        <!-- Social Media -->
                        <ul class="social">
                            <li>
                                <a href="#" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
                </footer> <!-- /#footer -->
                
            </body>
        </html>
    </html>