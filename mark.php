<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	
	error_reporting(0);
	$sub=$_GET['sub'];
            $regno=$_SESSION['regno'];
			
			
			$qry1=mysqli_query($conn,"select * from stureg where regno='$regno'");
			
			$row1=mysqli_fetch_array($qry1);
			
			
			$sec=$row1['sec'];
			$year=$row1['year'];
			$dep=$row1['dep'];
			
	
?> 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Backlog Management System</title>
    <!-- BOOTSTRAP CORE STYLE CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME CSS -->
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
     <!-- FLEXSLIDER CSS -->
<link href="assets/css/flexslider.css" rel="stylesheet" />
    <!-- CUSTOM STYLE CSS -->
    <link href="assets/css/style.css" rel="stylesheet" />    
  <!-- Google	Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css' />
	<style>
	#back{
	background-image:url("images/download.jpg");background-repeat:no-repeat;
	height:600px;
	width:100%;
	background-position:left;
	}
	
	input{
	text-align:center;
	}
	</style>
</head>
<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button><div style="display:flex;">
				<img src="images/logo.png" style="width:300px;height:100px;border-radius:50%;position:relative;left:-200px;padding:3px;"> 
				
				<h2  style="color:#FFFFFF;position:relative;left:-150px;">BISHOP HEBER COLLEGE</h2>
				</div>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                   <li ><a href="stuhome.php">HOME</a></li>
				    <li ><a href="view.php">VIEW ASSIGNMENT</a></li>
					<li ><a href="viewm.php">VIEW MATRIALS</a></li>
                    <li><a href="index.php">LOGOUT</a></li>  
                </ul>
            </div>
           
        </div>
    </div>
	<img id="back"/>
	</div>
	<h2>My Marks Details:</h2>
	
	 </br>  
	 
	 
	 
	 
	 
	       
   
		
		<?php    
		
	
    $qry = mysqli_query($conn, "SELECT * FROM student_report WHERE Roll_No='$regno' AND Course='$sub'");
    $r1 = mysqli_fetch_array($qry);
?>
<form method="post">
    <table border="2" width="100%">
        <tr>
           
            <th>Roll No</th>
            <th>Name</th>
            <th>Course</th>
            <th>Attendance</th>
            <th>Innovative</th>
            <th>Seminar</th>
            <th>Assignment</th>
            <th>Test</th>
            <th>Total</th>
            <th>Result</th>
        </tr>
        <tr>
         
            <td><input type="text" name="rno" readonly value="<?php echo $r1['Roll_No']; ?>"></td>
            <td><input type="text" name="name" readonly value="<?php echo $r1['Name']; ?>"></td>
            <td><input type="text" name="cour" readonly value="<?php echo $r1['Course']; ?>"></td>
            <td><input type="text" name="atten" readonly value="<?php echo $r1['Attendance']; ?>"></td>
            <td><input type="text" name="ino" readonly value="<?php echo $r1['Innovative']; ?>"></td>
            <td><input type="text" name="seminar" readonly value="<?php echo $r1['Seminar']; ?>"></td>
            <td><input type="text" name="ass" readonly value="<?php echo $r1['Assignment']; ?>"></td>
            <td><input type="text" name="tes" readonly value="<?php echo $r1['Test']; ?>"></td>
            <td><input type="text" name="tot" readonly value="<?php echo $r1['Total']; ?>"></td>
            <td><input type="text" name="res" readonly value="<?php echo $r1['Result']; ?>"></td>
        </tr>
    </table>
</form>



              
       </br></br>  
              
            
				   <!-- CONTACT SECTION END-->
    <div id="footer">
    </div>
     <!-- FOOTER SECTION END-->
              
        
    
</body>
</html>
