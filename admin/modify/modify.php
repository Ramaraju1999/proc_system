<?php
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'ost_project');

if(isset($_POST['submit']))
{

$old=$_POST['old'];
$new=$_POST['new'];

$x='1';
$y='2';

$s = "select * from faculty where regdNo = '$old'";



$res=mysqli_query($con,$s);

$num=mysqli_num_rows($res);

if($num >= 1){
 

//to fetch values into textboxes

$r=mysqli_fetch_assoc($res);

$x=$r['department'];


////////////////////////////
$s = "select * from faculty where regdNo = '$new'";

$res=mysqli_query($con,$s);

$num=mysqli_num_rows($res);

if($num >= 1){
 

//to fetch values into textboxes

$r=mysqli_fetch_assoc($res);

$y=$r['department'];

//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa



if($x==$y)
{
$s = "select * from map_fac_to_student where f_regdNo = '$old'";




$res=mysqli_query($con,$s);

while($rows=mysqli_fetch_assoc($res))
{
$z=$rows["s_regdNo"];
$s = "insert into map_fac_to_student(s_regdNo,f_regdNo) values('$z','$new')";
$r=mysqli_query($con,$s);




}

$s = "delete from map_fac_to_student where f_regdNo='$old'";

mysqli_query($con,$s);

$s = "delete from faculty where regdNo='$old'";

mysqli_query($con,$s);
   $message="Reassigned successfully";
echo "<script type='text/javascript'>alert('$message');</script>";
header( "refresh:0;url=modify.php" );


//to fetch values into textboxes





}
else {
     $message="Cannot reassign students because both faculty donot belong to same branch";
echo "<script type='text/javascript'>alert('$message');</script>";
header( "refresh:0;url=modify.php" );
}




//aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa
}
else{
    $message="New faculty with given id donot exist";
echo "<script type='text/javascript'>alert('$message');</script>";
header( "refresh:0;url=modify.php" );

}



///////////////////////////
}
else{
    $message="Old faculty with given id donot exist";
echo "<script type='text/javascript'>alert('$message');</script>";
header( "refresh:0;url=modify.php" );

}







}


?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>modify Faculty</title>
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
            Modify Faculty
        </div>
        <div class="searchbar-wrapper">
            <div class="searchbar">
                <form action="modify.php" method="post" name="form">
                    <input type="text" placeholder="enter old faculty id" class="search-input" name="old" required>
                    <br><br><br><br><br>
                    <input type="text" placeholder="enter new faculty id" class="search-input" name="new" required>
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
margin-left: 350px;" name="submit" value="reassign">
                </form>
            </div>
        </div>
        <br><br><br>
        <div class="result-container">
            <div class="list">
                <!-- genarated with js -->
                <div class="message" style="margin-top: -30px;">
                    You can reassign the students to different faculty here!
                </div>

            </div>

        </div>
    </div>
   
</body>

</html>