<?php

//Connecting to gospeltruth database///

require_once("includes/dbcon.php");
?>


<?php

    if(isset($_POST['app_reg_submit_btn'])){
        $app_title = $_POST['title'];
        $app_fname = $_POST['fname'];
        $app_lname = $_POST['lname'];
        $app_initial = $_POST['initials'];
        $app_phone = $_POST['phone'];
        $app_email = $_POST['email'];
        $app_nationality = $_POST['country'];
        $app_gender = $_POST['gender'];
                
        ////Checking for empty fields here!//////
        
        if(empty($app_title || $app_fname || $app_lname || $app_initials || $app_phone || $app_email || $app_nationality || $app_gender)){
            echo "All fields are required!";
        }else{
       
            ////Auto-generating app Serial Numner (sn) for the appistrator Registration///
            
            $query = " SELECT * FROM register_applicants ";
            $run_query = mysqli_query($connection, $query);
                
            $total_users = mysqli_num_rows($run_query);
            $increase_num = $total_users + 1;
            $job_id = $increase_num;
            
        ////Checking for Already existing Members during Registration!///
            
            
            $query = " SELECT * FROM register_applicants WHERE id = '{$app_id}' ";
            $run_query = mysqli_query($connection, $query);

            if(mysqli_num_rows($run_query) > 0){
                echo "app with these details already exist";
            }else{
            
               $query = "INSERT INTO register_applicants(job_id, title, firstname, lastname, initials, phone, email, nationality, gender) VALUES('{$job_id}','{$app_title}','{$app_fname}','{$app_lname}','{$app_initial}','{$app_phone}','{$app_email}','{$app_nationality}','{$app_gender}')";
                        
                    $run_query = mysqli_query($connection, $query);

                        if($run_query == true){
                            echo "Congratulation! Applicant Registration was Successful!";
                            header("Location: ../index.php");
                            }else{
                                echo "Ooops! Sorry, Applicant Registration Failed. Try again!";
                            
                            }
                header("Location: ../index.php");
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
                            <h1 class="text-center text-info"><strong>WELCOME TO INFOSYS ONLINE JOB RECRUITMENT PLATFORM</strong></h1>
                            
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
                        <h4><p align="center"><strong class="text-info">APPLICANT REGISTRATION FORM</strong></p></h4>
                    </div>
                    <div class="panel-body" align="center"> 
        <form id="form" method="POST" action="" enctype="multipart/form-data" style="padding-left: 20px; padding-right:20px; color: blue; width:50%; ">
                    <select name="title">
                    <option value="None" selected>Select Your Title</option> 
                    <option value="Engr">Engr</option> 
                    <option value="Dr">Dr</option> 
                    <option value="Analyst">Analyst</option> 
                    <option value="Mr">Mr</option> 
                    <option value="Mrs">Mrs</option> 
                    <option value="Miss">Miss</option> 
                    <option value="Sir">Sir</option>
                    <option value="Others">Others</option> 
                    </select>  <br /> <br />
                    <p><b>First Name</b></p>
                    <input type="text" class="form-control" name="fname" placeholder="Please Enter Your First Name here...!" required /><br />
                    
                    <p><b>Last Name</b></p>
                    <input type="text" class="form-control" name="lname" placeholder="Please Enter Your Surname here...!" required /><br />
            
                    <p><b>Initials</b></p>           
                    <input type="text" class="form-control" name="initials" placeholder="Enter your Initial. E.g: S." required /><br />
            
                    <p><b>Phone</b></p>           
                    <input type="text" class="form-control" name="phone" placeholder="Please Enter Phone number here...!" required /><br />
                    
                    <p><b>Email</b></p>
                    <input type="text" class="form-control" name="email" placeholder="Please Enter Your Email here...!" required /><br />
                    
                    <p><b>Nationality</b></p>
                    <input type="text" class="form-control" name="country" placeholder="Please Enter Your Country here...!" required /><br />
                    
                    <p><input type="radio" name="gender" value="Male"> Male &nbsp;&nbsp;
                    <input type="radio" name="gender" value="Female"> Female <br />
                    <br />
                    </p>                                                
                    <p align="center"><input type="submit" name="app_reg_submit_btn" value="SUBMIT" class="btn btn-danger" /></p>
                        
                        
            </form>
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