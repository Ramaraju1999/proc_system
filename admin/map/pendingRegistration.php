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
            <div class="header">Faculty Pending to Map</div>

            <?php
            session_start();
            $_SESSION['z']=1;
if(!isset($_POST['submit']))
{
?>

<br>
<br>
<br>
            <h3>Select Department</h3>
            
            <form  method="post" >

            <div class="wrapper">
             <select name="department" class="select" required >
    
    <option value="cse">cse</option>
    <option value="mech">mech</option>
    <option value="ece">ece</option>
    <option value="eee">eee</option>
  </select>

<br><br><br><br><br><br>
<input type="submit" name="submit" class="submit">

</div>
</form>
  <?php
  }   
?>
            <div class="pending-list">
          
                <!-- here fac-items will appended -->


                <!-- loop all pending
 -->


<?php


$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ost_project');

if(isset($_POST['submit']))
{

$department=$_POST['department'];
                $s = "SELECT *
  FROM faculty where department='$department'";



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
                                        <div class="department"><?php echo $rows["email"];?></div>
                                    </div>
                                    <div class="controls">
                                        
                                        <button class="accept" onclick="window.location.href='../../admin/map/addstudtofac.php?regdNo=<?php echo $rows['regdNo']."&department=".$department."&year=NULL"; ?>';" >Add</button>
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