<?php
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'ost_project');

if(isset($_POST['submit']))
{

$old=$_POST['old'];

$s = "select * from faculty where regdNo = '$old'";



$res=mysqli_query($con,$s);

$num=mysqli_num_rows($res);

if($num >= 1){
 


$s = "delete from map_fac_to_student where f_regdNo='$old'";

mysqli_query($con,$s);

$s = "delete from faculty where regdNo='$old'";

mysqli_query($con,$s);

   $message="Faculty Deleted Successfully";
echo "<script type='text/javascript'>alert('$message');</script>";
header( "refresh:0;url=del.php" );


}
else{

echo '<script>alert("Faculty With Given ID Does not Exist")</script>'; 
 

}




}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Delete Faculty</title>
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
            remove Faculty
        </div>
        <div class="searchbar-wrapper">
            <div class="searchbar">
                <form action="del.php" method="post" name="form">
                    <input type="text" placeholder="Enter  Faculty ID" class="search-input" name="old" required>
                    <br><br><br><br><br>
                    
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
margin-left: 350px;" name="submit" value="delete">
                </form>
            </div>
        </div>
        <div class="result-container">
            <div class="list">
                <!-- genarated with js -->
                <div class="message">
                    You Can Delete Faculty Here!
                </div>

            </div>

        </div>
    </div>
   
</body>

</html>