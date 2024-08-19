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
</head>
<body >
   
 <div class="navbar navbar-inverse navbar-fixed-top " id="menu">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				<div style="display:flex;">
				<img src="images/logo.png" style="width:300px;height:100px;border-radius:50%;position:relative;left:-200px;padding:3px;"> 
				
				<h2  style="color:#FFFFFF;position:relative;left:-150px;">BISHOP HEBER COLLEGE</h2>
				</div>
            </div>
            <div class="navbar-collapse collapse move-me">
                <ul class="nav navbar-nav navbar-right">
                   <li ><a href="index.php">HOME</a></li>
					<li><a href="adminlog.php">ADMIN LOGIN</a></li>
                     <li><a href="staff.php">CLASS LOGIN</a></li>
                    <li><a href="student.php">STUDENT LOGIN</a></li>  
                </ul>
            </div>
           
        </div>
    </div>
	<br><br><br>
	<h1><center><B> BACKLOG MANAGEMENT SYSTEM </center></B> </h1>
	<?php
		include("dbconnect.php");
	extract($_POST);
	session_start();

	
	$qry1=mysqli_query($conn,"select * from noti where id='1'");
$row=mysqli_fetch_array($qry1);

?>

<marquee style="color:red;"><h2><?php echo $row['con']; ?></h2></marquee>
	
	<img src="images/download.jpg"  height="700px", width="100%"/>
	</div>
      <!--NAVBAR SECTION END-->
  <div  >
      <!-- COURSES SECTION END-->
    <div id="contact-sec"   >
          
             <!--/.HEADER LINE END-->
                   
     
              
              
</div>  
               </div>
                </div>
          </div> 
       </div>
    </div>
     <!-- FOOTER SECTION END-->
   
    <!--  Jquery Core Script -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!--  Core Bootstrap Script -->
    <script src="assets/js/bootstrap.js"></script>
    <!--  Flexslider Scripts --> 
         <script src="assets/js/jquery.flexslider.js"></script>
     <!--  Scrolling Reveal Script -->
    <script src="assets/js/scrollReveal.js"></script>
    <!--  Scroll Scripts --> 
    <script src="assets/js/jquery.easing.min.js"></script>
    <!--  Custom Scripts --> 
         <script src="assets/js/custom.js"></script>
</body>
</html>
