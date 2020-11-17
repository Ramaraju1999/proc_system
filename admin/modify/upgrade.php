<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'ost_project');

if(isset($_POST['submit']))
{


  if($_POST['pswd']=='admin')
  {
$s="Update students
Set year = year + 1";
$res=mysqli_query($con,$s);



  $s = "SELECT *
  FROM students where year=5";



$res=mysqli_query($con,$s);


try{
while($rows=mysqli_fetch_assoc($res))
{

$z=$rows['regdNo'];
$s = "delete from map_fac_to_student where s_regdNo=$z";

mysqli_query($con,$s);





$s = "delete from students where regdNo=$z";


mysqli_query($con,$s);

}

}
catch(Exception $e) {}

   $message="Upgraded Successfully";
echo "<script type='text/javascript'>alert('$message');</script>";
header( "refresh:0;url=upgrade.php" );

}
else
{
   $message="Password Incorrect";
echo "<script type='text/javascript'>alert('$message');</script>";
header( "refresh:0;url=upgrade.php" );
}

}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Upgrade Students
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./modify.css">
    <script src="./controller.js"></script>
</head>

<body>
    <nav>
        <div class="label">Proctoring System</div>
        <div class="controls">
            <div class="home">
                <a href="../admin_home/admin_home.php">
                 Home
                </a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="header">
            Upgrade Students
        </div>
        <div class="searchbar-wrapper">
            <div class="searchbar">
                <form action="upgrade.php" method="post" name="form">
                  <br><br><br><br>

                    <input type="password" name="pswd" placeholder="enter password" class="search-input" required>
                     <br><br><br><br>
                    <input type="submit" style="
  background-color: #4CAF50;
  border: red;
   border-radius: 50px;
    font-size: 20px;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  cursor: pointer;
position: relative;
margin:0 auto;
margin-left: 300px;" name="submit" value="Upgrade">
                </form>
            </div>
        </div>
        <br><br><br>
        <div class="result-container">
            <div class="list">
                <!-- genarated with js -->
                <div class="message" style="margin-top: -30px;">
                    You can upgrade the students to next year...
                </div>

            </div>

        </div>
    </div>
   
</body>

</html>