<!DOCTYPE HTML>
<html>
<head>

<meta name="viewport" content="width=device-width"/>
<title>Registered Admin Search</title>
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
				<!--<li><a href="#">Vacancies</a>
				<ul style="display: none;">					
					<li class="last"><a href="../../timeline.html">Requirements</a></li>
					<li class="last"><a href="../../applicants/app_viewjobs.php">View Jobs</a></li>
					<li class="last"><a href="../../applicants/index.php">Apply Now</a></li>
					<li class="last"><a href="../../applicants/signup/">Sign-up</a></li>
				</ul>
				</li>
                -->
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
    
<form action="" method="POST" style="width: 90%; padding: 10px; margin-left: auto; margin-right: auto; border: 4px solid #dcd; alignment:center;">

<p align ="center"><a href=".././">HOME</a>&nbsp;&nbsp;||&nbsp;&nbsp;<a href=".././registrations/">BACK</a></p>

<p align="center" style="padding-left: 10px; padding-right:10px; color: blue; text:center; "><form action="" method="POST" >
<p align="center"><input type="text" name="query1" style="width:40%;"placeholder=" &nbsp;&nbsp;Search For Registered Administrators Here and Press Enter Key! " /> <p align="center"><input type="submit" class="button" style="font-size:20px;padding-left: 10px; padding-right:10px; width:10%;" value="SEARCH"  /></p> <br />
</form>
<!----- Internal Job Search codes stop here ------->



</form>




<?php

require_once('includes/dbcon.php');


if (isset($_POST['POST'])) { 

    $admin_firstname=($_POST['firstname']);
    $admin_lastname=($_POST['lastname']);


$admin_firstname = mysql_real_escape_string(htmlspecialchars($_POST['firstname']));

$admin_lastname = mysql_real_escape_string(htmlspecialchars($_POST['lastname']));

}
   @ $query = $_POST['query1']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($connection, $query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($connection, "SELECT * FROM register_admin
            WHERE (`firstname` LIKE '%".$query."%') OR (`lastname` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
                
				echo "<table border='1' cellpadding='10' bordercolor='green' bgcolor='white' style='width: 90%; padding: 10px; margin-left: auto; margin-right: auto; border: 4px solid #dcd;' >";
                
				echo "<tr> <th>ID</th> <th>Admin Serial No</th> <th>Title</th> <th>First Name</th><th>Last Name</th><th>Phone Contact</th><th>Email Address</th> <th>Gender</th><th>Registration Date</th> </tr>";
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			 echo "<tr>";
			 // . $row['id'] . '</td>';
                echo '<td>'.$results['id'].'</td>';
				echo '<td>'.$results['sn'].'</td>';
				echo '<td>'.$results['title'].'</td>';
				echo '<td>'.$results['firstname'].'</td>';
				echo '<td>'.$results['lastname'].'</td>';
				echo '<td>'.$results['phone'].'</td>';
				echo '<td>'.$results['email'].'</td>';
				echo '<td>'.$results['gender'].'</td>';
				echo '<td>'.$results['regdate'].'</td>';
				


				
				echo "</tr>";
                
				echo "</table>";
				
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        //echo "Minimum length is ".$min_length;
	//}
    }
?>


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
</body>
</html>