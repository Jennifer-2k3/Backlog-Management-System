<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();

if(isset($_POST['btn']))
{
$qry=mysqli_query($conn,"select * from admin where uname='$uname' && psw='$password'");
$num=mysqli_num_rows($qry);
if($num==1)
{
?>
<script>alert('welcome to admin home page');
</script>
<?php

header("location:adminhome.php");
}
else
{
echo "<script>alert('User Name Password Wrong.....')</script>";

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
                    <li ><a href="index.php">HOME</a></li>
					<li><a href="adminlog.php">ADMIN LOGIN</a></li>
                     <li><a href="staff.php">CLASS LOGIN</a></li>
                    <li><a href="student.php">STUDENT LOGIN</a></li>  
                </ul>
            </div>
           
        </div>
    </div>
	<img id="back"/>
	</div>
	 </br>        
           </br>  </br>          
  <form id="form1" name="form1" method="post" action="">
	   <table width="46%" border="0" align="center">
         <tr>
           <td colspan="2" rowspan="1"><div align="center" class="style1"><strong><font size="+1">Admin Login</font> </div></td>
		 </tr>
			<tr>
		<td width="48%">&nbsp;</td>
		    <td width="52%">&nbsp;</td>
	  		</tr>
         </tr>
         <tr>
           <td height="31"align="center"><span class="style2"><strong>User Name </strong></span></td>
           <td><label>
             <input name="uname" type="text" id="uname" />
           </label></td>
         </tr>
         <tr>
           <td height="44" align="center"><span class="style2"><strong>Password</strong></span></td>
           <td><label>
             <input name="password" type="password" id="password" />
           </label></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td rowspan="2"><label>
             <input name="btn" type="submit" id="btn" value="Login" />
             <input type="reset" name="Submit2" value="Cancel" />
           </label></td>
         </tr>
  </table>
</form>
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
