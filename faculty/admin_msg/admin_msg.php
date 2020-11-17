<?php
session_start();
if (!isset($_SESSION['regdNo'])) header("Location:../../../common/login/login.php");
?>


<!DOCTYPE html>
<html>
<head>
	<title>
		MessageProctors
	</title>
	<link rel="stylesheet" href="admin_msg.css" />
</head>
<body>

<nav>
        <div class="label">Proctoring System</div>
         <div class="controls">
            <a href="../../faculty/faculty_home/facultyHome.php" class="home">
                <div>Home</div>
            </a>
        </div>
</nav>

<?php

session_start();


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ost_project');


$regdNo=$_SESSION['regdNo'];
                $s = "SELECT *
  FROM messages ";



$res=mysqli_query($con,$s);
?>
<br>
<br>
<br>
<br>
<br>
<?php

while($rows=mysqli_fetch_assoc($res))
{

?>


<br><br>
<div class="container">
    <div class="message-blue">
        <p class="message-content">
<?php
echo $rows['msg'];
// echo "ctfyguhi";
?>
</p>
  <div class="message-timestamp-left"><?php 
  $date = new DateTime('now', new DateTimeZone('Asia/Kolkata'));
 echo $date->format('d-m-Y H:i:s');
       ?></div>
    </div>









</div>






<?php
}
?>


</body>
</html>