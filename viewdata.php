<?php
 	include("dbconnect.php");
	extract($_POST);
	session_start();
          $cregno=$_SESSION['cregno'];
		 $cdep=$_SESSION['cdep'];
		  $cyear=$_SESSION['cyear'];
		  $csec=$_SESSION['csec'];
		   $sub=$_GET['sub'];
		    $regno=$_GET['regno'];
			
			
		if(isset($_POST['btn']))
{

  	
			
		
			
	$qry = mysqli_query($conn, "INSERT INTO student_report (Roll_No, Name, Course, Attendance, Innovative, Seminar, Assignment, Test, Total, Result) 
VALUES ('$rno', '$name', '$cour', '$atten', '$ino', '$seminar', '$ass', '$tes', '$tot', '$res')");

		

       if($qry){
	echo "<script>alert('Marks Updated sucessfully')</script>";
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
	
	
	table,td{
	text-align:center;
	
	}
	
	
	
	
	  table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        border: 1px solid black;
        text-align: center;
        padding: 8px;
    }

    th {
        background-color: #f2f2f2;
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
	
	<br /><br /><br />
      <table border="2" width="50%" >



 <tr>
        <th height="38"><div align="center"></div></th>
        <th><div align="center">SNO</div></th>
        <th><div align="center">Submission Date</div></th>
			 <th><div align="center">Type</div></th>
		 <th><div align="center">Subject</div></th>
		<th><div align="center">Work Assigned</div></th>
		<th><div align="center">View</div></th>
     
	
      <tr>


 <?php
	  

	  $qry=mysqli_query($conn,"select * from assign where sregno='$regno' and sub='$sub'");
	$i=1;
	  while($row=mysqli_fetch_array($qry))
	  {
	  ?>
      <tr>
	  
        <td height="38"><div align="center"></div></td>
        <td><div align="center"><?php echo $i;?></div></td>
        <td><div align="center"><?php echo $row['dt'];?></div></td>
			    <td><div align="center"><?php echo $row['type'];?></div></td>
		    <td><div align="center"><?php echo $row['sub'];?></div></td>
		 <td><div align="center"><a href="upload/<?php echo $row['img'];?>" download>work assigned </a></div></td>
		       <td><div align="center"><a href="upload/<?php echo $row['img'];?>" download>View Files </a></div></td>

     
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
<br /><br /><br /><br /><br /><br />

	   
	   <table style="width:100%">
	   
	   <tr>
	   
	   </tr>
	   <tr>
	   
	   
	   </tr>
	   
	   </table>
	   
	   
	   
	   <?php
	   
	  $qry1 = mysqli_query($conn, "SELECT * FROM student_report WHERE Roll_No='$regno' AND Course='$sub'");
		
		
		if(mysqli_num_rows($qry1)=='0'){
	    ?>
	   
	   
	   
	  <form method="post">	
    <table>
        <tr>
            <th></th>
            <th>SNO</th>
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
		
		
		
		 
	  
            <td></td>
            <td></td>
            <td><input type="text" name="rno" readonly="" value="<?php echo $regno; ?>"></td>
            <td><input type="text" name="name"></td>
            <td><input type="text" name="cour" readonly="" value="<?php echo $sub; ?>"></td>
            <td><input type="text" name="atten"></td>
            <td><input type="text" name="ino"></td>
            <td><input type="text" name="seminar"></td>
            <td><input type="text" name="ass"></td>
            <td><input type="text" name="tes"></td>
            <td><input type="text" name="tot"></td>
            <td><input type="text" name="res"></td>
			<td><input type="submit" name="btn"></td>
        </tr>
    </table>
</form>

<?php }else{




 $qry1 = mysqli_query($conn, "SELECT * FROM student_report WHERE Roll_No='$regno' AND Course='$sub'");
    $r1 = mysqli_fetch_array($qry1);
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



















<?php } ?>
	   
	   
	   
	   
	   
	   
	   
              
            
				   <!-- CONTACT SECTION END-->
    <div id="footer">
    </div>
     <!-- FOOTER SECTION END-->
              
        








		
		
		
		
    
</body>
</html>
