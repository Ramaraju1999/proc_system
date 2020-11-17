<?php
session_start();
$con = mysqli_connect('localhost','root','');

mysqli_select_db($con,'ost_project');

if(isset($_POST['submit']))
{

$old=$_POST['old'];

if($old!=NULL)
{

$s = "insert into messages values(NULL,'$old')";

mysqli_query($con,$s);

}
else{
   

echo '<script>alert("Cannot send empty messages")</script>'; 
}



}


if(isset($_POST['Del']))
{

$s = "truncate table messages";

mysqli_query($con,$s);

}
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Send Message To Proctors</title>
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
            Send Message To Proctors
        </div>
        <div class="searchbar-wrapper">
            <div class="searchbar">
                <form action="admintypemsg.php" method="post" name="form">
                    <input type="text" placeholder="Type message" class="search-input" name="old" >
                    <br><br><br><br><br>
      
      <div class="hi" style="position: relative;margin-left: 100px;">              
                    <input type="submit" style="
  background-color: #4CAF50;
  border: red;
   border-radius: 50px;
    font-size: 20px;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  cursor: pointer;
   "  name="submit" value="Send Message">



    <input type="submit" style="
  background-color: #4CAF50;
  border: red;
   border-radius: 50px;
    font-size: 20px;
  color: white;
  padding: 16px 32px;
  text-decoration: none;
  cursor: pointer;
  margin-left: 100px;
"  name="Del" value="Del Sent Messages">

</div>
                </form>
            </div>
        </div>
        <div class="result-container">
            <div class="list">
                <!-- genarated with js -->
                <div class="message">
    <!--               zdxgfcghbjkl,;.'fsdhjkl;sdfhjk;lagfhkml;adfjm;'dfghjkl; -->



<?php

// session_start();
// $con = mysqli_connect('localhost','root','');

// mysqli_select_db($con,'ost_project');


$s = "select * from messages";


$res=mysqli_query($con,$s);

$num=mysqli_num_rows($res);

echo "You have sent $num messages to the proctors";

?>
                </div>

            </div>

        </div>
    </div>
   
</body>

</html>