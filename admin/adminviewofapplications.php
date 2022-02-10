


<!DOCTYPE HTML>
<html>
<head>

<meta name="viewport" content="width=device-width"/>
<title>Applicant Form Details</title>
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
				<li class="active"><a href="../index.php"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
				
				<li><a href="#">Portfolio</a>
				<ul style="display: none;">
					<li><a href="../about.html">Infosys Services</a></li>
                    <li><a href="../testimonials.html">Testimonials</a></li>
					<li><a href="../gallery.html">Gallery</a></li>
				</ul>
				</li>
				<li><a href="#">Vacancies</a>
				<ul style="display: none;">					
					<li class="last"><a href="../timeline.html">Requirements</a></li>
					<li class="last"><a href="app_viewjobs.php">View Jobs</a></li>
					<li class="last"><a href="index.php">Apply Now</a></li>
					<li class="last"><a href="signup/">Sign-up</a></li>
				</ul>
				</li>

				<li><a href="../admin/">Admin</a>
				</li>
				<li><a href="#">Help</a>
				<ul>
					<li><a href="../faq.html">F.A.Q.s</a></li>
					<li><a href="../appGuide.html">Application Guide</a></li>
					
				</ul>
				</li>				
				<li class="last"><a href="../contact.php">Contact</a></li> 
				
			</ul>
			</nav>
		</div>
	</div>
</div>
    
</div>

<body><form style="width: 90%; padding: 10px; margin-left: auto; margin-right: auto; border: 4px solid #dcd;">
    <h3><p align="center" style="color:white;">APPLICANT'S JOB APLICATION FORM DETAILS</p></h3>
<hr>
<h6 style="color:white;">Applicants are to come to the interview with this form. Kindly contacts the Administrator using the contact menu for any  assistance you might need.</h6>
<hr> <br />
    </form>

<?php
/*
VIEW.PHP
Displays all data from 'job table
*/
// connect to the database

include('includes/dbcon.php');
//include('includes/app_session.php');

// get results from database

$query = "SELECT * jobs.job_id, jobs.jobcategory, jobs.desiredjobposition, app_biodataform.firstname, app_biodataform.lastname, app_biodataform.phone, app_biodataform.email, qualifications.highestqualication, qualifications.discipline, career_workexperience.lastjobposition, app_passport.passport
FROM jobs, app_biodataform, qualifications, career_workexperience, app_passport WHERE id != NUL";
//or die("Awaiting Resources...\n" . mysqli_error());
    
$row = mysqli_query($connection, $query);

    //if(mysqli_num_rows($run_query)== true){
       // while($result = mysqli_fetch_assoc($run_query))
// display data in table

echo "<form style='color:black; background-color:white;width: 90%; padding: 40px; margin-left: auto; margin-right: auto; border: 4px solid #dcd;text-emphasis: bold; .hr{background-color:red; }'> ";
    
echo "<table border='1' cellpadding='20' > ";

echo "<tr> <th>Job_ID</th> <th>Job Category</th><th>Job Position</th><th>Full Name</th><th>Phone</th><th>Email</th><th>Qualification</th><th>Last Job Position</th><th>Passport</th><th>Delete Application</th></tr>";

while($row = mysqli_fetch_assoc($row)){
// echo out the contents of each row into a table
        echo "<p align='justify' style='color:black;'><tr>";
                echo '<td>' . $row['job_id'] . '</td>' ;
                echo '<td>' . $row['jobcategory'] . '</td>' ;
                echo '<td>' . $row['desiredjobposition'] . '</td>';
                        
                echo '<td>' . $row['firstname'] .'&nbsp;'. $row['lastname'] .'</td>';
                echo '<td>' . $row['phone'] . '</td>';
                echo '<td>' . $row['email'] .'</td>';
                
                //echo '<b>Last Name:</b>'.'&nbsp;'.'&nbsp;'. '<td>' . $result1['lastname'] . '</td>'. '<br /><br />';
               
                echo '<td>' . $row['highestqualification'] .'&nbsp;' . $row['discipline'].'</td>';
                        
                // echo '<b>Discipline:</b>'.'&nbsp;'.'&nbsp;'.'<td>' . $result2['discipline'] . '</td>';
            
                //echo '<td>' . $result3['lastempname'] . '</td>';
                echo '<td>' . $row['lastjobposition'] . '</td>';          
                echo "<td>";?><img src= "<?php echo $row['passport'];?>" width="70" height="70"><?php echo "</td>";
       
                echo '<td><a href="deleteapplications?id=' . $row['id'] . '">Delete</a></td>';
                

        echo '<div><hr><hr></div>';
        echo "</tr></p>";


}

    
    
    
// close table>

echo "</table>";


?>
<hr><hr>
<h6><p align="center"><a href="../index.php"><strong>Home</strong></a>&nbsp; | <a href="../applicants/index.php"><strong>Print Form</strong></a></p></h6>
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