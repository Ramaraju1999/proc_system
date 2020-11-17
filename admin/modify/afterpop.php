<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'ost_project');

if(isset($_POST['submit']))
{

$pswd=$_POST['pswd'];
if($pswd!='admin')
{
	header(upgrade.php);
}
else{
	
}
}


?>
<!DOCTYPE html>
<html>
<head>
	<title>
		CrossCheck
	</title>
</head>
<body>

	<form method="post" action="" style="position: relative;align-items: center;">
		<br><br>
		<label style="font-size: 20px;"><b>Enter Password:</label></b></label>
		<br>
		<input type="password" name="pswd" style="height: 20px;" >
		<br><br><br><br>
		<input type="submit" name="sub" value="Submit" style=" background-color: #4CAF50; border: red;
   border-radius: 50px;
    font-size: 20px;
  color: white;position: relative;margin-left: 50px;" >
	</form>

</body>
</html>