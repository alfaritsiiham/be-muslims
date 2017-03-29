<?php include "../headers.php"; ?>
<?php
    $get_dakwah = mysqli_query($koneksi,"SELECT * FROM dakwah");
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
                            <h2>Dakwah</h2>
                            <ol class="breadcrumb">
                                <li class="active">Update setiap jum'at</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            </section><!--/#Page header-->
            <section id="blog-full-width">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">

                        <?php
                            if(mysqli_num_rows($get_dakwah) == 0){
                                echo "Tunggu jum'at depan!";
                            }else{
                                while($r_dakwah = mysqli_fetch_array($get_dakwah)){
                                    $id = $r_dakwah['id_dakwah'];
                        ?>

                            <article class="wow fadeInDown" data-wow-delay=".3s" data-wow-duration="500ms">
                                <div class="blog-post-image">
                                    <a href="post-fullwidth.html"><img class="img-responsive" src="<?php echo $base_url; ?>/images/blog/post-1.jpg" alt="" /></a>
                                </div>
                                <div class="blog-content">
                                    <h2 class="blogpost-title">
                                    <a href="post-fullwidth.html"><?php echo $r_dakwah['judul']; ?></a>
                                    </h2>
                                    <div class="blog-meta">
                                        <span><?php echo $r_dakwah['created_at']; ?></span>
                                        <?php echo $r_dakwah['dari']; ?>
                                    </div>
                                    <p>
                                      <?php 
                                        echo substr($r_dakwah['isi'], 0, 250);
                                      ?>
                                      <a href="content.php?id=<?php echo $id; ?>"> Read More...</a>
                                    </p>
                                </div>
                                
                            </article>

                        <?php } } ?>

                        </div>
                        <div class="col-md-4">
                            <div class="sidebar">
                                <div class="search widget">
                                    <form action="" method="get" class="searchform" role="search">
                                        <div class="input-group">
                                            <input type="text" class="form-control" placeholder="Search for...">
                                            <span class="input-group-btn">
                                                <button class="btn btn-default" type="button"> <i class="ion-search"></i> </button>
                                            </span>
                                            </div><!-- /input-group -->
                                        </form>
                                    </div>
                                    <div class="author widget">
                                        <img class="img-responsive" src="<?php echo $base_url; ?>/images/author/author-bg.jpg">
                                        <div class="author-body text-center">
                                            <div class="author-img">
                                                <img src="<?php echo $base_url; ?>/images/author/author.jpg">
                                            </div>
                                            <div class="author-bio">
                                                <h3>Jonathon Andrew</h3>
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt magnam asperiores consectetur, corporis ullam impedit.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="categories widget">
                                        <h3 class="widget-head">Categories</h3>
                                        <ul>
                                            <li>
                                                <a href="">Audio</a> <span class="badge">1</span>
                                            </li>
                                            <li>
                                                <a href="">Gallery</a> <span class="badge">2</span>
                                            </li>
                                            <li>
                                                <a href="">Image</a> <span class="badge">4</span>
                                            </li>
                                            <li>
                                                <a href="">Standard</a> <span class="badge">2</span>
                                            </li>
                                            <li>
                                                <a href="">Status</a> <span class="badge">3</span>
                                            </li>
                                        </ul>
                                    </div>
                                    
                                    <div class="recent-post widget">
                                        <h3>Recent Posts</h3>
                                        
                                        <ul>
                                            <li>
                                                <a href="#">Corporate meeting turns into a photoshooting.</a><br>
                                                <time>16 May, 2015</time>
                                            </li>
                                            <li>
                                                <a href="#">Statistics,analysis. The key to succes.</a><br>
                                                <time>15 May, 2015</time>
                                            </li>
                                            <li>
                                                <a href="#">Blog post without image, only text.</a><br>
                                                <time>14 May, 2015</time>
                                            </li>
                                            <li>
                                                <a href="#">Blog post with audio player. Share your creations.</a><br>
                                                <time>14 May, 2015</time>
                                            </li>
                                            <li>
                                                <a href="#">Blog post with classic Youtbube player.</a><br>
                                                <time>12 May, 2015</time>
                                            </li>
                                        </ul>
                                        
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
                                        <h2 class="title wow fadeInDown" data-wow-delay=".3s" data-wow-duration="300ms">SO WHAT YOU THINK ?</h1>
                                        <p class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="300ms">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nobis,</br>possimus commodi, fugiat magnam temporibus vero magni recusandae? Dolore, maxime praesentium.</p>
                                        <a href="contact.html" class="btn btn-default btn-contact wow fadeInDown" data-wow-delay=".7s" data-wow-duration="300ms">Contact With Me</a>
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
                                <p class="copyright">Copyright: <span>2015</span> by <a href="http://www.themefisher.com">themefisher</a></p>
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