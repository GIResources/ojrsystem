<?php

//    ob_start();
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

    if(isset($_POST['career_submit_btn'])){
        $lastempname = $_POST['empname'];
        $lastempaddress = $_POST['empaddress'];
        $lastjobposition = $_POST['lastjobposition'];
        $lastjobrolecategory = $_POST['lastjobrole'];
        $lastempyear = $_POST['lastempyear'];
        $currentempstatus= $_POST['currentempstatus'];
        
                
        ////Checking for empty fields here!//////
        
        if(empty($lastempname || $lastempaddress || $lastjobposition || $lastjobrolecategory || $lastempyear || $currentempstatus)){
            echo "All fields are required!";
        }else{
       
            ////Auto-generating Job Serial Numner (sn) for the Job Creation///
            
            $query = " SELECT * FROM career_workexperience ";
            $run_query = mysqli_query($connection, $query);
                
            $total_apps = mysqli_num_rows($run_query);
            $increase_num = $total_apps + 1;
            $acronym = "INFOSYSAPP ";
            $job_id = $acronym . $increase_num;
            
               $query = "INSERT INTO career_workexperience(job_id, lastempname, lastempaddress, lastjobposition, jobrolecategory, lastempyear, currentempstatus) VALUES('{$job_id}','{$lastempname}','{$lastempaddress}','{$lastjobposition}','{$lastjobrolecategory}','{$lastempyear}','{$currentempstatus}')";
                        
                    $run_query = mysqli_query($connection, $query);

                        if($run_query == true){
                            echo "Congratulation! Your Career Work Experience submission was Successful!";
                            }else{
                                echo "Ooops! Sorry, Career Work Experience submission Attempt Failed. Try again!";
                            }
            header("Location: feedback6.php");
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
                        <h4><p align="center"><strong class="text-info">CAREER AND WORK EXPERIENCE SECTION</strong></p></h4>
                    </div>
                    <div class="panel-body" align="center"> 
        <form id="form" method="POST" action="" enctype="multipart/form-data" style="padding-left: 20px; padding-right:20px; color: blue; width:70%; ">
                    <p><b>Last Employer Name</b></p>
                    <input type="text" class="form-control" name="empname" placeholder="Please Enter Company Name here...!" required /><br />
                    
                    <p><b>Last Employer Address</b></p>
                    <input type="text" class="form-control" name="empaddress" placeholder="Please Enter Computer Address here...!" required /><br />
                    
                    <p><b>Last Job Position</b></p>
                    <input type="text" class="form-control" name="lastjobposition" placeholder="Please Enter Your Last Job Position here...!" required /><br />
                    
                    <p><b>Last Job Role Category</b></p>            
                    <select name="lastjobrole">
                        <option value="None" selected>Select Your Job Role Category</option> 
                        <option value="Department Head">Department Head</option>
                        <option value="Unit Head">Unit Head</option>     
                        <option value="Supervisory Role">Supervisory Role</option>     
                        <option value="Management Staff">Management Staff</option>     
                        <option value="Technical and Craft">Technical and Craft</option>     
                        <option value="Secretarial">Secretarial</option>     
                        <option value="Logistic Unit">Logistic Unit</option>     
                        <option value="Web Development/Software Unit">Web Development/Software</option>     
                        <option value="Software Engineering Unit">Software Engineering Unit</option>     
                        <option value="Hardware Engineering Unit">Hardware Engineering Unit</option>     
                        <option value="Logistic Unit">Logistic Unit</option>     
                        <option value="Marketing Department">Marketing Department</option>     
                        <option value="Customer Service Department">Customer Service Department</option>     
                        <option value="Finance Department">Finance Department</option>     
                        <option value="Delivery and Distribution">Delivery and Distribution</option>     
                        <option value="Others">Others</option>     
                    </select>  <br /> <br />
            
                    <p><b>Last Employment Year</b></p>
                    <input type="date" name="lastempyear" required /><br /><br />    
                    
                    <p><b>Current Employment Status</b></p>
                    <select name="currentempstatus">
                        <option value="None" selected>Select Your Employment Status</option> 
                        <option value="Hands-On-Job">Hands-On-Job</option>
                        <option value="Unemployed">Unemployed</option>     
                        <option value="Self-Employed">Self-Employed</option>     
                    </select>  <br /> <br />
                            
                    <p align="center"><input type="submit" name="career_submit_btn" value="NEXT" class="btn btn-info" /></p>
            
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