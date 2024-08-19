<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{

  
$qry1=mysqli_query($conn,"select * from stureg where regno='$regno' ");
$num=mysqli_num_rows($qry1);
if($num==1)
{
	echo "<script>alert('register number already taken')</script>";
}else{

$qry=mysqli_query($conn,"insert into stureg values('','$name','$dob','$gender','$sec','$year','$dep','$regno','$psw')");
	if($qry){
	echo "<script>alert('inserted sucessfully')</script>";
	}
	
}
}

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
                   <li ><a href="adminhome.php">HOME</a></li>
					<li><a href="stureg.php">ADD STUDENT</a></li><li><a href="addbacklog.php">ADD BACKLOG</a></li>
           
					<li><a href="index.php">LOGOUT</a></li>  
                </ul>
            </div>
           
        </div>
    </div>
	<img id="back"/>
	</div>
	 </br>        
           </br>  <form id="f1" name="f1" method="post" action="#" enctype="multipart/form-data">
  <table width="35%" border="0" align="center">
	
    <tr>
      <td height="40" colspan="2"  align="center" ><div class="style5"><h3>Student Registration</h></div></td>
    </tr>
	
    <tr>
     
      <td width="41%" height="44">Name</td>
      <td width="59%"><input name="name" type="text" id="name" required/>
      </td>
      
    </tr>
	
    <tr>
     
      <td height="38">Gender</td>
      <td><input name="gender" type="radio" value="male" required/>
        Male
          <input name="gender" type="radio" value="female" /> 
          Female</td>
     
    </tr>
	
    <tr>
     
      <td height="36">DOB</td>
      <td>
        <input name="dob" type="date"   required/>
      </td>
     
    </tr>
	
	
	
	 <tr>
      <td height="39">department</td>
      <td><select name="dep"  >

 <option value="BSC CS">BSC CS</option>
 <option value="MSC CS">MSC CS</option>

  
  
  </select ></td>
      
    </tr>
	
	
	 <tr>
      <td height="39">Year of study</td>
      <td><select name="year"  >

  <option value="I YEAR">I YEAR</option>
  <option value="II YEAR">II YEAR</option>
   <option value="II YEAR">III YEAR</option>

 
  
  
  </select ></td>
      
    </tr>
		
		
		<tr>
      <td height="41">Section</td>
      <td><select name="sec"  >

  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>

  
  
  </select ></td>
    </tr>
	
    <tr>
      <td height="40">Register Number</td>
      <td><input name="regno" type="text" id="uname" required/></td>
    </tr>
	
    <tr>
     <td height="42">Password</td>
      <td><input name="psw" type="password" id="psw" required/></td>
    </tr>
	
	
	<tr>
      <td height="53">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>
               
      </br></br> </br>          
 
<br />
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
