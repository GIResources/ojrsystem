<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width"/>
        <title>Admin Registration Dashboard</title>
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

       <div class="container bg-success">
            <div class="row">
                               
                <div class="col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h1 class="text-center text-danger"><strong>ADMIN DASHBOARD: REGISTRATION MODULE</strong></h1>
                            
                        </div>
                        </div>
                </div>
            </div>
    </div>

    <!-- POST PANEL - STARTS HERE!
================================================== -->
        
    <div class="container bg-success">
        <div class="row">
        <div class="col-xs-1 col-sm-1 col-md=1">
        
        </div>
            
        <div class="col-xs-10 col-sm-10 col-md=10">
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h4><p align="center"><strong class="text-info">REGISTRATION CONTROL PANEL</strong></p></h4>
                    </div>
                    <div class="panel-body" align="center"> 
        <form id="form" method="POST" action="" enctype="multipart/form-data" style="padding-left: 20px; padding-right:20px; color: blue; width:50%; ">
                                              
            <a href="../registrations/registerapps.php"><p align="center"><input type="button" name="admin_reg_submit_btn" value="REGISTER APPLICANT" class="btn btn-success" /></p></a>
            <a href="../registrations/registeradmins.php"><p align="center"><input type="button" name="admin_reg_submit_btn" value="REGISTER ADMIN" class="btn btn-success" /></p></a>
            
            <hr>
            
            <a href="../registrations/viewapps.php"><p align="center"><input type="button" name="admin_reg_submit_btn" value="VIEW JAPPLICANTS LIST" class="btn btn-warning" /></p></a>
            <a href="../registrations/viewadmins.php"><p align="center"><input type="button" name="admin_reg_submit_btn" value="VIEW ADMINS LIST" class="btn btn-warning" /></p></a>
            
            <hr>
            
            <a href="../registrations/searchapps.php"><p align="center"><input type="button" name="admin_reg_submit_btn" value="SEARCH APPLICANTS LIST" class="btn btn-black" /></p></a>            
            <a href="../registrations/searchadmins.php"><p align="center"><input type="button" name="admin_reg_submit_btn" value="SEARCH ADMIN LIST" class="btn btn-black" /></p></a>            
            
            <hr>
            <a href="../registrations/deleteapps.php"><p align="center"><input type="button" name="admin_reg_submit_btn" value="DELETE APPLICANTS" class="btn btn-danger" /></p></a>
            <a href="../registrations/deleteadmins.php"><p align="center"><input type="button" name="admin_reg_submit_btn" value="DELETE ADMINS" class="btn btn-danger" /></p></a>
            
                        
        </form>
       
 
   <p>&nbsp;&nbsp; <a href="../../index.php"> <strong>Home</strong></a> &nbsp;&nbsp; || <a href="../index.php"><strong>Dashboard Home</strong></a> &nbsp; &nbsp; || <a href="../registrations/"><strong>Refresh Page</strong></a></p>
                    </div>
                </div>
            </div>
            
        <div class="col-xs-1 col-sm-1 col-md=1">  
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