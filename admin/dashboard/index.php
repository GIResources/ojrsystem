<?php

    ob_start();
?>

<?php

//Connecting to ojrs database///
require_once("includes/admin_session.php");
require_once("includes/dbcon.php");
?>

<?php
    $date = date('Y');
?>

<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width"/>
        <title>Admin Dashboard Home</title>
         <!---- Linking to CSS ---->
        <link type="text/css" rel="stylesheet" href="includes/body.css" />
         <!-- connecting to bootstrap ---->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
                <!-- connecting to jquery ---->
        <script type="text/javascript" src="jquery/jquery-1.11.3.min.js"></script>
                <!-- connecting to javascript ---->
        <script type="text/javascript" src="js/bootstrap.js"></script>

        <!--BORROWED FOOTER CODE SCRIPT LINKING BEGINS HERE-->
        <!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="footer/css/style.css"/>
<link rel="stylesheet" type="text/css" href="footer/css/icons.css"/>
<link rel="stylesheet" type="text/css" href="footer/css/slider.css"/>
<link rel="stylesheet" type="text/css" href="footer/css/skinblue.css"/><!-- change skin color -->
<link rel="stylesheet" type="text/css" href="footer/css/responsive.css"/>
<script src="footer/js/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->

        <!--BORROWED FOOTER CODE SCRIPT LINKING ENDS HERE-->
    </head>
    
    <body>
    
        <!--BORROWED NAVIGATION AND MENU AREA STARTS HERE!-->
    
    <!-- TOP LOGO & MENU
================================================== -->

        <!--BORROWED NAVIGATION AND MENU AREA ENDS HERE!-->
    
        <!--SLIDERS STARTS HERE!-->
        
            
    <!--SLIDERS ENDS HERE!-->
        
    
    <div class="container-fluid bg-success">
            <div class="row">
                               
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <img src="images/roll4.PNG">
                            <h1 class="text-center text-info"><strong>Welcome to ADMINISTRATOR's Dashboard</strong></h1>
                            
                        </div>
                        <div class="panel-body">
                        <h6 class="text-center text-danger">As the Administrator of this Recruitment Platform, you have to be careful and consistent with all your activities and operations on this site. You can Add/Remove applicant(s), View Applications, Create Jobs and Generate Reports. Please note, there is no direct communication module to Applicants EXCEPT a direct Email System (which is not integrated into this site yet, until Hosting Service is Paid for and implemented). Refer to System Overview Tutorial on Help Menu of the Home page. Please contact the Web Developer for any  assistance you might need.</h6>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <!-- POST PANEL - DEVOTIONALS STARTS HERE!
