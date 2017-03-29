<?php include "koneksi.php"; ?>
<?php include "quran-koneksi.php"; ?>

<?php
  session_start();
  if($_SESSION['username'] == '' && $_SESSION['password'] == ''){
    header('location: ../login.php');
  }else{}
?>

<?php
    $web = mysqli_query($koneksi,"SELECT * FROM website WHERE id = '00001'");
    $r_web = mysqli_fetch_array($web);
?>

<?php 
  $base_url = "/admin";
  $url_gbr = "/images";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <link rel="icon" type="image/png" href="<?php echo $url_gbr; ?>/logo/<?php echo $r_web['logo']; ?>">
    <meta name="keyword" content="Admin, Assalamualaikum">

    <title>Assalamualaikum - Admin Page</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo $base_url; ?>/assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="<?php echo $base_url; ?>/assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="<?php echo $base_url; ?>/assets/css/style.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>/assets/css/style-responsive.css" rel="stylesheet">
    <!--external css-->
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/css/zabuto_calendar.css">
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/js/gritter/css/jquery.gritter.css" />
    <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>/assets/lineicons/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css"/> 

    <script src="<?php echo $base_url; ?>/assets/js/chart-master/Chart.js"></script>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

  <section id="container" >
      <!-- **********************************************************************************************************************************************************
      TOP BAR CONTENT & NOTIFICATIONS
      *********************************************************************************************************************************************************** -->
      <!--header start-->
      <header class="header black-bg">
              <div class="sidebar-toggle-box">
                  <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
              </div>
            <!--logo start-->
            <a href="index.html" class="logo"><b>Assalamualaikum</b></a>
            <!--logo end-->
            <div class="top-menu">
            	<ul class="nav pull-right top-menu">
                    <li><a class="logout" href="../logout.php">Logout</a></li>
            	</ul>
            </div>
        </header>
      <!--header end-->
      
      <!-- **********************************************************************************************************************************************************
      MAIN SIDEBAR MENU
      *********************************************************************************************************************************************************** -->
      <!--sidebar start-->
      <aside>
          <div id="sidebar"  class="nav-collapse ">
              <!-- sidebar menu start-->
              <ul class="sidebar-menu" id="nav-accordion">
              
              	  <p class="centered"><a href="profile.html"><img src="<?php echo $url_gbr; ?>/logo/<?php echo $r_web['logo']; ?>" class="img-circle" width="60"></a></p>
              	  <h5 class="centered"><?php echo $_SESSION['username']; ?></h5>
              	  	
                  <li class="mt">
                      <a href="<?php echo $base_url; ?>/dashboard/">
                          <i class="fa fa-dashboard"></i>
                          <span>Dashboard</span>
                      </a>
                  </li>

		<?php
		 $job = mysqli_query($koneksi,"SELECT * FROM job");
		 $r_job = mysqli_num_rows($job);
		?>

		 <li class="sub-menu">
                      <a href="<?php echo $base_url; ?>/job/">
                          <i class="fa fa-dashboard"></i>
                          <span>Job & Appoinment &nbsp; (<b> <?php echo $r_job; ?> </b>)</span>
                      </a>
                  </li>

		<li class="sub-menu">
                      <a href="<?php echo $base_url; ?>/email/">
                          <i class="fa fa-envelope"></i>
                          <span>Email</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo $base_url; ?>/config/">
                          <i class="fa fa-desktop"></i>
                          <span>Config</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo $base_url; ?>/website/">
                          <i class="fa fa-desktop"></i>
                          <span>Website</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo $base_url; ?>/quran/">
                          <i class="fa fa-book"></i>
                          <span>Qur'an</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo $base_url; ?>/hadist/">
                          <i class="fa fa-desktop"></i>
                          <span>Hadist</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo $base_url; ?>/artikel/">
                          <i class="fa fa-desktop"></i>
                          <span>Artikel</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo $base_url; ?>/doa/">
                          <i class="fa fa-desktop"></i>
                          <span>Do'a</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo $base_url; ?>/akun/">
                          <i class="fa fa-user"></i>
                          <span>Akun</span>
                      </a>
                  </li>

                  <li class="sub-menu">
                      <a href="<?php echo $base_url; ?>/logout.php">
                          <i class="fa fa-desktop"></i>
                          <span>Logout</span>
                      </a>
                  </li>

              </ul>
              <!-- sidebar menu end-->
          </div>
      </aside>
      <!--sidebar end-->