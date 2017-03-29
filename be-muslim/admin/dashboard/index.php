<?php include"../headers.php"; ?>
<?php
  $get_hadist = mysqli_query($koneksi,"SELECT * FROM hadist");
  $get_doa = mysqli_query($koneksi,"SELECT * FROM doa");
  $get_artikel = mysqli_query($koneksi,"SELECT * FROM dakwah");
  $get_job = mysqli_query($koneksi,"SELECT * FROM job");
?>
      
      <!-- **********************************************************************************************************************************************************
      MAIN CONTENT
      *********************************************************************************************************************************************************** -->
      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">

              <div class="row">
                  <div class="col-lg-9 main-chart">
                  
                  	<div class="row mtbox">
                  		<div class="col-md-2 col-sm-2 col-md-offset-1 box0">
                  			<div class="box1">
					  			<span class="li_heart"></span>
					  			<h3><?php echo mysqli_num_rows($get_hadist); ?></h3>
                  			</div>
					  			<p>Sebanyak <?php echo mysqli_num_rows($get_hadist); ?> Hadist Tersedia</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_cloud"></span>
					  			<h3><?php echo mysqli_num_rows($get_doa); ?></h3>
                  			</div>
					  			<p>Sebanyak <?php echo mysqli_num_rows($get_doa); ?> Do'a Tersedia</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_stack"></span>
					  			<h3><?php echo mysqli_num_rows($get_artikel); ?></h3>
                  			</div>
					  			<p>Sebanyak <?php echo mysqli_num_rows($get_artikel); ?> Artikel Sudah Ditulis</p>
                  		</div>
				<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_stack"></span>
					  			<h3><?php echo mysqli_num_rows($get_job); ?></h3>
                  			</div>
					  			<p>Ada Sebanyak <?php echo mysqli_num_rows($get_job); ?> Job atau Janji</p>
                  		</div>
                  		<div class="col-md-2 col-sm-2 box0">
                  			<div class="box1">
					  			<span class="li_data"></span>
					  			<h3>OK!</h3>
                  			</div>
					  			<p>Database Installed</p>
                  		</div>
                  	
                  	</div><!-- /row mt -->	
                  
                      
			<center><h1>General Discussion</h1></center>

                      <div class="row mt">
                      	<div id="disqus_thread" style="width: 750px; margin-left: 30px;"></div>
<script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = https://assalamualaikum.tk/admin/dashboard;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = dashboard; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://assalamualaikum-tk.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                                
		      </div><!-- /row -->
					
                  </div><!-- /col-lg-9 END SECTION MIDDLE -->
                  
                  
      <!-- **********************************************************************************************************************************************************
      RIGHT SIDEBAR CONTENT
      *********************************************************************************************************************************************************** -->
                
                  
                  <div class="col-lg-3 ds">
                       <!-- USERS ONLINE SECTION -->
			<h3>Admin List</h3>

		  <?php    
		    $get_admin = mysqli_query($koneksi,"SELECT * FROM admin");
                    while($r_admin = mysqli_fetch_array($get_admin)){
                  ?> 
                      <!-- First Member -->
                      <div class="desc">
                      	<div class="thumb">
                      		<i class="fa fa-user fa-5x"></i>
                      	</div>
                      	<div class="details">
                      		<p><a href="#"><?php echo $r_admin['nama']; ?></a><br/>
                      		   <muted>Available</muted>
                      		</p>
                      	</div>
                      </div>

                    <?php } ?>
                      
                        <!-- CALENDAR-->
                        <div id="calendar" class="mb">
                            <div class="panel green-panel no-margin">
                                <div class="panel-body">
                                    <div id="date-popover" class="popover top" style="cursor: pointer; disadding: block; margin-left: 33%; margin-top: -50px; width: 175px;">
                                        <div class="arrow"></div>
                                        <h3 class="popover-title" style="disadding: none;"></h3>
                                        <div id="date-popover-content" class="popover-content"></div>
                                    </div>
                                    <div id="my-calendar"></div>
                                </div>
                            </div>
                        </div><!-- / calendar -->
                      
                  </div><!-- /col-lg-3 -->
              </div><! --/row -->
          </section>
      </section>

      <!--main content end-->
      <!--footer start-->
      <footer class="site-footer">
          <div class="text-center">
              2014 - Alvarez.is
              <a href="index.html#" class="go-top">
                  <i class="fa fa-angle-up"></i>
              </a>
          </div>
      </footer>
      <!--footer end-->
  </section>

    <!-- js placed at the end of the document so the pages load faster -->
    <script src="<?php echo $base_url; ?>/assets/js/jquery.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/jquery-1.8.3.min.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/bootstrap.min.js"></script>
    <script class="include" type="text/javascript" src="<?php echo $base_url; ?>/assets/js/jquery.dcjqaccordion.2.7.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/jquery.scrollTo.min.js"></script>
    <script src="<?php echo $base_url; ?>/assets/js/jquery.nicescroll.js" type="text/javascript"></script>
    <script src="<?php echo $base_url; ?>/assets/js/jquery.sparkline.js"></script>


    <!--common script for all pages-->
    <script src="<?php echo $base_url; ?>/assets/js/common-scripts.js"></script>
    
    <script type="text/javascript" src="<?php echo $base_url; ?>/assets/js/gritter/js/jquery.gritter.js"></script>
    <script type="text/javascript" src="<?php echo $base_url; ?>/assets/js/gritter-conf.js"></script>

    <!--script for this page-->
    <script src="<?php echo $base_url; ?>/assets/js/sparkline-chart.js"></script>    
	 <script src="<?php echo $base_url; ?>/assets/js/zabuto_calendar.js"></script>
	
	<script type="text/javascript">
        $(document).ready(function () {
        var unique_id = $.gritter.add({
            // (string | mandatory) the heading of the notification
            title: 'Welcome Admin!',
            // (string | mandatory) the text inside the notification
            text: 'Hover to close this notification.Enjoy your life!',
            // (string | optional) the image to display on the left
            image: 'assets/img/ui-sam.jpg',
            // (bool | optional) if you want it to fade out on its own or just sit there
            sticky: false,
            // (int | optional) the time you want it to be alive for before fading out
            time: '',
            // (string | optional) the class name you want to apply to that specific message
            class_name: 'my-sticky-class'
        });

        return false;
        });
	</script>
	
	<script type="application/javascript">
        $(document).ready(function () {
            $("#date-popover").popover({html: true, trigger: "manual"});
            $("#date-popover").hide();
            $("#date-popover").click(function (e) {
                $(this).hide();
            });
        
            $("#my-calendar").zabuto_calendar({
                action: function () {
                    return myDateFunction(this.id, false);
                },
                action_nav: function () {
                    return myNavFunction(this.id);
                },
                ajax: {
                    url: "show_data.php?action=1",
                    modal: true
                },
                legend: [
                    {type: "text", label: "Special event", badge: "00"},
                    {type: "block", label: "Regular event", }
                ]
            });
        });
        
        
        function myNavFunction(id) {
            $("#date-popover").hide();
            var nav = $("#" + id).data("navigation");
            var to = $("#" + id).data("to");
            console.log('nav ' + nav + ' to: ' + to.month + '/' + to.year);
        }
    </script>
  

  </body>
</html>
