<?php include "koneksi.php"; ?>
<?php include "quran-koneksi.php"; ?>
<?php include "adsense.php"; ?>
<?php include "analytics.php"; ?>
<?php 
    $base_url = "/website";
    $url_gbr = "/images";

    $web = mysqli_query($koneksi,"SELECT * FROM website WHERE id = '00001'");
    $r_web = mysqli_fetch_array($web);
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <link rel="icon" type="image/png" href="<?php echo $url_gbr; ?>/logo/<?php echo $r_web['logo']; ?>">
        <title><?php echo $r_web['nama_web']; ?> - Home</title>
        <meta name="description" content="">
        <meta name="keywords" content="quran, qur'an, doa, do'a, artikel, islam, muslim, assalamualaikum, muslimin">
        <meta name="author" content="">
        <!-- Mobile Specific Metas
        ================================================== -->
        <meta name="format-detection" content="telephone=no">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- Template CSS Files
        ================================================== -->
        <!-- Twitter Bootstrs CSS -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/css/bootstrap.min.css">
        <!-- Ionicons Fonts Css -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/css/ionicons.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/css/animate.css">
        <!-- Hero area slider css-->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/css/slider.css">
        <!-- owl craousel css -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/css/owl.carousel.css">
        <link rel="stylesheet" href="<?php echo $base_url; ?>/css/owl.theme.css">
        <link rel="stylesheet" href="<?php echo $base_url; ?>/css/jquery.fancybox.css">
        <!-- template main css file -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/css/main.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="<?php echo $base_url; ?>/css/responsive.css">
        
        <!-- Template Javascript Files
        ================================================== -->
        <!-- modernizr js -->
        <script src="<?php echo $base_url; ?>/js/vendor/modernizr-2.6.2.min.js"></script>
        <!-- jquery -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <!-- owl carouserl js -->
        <script src="<?php echo $base_url; ?>/js/owl.carousel.min.js"></script>
        <!-- bootstrap js -->

        <script src="<?php echo $base_url; ?>/js/bootstrap.min.js"></script>
        <!-- wow js -->
        <script src="<?php echo $base_url; ?>/js/wow.min.js"></script>
        <!-- slider js -->
        <script src="<?php echo $base_url; ?>/js/slider.js"></script>
        <script src="<?php echo $base_url; ?>/js/jquery.fancybox.js"></script>
        <!-- template main js -->
        <script src="<?php echo $base_url; ?>/js/main.js"></script>
    </head>
    <body>
        <!--
        ==================================================
        Header Section Start
        ================================================== -->
        <header id="top-bar" class="navbar-fixed-top animated-header">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    </button>
                    <!-- /responsive nav button -->
                    
                    <!-- logo -->
                    <div class="navbar-brand">
                        <a href="index.html" >
                            <img src="<?php echo $url_gbr; ?>/logo/<?php echo $r_web['logo']; ?>" width="50px" height="50px" alt="" style="margin-top: -10px"> &nbsp; <font color="#006680"><b><?php echo $r_web['nama_web']; ?></b></font>
                        </a>
                    </div>
                    <!-- /logo -->
                </div>
                <!-- main menu -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <div class="main-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="<?php echo $base_url; ?>/home/">Home</a></li>
                            <li><a href="<?php echo $base_url; ?>/quran/index.php?search=''">Al-qur'an</a></li>
                            <li><a href="<?php echo $base_url; ?>/dakwah/index.php?search=''">Artikel</a></li>
                            <li><a href="<?php echo $base_url; ?>/hadist/index.php?search=''">Hadist</a></li>
                            <li><a href="<?php echo $base_url; ?>/doa/index.php?search=''">Do'a</a></li>
                            <li><a href="../../admin/psoon.php">Learn Qur'an</a></li>
                            <li><a href="../../admin/psoon.php">Learn Sholat</a></li>
                            <li><a href="#.php">Donate Us</a></li>
                        </ul>
                    </div>
                </nav>
                <!-- /main nav -->
            </div>
        </header>