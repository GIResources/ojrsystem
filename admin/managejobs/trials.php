<?php
//creates the edit record form 

//since this form is used multiple times in this file, I have made it a function that is easily reusable 

function renderForm($id, $job_sn, $jobtitle, $jobcode, $qualification, $yearsofexperience, $agelimit, $preferredgender, $publicationdate,$expiringdate, $error)

{
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
                            <h2 class="text-center text-info"><strong>ADMIN JOB MODIFYING PLATFORM</strong></h2>
                            
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
                        <h4><p align="center"><strong class="text-info">EDIT AND MODIFY JOB NOW</strong></p></h4>
                    </div>
                    <div class="panel-body" align="center"> 
        




<?php

// if there are any errors, display them

if ($error != '')

{

echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';

}

?>



<form action="" method="post">

<input type="hidden" name="id" value="<?php echo $id; ?>"/>


<div>

<p><strong>ID:</strong> <?php echo $id; ?></p>


<strong>Job Title: *</strong> <select name="jobtitle"> <option value="<?php echo $jobtitle; ?>" selected></option> <option value="System Analysts">System Analyst</option><option value="Database Administrators">Database Administrators</option><option value="Web Developers">Web Developers</option><option value="Graduates">Graduates</option><option value="FrontDesk Officers">FrontDesk Officers</option><option value="Programmers">Programmers</option><option value="IT Educationists">IT Educationists</option> <option value="IT Specialists">IT Specialists</option><option value="ICT Tutors">ICT Tutors</option><option value="Secretaries">Secretaries</option><option value="Receptionists">Receptionists</option><option value="Marketers">Marketers</option><option value="Drivers">Drivers</option><option value="Business Administrators">Business Administrators</option><option value="Professional Graphics Designers">Professional Graphics Designers</option></select><br/>

<strong>Job Code: *</strong> <input type="text" name="jobcode" value="<?php echo $jobcode; ?>" /><br/>

<strong>Qualification: *</strong> <input type="text" name="qualification" value="<?php echo $qualification; ?>" /><br/>

<strong>Years of Experience: *</strong> <input type="text" name="yearsofexperience" value="<?php echo $yearsofexperience; ?>" /><br/>

<strong>Age Limit: *</strong> <input type="text" name="agelimit" value="<?php echo $agelimit; ?>" /><br/>

<strong>Preferred Gender *</strong> <select name="preferredgender"><option value="<?php echo $preferredgender; ?>" selected>Select Preferred Gender</option><option value="Male">Male</option><option value="Female">Female</option><option value="Both Genders">Both Genders</option></select><br/>

<strong>Publication Date: *</strong> <input type="text" name="publicationdate" value="<?php echo $publicationdate; ?>" /><br/>

<strong>Expiring Date: *</strong> <input type="text" name="expiringdate" value="<?php echo $expiringdate; ?>" /><br/>




<p>* Required</p>

<input type="submit" name="submit" value="Submit">

</div>

</form>

</body>

</html>

<?php

//Connecting to ojrs database///

require_once("includes/dbcon.php");

//This portion is to edit and modify specific record entry in the Job Table of the Database
    if(isset($_POST['submit'])){
	
	{

// confirm that the 'id' value is a valid integer before getting the form data

	if (isset($_POST['id']))

{

// get form data, making sure it is valid

	$id = $_POST['id'];
	
        $jobtitle = mysql_real_escape_string(htmlspecialchars($_POST['jobtitle']));

		$iobcode = mysql_real_escape_string(htmlspecialchars($_POST['jobcode']));

		$qualification = mysql_real_escape_string(htmlspecialchars($_POST['qualification']));

		$yearsofexperience = mysql_real_escape_string(htmlspecialchars($_POST['yearsofexperience']));

		$agelimit = mysql_real_escape_string(htmlspecialchars($_POST['agelimit']));

		$preferredgender = mysql_real_escape_string(htmlspecialchars($_POST['preferredgender']));

		$publicationdate = mysql_real_escape_string(htmlspecialchars($_POST['publicationdate']));

		$expiringdate = mysql_real_escape_string(htmlspecialchars($_POST['expiringdate']));
                
        // check that firstname/lastname fields are both filled in

if ($jobtitle ==''|| $jobcode ==''|| $qualification ==''||$yearsofexperience ==''||$agelimit ==''|| $preferredgender ==''|| $publicationdate ==''|| $expiringdate =='')
{

// generate error message

$error = 'ERROR: Please fill in all required fields!';



//error, display form

renderForm($id, $job_sn, $jobtitle, $jobcode, $qualification, $yearsofexperience, $agelimit, $preferredgender, $publicationdate,$expiringdate, $error);

        }else{
       
            ////Auto-generating Job Serial Numner (sn) for the Job Creation///
            
            $query = " SELECT * FROM jobtable ";
            $run_query = mysqli_query($connection, $query);
                
            $total_users = mysqli_num_rows($run_query);
            $increase_num = $total_users + 1;
            $job_sn = $increase_num;
       
	   //Updating record now...//
	   
            $query = " UPDATE jobtable SET 
                            jobtile = '{$job_title}', 
                            jobcode = '{$job_code}',
                            qualification = '{$job_qualification}',
                            yearsofexperience = '{$job_yoe}',
                            agelimit = '{$job_agelimit}',
                            preferredgender = '{$job_gender}',
                            publicationdate = '{$job_publicationdate}',
                            expiringdate = '{$job_expiringdate}'  WHERE id = '{$job_sn}' ";
            
            $run_query = mysqli_query($connection, $query);
            
            if($run_query == true){
                echo "Job Information successfully Updated";
            }else{
                echo " Failed update attempt";
            }
			
			// once saved, redirect back to the view page

header("Location: viewjobs.php");

}

}


else

{

// if the 'id' isn't valid, display an error

echo 'Error!';

}

}

//else

// if the form hasn't been submitted, get the data from the db and display the form

//{



// get the 'id' value from the URL (if it exists), making sure that it is valid (checing that it is numeric/larger than 0)

if (isset($_GET['id']) && is_numeric($_GET['id']) && $_GET['id'] > 0)

{

// query db

$id = $_GET['id'];

$result = mysqli_query($connection, "SELECT * FROM jobtable WHERE id=$id")

or die(mysql_error("Awaiting Resources"));

$row = mysqli_fetch_array($result);



// check that the 'id' matches up with a row in the databse

if($row)

{



// get data from db

$job_sn = $row['job_sn'];

$jobtitle = $row['jobtitle'];

$jobcode = $row['jobcode'];

$qualification = $row['qualification'];

$yearsofexperience = $row['yearsofexperience'];

$agelimit = $row['agelimit'];

$preferredgender = $row['preferredgender'];

$publicationdate = $row['publicationdate'];


$expiringdate = $row['expiringdate'];

// show form

renderForm($id, $job_sn, $jobtitle, $jobcode, $qualification,$yearsofexperience, $agelimit, $preferredgender,$publicationdate,$expiringdate, '');

}

else

// if no match, display result

{

echo "No results!";

}

}

else

// if the 'id' in the URL isn't valid, or if there is no 'id' value, display an error

{

echo 'Error!';

}

}
        
    
    

?>                    