<?php include"koneksi.php"; ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Assalamualaikum</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body onload="getTime()">

      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->

	  	<div class="container" style="margin-top: -130px">
	  		<div id="showtime"></div>
	  			<div class="col-md-12">
	  				<div class="lock-screen">
                    <h3><font color="white"><b> Sorry,but this page is not ready yet! </b></font></h3><br>
		  				<h2><a data-toggle="modal" href="#myModal"><i class="fa fa-envelope"></i></a></h2>
		  				<p><font color="white"> Let Me Know When It's Ready </font></p>
		  				
				          <!-- Modal -->
				          <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade">
				              <div class="modal-dialog">
				                  <div class="modal-content">
				                      <div class="modal-header">
				                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				                          <h4 class="modal-title">Subscription</h4>
				                      </div>
				                      <div class="modal-body">
                                        <form method="post" action="">
				                          <p class="centered"><i class="fa fa-envelope"></i></p>
				                          <input type="text" name="email" placeholder="Your Email" autocomplete="off" class="form-control placeholder-no-fix">
				
				                      </div>
				                      <div class="modal-footer centered">
				                          <input type="submit" name="submit" class="btn btn-theme03" value="Submit">
                                        </form>

                                        <?php
                                            if(isset($_POST['submit'])){
                                                $email = $_POST['email'];

                                                $query = mysqli_query($koneksi,"INSERT INTO subscribe (email) VALUES ('$email')");

                                                if($query){
                                                    header('location: soon.php');
                                                }
                                            }
                                        ?>
				                      </div>
				                  </div>
				              </div>
				          </div>
				          <!-- modal -->
		  				
		  				
	  				</div><! --/lock-screen -->
	  			</div><!-- /col-lg-4 -->
	  	
	  	</div><!-- /container -->

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!--BACKSTRETCH-->
    <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
    <script type="text/javascript" src="assets/js/jquery.backstretch.min.js"></script>
    <script>
        $.backstretch("assets/img/login-bg.jpg", {speed: 500});
    </script>

    <script>
        function getTime()
        {
            var today=new Date();
            var h=today.getHours();
            var m=today.getMinutes();
            var s=today.getSeconds();
            // add a zero in front of numbers<10
            m=checkTime(m);
            s=checkTime(s);
            document.getElementById('showtime').innerHTML=h+":"+m+":"+s;
            t=setTimeout(function(){getTime()},500);
        }

        function checkTime(i)
        {
            if (i<10)
            {
                i="0" + i;
            }
            return i;
        }
    </script>

  </body>
</html>
