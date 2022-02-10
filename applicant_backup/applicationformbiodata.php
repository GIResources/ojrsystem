<?php

    ob_start();
?>

<?php

//Connecting to ojrs database and checking seeion///
require_once("includes/app_session.php");
require_once("includes/dbcon.php");
?>

<?php
    $date = date('Y');
?>


<?php

    if(isset($_POST['biodata_submit_btn'])){
        $jobposition = $_POST['jobposition'];
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $initials = $_POST['initials'];
        $raddress = $_POST['raddress'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $d_o_b = $_POST['d_o_b'];
        $state = $_POST['state'];
        $nationality = $_POST['nationality'];
        $hobbies = $_POST['hobbies'];
        $qualification = $_POST['qualification'];
        $discipline = $_POST['discipline'];
        $institution = $_POST['institution'];
        $graduationyear = $_POST['graduationyear'];
        $grade = $_POST['grade'];
        $gradedescription = $_POST['gradedescription'];
        $empname = $_POST['empname'];
        $empaddress = $_POST['empaddress'];
        $lastjobposition = $_POST['ljobposition'];
        $jobrole = $_POST['jobrole'];
        $employmentdate = $_POST['employmentdate'];
        $employmentstatus = $_POST['employmentstatus'];
        $departuredate = $_POST['departuredate'];
        $careerobjective = $_POST['careerobjective'];
        $personalobjective = $_POST['personalobjective'];
        $keyword = $_POST['keyword'];
        $gname = $_POST['gname'];
        $gaddress = $_POST['gaddress'];
        $gcontact = $_POST['gcontact'];
       
        
                
        ////Checking for empty fields here!//////
        
        if(empty($jobposition || $firstname || $lastname || $initials || $raddress || $phone || $email || $gender || $d_o_b || $state || $nationality || $hobbies || $qualification || $discipline || $institution || $graduationyear || $grade || $gradedescription || $empname || $empaddress || $lastjobposition || $jobrole || $employmentdate || $employmentstatus || $departuredate || $careerobjective || $personalobjective || $keyword || $gname || $gaddress || $gcontact)){
            echo "All fields are required!";
        }else{
       
            ////Auto-generating Job Serial Numner (sn) for the Job Creation///
            
            $query = " SELECT * FROM applicationformbiodata";
            $run_query = mysqli_query($connection, $query);
                
            $total_apps = mysqli_num_rows($run_query);
            $increase_num = $total_apps + 1;
            $biodata_id = $increase_num;
            
        // Testing and formating Applicant's Passport for Insertion the Database and Upload to app_passport folder ////
        }
                    if (!isset($_FILES['photo']['tmp_name'])) {
                    echo "";
                    }else{
                    $file=$_FILES['photo']['tmp_name'];
                    $image= addslashes(file_get_contents($_FILES['photo']['tmp_name']));
                    $image_name= addslashes($_FILES['photo']['name']);
                    if ($image==FALSE) {
                            //header("location: image.php?msg=You have entered an invalid file!");
                            echo "You have entered an invalid file!";

                        }else{

                            move_uploaded_file($_FILES["photo"]["tmp_name"],"app_passports/" . $_FILES["photo"]["name"]);

                            $location="app_passports/" . $_FILES["photo"]["name"];

        /// Testing and formating Applicant's Passport ends here...! /////
            
               $query = "INSERT INTO applicationformbiodata(biodata_id,jobposition,firstname,lastname,initials,raddress,phone,email,gender,d_o_b, state,nationality,hobbies,qualification,discipline,institution,graduationyear,grade,gradedescription,empname,empaddress,lastjobposition,jobrole,employmentdate,employmentstatus,departuredate,careerobjective,personalobjective,keyword,gname,gaddress,gcontact,photo)
VALUES('{$biodata_id}','{$jobposition}','{$firstname}','{$lastname}','{$initials}','{$raddress}','{$phone}','{$email}','{$gender}','{$d_o_b}','{$state}','{$nationality}','{$hobbies}','{$qualification}','{$discipline}','{$institution}','{$graduationyear}','{$grade}','{$gradedescription}','{$empname}','{$empaddress}','{$lastjobposition}','{$jobrole}','{$employmentdate}','{$employmentstatus}','{$departuredate}','{$careerobjective}','{$personalobjective}','{$keyword}','{$gname}','{$gaddress}','{$gcontact}','{$location}')";
                        
                    $run_query = mysqli_query($connection, $query);

                        if($run_query == true){
                            echo "Congratulation! Bio Data Submission was Successful! Continue filling the next forms!";
                            }else{
                                echo "Ooops! Sorry, Bio Data Submission Attempt Failed. Try again!";
                            }
            
            //header("Location: ./qualifications.php");
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
        <script src="js/state.js"></script>

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
                    <hr>
            
                    BIODATA SECTION
            
                    <hr>
            
                    <p><b>Desired Job Position</b></p>
                    <select name="jobposition">
                    <option value="None" selected>Select The Desired Job Position</option> 
                     
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
                    <input type="text" class="form-control" name="fname" placeholder="Please Enter Your First Name here...!" required /><br />
                    
                    <p><b>Last Name</b></p>
                    <input type="text" class="form-control" name="lname" placeholder="Please Enter Your Last Name here...!" required /><br />
                    
                    <p><b>Initials</b></p>            
                    <input type="text" class="form-control" name="initials" placeholder="Please Enter Your Initials here...!" required /><br />
                    
                    <p><b>Residential Address</b></p>
                    <input type="text" class="form-control" name="raddress" placeholder="Please Enter Your Residential here...!" required /><br />
                    
                    <p><b>Phone Contact</b></p>
                    <input type="text" class="form-control" name="phone" placeholder="Please Enter Your Phone Contact here...!" required /><br />
            
                    <p><b>Email Address</b></p>
                    <input type="text" class="form-control" name="email" placeholder="Please Enter Your Email Address here...!" required /><br />
            
                    <p><b>Gender</b></p>
                    <select name="gender">
                    <option value="None" selected>Select Your Gender</option> 
                     
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>     
                    
                    </select>  <br /> <br />                                            
                    
                    <p><b>Date of Birth</b></p>
                    <input type="date" name="d_o_b" placeholder="Please Enter Your Date of Birth here...!" required /><br /> <br />
            
                    <p><b>Marital Status</b></p>
                    <select name="maritalstatus">
                    <option value="None" selected>Select Your Marital Status</option> 
                     
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>     
                    <option value="Divorced">Divorced</option>     
                    <option value="Engaged">Engaged</option>     
                    
                    </select>  <br /> <br />            
            
                    <p><b>State Of Origin</b></p>
                        <select onchange="print_state('state', this.selectedIndex);" id="country" name="country"></select> <br /> <br />
                    <p><b>Local Government</b></p>
				    <select name="state" id="state"></select>
                    <script language="javascript">print_country("country");</script> <br /> <br />
				
            
                    <p><b>Nationality</b></p>
                    <select name="nationality">
                    <option value="None" selected>Select Your Country Here!</option> 
                     
                    <option value="Nigeri">Nigeria</option>
                    <option value="France">France</option>     
                    <option value="Denmark">Denmark</option>     
                    <option value="Zambia">Zambia</option>     
                    <option value="Gambia">Gambia</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Togo">Togo</option> 
                    <option value="Cameroon">Cameroon</option> 
                    <option value="Ghana">Ghana</option> 
                    <option value="Ivory Coast">Ivory Coast</option> 
                    <option value="Libya">Libya</option> 
                    <option value="Morocco">Morocco</option> 
                    <option value="Argentina">Argentina</option> 
                    <option value="Austria">Austria</option> 
                    <option value="South Africa">South Africa</option> 
                    <option value="Others">Others</option> 
                    </select>  <br /> <br />
                    
                    <p><b>Hobbies</b></p>
                    <select name="hobbies">
                    <option value="None" selected>Select Your Hobbies Here!</option> 
                     
                    <option value="Reading">Reading</option>
                    <option value="Learning">Learning</option>     
                    <option value="Traveling">Traveling</option>     
                    <option value="Singing">Singing</option>     
                    <option value="Net Surfing">Net Surfing</option>
                    <option value="Researching">Researching</option>
                    <option value="Experimenting">Experimenting</option> 
                    <option value="Others">Others</option> 
                    </select>  <br /> <br />
            
                    <hr>
            
                    EDUCATIONAL QUALIFICATION
            
                    <hr>
            
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
            
                    <p><b>Institution Attended</b></p>
                    <input type="text" class="form-control" name="institution" placeholder="Please Enter Institution Attended here...!" required /><br />
                    
                    <p><b>Year Graduated</b></p>
                    <input type="date" name="graduationyear" placeholder="Please Enter Your Graduation Year...!" required /><br /><br />
                    
                    <p><b>Grade Obtained</b></p>            
                    <input type="text" class="form-control" name="grade" placeholder="Please Enter Your Grade Point here...!" required /><br />
            
                    <p><b>Grade Decription</b></p>
                    <input type="text" class="form-control" name="gradedescription" placeholder="Describe Your Grade Point E.g First Class...!" required /><br />  
            
                    <hr>
            
                    CAREER AND WORK EXPERIENCE SECTION
            
                    <hr>
                    
                    <p><b>Employer Name</b></p>
                    <input type="text" class="form-control" name="empname" placeholder="Please Enter Company Name here...!" required /><br />
                    
                    <p><b>Employer Address</b></p>
                    <input type="text" class="form-control" name="empaddress" placeholder="Please Enter Computer Address here...!" required /><br />
                    
                    <p><b>Last Job Position</b></p>
                    <input type="text" class="form-control" name="ljobposition" placeholder="Please Enter Your Last Job Position here...!" required /><br />
                    
                    <p><b>Job Role</b></p>            
                    <input type="text" class="form-control" name="jobrole" placeholder="Please Enter Your Job Role here...!" required /><br />
            
                    <p><b>Employment Date</b></p>
                    <input type="date" name="employmentdate" required /><br /> <br />    
                    
                    <p><b>Still Working?</b></p>
                    <select name="employmentstatus">
                        <option value="None" selected>Select Your Employment Status</option> 
                        <option value="Yes">Currently Working</option>
                        <option value="No">Not Working</option>     
                    </select>  <br /> <br />
                    
                    <p><b>Depature Date</b></p>
                    <input type="date" name="departuredate" placeholder="Please Enter Your Date of Birth here...!" required /><br /> <br />        
                        
                    <p><b>Career Objective</b></p>
                    <textarea rows="4" cols="100" class="form-control" name="careerobjective" placeholder="Please Enter Your Career Objective here...!" required > </textarea><br />        
            
                    <p><b>Personal Objective</b></p>
                    <textarea rows="4" cols="100" class="form-control" name="personalobjective" placeholder="Please Enter Your Personal Objective here...!" required > </textarea><br />
            
                    <p><b>Keyword</b></p>
                    <input type="text" class="form-control" name="keyword" placeholder="Please Enter a Word that Describes You e.g Honest...!" required /><br />
                    
                    <hr>
            
                    GUARANTOR SECTION
            
                    <hr>
            
                    <p><b>Guarantor's Name</b></p>            
                    <input type="text" class="form-control" name="gname" placeholder="Please Enter Your Guarantor's Name here...!" required /><br />
            
                    <p><b>Guarantor's Address</b></p>
                    <input type="text" class="form-control" name="gaddress" placeholder="Please Enter Your Guarantor's Address here...!" required /><br />    
                    
                    <p><b>Guarantor's Contact</b></p>
                    <input type="text" class="form-control" name="gcontact" placeholder="Please Enter Your Guarantor Phone No here...!" required /><br /><p>
                    
                    <p><b>Upload Your Passport</b></p>
                    
            <!--- Passport Script Starts here  --->
            
            
                    <input type="file" name="photo" /><br />
                       
                    
                    <p align="center"><input type="submit" name="biodata_submit_btn" value="SUBMIT" class="btn btn-info" /></p>
            
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