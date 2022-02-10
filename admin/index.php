<?php 
    require_once("../includes/dbcon.php");
?>

<?php
    $date = date('Y');
?>
<?php
    if(isset($_POST['adminlogin_btn'])){
        $admin_login_firstname = $_POST['fname'];
        $admin_login_phone = $_POST['phone'];
        
        //Checking for blank fields///
        
        if(empty($admin_login_firstname || $admin_login_phone)){
            echo "All fields required";
        }else{
            
            $query = " SELECT * FROM register_admin WHERE firstname = '{$admin_login_firstname}' AND phone = '{$admin_login_phone}' ";
            $run_query = mysqli_query($connection, $query);
            
            ///Testing to see if the user is present////
            
            if(mysqli_num_rows($run_query) == 1){
                
                session_start();
                ///To fetch back user details from the database///
                
                while($result = mysqli_fetch_assoc($run_query)){
                /// Using associative arrays to fetch individuals field as variables////
                    $admin_id = $result['id'];
                    
                    //Storing the session id ///
                    
                    $_SESSION['admin'] = $admin_id;
                    
                    ///redirecting to the members dashboard page if the login was successfu///
                    
                    header("location: ../admin/dashboard/");
                    
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
         <!-- connecting to bootstrap ---->
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css" />
                <!-- connecting to jquery ---->
        <script type="text/javascript" src="jquery/jquery-1.11.3.min.js"></script>
                <!-- connecting to javascript ---->
        <script type="text/javascript" src="js/bootstrap.js"></script>

        <!--FOOTER CODE SCRIPT LINKING BEGINS HERE-->
        <!-- STYLES & JQUERY 
================================================== -->
<link rel="stylesheet" type="text/css" href="footer/css/style.css"/>
<link rel="stylesheet" type="text/css" href="footer/css/icons.css"/>
<link rel="stylesheet" type="text/css" href="footer/css/slider.css"/>
<link rel="stylesheet" type="text/css" href="footer/css/skinblue.css"/><!-- change skin color -->
<link rel="stylesheet" type="text/css" href="footer/css/responsive.css"/>
<script src="footer/js/jquery-1.9.0.min.js"></script><!-- the rest of the scripts at the bottom of the document -->

        <!--FOOTER CODE SCRIPT LINKING ENDS HERE-->
    </head>
    
    <body>
      

    <div class="container-fluid bg-danger">
            <div class="row">
                
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="panel-fluid panel-info">
                        
                        <div class="panel-heading-fluid">
                            <h3 class="text-center text-info"><strong> Hello Admin, WELCOME!</strong></h3>
                        </div>
                        <div class="panel-body">
                        <h5 class="text-center"> <b>As the Administrator of this Recruitment Platform, you have to be careful and consistent with all your activities and operations of this site. Please login and always keep your login details private and confidential. contact the Web Developer for any  assistance you might need.</b></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
    </div>
   
    <div class="container bg-success">
            <div class="row">
                <div class="col-md-3">
                
                </div>
                
                <div class="col-md-6">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h4 class="text-center"><strong>Admin Login</strong></h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-danger"><b>Please enter your login details</b></p>
                            
                            <form id="form" method="POST" action="">
                
                                <b>First Name</b><br />
                                <input type="text" class="form-control" name="fname" placeholder="Enter your username" required /><br />

                                <b>Phone No</b><br />
                                <input type="password" class="form-control" name="phone" placeholder="Enter your password" /><br />

                                <p><input type="submit" class="btn btn-info btn-xl" name="adminlogin_btn" value="Login"  />                    
                                <!-- No Account sign-up here! <a href="../admin/register/login.pp"> Create Admin Account</a></p> -->


                            </form>
                        </div>
                            

                            
                        </div>
                    </div>
                    
                    
                    
                </div>
                
                
                
                
                
                <div class="col-md-3">
                
                </div>
            </div>
        
        <br />

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
        
    