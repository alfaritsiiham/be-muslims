<?php include "../headers.php"; ?>
        <!--
        ==================================================
        Global Page Section Start
        ================================================== -->
        <section class="global-page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="block">
                            <h2>Doa</h2>
                            <ol class="breadcrumb">
                                Read do'a and have a nice day!
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
                        $get_doa = mysqli_query($koneksi,"SELECT * FROM doa");
                        if(mysqli_num_rows($get_doa) == 0){
                            echo "Masya'allah,the datas is missing! :(";
                        }else{
                            while($r_doa = mysqli_fetch_array($get_doa)){
                    ?>
                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                <div class="img-wrapper">
                                    <img src="<?php echo $base_url; ?>/images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="content.php?id=<?php echo $r_doa['id_doa']; ?>">Baca</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="content.php?id=<?php echo $r_doa['id_doa']; ?>">
                                      <?php
                                        $judul = $r_doa['judul'];
                                        $p_judul = strlen($judul);
                                        if($p_judul > 30){
                                            echo substr($r_doa['judul'],0,30);
                                            echo "...";
                                        }else{
                                            echo $judul;               
                                        }
                                      ?> 
                                </a>
                                </h4>
                                <p>
                                    <?php echo $r_doa['dikutip']; ?>
                                </p>
                                </figcaption>
                            </figure>
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