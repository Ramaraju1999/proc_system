<?php
$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ost_project');


$name=$_POST['name'];
$regdNo=$_POST['regdNo'];
$department=$_POST['department'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];



$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["file"]["name"]);
$ext = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
$target_file = $target_dir . $regdNo .".". $ext;
move_uploaded_file($_FILES["file"]["tmp_name"], $target_file);

 $s = "select * from faculty where regdNo = '$regdNo'";

$res=mysqli_query($con,$s);

$num=mysqli_num_rows($res);

if($num >= 1){
	
header( "refresh:0;url=registerfaculty.php" );

?>
<script>
 alert("Faculty already registered with the same registration no. So enter your details accurately.");
</script>

<?php

}else

{

	$reg="INSERT INTO pendingfaculty values('$regdNo','$name','$department','$mobile','$email',NULL,'$password')" ;
       
mysqli_query($con,$reg);


?>
<script>
 alert("requested for an account ....");

</script>

<?php


// $reg="INSERT INTO faculty values('$regdNo','$name','$department','$mobile','$email')" ;
       
// mysqli_query($con,$reg);

// $reg="INSERT INTO faculty_passwords values('$regdNo','$password')" ;
       
// mysqli_query($con,$reg);




// $filepath = "../../faculty/register_faculty/facultyimgs/".$regdNo;
// $filepath ="".$filepath."".$_FILES["file"]["name"];



// move_uploaded_file($_FILES["file"]["tmp_name"], $filepath); 

// $reg="INSERT INTO faculty_profilepics values('$regdNo','$filepath')" ;
       
// mysqli_query($con,$reg);












header( "refresh:0;url=../register_faculty/registerfaculty.php" );
}






?>









<!-- 

        
        $sql="INSERT INTO faculty(regdNo,name,department,mobile,email) values('$regdNno','$name','$department','$mobile','$email')" ;
       

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>




 -->


