<?php

//ob_start();
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

    if(isset($_POST['personalobjective_submit_btn'])){
        
        $personalobjective = $_POST['personalobjective'];
        $keyword = $_POST['keyword'];
         
        ////Checking for empty fields here!//////
        
        if(empty($personalobjective || $keyword)){
            echo "All fields are required!";
        }else{
       
            ////Auto-generating Job Serial Numner (sn) for the Job Creation///
            
            $query = " SELECT * FROM personalobjective ";
            $run_query = mysqli_query($connection, $query);
                
            $total_apps = mysqli_num_rows($run_query);
            $increase_num = $total_apps + 1;
            $acronym = "INFOSYSAPP ";
            $job_id = $acronym . $increase_num;
            
               $query = "INSERT INTO personalobjective(job_id, personalobjective, keyword, sess_check) VALUES('{$job_id}','{$personalobjective}','{$keyword}','{$check}')";
                        
                    $run_query = mysqli_query($connection, $query);

                        if($run_query == true){
                            echo "Congratulation! Your Personal Objective Detail Submission was Successful!";
                            }else{
                                echo "Ooops! Sorry, Personal Objective Detail Submission Attempt Failed. Try again!";
                            }
            header("Location: feedback8.php");
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
                        <h4><p align="center"><strong class="text-info">PERSONAL OBJECTIVE SECTION</strong></p></h4>
                    </div>
                    <div class="panel-body" align="center"> 
        <form id="form" method="POST" action="" enctype="multipart/form-data" style="padding-left: 20px; padding-right:20px; color: blue; width:70%; ">
                                    
                    <p><b>Personal Objective</b></p>
                    <textarea rows="4" cols="100" class="form-control" name="personalobjective" placeholder="Please Enter Your Personal Objective here...!" required > </textarea><br />
                    
                    <p><b>Keyword</b></p>
                    <input type="text" class="form-control" name="keyword" placeholder="Please Enter a Word to Describes You e.g Honest...!" required /><br />
                    
                                        
                    <P><input type="submit" name="personalobjective_submit_btn" value="NEXT" class="btn btn-info" /></p>
            
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