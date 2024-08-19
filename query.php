<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
	
	
	$sub=$_GET['sub'];
            $regno=$_SESSION['regno'];
			
			
			$qry1=mysqli_query($conn,"select * from stureg where regno='$regno'");
			
			$row1=mysqli_fetch_array($qry1);
			
			
			$sec=$row1['sec'];
			$year=$row1['year'];
			$dep=$row1['dep'];
			
			
			
			
			
			
			
			if(isset($_POST['btn'])){
			
			
			
			
			
			
			$qry=mysqli_query($conn,"insert into que values('','$regno','$dep','$year','$sec','$sub','$ques','')");
			
			
			
			
			
			if($qry){
			echo "<script>alert('Your Query has been submitted')</script>";
			
			
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
	<h2>My Backlog Details:</h2>
	
	 </br>        
   <form id="form1" name="form1" method="post" action="">
        <p>&nbsp;</p>
      
                <table width="100%" border="0">
                 
                 
                  <tr>
                    <td><div align="center" class="style35">Query</div></td>
                    <td><input name="ques" type="text" id="ques" /></td>
                  </tr>
                  <tr>
                    <td><div align="center"><span class="style35"><span class="style37"></span></span></div></td>
                    <td><input name="btn" type="submit" id="btn" value="SEND" />                    </td>
                  </tr>
                  <tr>
				  
                    <td><p>&nbsp;</p>
                        <p>&nbsp;</p>
                      <div align="center">
                          <input name="btn2" type="submit" id="btn2" value="Get The Answer" />
                        </div>
                      <p align="center">&nbsp;</p></td>
                    <td>&nbsp;</td>
                  </tr>
                </table>
				</form>
                <table width="100%" border="1">
                  <tr>
					      <td width="26%"><div align="center" class="style40">Question</div></td>
         
              
                    <td width="22%"><div align="center" class="style40">Answer</div></td>
                  </tr>
                  <?php
   if(isset($_POST['btn2']))
 {
			   $ert=mysqli_query($conn,"select * from que where regno='$regno' && sub='$sub'");
while($row=mysqli_fetch_array($ert))
	 	 {
		 
	 ?>
                  <tr>
                    <td><div align="center" ><?php echo $row['ques'];?></div></td>
                    <td><div align="center" ><?php echo $row['ans'];?></div></td>
                   
                  </tr>
                  <?php
	}
	}
	?>
                 
                </table>
                <p>&nbsp;</p>
                </div>
            </div></td>
          </tr>
        </table>
        <p>&nbsp;</p>
        <p>&nbsp;</p>
      </form>      
      <p>&nbsp;</p>
    </td>
  </tr>
</table>


              
       </br></br>  
              
            
				   <!-- CONTACT SECTION END-->
    <div id="footer">
    </div>
     <!-- FOOTER SECTION END-->
              
        
    
</body>
</html>
