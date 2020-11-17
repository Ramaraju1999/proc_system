


<?php

session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'ost_project');

if(isset($_POST['submit']))
{

$id= $_POST['id'];
$pswd=$_POST['pswd'];

$_SESSION['regdNo']=$id;


$s = "select * from faculty_passwords where regdNo = '$id' and password = '$pswd'";


$res=mysqli_query($con,$s);

$num=mysqli_num_rows($res);

if($num >= 1){
  
 header( "refresh:0;url=../../faculty/faculty_home/facultyHome.php" );



}else{
$message="Invalid Credential";
echo "<script type='text/javascript'>alert('$message');</script>";
header( "refresh:0;url=faculty_login.php" );






}
}
?>
<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>user login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./login.css">

</head>

<body>
    <!-- here is the journey begins -->
    <nav>
        <div class="label">Proctoring System</div>
        <div class="controls">
            <a href="../../index/index.php" class="home">
                <div>Home</div>
            </a>
        </div>
    </nav>
    <div class="container">
    <div class="form">
        <form  name="form" method="post" action="faculty_login.php" >
        <div class="back"  onclick="window.location.href='../../common/login/login.php'">back</div>
        <div class="logo">
            <img src="./icons/blue-classic-lock.svg" alt="lock logo">
        </div>
        <div class="input-wrapper">
            <div class="userid-label">Proctor ID</div>
            <input class="userid" placeholder="enter user id" type="text" name="id">
            <span class="border-line"></span>
            <span class="light-line"></span>
        </div>
        <div class="input-wrapper">
            <div class="password-label">Password</div>
            <input type="password" placeholder="enter password" class="password" name="pswd">
            <span class="border-line"></span>
            <span class="light-line"></span>
        </div>
                   <input type="submit"  name="submit" class="login" value="login">
        
        </form>
<!-- 
        <div class="submit">
            <div class="login" onclick="window.location.href='../../faculty/faculty_home/facultyHome.php'" >login</div>
            
        </div> -->
        <div class="faculty-reg-btn" style="display: flex;"  onclick="window.location.href='../../faculty/register_faculty/registerfaculty.php'">
            <div class="btn-text">if not registered yet click here!</div>
        </div>


    </div>
    </div>



    

    
    <div class="forget-password-dialog">
<!--     <div class="dialog-container">
        <div class="dialog">
           a mail associated with a link has been sent to your mail id,
           follow that link to proceed resetting your password.    
        </div>
    </div> -->
</div>




</body></html>