================================================== -->
        
    <div class="container-fluid bg-success">
        <div class="row">
        <div class="col-xs-3 col-sm-3 col-md=3">
            <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5><p align="center"><strong class="text-danger">ADMIN DASHBOARD</strong></p></h5>
                    </div>
                <div class="panel-body" style="background-color:#5bc0de;">
                    <p align="center"><img src="images/logo.png" class="img-square img-responsive" style="border: 2px solid #ddd" alt="infosys logo" height="900" width="300"/></p>
                    
                    <h6><p><span class=" btn btn-danger glyphicon glyphicon-log-in" ></span>&nbsp;<a href="../managejobs/" style="color:#ffffff;"><strong>Manage Jobs</strong></a></p></h6>
                    
                    <h6><p><span class=" btn btn-danger glyphicon glyphicon-log-in" ></span>&nbsp;<a href="../registrations/" style="color:#ffffff;"><strong>Registrations</strong></a></p></h6>
                    
                    <h6><p><span class=" btn btn-danger glyphicon glyphicon-log-in" ></span>&nbsp;<a href="../manageapplications/" style="color:#ffffff;"><strong>Manage Applications</strong></a></p></h6>
                    
                    <!-- <h6><p><span class=" btn btn-danger glyphicon glyphicon-log-in" ></span>&nbsp;<a href="../evaluateapplicants/" style="color:#ffffff;"><strong>Evaluate Applicants</strong></a></p></h6> -->
                    
                    <h6><p><span class=" btn btn-danger glyphicon glyphicon-log-in" ></span>&nbsp;<a href="../managesystemoverview/" style="color:#ffffff;"><strong>System Overview</strong></a></p></h6>
                    
                    <h6><p><span class=" btn btn-danger glyphicon glyphicon-log-in" ></span>&nbsp;<a href="../managecommentsandcontacts/" style="color:#ffffff;"><strong>Comments and Contacts</strong></a></p></h6>
                   
                    <form class="form" method="post" action="">
                    <input type="submit" name="logout_btn" class="btn btn-lg btn-danger" value="LOGOUT" alt="Click here to Logout" />
                    </form>
                    <!--<h6><p><span name="logout_btn" class=" btn btn-danger glyphicon glyphicon-log-in" ></span>&nbsp;<a href="" style="color:#ffffff;"><strong>Logout</strong></a></p></h6>         -->
                        
                </div>
            </div>
        </div>
            
        <div class="col-xs-9 col-sm-9 col-md=9">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h5><p align="center"><strong class="text-danger">INFOSYS RECRUITMENT PLATFORM</strong></p></h5>
                    </div>
                    <div class="panel-body" style="background-color:#5bc0de;">
                    <p>&nbsp;</p>
                    <p></p>
                    <div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<!-- SLIDER AREA
	================================================== -->
	<div id="da-slider" class="da-slider">
		<!--Slide 1-->
		<div class="da-slide">
			<h2> OUR VISION </h2>
			<p>
				<b>Changing lives using cutting edge training methodology while focusing on excellent delivery.</b>
				
			</p>
			<a href="../../about.html" class="da-link" style="width:202px;">Read More</a>
			<div class="da-img">
		
			</div>
		</div>
		<!--Slide 2-->
		<div class="da-slide">
			<h2>OUR MISSION</h2>
			<p>
			<b>Providing tools to enhance ICT learning while shaping young minds for Global opportunities.</b>
			
			</p>
			<a href="../../about.html" class="da-link" style="width:192px;">Read More</a>
			<div class="da-img">
				
			</div>
		</div>
		<!--Slide 3-->
		<div class="da-slide">
			<h2> OUR CORE VALUES </h2>
			<p>
				 We uphold the right Integrity, Quality delivery, Personal development, Team spirit, Possibilities.
				 
			</p>
			<a href="../../about.html" class="da-link" style="width:230px;">Read More</a>
			<div class="da-img">
				
			</div>
		<!--Slide 4
		<div class="da-slide">
			<h2> LEADERSHIP </h2>
			<p>
				
			</p>
			<a href="#" class="da-link" style="width:230px;">ENGAGE US</a>
			<div class="da-img">
				<img src="http://placehold.it/238x420&text=Silhouette+here" alt="">
			</div>	
			-->
		</div>
		<nav class="da-arrows">
		<span class="da-arrows-prev"></span>
		<span class="da-arrows-next"></span>
		</nav>
	</div>
</div>    
                    
                    </div>
                        
           

            
             
<?php

    if(isset($_POST['logout_btn'])){
         ///This is a logout query, it unsets of destroy the session///
            unset($_SESSION['admin']);
                header("location: ../../index.php");
                exit;
            
            /// Session destroy ends here////
    }

   
?>

    
                    </div>
                </div>
            </div>
        <!--<div class="row">
        <div class="col-xs-2 col-sm-2 col-md=2">-->
            
       </div>     
    
    
  <!-- POST PANEL - DEVOTIONALS ENDS HERE!
================================================== -->


        
    </body>
    
    <footer>
                        
                <!--BORROWED FOOTER CODE BEGINS HERE-->
 <!-- FOOTER
