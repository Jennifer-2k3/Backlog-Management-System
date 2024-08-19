<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
          $cregno=$_SESSION['cregno'];
		 $cdep=$_SESSION['cdep'];
		  $cyear=$_SESSION['cyear'];
		  $csec=$_SESSION['csec'];
		   $sub=$_GET['sub'];
		

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
	
	
	table,td{
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
                   <li ><a href="classhome.php">HOME</a></li>
					
                    <li><a href="index.php">LOGOUT</a></li>  
                </ul>
            </div>
           
        </div>
    </div>
	
	
 <?php
	  

	  $qry=mysqli_query($conn,"select * from backk where dep='$cdep' && year='$cyear' && sec='$csec' && sub='$sub'");
	  
	 $num=mysqli_num_rows($qry);
	 
	 ?>
	
	<img id="back"/>
	</div>
	<h2>Subject:<?php echo $sub;?> </h2>
	<h2>Total Number of Students:<?php echo $num;?> </h2>
	
	 </br>        
       <table border="2" width="100%">



 <tr>
        <th height="38"><div align="center"></div></th>
        <th><div align="center">SNO</div></th>
      
		<th><div align="center">Register Number</div></th>
     
	
      <tr>

<?php
	  
	$i=1;
	  while($row=mysqli_fetch_array($qry))
	  {
	  ?>
      <tr>
        <td height="38"><div align="center"></div></td>
        <td><div align="center"><?php echo $i;?></div></td>
       
		        <td><div align="center"><a href="viewdata.php?sub=<?php echo $sub;?>&regno=<?php echo $row['regno'];?>"><?php echo $row['regno'];?>  </a></div></td>

     
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
	   
	   <h1>Upload Assignment</h1>
	   
	   <form id="f1" name="f1" method="post" action="#" enctype="multipart/form-data">
  <table width="35%" border="0" align="center">
	
    <tr>
      <td height="40" colspan="2"  align="center" ><div class="style5"><h3></h></div></td>
    </tr>
	
  
	
	
	
	
	<tr>
      <td height="39">Date And Time</td>
      <td><input name="dt" type="datetime-local"  required/></td>
      
    </tr>
	
	
	 <tr>
      <td height="39" >Assignment</td>
      <td><input name="img" type="file"   required/></td>
      
    </tr>
	
	
	
	
	 <tr>
      <td height="39">Type</td>
      <td><select name='type'>
	  <option value="Assignment1">Assignment1</option>
	   <option value="Assignment2">Assignment2</option>
	  <option value="seminar">seminar</option>
	  <option value="innovative">innovative</option>
	  <option value="test">Test</option>
	  
	  </select></td>
      
    </tr>
		
	
	
	
	<tr>
      <td height="53">&nbsp;</td>
      <td><input name="btn" type="submit" id="btn" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>



  </br></br>  
	   
	     <h1>Upload Material</h1>
	   <form id="f1" name="f1" method="post" action="#" enctype="multipart/form-data">
  <table width="35%" border="0" align="center">
	
    <tr>
      <td height="40" colspan="2"  align="center" ><div class="style5"><h3>
	  </h3></div></td>
    </tr>
	
  
	
	
	
	
	
	
	
	 <tr>
      <td height="39">Choose Material</td>
      <td><input name="img" type="file"  required/></td>
      
    </tr>
		
	
	
	
	<tr>
      <td height="53">&nbsp;</td>
      <td><input name="btn1" type="submit" id="btn1" value="Submit" />
      <input type="reset" name="Submit2" value="Reset" /></td>
    </tr>
  </table>
</form>
	   
	   
	   
	   
	   
	   
	   
	   
	   <h1>Student Queries</h1>
	   
	   <form method="post" action=""> 
	   
	   
	     <table width="100%" border="1" align="center">
                  <tr>
				  
				   <td ><div align="center" class="style40">Register Number</div></td>
                               				  
					      <td ><div align="center" class="style40">Query</div></td>
         
              
                    <td ><div align="center" class="style40">Answer</div></td>
                  </tr>
                  <?php

			   $ert=mysqli_query($conn,"select * from que where dep='$cdep' && year='$cyear'  && sec='$csec' && sub='$sub' && ans=''");
while($row=mysqli_fetch_array($ert))
	 	 {
		 
	 ?>
                  <tr>
				  <td><div align="center" ><?php echo $row['regno'];?></div></td>
                    <td><div align="center" ><?php echo $row['ques'];?></div></td>
                    <td><input type="text" name="ans" /><input type="hidden" name="qid"  value="<?php echo $row['id'];?>"/></div></td>
					 <td><input type="submit" name="btn3" /></div></td>
                   
                  </tr>
                  <?php
	
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
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
	   
              
            
				   <!-- CONTACT SECTION END-->
    <div id="footer">
    </div>
     <!-- FOOTER SECTION END-->
              
        
		<?php
		
		
 	
if(isset($_POST['btn']))
{



$file_name=$_FILES['img']['name'];  
$file_loc=$_FILES['img']['tmp_name'];
$folder = "upload/";   

$path=move_uploaded_file($file_loc,$folder.$file_name);
$img=$file_name;
  

 $qry3=mysqli_query($conn,"select * from backk where dep='$cdep' && year='$cyear' && sec='$csec' && sub='$sub'");
	  
	 
	  
	$i=1;
	  while($row3=mysqli_fetch_array($qry3))
	  {
	  
	  
	  
	  $stureg=$row3['regno'];
	

$qry=mysqli_query($conn,"insert into assign values('','$cdep','$cyear','$csec','$dt','$img','$type','$sub','$cregno','$stureg','','')");


}

	if($qry){?>
		 <script> alert('Assignment Added successfully')
window.location.href=("viewstu.php?sub=<?php echo $sub; ?>");</script>
<?php
}
}

?>
		
				<?php
		
		
 	
if(isset($_POST['btn1']))
{



$file_name=$_FILES['img']['name'];  
$file_loc=$_FILES['img']['tmp_name'];
$folder = "upload/";   

$path=move_uploaded_file($file_loc,$folder.$file_name);
$img=$file_name;
  

 $qry3=mysqli_query($conn,"select * from backk where dep='$cdep' && year='$cyear' && sec='$csec' && sub='$sub'");
	  
	 
	  
	$i=1;
	  while($row3=mysqli_fetch_array($qry3))
	  {
	  
	  
	  
	  $stureg=$row3['regno'];
	

$qry=mysqli_query($conn,"insert into mate values('','$cdep','$cyear','$csec','$dt','$img','$sub','$cregno','$stureg')");


}

	if($qry){?>
		 <script> alert('Material Added successfully')
window.location.href=("viewstu.php?sub=<?php echo $sub; ?>");</script>
<?php
}
}

?>









		<?php
		
		
 	
if(isset($_POST['btn3']))
{


$qry=mysqli_query($conn,"update que set ans='$ans' where id='$qid'");

	if($qry){?>
		 <script> alert('Answerd successfully')
window.location.href=("viewstu.php?sub=<?php echo $sub; ?>");</script>
<?php
}
}

?>









		
		
		
		
    
</body>
</html>
