<?php 
    require_once("includes/dbcon.php");
    
?>

<?php
    $date = date('Y');
?>
<?php
    if(isset($_POST['applogin_btn'])){
        $app_login_firstname = $_POST['fname'];
        $app_login_phone = $_POST['phone'];
        
        //Checking for blank fields///
        
        if(empty($app_login_firstname || $app_login_phone)){
            echo "All fields required";
        }else{
            
            $query = " SELECT * FROM register_applicants WHERE firstname = '{$app_login_firstname}' AND phone = '{$app_login_phone}' ";
            $run_query = mysqli_query($connection, $query);
            
            ///Testing to see if the user is present////
            
            if(mysqli_num_rows($run_query) == 1){
                
                /*session_start();
                ///To fetch back user details from the database///
                
                while($result = mysqli_fetch_assoc($run_query)){
                /// Using associative arrays to fetch individuals field as variables////
                    $app_id = $result['id'];
                    
                    //Storing the session id ///
                    
                    $_SESSION['app'] = $app_id; */
                    
                    ///redirecting to the members dashboard page if the login was successfu///
                    
                    header("location: ../applicants/jobs.php");
                    
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
      

    <div class="container bg-danger">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="panel-fluid panel-info">
                        <div class="panel-heading-fluid">
                            <h4 class="text-center text-info"><strong> WELCOME TO INFOSYS ONLINE JOB RECRUITMENT PLATFORM</strong></h4>
                        </div>
                        
                        <h5 class="text-justify"> <b>Our drive centers on equipping young minds, making them technologically liberated. We strongly believe they can build on the skill set we provide and be opportune to take their technological craft anywhere in the world. We achieve this by delivering cutting edge technologies to the students whilst creating a positive change in way of developing talent and harnessing their entrepreneurial skills.</b></h5>
                    
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
                            <h4 class="text-center"><strong>Applicant's Login</strong></h4>
                        </div>
                        <div class="panel-body">
                            <p align="center" class="text-danger"><b>Please enter your login details</b></p>
                            
                            <form id="form" method="POST" action="">
                
                                <p align="center"><b>First Name</b><br />
                                <input type="text" class="form-control" name="fname" placeholder="Enter your username" required /><br />

                                <b>Phone No</b><br />
                                <input type="password" class="form-control" name="phone" placeholder="Enter your password" /><br /></p>

                                <p align="center"><input type="submit" class="btn btn-info btn-xl" name="applogin_btn" value="Login" />
                                <hr>
                                </p>


                            </form>
                            <div>
<!DOCTYPE html>
<html>
<style>

/* Full-width input fields */

input[type=text],
input[type=password] {
    width: 50%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

/* Set a style for all buttons */

button {
    background-color: #48d1cc;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 55%;
}


.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #4682b4;
}

/* Center the image and position
the close button */

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 60%;
    border-radius: 20%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* The Modal (background) */

.modal {
   display: none;
   position: fixed;
   z-index: 1;
   left: 0;
   top: 0;
   width: 100%;
   height: 100%;
   overflow: auto;
   background-color: rgb(0,0,0);
   background-color: rgba(0,0,0,0.4);
   padding-top: 60px;
}


.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto;
    border: 1px solid #888;
    width: 50%;
}

/* The Close Button (x) */

.close {
    position: absolute;
    right: 25px;
    top: 0;
    color: #000;
    font-size: 35px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: red;
    cursor: pointer;
}

/* Add Zoom Animation */ 

.animate {
 -webkit-animation: animatezoom 0.6s;
 animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
 from {-webkit-transform: scale(0)}
 to {-webkit-transform: scale(1)}
}

@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}

/* Change styles for span and cancel
button on extra small screens */ 

@media screen and(max-width:30px){
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 55%;
    }
}
</style>
<body>
    <p align="center">No Account Sign-up here! <br />
<button onclick="document.
getElementById('id01')

.style.display='block'"
style="width:auto;">Signup
</button></p>

<div id="id01" class="modal">

<!------- Modal Form Processing ---------->
    
    
<!------- Modal Form Processing ---------->
    
<form method="post" class="modal-content animate"
action="process.php" enctype="multipart/form-data">
<div class="imgcontainer">
<span onclick="document
.getElementById('id01')

.style.display='none'"
class="close" title="Close Modal">
    &times;</span>

 <img src="images/logo.PNG"
 alt="Avatar"
 class="avatar">
    </div>


 <div class="container">
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
                    <input type="email"  name="email" size="90" border-radius="round" placeholder="Please Enter Your Email here...!" required /><br />
                    
                    <p><b>Nationality</b></p>
                    <select name="country">
                    <option value="None" selected>Select Your Nationality</option> 
                    <option value="Nigerian">Nigerian</option> 
                    <option value="Liberian">Liberian</option> 
                    <option value="Ghanaian">Ghanaian</option> 
                    <option value="Congolese">Congolese</option> 
                    <option value="Cameroonian">Cameroonian</option> 
                    <option value="Turkish">Turkish</option> 
                    <option value="Scotish">Scotish</option>
                    <option value="Argentine">Argentine</option> 
                    </select>  <br /> <br />
                    
                    <p><input type="radio" name="gender" value="Male"> Male &nbsp;&nbsp;
                    <input type="radio" name="gender" value="Female"> Female <br />
                    <br />
                    </p>                     
     

     
<p><button id="submit" name="submit"type="submit">Sign-up</button></p>

</div>


  </form>
</div>

<script>

// Get the modal 

var modal = document.getElementById
('id01');

// When the user clicks anywhere
outside of the modal, close it 

window.onclick = function(event) {
    if (event.target == modal) {
     modal.style.display = "none";
    }
}
</script>

</body>
</html>

                        </div>
                    </div>
                </div>
                
                <div class="col-md-3">
                
                </div>
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
        
    