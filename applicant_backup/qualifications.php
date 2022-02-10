<?php

//ob_start();
//error_reporting();
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

    if(isset($_POST['qualification_submit_btn'])){
       
        $qualification = $_POST['qualification'];
        $discipline = $_POST['discipline'];
        $schcategory = $_POST['schcategory'];
        $institution = $_POST['institution'];
        $graduationyear = $_POST['graduationyear'];
        $grade = $_POST['grade'];
        $gradedescription = $_POST['gradedescription'];
        
                
        ////Checking for empty fields here!//////
        
        if(empty($qualification || $discipline || $schcategory || $institution || $graduationyear || $grade || $gradedescription )){
            echo "All fields are required!";
        }else{
       
            ////Auto-generating Job Serial Numner (sn) for the Job Creation///
            
            $query = " SELECT * FROM qualifications ";
            $run_query = mysqli_query($connection, $query);
                
            $total_apps = mysqli_num_rows($run_query);
            $increase_num = $total_apps + 1;
            $acronym = "INFOSYSAPP ";
            $job_id = $acronym . $increase_num;
            
            /*
            $query2 = " SELECT * FROM applicationformbiodata ";
            $run_query2 = mysqli_query($connection, $query2);

                if(mysqli_num_rows($run_query2) == 1){
                    while($result = mysqli_fetch_assoc($run_query2)){
                        $biodata_id = $result['biodata_id'];
                    }
                }
            */
               $query = "INSERT INTO qualifications(job_id, highestqualification, discipline, schcategory, institution, graduationyear, grade, gradedescription) VALUES('{$job_id}','{$qualification}','{$discipline}','{$schcategory}','{$institution}','{$graduationyear}','{$grade}','{$gradedescription}')";
                        
                    $run_query = mysqli_query($connection, $query);

                        if($run_query == true){
                            echo "Congratulation! Your Qualification Submission was Successful!";
                            }else{
                                echo "Ooops! Sorry, Your Qualification Submission Attempt Failed. Try again!";
                            }
            header("Location: feedback3.php");
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
                        <h4><p align="center"><strong class="text-info">EDUCATIONAL QUALIFICATION SECTION</strong></p></h4>
                    </div>
                    <div class="panel-body" align="center"> 
        <form id="form" method="POST" action="" enctype="multipart/form-data" style="padding-left: 20px; padding-right:20px; color: blue; width:70%; ">
                    <p><b>Highest Qualification</b></p>
                    <select name="qualification">
                    <option value="None" selected>Select Your Highest Qualification</option> 
                     
                    <option value="PhD">PhD</option>
                    <option value="Masters">M.Sc and Masters</option>     
                    <option value="Bachelor Degree">B.Sc and Bachelor's Degree</option>     
                    <option value="Bachelor Tech">B.Tech</option>     
                    <option value="HND">HND</option>
                    <option value="NCE">NCE</option>
                    <option value="ND">ND</option> 
                    <option value="Ordinary Diploma">OND and Diploma</option> 
                    <option value="SSCE">SSCE/WAEC/NECO/GCE</option> 
                    <option value="FSLC">FSLC and Standard Six</option> 
                    <option value="Others">Others</option> 
                    </select>  <br /> <br />
                    
                    <p><b>Course Studied</b></p>
                    <input type="text" class="form-control" name="discipline" placeholder="Please Enter the Course You Studied here...!" required /><br />
            
                    
                    <p><b>School Category</b></p>
                    <select onchange="print_state('state', this.selectedIndex);" id="country" name="schcategory"></select> <br /> <br />
                    
                    <p><b>Instittution Attended</b></p>
				    <select name="institution" id="state"></select>
                    <script language="javascript">print_country("country");</script> <br /> <br />
            
            
                   
                    
                    <p><b>Year Graduated</b></p>
                    <input type="date" name="graduationyear" placeholder="Please Enter Your Graduation Year...!" required /><br /><br />
                    
                    <p><b>Grade Obtained</b></p>            
                    <select name="grade">
                    <option value="None" selected>Select Your Grade Point Range</option> 
                     
                    <option value="0.00 - 0.99">0.00 - 0.99 CGPA</option>
                    <option value="1.00 - 1.49">1.00 - 1.49 CGPA</option>     
                    <option value="1.50 - 1.99">1.50 - 1.99 CGPA</option>     
                    <option value="2.00 - 1.49">2.00 - 2.49 CGPA</option>     
                    <option value="2.50 - 2.99">2.50 - 2.99 CGPA</option>     
                    <option value="3.00 - 3.49">3.00 - 3.49 CGPA</option>     
                    <option value="3.50 - 4.00">3.50 - 4.00 CGPA</option>
                    <option value="Others">Others</option> 
                    </select>  <br /> <br />
            
                    <p><b>Grade Decription</b></p>
                    <select name="gradedescription">
                    <option value="None" selected>Select Your Grade Description</option> 
                     
                    <option value="CERTIFICATE OF PARTICIPATION">CERTIFICATE OF PARTICIPATION</option>
                    <option value="FAIL">FAIL</option>
                    <option value="PASS">PASS</option>
                    <option value="THIRD CLASS">THIRD CLASS</option>     
                    <option value="SECOND CLASS LOWER">SECOND CLASS LOWER</option>     
                    <option value="SECOND CLASS UPPER">SECOND CLASS UPPER</option>     
                    <option value="LOWER CREDIT">LOWER CREDIT</option>     
                    <option value="UPPER CREDIT">UPPER CREDIT</option>     
                    <option value="FIRST CLASS">FIRST CLASS</option>     
                    <option value="DISTINCTION">DISTINCTION</option>
                    <option value="Others">Others</option> 
                    </select>  <br /> <br />
                    
                    <p align="center"><input type="submit" name="qualification_submit_btn" value="NEXT" class="btn btn-info" /></p>
            
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