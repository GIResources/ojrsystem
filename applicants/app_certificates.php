<?php

//ob_start();
//error_reporting();
session_start();
// The session variable carried from the signup table is stored in the check variable

$check = $_SESSION["session_check"];

?>

<?php

//Connecting to ojrs database and checking seeion///

//require_once("includes/app_session.php");
require_once("includes/dbcon.php");
?>

<?php
    $date = date('Y');
?>


<?php

    if(isset($_POST['certificate_submit_btn'])){
        
        ////Auto-generating Serial Numner (sn) for the Job Creation///
            
            $query = " SELECT * FROM app_certificates ";
            $run_query = mysqli_query($connection, $query);
                
            $total_apps = mysqli_num_rows($run_query);
            $increase_num = $total_apps + 1;
            $acronym = "INFOSYSAPP ";
            $job_id = $acronym . $increase_num;
        
         // Testing and formating Applicant's Certificates for Insertion the Database and Upload to different certificate folders ////
        
                    if (!isset($_FILES['highestcert']['tmp_name'])) {
                    echo "";
                    }else{
                    $file=$_FILES['highestcert']['tmp_name'];
                    $image= addslashes(file_get_contents($_FILES['highestcert']['tmp_name']));
                    $image_name= addslashes($_FILES['highestcert']['name']);
                    if ($image==FALSE) {
                            //header("location: image.php?msg=You have entered an invalid file!");
                            echo "You have entered an invalid file!";

                        }else{

                            move_uploaded_file($_FILES["highestcert"]["tmp_name"],"app_certificates_highestcert/" . $_FILES["highestcert"]["name"]);

                            $highcertificate="app_certificates_highestcert/" . $_FILES["highestcert"]["name"];
                    }
                    
                    if (!isset($_FILES['sscecert']['tmp_name'])) {
                    echo "";
                    }else{
                    $file=$_FILES['sscecert']['tmp_name'];
                    $image= addslashes(file_get_contents($_FILES['sscecert']['tmp_name']));
                    $image_name= addslashes($_FILES['sscecert']['name']);
                    if ($image==FALSE) {
                            //header("location: image.php?msg=You have entered an invalid file!");
                            echo "You have entered an invalid file!";

                        }else{

                            move_uploaded_file($_FILES["sscecert"]["tmp_name"],"app_certificates_sscecert/" . $_FILES["sscecert"]["name"]);

                            $ssce="app_certificates_sscecert/" . $_FILES["sscecert"]["name"];
                    }
                        
                    if (!isset($_FILES['fslccert']['tmp_name'])) {
                    echo "";
                    }else{
                    $file=$_FILES['fslccert']['tmp_name'];
                    $image= addslashes(file_get_contents($_FILES['fslccert']['tmp_name']));
                    $image_name= addslashes($_FILES['fslccert']['name']);
                    if ($image==FALSE) {
                            //header("location: image.php?msg=You have entered an invalid file!");
                            echo "You have entered an invalid file!";

                        }else{

                            move_uploaded_file($_FILES["fslccert"]["tmp_name"],"app_certificates_fslccert/" . $_FILES["fslccert"]["name"]);

                            $fslc="app_certificates_fslccert/" . $_FILES["fslccert"]["name"];
                    
                        
        /// Testing and formating Applicant's Passport ends here...! /////
                    
               $query = "INSERT INTO app_certificates(job_id, highestcert, ssce, fslc, sess_check) VALUES('{$job_id}','{$highcertificate}','{$ssce}','{$fslc}','{$check}')";
                        
                    $run_query = mysqli_query($connection, $query);

                        if($run_query == true){
                            echo "Congratulation! Your Certificate Uploads and Submission was Successful!";
                            }else{
                                echo "Ooops! Sorry, Upload and Submission Attempt Failed. Try again!";
                            }
            header("Location: feedback4.php");
                        }
                
    
                }
        }

    }
}
        
    
    
   
?>

<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width"/>
        <title>Infosys Application Form</title>
         <!---- Linking to CSS ---->
        <link type="text/css" rel="stylesheet" href="includes/body.css" />
        <link type="text/css" rel="stylesheet" href="includes/form.css" />
         <!-- connecting to bootstrap ---->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
                <!-- connecting to jquery ---->
        <script type="text/javascript" src="jquery/jquery-1.11.3.min.js"></script>
                <!-- connecting to javascript ---->
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script src="js/school.js"></script>

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

       <div class="container-fluid bg-success">
            <div class="row">
                               
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2 class="text-center text-info"><strong>ONLINE APPLICATION PLATFORM</strong></h2>
                            
                        </div>
                        </div>
                </div>
            </div>
    </div>

    <!-- POST PANEL - STARTS HERE!
================================================== -->
        
    <div class="container-fluid bg-success">
        <div class="row">
        <div class="col-xs-3 col-sm-3 col-md=3">
        
        </div>
            
        <div class="col-xs-6 col-sm-6 col-md=6">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4><p align="center"><strong class="text-info">EDUCATIONAL CERTIFICATION SECTION</strong></p></h4>
                    </div>
                    <div class="panel-body" align="center"> 
        <form id="form" method="POST" action="" enctype="multipart/form-data" style="padding-left: 20px; padding-right:20px; color: blue; width:70%; ">
                    <p><b>Upload Your Highest Qualification</b></p>
                    <input type="file" class="form-control" name="highestcert" required /><br />
            
                    <p><b>Upload Your WAEC/NECO/GCE/SSCE</b></p>
                    <input type="file" name="sscecert" class="form-control" required /><br /><br />
                    
                    <p><b>Upload Your FSLC</b></p>            
                    <input type="file" class="form-control" name="fslccert" required /><br />
                    
                    <p align="center"><input type="submit" name="certificate_submit_btn" value="NEXT" class="btn btn-info" /></p>
            
            </form>
                        
                    &nbsp;&nbsp; <a href="../applicants/app_viewjobs.php"> <strong>View Jobs</strong></a> &nbsp;&nbsp; <a href=".././index.php"><strong>Home</strong></a>
                    </div>
                </div>
            </div>
            
        <div class="col-xs-3 col-sm-3 col-md=3">  
        </div>

        </div>     
    
    </div>


    </body>
    
<footer>
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