<?php include"../headers.php"; ?>
<?php
    $config = mysqli_query($koneksi,"SELECT * FROM config WHERE id_config = '00001'");
    $r_config = mysqli_fetch_array($config);
    $header = $r_config['gbr_header'];
?>
        
        <!--
        ==================================================
        Slider Section Start
        ================================================== -->
        <section id="hero-area">
              <?php if($r_config['header'] == '1'){ ?>
                  <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/<?php echo $r_config['yt_header']; ?>?ecver=2" width="100%" height="700px" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
              <?php }else if($r_config['header'] == '0'){ ?>
                  <img src="<?php echo $url_gbr; ?>/website/<?php echo $header; ?>" width="100%" height="700px">
              <?php } ?>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="block wow fadeInUp" data-wow-delay=".3s">

                            <!-- Slider -->
                            <section class="cd-intro" style="margin-top: -480px;">
                                <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s" >
                                <span>Assalamualaikum</span> 
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">akhi</b>
                                    <b>ukhti</b>
                                    <b>muslimin</b>
                                    <b>muslimat</b>
                                </span>
                                </h1>
                                </section> <!-- cd-intro -->
                                <!-- /.slider -->
                                <h2 class="wow fadeInUp animated" data-wow-delay=".6s" >
                                    <b><font color=""><?php echo $r_config['title']; ?></font></b>
                                </h2>
                                <a class="btn btn-primary wow fadeInUp animated smooth-scroll" data-wow-delay=".9s" href="<?php echo $r_config['instagram']; ?>"><i class="ion-social-instagram-outline"></i> &nbsp; Follow our Instagram</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </section><!--/#main-slider-->
            <!--
            ==================================================
            Slider Section Start
            ================================================== -->
            <section id="about">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInLeft" data-wow-delay=".3s" data-wow-duration="500ms">
                                <h2>
                                ABOUT US
                                </h2>
                                <p>
                                    <?php echo $r_config['about']; ?>
                                </p>
                            </div>
                            
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="block wow fadeInRight" data-wow-delay=".3s" data-wow-duration="500ms">
                                <div style="position:relative;height:0;padding-bottom:56.25%"><iframe src="https://www.youtube.com/embed/<?php echo $r_config['yt_about']; ?>?ecver=2" width="640" height="360" frameborder="0" style="position:absolute;width:100%;height:100%;left:0" allowfullscreen></iframe></div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> <!-- /#about -->
            <!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
            <section id="works" class="works">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">Do'a</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            Pray,and have a nice day!
                        </p>
                    </div>
                    <div class="row">

                    <?php
                        $get_doa = mysqli_query($koneksi,"SELECT * FROM doa ORDER BY RAND() LIMIT 6");
                        while($r_doa = mysqli_fetch_array($get_doa)){
                    ?>

                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                <div class="img-wrapper">
                                    <img src="<?php echo $url_gbr; ?>/images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="content.php?id=<?php echo $r_doa['id_doa']; ?>">Go To ...</a>
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

                    <?php } ?>

                    </div>
                </div>
            </section> <!-- #works -->
            <!--
            ==================================================
            Portfolio Section Start
            ================================================== -->
            <section id="works" class="works" style="margin-top: -150px">
                <div class="container">
                    <div class="section-heading">
                        <h1 class="title wow fadeInDown" data-wow-delay=".3s">Hadist</h1>
                        <p class="wow fadeInDown" data-wow-delay=".5s">
                            Hadist for your life!
                        </p>
                    </div>
                    <div class="row">

                    <?php
                        $get_hadist = mysqli_query($koneksi,"SELECT * FROM hadist ORDER BY RAND() LIMIT 6");
                        while($r_hadist = mysqli_fetch_array($get_hadist)){
                    ?>

                        <div class="col-sm-4 col-xs-12">
                            <figure class="wow fadeInLeft animated portfolio-item" data-wow-duration="500ms" data-wow-delay="0ms">
                                <div class="img-wrapper">
                                    <img src="<?php echo $url_gbr; ?>/images/portfolio/item-1.jpg" class="img-responsive" alt="this is a title" >
                                    <div class="overlay">
                                        <div class="buttons">
                                            <a rel="gallery" class="fancybox" href="content.php?id=<?php echo $r_doa['id_doa']; ?>">Go To ...</a>
                                        </div>
                                    </div>
                                </div>
                                <figcaption>
                                <h4>
                                <a href="content.php?id=<?php echo $r_hadist['id_hadist']; ?>">
                                      <?php
                                        $judul = $r_hadist['judul'];
                                        $p_judul = strlen($judul);
                                        if($p_judul > 30){
                                            echo substr($r_hadist['judul'],0,30);
                                            echo "...";
                                        }else{
                                            echo $judul;               
                                        }
                                      ?> 
                                </a>
                                </h4>
                                <p>
                                    <?php echo $r_hadist['oleh']; ?>
                                </p>
                                </figcaption>
                            </figure>
                        </div>

                    <?php } ?>

                    </div>
                </div>
            </section> <!-- #works -->

            <!-- 
        ================================================== 
            Team Section Start
        ================================================== -->
        <section id="team">
            <div class="container">
                <div class="row">
                    <h2 class="subtitle text-center">Meet Us!</h2>
                    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".3s">
                            <div class="team-img">
                                <img src="images/team/team-1.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Jonathon Andrew</h3>
                            <p class="team_designation">CEO, Project Manager</p>
                            <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
                            <p class="social-icons">
                                <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <div class="team-img">
                                <img src="images/team/team-2.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Jesmin Martina</h3>
                            <p class="team_designation">CEO, Project Manager</p>
                            <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                            <p class="social-icons">
                                <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                            </p>
                        </div>
                    </div>
		    <div class="col-md-3">
                        <div class="team-member wow fadeInLeft" data-wow-duration="500ms" data-wow-delay=".5s">
                            <div class="team-img">
                                <img src="images/team/team-2.jpg" class="team-pic" alt="">
                            </div>
                            <h3 class="team_name">Jesmin Martina</h3>
                            <p class="team_designation">CEO, Project Manager</p>
                            <p class="team_text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore .</p>
                            <p class="social-icons">
                                <a href="#" class="facebook" target="_blank"><i class="ion-social-facebook-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-twitter-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-linkedin-outline"></i></a>
                                <a href="#" target="_blank"><i class="ion-social-googleplus-outline"></i></a>
                            </p>
                        </div>
                    </div>
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
                                <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="500ms">Contact With Me</a>
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
                                <a href="http://wwww.fb.com/themefisher" class="Facebook">
                                    <i class="ion-social-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.twitter.com/themefisher" class="Twitter">
                                    <i class="ion-social-twitter"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="Linkedin">
                                    <i class="ion-social-linkedin"></i>
                                </a>
                            </li>
                            <li>
                                <a href="http://wwww.fb.com/themefisher" class="Google Plus">
                                    <i class="ion-social-googleplus"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </footer> <!-- /#footer -->
                
        </body>
    </html>