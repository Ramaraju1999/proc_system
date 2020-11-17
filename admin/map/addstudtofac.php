<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PendingRegistrations</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./style.css">
    <script src="./controller.js"></script>
</head>

<body>
    <nav>
        <div class="label">online Proctoring System</div>
        <div class="controls">
            <div class="home"><a href="../admin_home/admin_home.php">Home</a></div>
        </div>
    </nav>







    <div class="container">
        <div class="pending-wrapper">
            <div class="header">Map students</div>


            <?php
            session_start();
            $z=$_SESSION["z"];

if($z==1)
{
?>

<br>
<br>
<br>

            <h3>Select Year</h3>
            <form  method="post" >
                  <div class="wrapper">
             <select name="year" class="select" required >
        <option value="select">select</option>        
    <option value="1">1</option>
    <option value="2">2</option>
    <option value="3">3</option>
    <option value="4">4</option>
  </select>

<br><br><br><br><br><br>
<input type="submit" class="submit" name="submit">
</div>
</form>
  <?php
  }   
  $_SESSION['z']=0;
?>
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

$f_regdNo=$_GET['regdNo'];

$department=$_GET['department'];



if(isset($_POST['submit']) and $_SESSION["z"]==0 )
{
    $year=$_POST['year'] ;

}
else{
if($_SESSION["z"]==0)
$year=$_GET['year'];

}
                $s = "SELECT *
  FROM students where department='$department' and year='$year'  and regdNo not in (select s_regdNo from map_fac_to_student ) ";



$res=mysqli_query($con,$s);


while($rows=mysqli_fetch_assoc($res))
{


?>

                <div class="faculty-template" >
                                <div class="faculty-item"   >
                                    <div class="img">
                                        <img src="man.svg" alt="profilepic" class="profilepic">
                                    </div>


                                    <div class="details">
                                        <div class="name"><?php echo $rows["name"];?></div>
                                        <div class="regdNo"><?php echo $rows["regdNo"];?></div>
                                        <div class="department"><?php echo $rows["section"]."  Section";?></div>
                                    </div>
                                    <div class="controls">
                                        
                                        <button class="accept" onclick="window.location.href='../../admin/map/accept.php?s_regdNo=<?php echo $rows['regdNo']."&f_regdNo=".$f_regdNo."&department=".$department;  ?>';" >Map</button>

                                        
                                    </div>
                                </div>

                </div>
<?php


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