<?php
session_start();

// sleep(5);
// header("Location: https://www.google.com");
// // header( "refresh:0;url=https://www.google.com" );


$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'ost_project');
$f_regdNo = $_GET['f_regdNo'];
$s_regdNo = $_GET['s_regdNo'];
$department=$_GET['department'];

//faculty and student reg no obtained




$reg="INSERT INTO map_fac_to_student values('$s_regdNo','$f_regdNo')" ;
       
mysqli_query($con,$reg);

$reg="select * from students where regdNo='$s_regdNo'" ;
       
$res=mysqli_query($con,$reg);


$rows=mysqli_fetch_assoc($res);

$year=$rows["year"];




                                            // $message="Student Mapped Successfully ";
                                            // echo "<script type='text/javascript'>alert('$message');</script>";
                                      

?>


<script type="text/javascript">
	
	window.location.href='../../admin/map/addstudtofac.php?regdNo=<?php echo $f_regdNo."&department=".$department."&year=".$year;?>';
</script>

<!-- <!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<button  onclick="window.location.href='../../admin/map/addstudtofac.php?regdNo=<?php echo $f_regdNo."&department=".$department;?>'" active >
</button>
</body>
</html>


<?php


?> -->