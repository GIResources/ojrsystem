<?php

//Connecting to gospeltruth database///

require_once("includes/dbcon.php");
?>
<?php /*
$result = "SELECT * FORM jobcodes";
    $run_results = mysqli_query($connection, $result);
            if($row = $run_results) {
            while($row = mysqli_fetch_array($run_results)){
               
            }
            }
            
        */
?>

<?php

    if(isset($_POST['createjob_submit_btn'])){
        $job_category = $_POST['jobcategory'];
        $job_title = $_POST['desiredjobposition'];
        $job_code = $_POST['jobcodes'];
        $job_qualification = $_POST['qualification'];
        $job_discipline = $_POST['discipline'];
        $job_yoe = $_POST['yearsofexperience'];
        $job_agelimit = $_POST['agelimit'];
        $job_gender = $_POST['preferredgender'];
        $job_publicationdate = $_POST['publicationdate'];
        $job_expiringdate = $_POST['expiringdate'];
                
        ////Checking for empty fields here!//////
        
        if(empty($job_title && $job_code && $job_qualification && $job_yoe && $job_agelimit && $job_gender && $job_gender && $job_publicationdate && $job_expiringdate)){
            echo "All fields are required!";
        }else{
       
            ////Auto-generating Job Serial Numner (sn) for the Job Creation///
            
            $query = " SELECT * FROM jobtable ";
            $run_query = mysqli_query($connection, $query);
                
            $total_users = mysqli_num_rows($run_query);
            $increase_num = $total_users + 1;
            $job_sn = $increase_num;
            
               $query = "INSERT INTO jobtable(job_sn, jobcategory, jobtitle, jobcode, qualification, discipline, yearsofexperience, agelimit, preferredgender, publicationdate, expiringdate) VALUES('{$job_sn}','{$job_category}','{$job_title}','{$job_code}','{$job_qualification}','{$job_discipline}','{$job_yoe}','{$job_agelimit}','{$job_gender}','{$job_publicationdate}','{$job_expiringdate}')";
                        
                    $run_query = mysqli_query($connection, $query);

                        if($run_query == true){
                        header('location:jobcreationfeedback.php');
                            //echo "Congratulation! Job Creation was Successful!";
                         //   }else{
                          //      echo "Ooops! Sorry, Job Creation Attempt Failed. Try again!";
                            }
                        }
                
    
            
        
    }
    
   
?>

