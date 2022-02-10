<?php

/*

EDIT.PHP

Allows user to edit specific entry in database

*/



// creates the edit record form

// since this form is used multiple times in this file, I have made it a function that is easily reusable

function renderForm($id, $job_sn, $jobcategory, $jobtitle, $jobcode, $qualification, $discipline$yearsofexperience, $agelimit, $preferredgender, $publicationdate,$expiringdate, $error)

{

?>

<!DOCTYPE HTML>
<html>
<head>

<meta name="viewport" content="width=device-width"/>
<title>Update Job Table</title>
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
<form style="width: 50%; padding: 10px; margin-left: auto; margin-right: auto; border: 4px solid #dcd; background-color: #9bccd8; color:red;">
<?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>
<input type="hidden" name="job_sn" value="<?php echo $job_sn; ?>"/>

<div>

<p><strong>ID:</strong> <?php echo $id; ?></p>

    

<strong>Job Serial No: *</strong> <input type="text" name="job_sn" value="<?php echo $job_sn; ?>" /><br/>
    
<strong>Job Title: *</strong> <input type="text" name="jobtitle" value="<?php echo $jobtitle; ?>" /><br/>

<strong>Job Code: *</strong> <input type="text" name="jobcode" value="<?php echo $jobcode; ?>" /><br/>

<strong>Qualification: *</strong> <input type="text" name="qualification" value="<?php echo $qualification ?>" /><br/>

<strong>Years of Experience: *</strong> <input type="text" name="yearsofexperience" value="<?php echo $yearsofexperience; ?>" /><br/>

<strong>Age Limit: *</strong> <input type="text" name="agelimit" value="<?php echo $agelimit; ?>" /><br/>
<strong>Preferred Gender: *</strong> <input type="text" name="preferredgender" value="<?php echo $preferredgender; ?>" /><br/>

<strong>Publication Date: *</strong> <input type="text" name="publicationdate" value="<?php echo $publicationdate; ?>" /><br/>

<strong>Expiring Date: *</strong> <input type="text" name="expiringdate" value="<?php echo $expiringdate; ?>" /><br/>




    <p align="center"><b>Fields Mark with (*) are Required!</b></p>

<p align="center"><input type="submit" class="button" name="submit" value="Publish Edited Job"></p>

</div>

</form>

</body>

</html>

<?php

}







// connect to the database

include('includes/dbcon.php');



// check if the form has been submitted. If it has, process the form and save it to the database

if (isset($_POST['submit']))

{

// confirm that the 'id' value is a valid integer before getting the form data

if (isset($_POST['id']) || ($_POST['job_sn']))

{

// get form data, making sure it is valid


    
$id = $_POST['id'];
$job_sn = $_POST['job_sn'];

$jobtitle = $_POST['jobtitle'];

$jobcode = $_POST['jobcode'];

$qualification = $_POST['qualification'];

$yearsofexperience = $_POST['yearsofexperience'];

$agelimit = $_POST['agelimit'];

$preferredgender = $_POST['preferredgender'];

$publicationdate = $_POST['publicationdate'];

$expiringdate = $_POST['expiringdate'];



// check that firstname/lastname fields are both filled in

if ($jobtitle ==''|| $jobcode ==''|| $qualification ==''||$yearsofexperience ==''||$agelimit ==''|| $preferredgender ==''|| $publicationdate ==''|| $expiringdate =='')
{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($jobtitle, $jobcode,$qualification,$yearsofexperience, $agelimit,$preferredgender,$publicationdate, $expiringdate, $error);


}

else

{

// save the data to the database
$query = " UPDATE user_registration SET 
                            reg_id = '{$m_reg_id}', 
                            username = '{$m_username}',
                            password = '{$m_password}',
                            firstname = '{$m_fname}',
                            lastname = '{$m_lname}',
                            gender = '{$m_gender}',
                            reg_date = '{$date}'  WHERE id = '{$_SESSION['user']}' ";
            
            $run_query = mysqli_query($connection, $query);
            

$query = "UPDATE jobtable SET jobtitle = '$jobtitle',jobcode = '$jobcode',qualification = '$qualification', yearsofexperience = '$yearsofexperience',agelimit = '$agelimit',preferredgender = '$preferredgender',publicationdate = '$publicationdate',expiringdate = '$expiringdate' WHERE id='$id' AND job_sn='$job_sn' ";

    $run_query = mysqli_query($connection, $query);
    //or die(mysql_error());



// once saved, redirect back to the view page

header("Location: viewjobs.php");

}

}

else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

else

// if the form hasn't been submitted, get the data from the db and display the form

{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

$result = mysqli_query($connection, "SELECT * FROM jobtable WHERE id=$id")

or die(mysqli_error());

$row = mysqli_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{


// get data from db

$job_sn = $row['job_sn'];
    
$jobtitle = $row['jobtitle'];

$jobcode = $row['jobcode'];

$qualification = $row['qualification'];

$yearsofexperience = $row['yearsofexperience'];

$agelimit = $row['agelimit'];

$preferredgender = $row['preferredgender'];


$publicationdate = $row['publicationdate'];

$expiringdate = $row['expiringdate'];


// show form

renderForm($id, $job_sn, $jobtitle, $jobcode,$qualification,$yearsofexperience, $agelimit,$preferredgender,$publicationdate, $expiringdate, '');

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}

?>
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
