<?php
$conn = mysqli_connect('localhost','root','', 'ost_project');

if(isset($_POST["upload_details"]))
{

  $filename=$_FILES["file"]["tmp_name"];
  
  if($_FILES["file"]["size"] > 0)
  {
    $tot=0;
    $file = fopen($filename, "r");
    $stu = fgetcsv($file);

    $tmpf = fopen($filename, "r");
    while (($tmp = fgetcsv($tmpf)) !== FALSE) $tot++;
    $tot--;

    $c=0;
    fgetcsv($file);
    while (($stu = fgetcsv($file)) !== FALSE)
    {
      $val="";
      $l=sizeof($stu);
      for ($i=0;$i<$l;$i++)
      {
        $stu[$i] = preg_replace("/[']/", "\'", $stu[$i]);
        $stu[$i] = preg_replace('/["]/', '\"', $stu[$i]);
      }
      $val = implode('", "', $stu);


      // echo $val."<br><br>";
      $sql = "INSERT INTO `students` VALUES (\"".$val."\")";
      $result = mysqli_query($conn, $sql);
      $c++;

    }
    fclose($file);
    
  }

}


?>
<script type="text/javascript">
  window.location.href='admin/admin_add/addStudent.php';
</script>