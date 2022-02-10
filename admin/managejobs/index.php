<!DOCTYPE html>
<html>

    <head>
        <meta name="viewport" content="width=device-width"/>
        <title>Admin Job Dashboard</title>
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
                            <h1 class="text-center text-danger"><strong>ADMIN DASHBOARD: MANAGE JOBS MODULE</strong></h1>
                            
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
                        <h4><p align="center"><strong class="text-info">JOBS CONTROL PANEL</strong></p></h4>
                    </div>
                    <div class="panel-body" align="center"> 
        <form id="form" method="POST" action="" enctype="multipart/form-data" style="padding-left: 20px; padding-right:20px; color: blue; width:50%; ">
                                              
            <a href="../managejobs/createjobs.php"><p align="center"><input type="button" name="admin_reg_submit_btn" value="CREATE JOBS" class="btn btn-success" /></p></a>
            
            <a href="../managejobs/viewjobs.php"><p align="center"><input type="button" name="admin_reg_submit_btn" value="EDIT JOBS" class="btn btn-info" /></p></a>
            
            <a href="../managejobs/viewjobs.php"><p align="center"><input type="button" name="admin_reg_submit_btn" value="VIEW JOBS" class="btn btn-warning" /></p></a>
            
            <a href="../managejobs/deletejobs.php"><p align="center"><input type="button" name="admin_reg_submit_btn" value="DELETE JOBS" class="btn btn-danger" /></p></a>
            
            <a href="../managejobs/search.php"><p align="center"><input type="button" name="admin_reg_submit_btn" value="SEARCH JOBS" class="btn btn-black" /></p></a>            
            
            
            <a href="../managejobs/print.php"><p align="center"><input type="button" name="admin_reg_submit_btn" value="PRINT JOBS" class="btn btn-success" /></p></a>
                    
                        
        </form>
        <p> </p>

<!----- Internal Job Search codes begin here ------->
                        
<p align="center"><form action="" method="POST" style="padding-left: 20px; padding-right:20px; color: blue; width:50%; text:center; ">

<input type="text" name="query" placeholder="Search Jobs Here!" /> <input type="submit" value="Search Jobs" class="btn btn-danger" />

 
 

</form>

</p>


                    
<?php

require_once('includes/dbcon.php');


if (isset($_POST['POST'])) { 

  $jobcategory=($_POST['jobcategory']);
  $jobtitle=($_POST['jobtitle']);
$jobcode=($_POST['jobcode']);


$jobcategory = mysql_real_escape_string(htmlspecialchars($_POST['jobcategory']));
    
$jobtitle = mysql_real_escape_string(htmlspecialchars($_POST['jobtitle']));

$jobcode = mysql_real_escape_string(htmlspecialchars($_POST['jobcode']));

}
   @ $query = $_POST['query']; 
    // gets value sent over search form
     
    $min_length = 3;
    // you can set minimum length of the query if you want
     
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
         
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
         
        $query = mysqli_real_escape_string($connection, $query);
        // makes sure nobody uses SQL injection
         
        $raw_results = mysqli_query($connection, "SELECT * FROM jobtable
            WHERE (`jobcategory` LIKE '%".$query."%') OR (`jobtitle` LIKE '%".$query."%') OR (`jobcode` LIKE '%".$query."%')") or die(mysql_error());
             
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our table
         
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
         
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
             
            while($results = mysqli_fetch_array($raw_results)){
				echo "<table border='1' cellpadding='10' bordercolor='green' bgcolor='white' >";
				echo "<tr> <th>ID</th> <th>Job Serial No</th> <th>Job Category</th><th>Job Title</th> <th>Job Code</th><th>Qualification</th><th>Discipline</th><th>Years of Experience</th><th>Age Limit</th> <th>Preferred Gender</th><th>Publication Date</th> <th>Expiring Date</th></tr>";
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
			 echo "<tr>";
			 // . $row['id'] . '</td>';
                echo '<td>'.$results['id'].'</td>';
				echo '<td>'.$results['job_sn'].'</td>';
				echo '<td>'.$results['jobcategory'].'</td>';
				echo '<td>'.$results['jobtitle'].'</td>';
				echo '<td>'.$results['jobcode'].'</td>';
				echo '<td>'.$results['qualification'].'</td>';
				echo '<td>'.$results['discipline'].'</td>';
				echo '<td>'.$results['yearsofexperience'].'</td>';
				echo '<td>'.$results['agelimit'].'</td>';
				echo '<td>'.$results['preferredgender'].'</td>';
				echo '<td>'.$results['publicationdate'].'</td>';
				echo '<td>'.$results['expiringdate'].'</td>';


				
				echo "</tr>";
				echo "</table>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
             
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
         
    }
    else{ // if query length is less than minimum
        //echo "Minimum length is ".$min_length;
	//}
    }
?>
                    
<!----- Internal Job Search codes stop here ------->
                    
                    &nbsp;&nbsp; <a href="../../index.php"> <strong>Home</strong></a> &nbsp;&nbsp; || <a href="../index.php"><strong>Dashboard Home</strong></a> &nbsp; &nbsp; || <a href="../managejobs/"><strong>Refresh Page</strong></a>
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