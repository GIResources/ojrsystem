
<?php

//Connecting to gospeltruth database///


require_once("includes/dbcon.php");
?>


<?php

    if(isset($_POST['application_submit_btn'])){
        $jobposition = $_POST['jobposition'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $d_o_b = $_POST['dob'];
        $qualification = $_POST['qualification'];
        $discipline = $_POST['discipline'];
        $lastempname = $_POST['lastempname'];
        $lastempaddress = $_POST['lastempaddress'];
        $lastjobposition = $_POST['lastjobposition'];
        $careerobjective = $_POST['careerobjective'];
        $personalobjective = $_POST['personalobjective'];
                
        ////Checking for empty fields here!//////
        
        if(empty($jobposition && $firstname && $firstname && $lastname && $phone && $email && $gender && $d_o_b && $qualification && $discipline && $lastempname && $lastempaddress && $lastjobposition && $careerobjective && $personalobjective)){
            echo "All fields are required!";
        }else{
       
            ////Auto-generating Job Serial Numner (sn) for the Job Creation///
            
            $query = " SELECT * FROM applicationform_tb ";
            $run_query = mysqli_query($connection, $query);
                
            $total_apps = mysqli_num_rows($run_query);
            $increase_num = $total_apps + 1;
            $biodata_id = $increase_num;
            
               $query = "INSERT INTO applicationform_tb(biodata_id, jobposition, firstname, lastname, phone, email, gender, d_o_b, qualification, discipline, lastempname, lastempaddress, lastjobposition, careerobjective, personalobjective) VALUES('{$biodata_id}','{$jobposition}','{$firstname}','{$lastname}','{$phone}','{$email}','{$gender}','{$d_o_b}','{$qualification}','{$discipline}','{$lastempname}','{$lastempaddress}','{$lastjobposition}','{$careerobjective}','{$personalobjective}')";
                        
                    $run_query = mysqli_query($connection, $query);

                        if($run_query == true){
                            echo "Congratulation! Application was submitted Successfully!";
                            }else{
                                echo "Ooops! Sorry, Application Submisiion Attempt Failed. Try again!";
                            }
            header("location:feedback1.php");
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
                        <h4><p align="center"><strong class="text-info">APPLICANT'S APPLICATION FORM - ALL FIELDS ARE MANDATORY TO BE FILLED</strong></p></h4>
                    </div>
                    <div class="panel-body" align="center"> 
        <form id="form" method="POST" action="" enctype="multipart/form-data" style="padding-left: 20px; padding-right:20px; color: blue; width:60%; ">
                    <select name="jobposition">
                    <option value="None" selected>Select Your Desire Job Position...</option> 
                     
                    <option value="System Analyst">System Analyst</option>
                    <option value="Database Administrator">Database Administrator</option>     
                    <option value="Web Developer">Web Developer</option>     
                    <option value="Graduate">Graduate</option>     
                    <option value="FrontDesk Officer">FrontDesk Officer</option>
                    <option value="Programmer">Programmer</option>
                    <option value="IT Educationist">IT Educationist</option> 
                    <option value="IT Specialist">IT Specialist</option> 
                    <option value="ICT Tutor">ICT Tutor</option> 
                    <option value="Secretarie">Secretary</option> 
                    <option value="Receptionist">Receptionist</option> 
                    <option value="Marketer">Marketer</option> 
                    <option value="Driver">Driver</option> 
                    <option value="Business Administrator">Business Administrator</option> 
                    <option value="Professional Graphics Designer">Professional Graphics Designer</option> 
                    <option value="Others">Others</option> 
                    </select>  <br /> <br />
                    <p><b>First Name</b></p>
                    <input type="text" class="form-control" name="firstname" placeholder="Please Enter Your First Name here...!" required /><br />
                    <p><b>Last Name</b></p>
                    <input type="text" class="form-control" name="lastname" placeholder="Please Enter Your Last Name here...!" required /><br />
                    <p><b>Phone Contact</b></p>            
                    <input type="text" class="form-control" name="phone" placeholder="Please Enter Your Phone Contact here...!" required /><br />
                    <p><b>Email Address</b></p>
                    <input type="text" class="form-control" name="email" placeholder="Please Enter Your Email Address here...!" required /><br />
                    
                    <select name="gender">
                    <option value="None" selected>Select Preferred Gender</option> 
                     
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>     
                    </select>  <br /> <br />                                            
                                        
                    <p><b>Date of Birth</b></p>
                    <input type="date"  name="dob" placeholder="Please Enter Your Date of Birth here...!" required /><br />
                    <p><b>Your Highest Qualification</b></p>
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
            
                    <p><b>Last Employer's Name</b></p>
                    <input type="text" class="form-control" name="lastempname" placeholder="Please Enter the Name of the Last Company Worked with here...!" required /><br />
                    
                    <p><b>Last Employer's Address</b></p>
                    <input type="text" class="form-control" name="lastempaddress" placeholder="Please Enter Computer Address here...!" required /><br />
                    
                    <p><b>Last Job Position</b></p>
                    <input type="text" class="form-control" name="lastjobposition" placeholder="Please Enter Your Last Job Position here...!" required /><br />
                    
                    <p><b>Career Objective</b></p>
                    <textarea rows="4" cols="100" class="form-control" name="careerobjective" placeholder="Please Enter Your Career Objective here...!" required > </textarea><br />        
            
                    <p><b>Personal Objective</b></p>
                    <textarea rows="4" cols="100" class="form-control" name="personalobjective" placeholder="Please Enter Your Personal Objective here...!" required > </textarea><br />
                    
                    <p align="center"><input type="submit" name="application_submit_btn" value="SUBMITAPPLICATION" class="btn btn-danger" /></p>
            
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