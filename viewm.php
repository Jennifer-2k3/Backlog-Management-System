<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
            $regno=$_SESSION['regno'];

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
	<h2>Material:</h2>
	
	 </br>        
       <table border="2" width="100%">



 <tr>
        <th height="38"><div align="center"></div></th>
        <th><div align="center">SNO</div></th>
		 <th><div align="center">Subject</div></th>
		<th><div align="center">Assignmnet</div></th>

     
	
      <tr>


 <?php
	  

	  $qry=mysqli_query($conn,"select * from mate where sturegno='$regno'");
	$i=1;
	  while($row=mysqli_fetch_array($qry))
	  {
	  ?>
      <tr>
        <td height="38"><div align="center"></div></td>
        <td><div align="center"><?php echo $i;?></div></td>
		    <td><div align="center"><?php echo $row['sub'];?></div></td>
		 <td><div align="center"><a href="upload/<?php echo $row['img'];?>" download>download Material</a></div></td>


     
	  <?php
	  $i++;
	  }
	  ?>
      <tr>
        
        <td>&nbsp;</td>
        <td>&nbsp;</td>
       
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
