<?php

//ob_start();
//require_once("includes/app_session.php");

?>
<?php
session_start();
// The session variable carried from the signup table is stored in the check variable

$check = $_SESSION["session_check"];

?>

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
					<li class="last"><a href="../timeline.html">Job Policies</a></li>
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


echo "<form style='color:black; background-color:white;width: 40%; padding-left: 20px;padding-right: 20px;padding-top: 40px;padding-bottom: 40px; margin-left: auto; margin-right: auto; border: 4px solid #dcd;text-emphasis: bold; .hr{background-color:red; }'> ";

echo "<p align='center' style='color:red;'> <strong> NOTICE </strong></p>" ;
echo "<p align='center' style='color:green;'>Your Application Submission was Successful. Thank you! </p>" ;

// get results from database

$result3 = "SELECT * FROM app_passports WHERE sess_check = '{$check}' ";
            $run_query = mysqli_query($connection, $result3);
    
            if(mysqli_num_rows($run_query) == 1){
            while($result3 = mysqli_fetch_assoc($run_query)){
             
                
                echo "<p align='justify' style='color:black;'><tr>";
                echo '<b align="center"> &nbsp; &nbsp; &nbsp; &nbsp;Passport</b>'. '<br />';
                echo '&nbsp;'.'&nbsp;'.'<td>'.'<img src= '. $result3['passport'] . ' width="110" height="110"/>' .'</td>' . '<br /><br />';
            
            if($result3 == true){
                $result = "SELECT * FROM jobs WHERE sess_check = '{$check}' ";
                $run_query = mysqli_query($connection, $result);

                if(mysqli_num_rows($run_query) == 1){
                    while($result = mysqli_fetch_assoc($run_query)){

                        echo '<b>Job Category:</b>'.'&nbsp;'.'&nbsp;'.'<td>' . $result['jobcategory'] . '</td>' . '<br /><br />';
                        echo '<b>Job Position:</b>'.'&nbsp;'.'&nbsp;'. '<td>' . $result['desiredjobposition'] . '</td>'. '<br /><br />';

        
      
        if($result == true){
            $result1 = "SELECT * FROM app_biodataform WHERE sess_check = '{$check}' ";
            $run_query = mysqli_query($connection, $result1);
    
            if(mysqli_num_rows($run_query) == 1){
            while($result1 = mysqli_fetch_assoc($run_query)){
        
                echo '<b>Applicant Name:</b>'.'&nbsp;'.'&nbsp;'.'<td>' . $result1['firstname'] .'&nbsp;'. $result1['lastname'] .'</td>'. '<br /><br />';
                echo '<b>Applicant Contact:</b>'.'&nbsp;'.'&nbsp;'.'<td>' . $result1['phone'] .'</td>'. '<br /><br />';
                echo '<b>Applicant Email Address:</b>'.'&nbsp;'.'&nbsp;'.'<td>' . $result1['email'] .'</td>'. '<br /><br />';
                //echo '<b>Last Name:</b>'.'&nbsp;'.'&nbsp;'. '<td>' . $result1['lastname'] . '</td>'. '<br /><br />';

     
        if($result1 == true){
            $result2 = "SELECT * FROM qualifications WHERE sess_check = '{$check}' ";
            $run_query = mysqli_query($connection, $result2);
    
            if(mysqli_num_rows($run_query) == 1){
            while($result2 = mysqli_fetch_assoc($run_query)){
            
                echo '<b>Qualification:</b>'.'&nbsp;'.'&nbsp;'.'<td>' . $result2['highestqualification'] .'&nbsp;' . $result2['discipline'].'</td>'. '<br /><br />';
               // echo '<b>Discipline:</b>'.'&nbsp;'.'&nbsp;'.'<td>' . $result2['discipline'] . '</td>';

      
       
            
        
                            }

                        }
                    }
                }
            }    
        }
    }
}
}
}
}

//INNER JOIN app_biodataform 
//INNER JOIN qualifications 
//INNER JOIN app_passports
//ON jobs.id = app_biodataform.id = qualifications.id = app_passports.id  WHERE sess_check = $check LIMIT 1")

//"SELECT * FROM apply WHERE email='".$_SESSION['email']."'";
  
//$result = mysqli_query($connection,"SELECT firstname, lastname FROM app_biodataform")
/*$result = mysqli_query($connection,"SELECT * FROM qualifications")
$result = mysqli_query($connection,"SELECT * FROM app_certificates")
$result = mysqli_query($connection,"SELECT * FROM app_cvs")
$result = mysqli_query($connection,"SELECT * FROM career_workexperience")
$result = mysqli_query($connection,"SELECT * FROM careerobjective")
$result = mysqli_query($connection,"SELECT * FROM personalobjective")
$result = mysqli_query($connection,"SELECT * FROM app_referee")
$result = mysqli_query($connection,"SELECT * FROM app_passport")
*/




// display data in table

    
//echo "<table border='1' cellpadding='20' > ";


//echo "<tr> <th><b>Job Category</th> <th><b>Desired Job Position</th><th><b>First Name</th> <th><b>Last Name</th><th><b>Highest Qualification</th> <th><b>Discipline</th></tr>";


/*// loop through results of database query, displaying them in the table
$count=mysqli_num_rows($result);
if($count>0){
	
	$row=array();
	$arr_row[]=array();
	while($row = mysqli_fetch_array( $result )) {
		
		$arr_row[]=$row;
		$_SESSION['app']=$arr_row;
		
		
}

*/
//while($row = mysqli_fetch_array($result)){
    



// echo out the contents of each row into a table


echo '<div><hr><hr></div>';
echo "</tr></p>";
echo "<p align='center' style='color:red;'>Please click on <b>'Print Form'</b> to print this form as evidence of your Application submission.";


                  

// close table>

echo "</table>";


?>
<hr><hr>
<h6><p align="center"><a href="../index.php">Home</a>&nbsp; | <a href="../applicants/printfilledform.php"><strong>Print Form</strong></a></p></h6>
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