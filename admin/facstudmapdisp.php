



<!DOCTYPE html>
<html>
<head>

	   <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <title>
		how???
	</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./facstudmapdisp.css">
    <script src="./controller.js"></script>
	

	<style type="text/css">
		#tab {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#tab td, #tab th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tab tr:nth-child(even){background-color: #f2f2f2;}

#tab tr:hover {background-color: #ddd;}

#tab th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: center;
  background-color: #4CAF50;
  color: white;
}

#tab td{
	text-align: center;
}

	</style>
</head>
<body>
  <nav>
        <div class="label">Proctoring System</div>
        <div class="controls">
            <div class="home">
                <a href="admin_home/admin_home.php">
                 Home
                </a>
            </div>
        </div>
    </nav>
    <div class="container" >
       <div class="pending-wrapper">
        <div class="header">
           Students Mapped To Proctor
        </div>


            <?php
            session_start();
if(!isset($_POST['submit']))
{
?>


         <div class="wrapper">
            <form  method="post" action="">
             <select name="dept" class="select" required >
        <option value="select">select</option>        
    <option value="cse">cse</option>
    <option value="ece">ece</option>
    <option value="mech">mech</option>
    <option value="eee">eee</option>
  </select>
<br>
<br>
<br>
<br>
<br>
<input type="submit" name="submit" class="submit">
</form>

</div>

 


<?php
}

?>

<div class="pending-list">
<!-- <h1 style="position: relative;text-align: center;">Students Mapped To Proctor</h1> -->
<?php


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ost_project');

if(isset($_POST['submit']))
{
	?>

<table style="width:100%" id="tab">
  <tr>
    <th>FacultyID</th>
    <th>Facultyname</th>
    <th>StudentID</th>
    <th>Section</th>
  </tr>


<?php


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ost_project');


// $s ="select m.f_regdNo as fac,f.name,s.regdNo as stud,s.section from map_fac_to_student m join faculty f on m.f_regdNo=f.regdNo group by f_regdNo  join students s on m.s_regdNo=s.regdNo";

$dept=$_POST['dept'];
$s="select m.f_regdNo as fac,f.name,s.section,m.s_regdNo as stud from map_fac_to_student m join faculty f on m.f_regdNo=f.regdNo and f.department='$dept' join students s on s.regdNo=m.s_regdNo order by fac,stud ";


$res=mysqli_query($con,$s); 	

$rows=mysqli_fetch_assoc($res)
?>
<tr>




  	<td>   <?php  echo $rows["fac"];$a=$rows["fac"];      ?>    </td>
  	<td>   <?php  echo $rows["name"];     ?>    </td>
<td>   <?php  echo $rows["stud"];      ?>    </td>
<td>   <?php  echo $rows["section"];      ?>    </td>
  </tr>

<?php

$z=0;
while($rows=mysqli_fetch_assoc($res))
{




?>

  <tr>



  	<td>   <?php  if($a!=$rows["fac"]){echo $rows["fac"];$a=$rows["fac"];$z=1;} else{echo "";}      ?>    </td>
  	<td>   <?php if($z==1) echo $rows["name"];else {echo "";}      ?>    </td>
<td>   <?php  echo $rows["stud"];      ?>    </td>
<td>   <?php  echo $rows["section"];      ?>    </td>
  </tr>



<?php
$z=0;
}

?>




 </table>

<?php  } ?>

</div>

</div>
</div>
<!-- 
    <footer>
        <div class="text">Copyrights reserved</div>
    </footer> -->

</body>
</html>