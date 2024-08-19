
<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
            $regno=$_SESSION['regno'];
			
			
			
			$aid=$_GET['id'];

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

	
	 </br>        
          </br></br>  
	   
	   
	   <form id="f1" name="f1" method="post" action="#" enctype="multipart/form-data">
  <table width="35%" border="0" align="center">
	
    <tr>
      <td height="40" colspan="2"  align="center" ><div class="style5"><h3>Upload </h></div></td>
    </tr>
	
  

	 <tr>
      <td height="39"><B> UPLOAD</td>
      <td><input name="img" type="file"  required/></td>
      
    </tr>
		
	
	
	
	<tr>
      <td height="53">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>



              
       </br></br>  
              	<?php
		
		
 	
if(isset($_POST['btn']))
{



$file_name=$_FILES['img']['name'];  
$file_loc=$_FILES['img']['tmp_name'];
$folder = "upload/";   

$path=move_uploaded_file($file_loc,$folder.$file_name);
$img=$file_name;
  
date_default_timezone_set("Asia/Calcutta"); // India time (GMT+5:30)

$dateTime = date('Y-m-d H:i:s');


$qry=mysqli_query($conn,"update assign set dt1='$dateTime',img1='$img' where id='$aid'");




	if($qry){?>
		 <script> alert('Assignment submitted successfully')
window.location.href=("view.php");</script>
<?php
}
}

?>
            
				   <!-- CONTACT SECTION END-->
    <div id="footer">
    </div>
     <!-- FOOTER SECTION END-->
              
        
    
</body>
</html>
