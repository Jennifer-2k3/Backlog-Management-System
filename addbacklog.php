<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
if(isset($_POST['btn']))
{




$qry=mysqli_query($conn,"insert into backk values('','$dep','$year','$sec','$sem','$regno','$sub')");
	if($qry){
	echo "<script>alert('inserted sucessfully')</script>";
	
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
      <td height="40" colspan="2"  align="center" ><div class="style5"><h3>Add Backlogs</h></div></td>
    </tr>
	
    <tr>
     
      <td width="41%" height="44">Department</td>
      <td width="59%"><select name="dep"  >

 <option value="BSC CS">BSC CS</option>
 <option value="MSC CS">MSC CS</option>
  
  
  
  </select >
      </td>
      
    </tr>
	                                                      
    <tr>
     
      <td height="38">Year</td>
      <td><select name="year"  >

  <option value="I YEAR">I YEAR</option>
  <option value="II YEAR">II YEAR</option>
   <option value="III YEAR">III YEAR</option>

 
  
  
  </select ></td>
     
    </tr>
	
    <tr>
     
      <td height="36">Sec</td>
      <td>
        <select name="sec"  >

  <option value="A">A</option>
  <option value="B">B</option>
  <option value="C">C</option>

  
  
  </select >
      </td>
     
    </tr>
	
	
	
	
	 <tr>
      <td height="39">Semester</td>
      <td> <select name="sem"  >
  <option value="semester1">Semester1</option >
  <option value="semester2">semester2</option>
  <option value="semester3">semester3</option>
   <option value="semester4">semester4</option>
   <option value="semester5">semester5</option>
   <option value="semester6">semester6</option>
  </select ></td>
      
    </tr>

    <tr>
      <td height="39">Examination</td>
      <td> <select name="sem"  >
  <option value="semester">Semester</option >
  <option value="internal">internal</option>

  </select ></td>
      
    </tr>
	
	
	
	
	
	
	
		
	
	
	
	 <tr>
      <td height="39">Register Number</td>
      <td><input name="regno" type="text"  required/></td>
      
    </tr>
	
	
	 <tr>
      <td height="39">Subject</td>
      <td><input name="sub" type="text"  required/></td>
      
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
