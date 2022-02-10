<!DOCTYPE HTML>
<html>
<head>

<meta name="viewport" content="width=device-width"/>
<title>Infosys Comments</title>
<!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<link rel="stylesheet" type="text/css" href="css/icons.css"/>
<link rel="stylesheet" type="text/css" href="css/slider.css"/>
<link rel="stylesheet" type="text/css" href="css/skinblue.css"/><!-- change skin color -->
<link rel="stylesheet" type="text/css" href="css/responsive.css"/>
<link rel="stylesheet" type="text/css"  href="includes/body.css" /> <!---- Linking to External CSS ---->
<script src="js/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->


</head>
<body>

<!-- UNDER SLIDER - BLACK AREA
================================================== -->
<div class="">
	<div class="">
		<div class="">
			<div class="c12">
                <img src="images/roll4.PNG">
			</div>
		</div>
	</div>
</div>   
<div class="boxedtheme">
<!-- TOP LOGO & MENU
================================================== -->
<div class="">
	<div class="row space-bot">
			<!--Logo-->
		<div class="c4">
			<a href="../index.php">
			<img src="images/logo.png" class="logo" alt="" class="logopic">
			</a>
		</div>
		<!--Menu-->
		<div class="c8">
			<nav id="topNav">
			<ul id="responsivemenu">
				<li class="active"><a href="../../index.php"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
				
				<li><a href="#">Portfolio</a>
				<ul style="display: none;">
					<li><a href="../../about.html">Infosys Services</a></li>
                    <li><a href="../../testimonials.html">Testimonials</a></li>
					<li><a href="../../gallery.html">Gallery</a></li>
				</ul>
				</li>
				<!---
                <li><a href="#">Vacancies</a>
				<ul style="display: none;">					
					<li class="last"><a href="../../timeline.html">Requirements</a></li>
					<li class="last"><a href="../managejobs/viewjobs.php">View Jobs</a></li>
					
				</ul>
				</li>
                ---->
				<li><a href="../../admin/">Admin</a>
				</li>
				<li><a href="#">Help</a>
				<ul>
					<li><a href="../../faq.html">F.A.Q.s</a></li>
					<li><a href="../../appGuide.html">Application Guide</a></li>
					
				</ul>
				</li>				
				<li class="last"><a href="../../contact.php">Contact</a></li>
				
			</ul>
			</nav>
		</div>
	</div>
</div>
    
</div>

<body>
<form style="width: 90%; padding: 10px; margin-left: auto; margin-right: auto; border: 4px solid #dcd;">
    <h4 style="color: blue;"><p align="center" style="color:white;">COMMENTS AND CONTACTS</p></h4>
<hr>
<h6 align="center" style="color:white;">The following comments and contacts reached us the Administators of the OJRS for one reason or the other on this recruitment website.</h6>
    <hr> <br /></form>                    

<?php

/*

VIEW.PHP

Displays all data from 'job table

*/



// connect to the database

include('includes/dbcon.php');



// get results from database

$result = mysqli_query($connection,"SELECT * FROM contactus")

or die(mysqli_error("Awaiting Resources"));



// display data in table

echo "<h5><p align='center' style='color:white';><b>View All</b> | <a href='../../index.php'><strong>Home</strong></a>&nbsp; | <a href='../managecommentsandcontacts/index.php'><strong>Manage Comments and Contacts!</strong></a></p></h5>";

echo "<form style='color:black; background-color:white; width: 90%; padding: 10px; margin-left: auto; margin-right: auto; border: 4px solid #dcd;text-emphasis: bold;'> ";

echo "<table border='2' cellpadding='20'>";


echo "<tr> <th>ID</th> <th>Comment Serial No</th><th>Name</th> <th>Email Address</th><th>Message</th><th>Comments Date and Time</th><th>Delete Comments</th></tr>";


// loop through results of database query, displaying them in the table

while($row = mysqli_fetch_array( $result )) {



// echo out the contents of each row into a table

echo "<tr>";

echo '<td>' . $row['id'] . '</td>';
echo '<td>' . $row['contact_id'] . '</td>';
echo '<td>' . $row['name'] . '</td>';
echo '<td>' . $row['email'] . '</td>';


echo '<td>' . $row['message'] . '</td>';
echo '<td>' . $row['commentdate'] . '</td>';

echo '<td><a href="deletecomments.php?id=' . $row['id'] . '">Delete</a></td>';
echo "</tr>";

}


// close table>

echo "</table>";

?>
    
<hr><hr>
<h5><p align="center"><a href="../../index.php"><strong>Home</strong></a>&nbsp; | <a href="../managecommentsandcontacts/index.php"><strong>Manage Comment and Contacts</strong></a></p></h5>
</form>
</body>
    
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
				 Infosys Digital Solution Limited &copy; 2018. All Rights Reserved.
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
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- slider -->
<script src="js/jquery.cslider.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- carousel items -->
<script src="js/jquery.carouFredSel-6.0.3-packed.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

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

</html>