<?php

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

    if(isset($_POST['biodata_submit_btn'])){
        
        $firstname = $_POST['fname'];
        $lastname = $_POST['lname'];
        $raddress = $_POST['raddress'];
        $phone = $_POST['phone'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $d_o_b = $_POST['d_o_b'];
        $maritalstatus = $_POST['maritalstatus'];
        $state = $_POST['state'];
        $localgov = $_POST['localgov'];
        $nationality = $_POST['nationality'];
        $hobbies = $_POST['hobbies'];
        
       
        
                
        ////Checking for empty fields here!//////
        
        if(empty($firstname || $lastname || $raddress || $phone || $email || $gender || $d_o_b || $maritalstatus || $state || $localgov || $nationality || $hobbies )){
            echo "All fields are required!";
        }else{
       
            ////Auto-generating Job Serial Numner (sn) for the Job Creation///
            
            $query = " SELECT * FROM app_biodataform";
            $run_query = mysqli_query($connection, $query);
                
            $total_apps = mysqli_num_rows($run_query);
            $increase_num = $total_apps + 1;
            $acronym = "INFOSYSAPP ";
            $job_id = $acronym . $increase_num;
            
           $query = "INSERT INTO app_biodataform(job_id,firstname,lastname,raddress,phone,email,gender,dateofbirth,maritalstatus,state,localgov,nationality,hobbies,sess_check)
           VALUES('{$job_id}','{$firstname}','{$lastname}','{$raddress}','{$phone}','{$email}','{$gender}','{$d_o_b}','{$maritalstatus}','{$state}','{$localgov}','{$nationality}','{$hobbies}','{$check}') ";
                        
                    $run_query = mysqli_query($connection, $query);

                        if($run_query == true){
                            echo "Congratulation! Bio Data Submission was Successful! Continue filling the next forms!";
                            }else{
                                echo "Ooops! Sorry, Bio Data Submission Attempt Failed. Try again!";
                            }
            
            header("Location: feedback2.php");
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
                        <h4><p align="center"><strong class="text-info">APPLICATION FORM - BIODATA SECION</strong></p></h4>
                    </div>
                    <div class="panel-body" align="center"> 
        <form id="form" method="POST" action="" enctype="multipart/form-data" style="padding-left: 20px; padding-right:20px; color: blue; width:70%; ">
                    <h5><b>WARNING: All Fields are MANDATORY to be FILLED!</b></h5>
                    <hr>
                
                    <p><b>First Name</b></p>
                    <input type="text" class="form-control" name="fname" placeholder="Please Enter Your First Name here...!" required /><br />
                    
                    <p><b>Last Name</b></p>
                    <input type="text" class="form-control" name="lname" placeholder="Please Enter Your Last Name here...!" required /><br />
                                      
                    <p><b>Residential Address</b></p>
                    <input type="text" class="form-control" name="raddress" placeholder="Please Enter Your Residential here...!" required /><br />
                    
                    <p><b>Phone Contact</b></p>
                    <input type="text" class="form-control" name="phone" placeholder="Please Enter Your Phone Contact here...!" required /><br />
            
                    <p><b>Email Address</b></p>
                    <input type="email" class="form-control" name="email" placeholder="Please Enter Your Email Address here...!" required /><br />
            
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
                        <select onchange="print_state('state', this.selectedIndex);" id="country" name="state"></select> <br /> <br />
                    <p><b>Local Government</b></p>
				    <select name="localgov" id="state"></select>
                    <script language="javascript">print_country("country");</script> <br /> <br />
				
            
                    <p><b>Nationality</b></p>
                    <select name="nationality">
                    <option value="None" selected>Select Your Country Here!</option> 
                     
                    <option value="Nigeria">Nigeria</option>
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
            
                    
                    <p align="center"><input type="submit" name="biodata_submit_btn" value="NEXT" class="btn btn-info" /></p>
            
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