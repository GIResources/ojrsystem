<?php

//Connecting to gospeltruth database///

require_once("includes/dbcon.php");
?>


<?php

    if(isset($_POST['admin_reg_submit_btn'])){
        $admin_title = $_POST['title'];
        $admin_fname = $_POST['fname'];
        $admin_lname = $_POST['lname'];
        $admin_phone = $_POST['phone'];
        $admin_email = $_POST['email'];
        $admin_gender = $_POST['gender'];
                
        ////Checking for empty fields here!//////
        
        if(empty($admin_title && $admin_fname && $admin_lname && $admin_phone && $admin_email && $admin_gender)){
            echo "All fields are required!";
        }else{
       
            ////Auto-generating Admin Serial Numner (sn) for the Administrator Registration///
            
            $query = " SELECT * FROM register_admin ";
            $run_query = mysqli_query($connection, $query);
                
            $total_users = mysqli_num_rows($run_query);
            $increase_num = $total_users + 1;
            $admin_sn = $increase_num;
            
        ////Checking for Already existing Members during Registration!///
            
            
            $query = " SELECT * FROM register_admin WHERE id = '{$admin_sn}' ";
            $run_query = mysqli_query($connection, $query);

            if(mysqli_num_rows($run_query) > 0){
                echo "Admin with these details already exist";
            }else{
            
               $query = "INSERT INTO register_admin(sn, title, firstname, lastname, phone, email, gender) VALUES('{$admin_sn}','{$admin_title}','{$admin_fname}','{$admin_lname}','{$admin_phone}','{$admin_email}','{$admin_gender}')";
                        
                    $run_query = mysqli_query($connection, $query);

                        if($run_query == true){
                            echo "Congratulation! Administrator Registration was Successful!";
                            }else{
                                echo "Ooops! Sorry, Membership Registration Failed. Try again!";
                            }
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
                            <h1 class="text-center text-info"><strong>ADMIN REGISTRATION</strong></h1>
                            
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
                        <h4><p align="center"><strong class="text-info">ADMINISTRATOR REGISTRATION FORM</strong></p></h4>
                    </div>
                    <div class="panel-body" align="center"> 
        <form id="form" method="POST" action="" enctype="multipart/form-data" style="padding-left: 20px; padding-right:20px; color: blue; width:50%; ">
                    <select name="title">
                    <option value="None" selected>Select Your Title</option> 
                     
                    <option value="Analyst">Analyst</option>
                    <option value="Db Admin">Db Admin</option>     
                    <option value="Developer">Developer</option>     
                    <option value="Dr">Dr</option>     
                    <option value="Engr">Engr</option>
                    <option value="Miss">Miss</option>
                    <option value="Mr">Mr</option> 
                    <option value="Mrs">Mrs</option> 
                    <option value="Programmer">Programmer</option> 
                    </select>  <br /> <br />
                    <p><b>First Name</b></p>
                    <input type="text" class="form-control" name="fname" placeholder="Please Enter Your First Name here...!" required /><br />
                    <p><b>Last Name</b></p>
                    <input type="text" class="form-control" name="lname" placeholder="Please Enter Your Surname here...!" required /><br />
                    <p><b>Phone</b></p>            
                    <input type="text" class="form-control" name="phone" placeholder="Please Enter Phone number here...!" required /><br />
                    <p><b>Email</b></p>
                    <input type="text" class="form-control" name="email" placeholder="Please Enter Your Email here...!" required /><br />
                    <p><input type="radio" name="gender" value="Male"> Male &nbsp;&nbsp;
                    <input type="radio" name="gender" value="Female"> Female <br />
                    </p>                                                
                    <p align="center"><input type="submit" name="admin_reg_submit_btn" value="SUBMIT" class="btn btn-danger" /></p>
                    
                        
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