<?php
$date = date('Y');
?>

<?php

//Connecting to gospeltruth database///

require_once("includes/dbcon.php");
?>


<?php

    if(isset($_POST['contact_btn'])){
        $contact_name = $_POST['name'];
        $contact_email = $_POST['email'];
        $contact_message = $_POST['comment'];
        
                
        ////Checking for empty fields here!//////
        
        if(empty($contact_name && $contact_email && $contact_message)){
            echo "All fields are required!";
        }else{
       
            ////Auto-generating Job Serial Numner (sn) for the Job Creation///
            
            $query = " SELECT * FROM contactus ";
            $run_query = mysqli_query($connection, $query);
                
            $total_contacts = mysqli_num_rows($run_query);
            $increase_num = $total_contacts + 1;
            $contact_id = $increase_num;
            
               $query = "INSERT INTO contactus(contact_id, name, email, message) VALUES('{$contact_id}','{$contact_name}','{$contact_email}','{$contact_message}')";
                        
                    $run_query = mysqli_query($connection, $query);

                        if($run_query == true){
                            echo "Thank you! We have received your message!";
                            }else{
                                echo "Ooops! Sorry, unexpected error. Please try again later!";
                            }
                        }
                
    
            
        
    }
    
   
?>

<!DOCTYPE HTML>
<html>
<head><meta name="viewport" content="width=device-width"/>
<title>Infosys Digital Solution</title>
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

<div class="grid">
	<div class="row space-bot">
			<!--Logo-->
		<div class="c4">
			<a href="index.php">
			<img src="images/logo.png" class="logo" alt="" class="logopic">
			</a>
		</div>
		<!--Menu-->
		<div class="c8">
			<nav id="topNav">
			<ul id="responsivemenu">
				<li class="active"><a href="index.php"><i class="icon-home homeicon"></i><span class="showmobile">Home</span></a></li>
				
				<li><a href="#">Portfolio</a>
				<ul style="display: none;">
					<li><a href="about.html">Infosys Services</a></li>
                    <li><a href="testimonials.html">Testimonials</a></li>
					<li><a href="gallery.html">Gallery</a></li>
				</ul>
				</li>
				<li><a href="#">Vacancies</a>
				<ul style="display: none;">					
					<li class="last"><a href="timeline.html">Job Policies</a></li>
					<li class="last"><a href="applicants/app_viewjobs.php">View Jobs</a></li>
					<li class="last"><a href="applicants/">Apply Now</a></li>
					<li class="last"><a href="applicants/signup/">Sign-up</a></li>
				</ul>
				</li>

				<li><a href="admin/">Admin</a>
				</li>
				<li><a href="#">Help</a>
				<ul>
					<li><a href="faq.html">F.A.Q.s</a></li>
					<li><a href="appGuide.html">Application Guide</a></li>
					
				</ul>
				</li>				
				<li class="last"><a href="contact.php">Contact</a></li>
				
			</ul>
			</nav>
		</div>
	</div>
</div>
<!-- HEADER
================================================== -->
<div class="undermenuarea">
	<div class="boxedshadow">
	</div>
	<div class="grid">
		<div class="row">
			<div class="c8">
				<h1 class="titlehead">Contact Us</h1>
			</div>
			<div class="c4">
				<h1 class="titlehead rightareaheader"><i class="icon-map-marker"></i> Call Us Now +234 703 948 5184</h1>
			</div>
		</div>
	</div>
</div>
<!-- CONTENT
================================================== -->
<div class="grid">
		<div class="shadowundertop"></div>
		<div class="row space-bot">
			<div class="c12">
				<iframe class="gmap" src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=disney+paris&amp;aq=&amp;sll=37.0625,-95.677068&amp;sspn=39.371738,86.572266&amp;ie=UTF8&amp;hq=disney&amp;hnear=Paris,+%C3%8Ele-de-France,+France&amp;t=m&amp;fll=48.881877,2.535095&amp;fspn=0.512051,1.352692&amp;st=103241701817924407489&amp;rq=1&amp;ev=zo&amp;split=1&amp;ll=49.027964,2.772675&amp;spn=0.315159,0.585022&amp;z=10&amp;iwloc=D&amp;output=embed">
				</iframe>
			</div>
		</div>

	
		<div class="row space-top">
			<!-- CONTACT FORM -->
			<div class="c8 space-top">
				<h1 class="maintitle">
				<span><i class="icon-envelope-alt"></i> Get in Touch</span>
				</h1>
				<div class="wrapcontact">
					<div class="done">
						<div class="alert-box success ctextarea">
							 Your message has been sent. Thank you! <a href="" class="close">x</a>
						</div>
					</div>
					<form method="post" action="" id="">
						<div class="form">
							<div class="c6 noleftmargin">
								<label>Name</label>
								<input type="text" name="name">
							</div>
							<div class="c6 noleftmargin">
								<label>E-mail address</label>
								<input type="text" name="email">
							</div>
							<label>Message</label>
							<textarea name="comment" class="ctextarea" rows="9"></textarea>
							<input type="submit" name="contact_btn" class="button" style="font-size:12px;" value="SUBMIT">
						</div>
					</form>
				</div>
			</div>
			<div class="c4 space-top">
				<h1 class="maintitle">
				<span><i class="icon-map-marker"></i> Locations</span>
				</h1>
				<p>
					<a class="link-2" href="more.html">Infosys Digital Solution</a>
				</p>
				<dl>
					<dt>Federal Science and Technical college (FSTC) Doma, Nasarawa State (NS), North-Central, Nigeria, West Africa.</dt>
					<dd><span>Telephone:</span>+234 703 948 5184</dd>
					<dd><span>FAX:</span>+234 703 948 5184</dd>
					<dd>E-mail: <a href="www.infosysitacademy.com">info@infosysitacademy.com</a></dd>
					<!-- I replace the anchor pointer (href) more.html with # -->
				</dl>
				<br/>
				
			</div>
		</div>
</div><!-- end grid -->

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
				<h2 class="title"><i class="icon-envelope-alt"></i> Head Office</h2>
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

</div>
<!-- JAVASCRIPTS
================================================== -->
<!-- all -->
<script src="js/modernizr-latest.js"></script>

<!-- menu & scroll to top -->
<script src="js/common.js"></script>

<!-- cycle -->
<script src="js/jquery.cycle.js"></script>

<!-- twitter -->
<script src="js/jquery.tweet.js"></script>

<!-- contact form -->
<script src="js/contact.js"></script>

</body>
</html>