<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width"/>
        <title>Infosys Digital Solution</title>
         <!---- Linking to CSS ---->
        <link type="text/css" rel="stylesheet" href="includes/body.css" />
        <link type="text/css" rel="stylesheet" href="includes/form.css" />
         <!-- connecting to bootstrap ---->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
                <!-- connecting to jquery ---->
        <script type="text/javascript" src="jquery/jquery-1.11.3.min.js"></script>
                <!-- connecting to javascript ---->
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script src="js/jobcategory.js"></script>

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
                            <h2 class="text-center text-info"><strong>ADMIN JOB CREATION PLATFORM</strong></h2>
                            
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
                        <h4><p align="center"><strong class="text-info">INFOSYS JOB CREATION FORM</strong></p></h4>
                    </div>
                    <div class="panel-body" align="center"> 
        <form id="form" method="POST" action="" enctype="multipart/form-data" style="padding-left: 20px; padding-right:20px; color: blue; width:60%; ">
                    <p><b>Desired Job Category</b></p>
                        <select onchange="print_state('state', this.selectedIndex);" id="country" name="jobcategory"></select> <br /> <br />
                    <p><b>Desired Job Position</b></p>
				    <select name="desiredjobposition" id="state"></select>
                    <script language="javascript">print_country("country");</script> <br /> <br />
            
                    <p><b>Job Code</b></p>
                    <input type="text" name="jobcodes" class="form-control" value="<?php $prefix= (time()*rand(1, 20000)); echo strip_tags(substr($prefix ,3,6));?>" readonly>     
                
                    <!--<input type="text" class="form-control" name="jobcode" placeholder="Please Enter the Job code here...!" required /><br /> -->
                    <p><b>Qualification</b></p>
            
                    <select name="qualification">
                        
                    <option value="None" selected>Select Required Qualification</option> 
                    <option value="PhD">PhD</option>
                    <option value="Masters">M.Sc and Masters</option>     
                    <option value="Bachelor Degree">B.Sc and Bachelor's Degree</option>     
                    <option value="Bachelor Tech">B.Tech</option>     
                    <option value="HND">HND</option>
                    <option value="B.Sc/Bachelors Degree/HND">B.Sc/Bachelors Degree/HND</option>
                    <option value="NCE">NCE</option>
                    <option value="ND">ND</option> 
                    <option value="Ordinary Diploma">OND and Diploma</option> 
                    <option value="SSCE">SSCE/WAEC/NECO/GCE</option> 
                    <option value="FSLC">FSLC and Standard Six</option> 
                    <option value="Others">Others</option> 
                    
                    </select>  <br /> <br />  
            
                    <p><b>Discipline/Course</b></p>
            
                    <select name="discipline">
                        
                    <option value="None" selected>Select Required Discipline</option> 
                    <option value="Any Discipline">Any Discipline</option>
                    <option value="Computer Science">Computer Science</option>
                    <option value="Computer Engineering">Computer Engineering</option>     
                    <option value="Information Technology">Information Technology</option>     
                    <option value="Marketing">Marketing</option>     
                    <option value="Business Administration/MGT">Business Administration/MGT</option>
                    <option value="Public Administration">Public Administration</option>
                    <option value="Web Programming">Web Programming</option> 
                    <option value="Statistic">Statistic</option> 
                    <option value="Education">Education</option> 
                    <option value="Mathematics">Mathematics</option>
                    <option value="Physics">Physics</option>
                    <option value="Chemistry">Chemistry</option>
                    <option value="Biochemistry">Biochemistry</option>
                    <option value="Microbiology">Microbiology</option>
                    <option value="Banking and Finance">Banking and Finance</option>
                    <option value="Health Education">Health Education</option>
                    <option value="Guidance and Counseling">Guidance and Counseling</option>
                    <option value="Civil Engineering">Civil Engineering</option>
                    <option value="Mechanical Engineering">Mechanical Engineering</option>
                    <option value="Architecture">Architecture</option>
                    <option value="Regional and Urban Planning">Regional and Urban Planning</option>
                    <option value="Law">Law</option>
                    <option value="Quantity Survey">Quantity Survey</option>
                    <option value="Estate Management">Estate Management</option>
                    <option value="Secretarial Studies">Secretarial Studies</option>
                    <option value="Office Technology and Management">Office Technology and Management</option>
                    <option value="Science Laboratory Technology">Science Laboratory Technology</option>
                    <option value="Economics/Micro-Economics">Economics/Micro-Economics</option>
                    <option value="Others">Others</option> 
                    
                    </select>  <br /> <br />  
            
                    <p><b>Years of Experience</b></p>            
                    
                    <select name="yearsofexperience">
                        
                    <option value="None" selected>Select The Required Years of Experience</option> 
                    <option value="No Experience Required">No Experience Required</option>
                    <option value="1year">1year</option>
                    <option value="2years">2years</option>     
                    <option value="3years">3years</option>     
                    <option value="4years">4years</option>     
                    <option value="5years">5years</option>     
                    <option value="6years">6years</option>     
                    <option value="7years">7years</option>     
                    <option value="8years">8years</option>     
                    <option value="9years">9years</option>     
                    <option value="10years">10years</option>     
                                                              
                    </select>  <br /> <br />  
                    
                    <p><b>Age Limit</b></p>
            
                    <select name="agelimit">
                        
                    <option value="None" selected>Select Age Limit</option> 
                    <option value="22years">22years</option>
                    <option value="23years">23years</option>     
                    <option value="24years">24years</option>     
                    <option value="25years">25years</option>     
                    <option value="26years">26years</option>     
                    <option value="27years">27years</option>     
                    <option value="28years">28years</option>     
                    <option value="29years">29years</option>     
                    <option value="30years">30years</option>     
                    <option value="31years">31years</option>     
                    <option value="32years">32years</option>     
                    <option value="35years">35years</option>     
                                          
                    </select>  <br /> <br />  
            
                    <p><b>Preferred Gender</b></p>
                    <select name="preferredgender">
                    <option value="None" selected>Select Preferred Gender</option> 
                     
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>     
                    <option value="Both Genders">Both Genders</option>     
                    </select>  <br /> <br />                                            
                                        
                    <p><b>Publication Date</b></p>
                    <input type="date" name="publicationdate" placeholder="Please Enter the Publication Date here...!" required /><br /> <br />
                    <p><b>Expiring Date</b></p>
                    <input type="date"  name="expiringdate" placeholder="Please Enter the Job Availability dateline here...!" required /><br /> <br />
                    
                    <p align="center"><input type="submit" name="createjob_submit_btn" value="PUBLISH JOB" class="btn btn-info" /></p>
            
            </form>
                        
                    &nbsp;&nbsp; <a href="../index.php"> <strong>Login</strong></a> &nbsp;&nbsp; <a href="../../index.php"><strong>Home</strong></a>
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