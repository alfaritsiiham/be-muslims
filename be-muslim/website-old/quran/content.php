<?php include "../headers.php"; ?>
<?php
    $tabel = $_GET['tabel'];
    $surah = $_GET['id'];

    $get_surah = mysqli_query($koneksi,"SELECT * FROM surah WHERE id_surah = '$surah'");
    $r_surah = mysqli_fetch_array($get_surah);

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
                            <h2><?php echo $r_surah['nama_surah']; ?></h2>
                            <ol class="breadcrumb">
                                <li>
                                    <?php echo $r_surah['jenis_surah']; ?> &nbsp; &nbsp; <?php echo $r_surah['jumlah_ayat'] ?> Ayat
                                </li><br><br>
                                    <?php echo $r_surah['cerita_dibalik']; ?>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            </section><!--/#Page header-->
            <section id="gallery" class="gallery">
                <div class="container">
                    <div class="row">

                    <?php 
                        $get_ayat = mysqli_query($qkoneksi,"SELECT * FROM $tabel");
                        if(mysqli_num_rows($get_ayat) == 0){
                            echo "Masya'allah,the datas is missing! :(";
                        }else{
                            while($r_ayat = mysqli_fetch_array($get_ayat)){
                    ?>

                    <div class="col-md-12" style="margin-bottom: 50px">
                        <div class="col-md-2">
                            <a href="#" class="btn btn-success">Suara</a>
                        </div>

                        <div class="col-md-10">
                            <div class="ayat" style="margin-right: 100px" align="right">
                                <h3><?php echo $r_ayat['arab']; ?></h3>
                                <?php echo $r_ayat['latin']; ?><br>
                                <?php echo $r_ayat['indo']; ?><br>
                                <?php echo $r_ayat['inggris']; ?><br>
                            </div>
                        </div>
                    </div>

                    <?php } } ?>

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