================================================== -->
<div id="wrapfooter">
	<div class="grid">
		<div class="row" id="footer">
			<!-- to top button  -->
			<p class="back-top floatright">
				<a href="#top"><span></span></a>
			</p>
			<!-- 1st column -->
			<div class="c3">
				<img src="images/logo-footer.png" style="padding-top: 70px;" alt="">
			</div>
			<!-- 2nd column -->
			<div class="c3">
				<h2 class="title"><i class="icon-twitter"></i> Follow us</h2>
				<hr class="footerstress">
				<div id="ticker" class="query">
				</div>
			</div>
			<!-- 3rd column -->
			<div class="c3">
				<h2 class="title"><i class="icon-envelope-alt"></i>Head Office</h2>
				<hr class="footerstress">
				<dl>
					<dt>34, Curtis Adeniyi Jones Close, Off Gbajumo Street, Adeniyi Jones, Surulere, Lagos, Nigeria</dt>
					<dd><span>Telephone:</span>+234 703 948 5184</dd>
					<dd>E-mail: <a href="more.html">info@infosysitacademy.com</a></dd>
				</dl>
				<ul class="social-links" style="margin-top:15px;">
					<li class="twitter-link smallrightmargin">
					<a href="#" class="twitter has-tip" target="_blank" title="Follow Us on Twitter">Twitter</a>
					</li>
					<li class="facebook-link smallrightmargin">
					<a href="#" class="facebook has-tip" target="_blank" title="Join us on Facebook">Facebook</a>
					</li>
					<li class="google-link smallrightmargin">
					<a href="#" class="google has-tip" title="Google +" target="_blank">Google</a>
					</li>
					<li class="linkedin-link smallrightmargin">
					<a href="#" class="linkedin has-tip" title="Linkedin" target="_blank">Linkedin</a>
					</li>
					<li class="pinterest-link smallrightmargin">
					<a href="#" class="pinterest has-tip" title="Pinterest" target="_blank">Pinterest</a>
					</li>
				</ul>
			</div>
			<!-- 4th column -->
			<div class="c3">
				<h2 class="title"><i class="icon-link"></i> Links</h2>
				<hr class="footerstress">
				<ul>
					<li>Missions</li>
					<li>Profile</li>
					<li>Value Proposition</li>
					<li>Core Values</li>
					<li>Studentpreneur</li>
					<li>Testimonies</li>
					<li>Contact</li>
					<li>Movere</li>
					<li>Gallery</li>
					<li>Portfolio</li>
				</ul>
			</div>
			<!-- end 4th column -->
		</div>
	</div>
</div>
<!-- copyright area -->
<div class="copyright">
	<div class="grid">
		<div class="row">
			<div class="c6">
				 Infosys Digital Solution Limited &copy; <?php echo "{$date}"; ?>. All Rights Reserved.
			</div>
			<div class="c6">
				<span class="right">
				Online Job Recruitment System &copy; Designed by Christian Akpan </span>
			</div>
		</div>
	</div>
</div>


<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="footer/js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="footer/js/common.js"></script>

<!-- slider -->
<script src="footer/js/jquery.cslider.js"></script>

<!-- cycle -->
<script src="footer/js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="footer/js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- twitter -->
<script src="footer/js/jquery.tweet.js"></script>

<!-- Call Showcase - change 4 from min:4 and max:4 to the number of items you want visible -->
<script type="text/javascript">
$(window).load(function(){			
			$('#recent-projects').carouFredSel({
				responsive: true,
				width: '100%',
				auto: true,
				circular	: true,
				infinite	: false,
				prev : {
					button		: "#car_prev",
					key			: "left",
						},
				next : {
					button		: "#car_next",
					key			: "right",
							},
				swipe: {
					onMouse: true,
					onTouch: true
					},
				scroll : 2000,
				items: {
					visible: {
						min: 4,
						max: 4
					}
				}
			});
		});	
</script>

<!-- Call opacity on hover images from carousel-->
<script type="text/javascript">
$(document).ready(function(){
    $("img.imgOpa").hover(function() {
      $(this).stop().animate({opacity: "0.6"}, 'slow');
    },
    function() {
      $(this).stop().animate({opacity: "1.0"}, 'slow');
    });
  });
</script>

    <!--BORROWED FOOTER CODES ENDS HERE-->
                        
      
    </footer>
</html>