<?php
session_start();
if (!isset($_SESSION['regdNo'])) header("Location:../../common/login/login.php");
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PendingRegistrations</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./fachome.css">
    <script src="./controller.js"></script>
</head>

<body>
    <nav>
        <div class="label">online Proctoring System</div>
        <div class="controls">
            <a href="../../faculty/admin_msg/admin_msg.php" class="home" >
                <div>
                    <?php 
             


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ost_project');

                $s = "SELECT *
  FROM messages ";



$res=mysqli_query($con,$s);
$num=mysqli_num_rows($res);
echo "Messages(".$num.")";
                       ?>
                </div>
            <a href="../../logout.php" class="home">
                <div>Logout</div>
            

            </a>
        </div>
    </nav>







    <div class="container">
        
        
        <div class="pending-wrapper">
            <div class="header">My Students</div>


                 <h3>Select Year</h3>
  <div class="wrapper">
            <form  method="post" >
             <select name="year" class="select" required >
        <option  >select</option>        
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>
<br>
<br>
<br>
<br>
<br>
<input type="submit" name="submit" class="submit">
</form>

</div>
           <!--  <h3>select department</h3> -->
       <!--      <form  method="post" >
             <select name="department" required >
        <option value="select">select</option>        
    <option value="cse">cse</option>
    <option value="mech">mech</option>
    <option value="ece">ece</option>
    <option value="eee">eee</option>
  </select>

<input type="submit" name="submit">
</form> -->

            <div class="pending-list">
                <div class="list-overlay">
                    <div class="text">No Pending Registration Requests</div>
                </div>
                <!-- here fac-items will appended -->


                <!-- loop all pending
 -->


<?php

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ost_project');

$f_regdNo=$_SESSION["regdNo"];

if(isset($_POST['submit']))
{

$year=$_POST['year'];

$s ="select * from students where regdNo in ( SELECT s_regdNo
  FROM map_fac_to_student where f_regdNo='$f_regdNo') and year='$year'";



$res=mysqli_query($con,$s);


while($rows=mysqli_fetch_assoc($res))
{


?>

                <div class="faculty-template" >
                                <div class="faculty-item"   >
                                    <div class="img">
                                        <img src="man.svg" alt="profilepic" class="profilepic">
                                    </div>


                                    <div class="details"  style="overflow: hidden!important;">
                                        <div class="name"><?php echo $rows["name"];?></div>
                                        <div class="regdNo"><?php echo $rows["regdNo"];?></div>
                                        <div class="department"><?php echo $rows["email"];?></div>
                                    </div>
                                    <div class="controls">
                                        
                                        <button class="accept" onclick="window.location.href='../../faculty/proctoring_form/form.php?regdNo=<?php echo $rows['regdNo']?>';" >view</button>
                                    </div>
                                </div>

                </div>
<?php

}

}
?>
                               


             




            </div>
        </div>



    



    </div>


    <footer>
        <div class="text">Copyrights reserved</div>
    </footer>

</body>

</html>