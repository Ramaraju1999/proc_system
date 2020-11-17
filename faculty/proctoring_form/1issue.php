<?php

$con = mysqli_connect('localhost','root','');
mysqli_select_db($con,'ost_project');


$regdNo=11111;


$s = "select * from students where regdNo = '$regdNo'";

$res=mysqli_query($con,$s);

 

//to fetch values into textboxes

$r=mysqli_fetch_assoc($res);

$name=$r['name'];
$year=$r['year'];
$section=$r['section'];
$department=$r['department'];
$mobile=$r['mobile'];
$email=$r['email'];
$localAddress=$r['localAddress'];



$s = "select * from attendence where regdNo = '$regdNo'";



$res=mysqli_query($con,$s);

$num=mysqli_num_rows($res);

if($num >= 1){
 

//to fetch values into textboxes

$r=mysqli_fetch_assoc($res);


    $August=$r['1August'];
$September=$r['1September'];
$October=$r['1October'];
$November=$r['1November'];
$December=$r['1December'];
$FirstSemEnd=$r['1FirstSemEnd'];

$January=$r['1January'];
$February=$r['1February'];
$March=$r['1March'];
$April=$r['1April'];
$May=$r['1May'];
$SecondSemEnd=$r['1SecondSemEnd'];




$June2=$r['2June'];
$July2=$r['2July'];
$August2=$r['2August'];
$September2=$r['2September'];
$October2=$r['2October'];
$November21=$r['2November1'];
$FirstSemEnd2=$r['2FirstSemEnd'];


$November22=$r['2November2'];
$December2=$r['2December'];
$January2=$r['2January'];
$February2=$r['2February'];
$March2=$r['2March'];
$April2=$r['2April'];
$SecondSemEnd2=$r['2SecondSemEnd'];





}






$s = "select * from grades where regdNo = '$regdNo'";



$res=mysqli_query($con,$s);

$n=mysqli_num_rows($res);

if($n == 1){

$r=mysqli_fetch_assoc($res);

$G111=$r['G111'];
$G112=$r['G112']; 
$G113=$r['G113'];
$G114=$r['G114'];
$G115=$r['G115'];
$G116=$r['G116'];
$G117=$r['G117'];
$G118=$r['G118'];
$G119=$r['G119'];
 
 $G121=$r['G121'];
$G122=$r['G122']; 
$G123=$r['G123'];
$G124=$r['G124'];
$G125=$r['G125'];
$G126=$r['G126'];
$G127=$r['G127'];
$G128=$r['G128'];
$G129=$r['G129'];



$G211=$r['G211'];
$G212=$r['G212']; 
$G213=$r['G213'];
$G214=$r['G214'];
$G215=$r['G215'];
$G216=$r['G216'];
$G217=$r['G217'];
$G218=$r['G218'];
$G219=$r['G219'];

  $G221=$r['G221'];
$G222=$r['G222']; 
$G223=$r['G223'];
$G224=$r['G224'];
$G225=$r['G225'];
$G226=$r['G226'];
$G227=$r['G227'];
$G228=$r['G228'];
$G229=$r['G229'];
 


 $G311=$r['G311'];
$G312=$r['G312']; 
$G313=$r['G313'];
$G314=$r['G314'];
$G315=$r['G315'];
$G316=$r['G316'];
$G317=$r['G317'];
$G318=$r['G318'];
$G319=$r['G319'];

  $G321=$r['G321'];
$G322=$r['G322']; 
$G323=$r['G323'];
$G324=$r['G324'];
$G325=$r['G325'];
$G326=$r['G326'];
$G327=$r['G327'];
$G328=$r['G328'];
$G329=$r['G329'];


  $G411=$r['G411'];
$G412=$r['G412']; 
$G413=$r['G413'];
$G414=$r['G414'];
$G415=$r['G415'];
$G416=$r['G416'];
$G417=$r['G417'];
$G418=$r['G418'];
$G419=$r['G419'];

  $G421=$r['G421'];
$G422=$r['G422']; 
$G423=$r['G423'];
$G424=$r['G424'];
$G425=$r['G425'];
$G426=$r['G426'];
$G427=$r['G427'];
$G428=$r['G428'];
$G429=$r['G429'];

 }

if(isset($_POST['submit'])){

    $s = "select * from attendence where regdNo = '$regdNo'";

$res=mysqli_query($con,$s);

$num=mysqli_num_rows($res);

if($num == 1){

 $s = "delete from  attendence where regdNo = '$regdNo'";
mysqli_query($con,$s);
}



$August=$_POST['1August'];
$September=$_POST['1September'];
$October=$_POST['1October'];
$November=$_POST['1November'];
$December=$_POST['1December'];
$FirstSemEnd=$_POST['1FirstSemEnd'];

$January=$_POST['1January'];
$February=$_POST['1February'];
$March=$_POST['1March'];
$April=$_POST['1April'];
$May=$_POST['1May'];
$SecondSemEnd=$_POST['1SecondSemEnd'];


$June2=$_POST['2June'];
$July2=$_POST['2July'];
$August2=$_POST['2August'];
$September2=$_POST['2September'];
$October2=$_POST['2October'];
$November21=$_POST['2November1'];
$FirstSemEnd2=$_POST['2FirstSemEnd'];


$November22=$_POST['2November2'];
$December2=$_POST['2December'];
$January2=$_POST['2January'];
$February2=$_POST['2February'];
$March2=$_POST['2March'];
$April2=$_POST['2April'];
$SecondSemEnd2=$_POST['2SecondSemEnd'];




$June3=$_POST['3June'];
$July3=$_POST['3July'];
$August3=$_POST['3August'];
$September3=$_POST['3September'];
$October3=$_POST['3October'];
$November31=$_POST['3November1'];
$FirstSemEnd3=$_POST['3FirstSemEnd'];


$November32=$_POST['3November2'];
$December3=$_POST['3December'];
$January3=$_POST['3January'];
$February3=$_POST['3February'];
$March3=$_POST['3March'];
$April3=$_POST['3April'];
$SecondSemEnd3=$_POST['3SecondSemEnd'];



$June4=$_POST['4June'];
$July4=$_POST['4July'];
$August4=$_POST['4August'];
$September4=$_POST['4September'];
$October4=$_POST['4October'];
$November41=$_POST['4November1'];
$FirstSemEnd4=$_POST['4FirstSemEnd'];


$November42=$_POST['4November2'];
$December4=$_POST['4December'];
$January4=$_POST['4January'];
$February4=$_POST['4February'];
$March4=$_POST['4March'];
$April4=$_POST['4April'];
$SecondSemEnd4=$_POST['4SecondSemEnd'];








$s="insert into attendence(regdNo,1August,1September,1October,1November,1December,1FirstSemEnd,1January,1February,1March,1April,1May,1SecondSemEnd,2June,2July,2August,2September,2October,2November1,2FirstSemEnd,2November2,2December,2January,2February,2March,2April,2SecondSemEnd,3June,3July,3August,3September,3October,3November1,3FirstSemEnd,3November2,3December,3January,3February,3March,3April,3SecondSemEnd,4June,4July,4August,4September,4October,4November1,4FirstSemEnd,4November2,4December,4January,4February,4March,4April,4SecondSemEnd)  values('$regdNo','$August','$September','$October','$November','$December','$FirstSemEnd','$January','$February','$March','$April','$May','$SecondSemEnd','$June2','$July2','$August2','$September2','$October2','$November21','$FirstSemEnd2','$November22','$December2','$January2','$February2','$March2','$April2','$SecondSemEnd2','$June3','$July3','$August3','$September3','$October3','$November31','$FirstSemEnd3','$November32','$December3','$January3','$February3','$March3','$April3','$SecondSemEnd3','$June4','$July4','$August4','$September4','$October4','$November41','$FirstSemEnd4','$November42','$December4','$January4','$February4','$March4','$April4','$SecondSemEnd4')";

$res=mysqli_query($con,$s);



// <end of attendence>


$s = "select * from grades where regdNo = '$regdNo'";

$res=mysqli_query($con,$s);

$num=mysqli_num_rows($res);

if($num == 1){

 $s = "delete from  grades where regdNo = '$regdNo'";
mysqli_query($con,$s);
}


$G111=$_POST['G111'];
$G112=$_POST['G112']; 
$G113=$_POST['G113'];
$G114=$_POST['G114'];
$G115=$_POST['G115'];
$G116=$_POST['G116'];
$G117=$_POST['G117'];
$G118=$_POST['G118'];
$G119=$_POST['G119'];

  $G121=$_POST['G121'];
$G122=$_POST['G122']; 
$G123=$_POST['G123'];
$G124=$_POST['G124'];
$G125=$_POST['G125'];
$G126=$_POST['G126'];
$G127=$_POST['G127'];
$G128=$_POST['G128'];
$G129=$_POST['G129'];


$G211=$_POST['G211'];
$G212=$_POST['G212']; 
$G213=$_POST['G213'];
$G214=$_POST['G214'];
$G215=$_POST['G215'];
$G216=$_POST['G216'];
$G217=$_POST['G217'];
$G218=$_POST['G218'];
$G219=$_POST['G219'];

  $G221=$_POST['G221'];
$G222=$_POST['G222']; 
$G223=$_POST['G223'];
$G224=$_POST['G224'];
$G225=$_POST['G225'];
$G226=$_POST['G226'];
$G227=$_POST['G227'];
$G228=$_POST['G228'];
$G229=$_POST['G229'];
 

 $G311=$_POST['G311'];
$G312=$_POST['G312']; 
$G313=$_POST['G313'];
$G314=$_POST['G314'];
$G315=$_POST['G315'];
$G316=$_POST['G316'];
$G317=$_POST['G317'];
$G318=$_POST['G318'];
$G319=$_POST['G319'];

  $G321=$_POST['G321'];
$G322=$_POST['G322']; 
$G323=$_POST['G323'];
$G324=$_POST['G324'];
$G325=$_POST['G325'];
$G326=$_POST['G326'];
$G327=$_POST['G327'];
$G328=$_POST['G328'];
$G329=$_POST['G329'];



 $G411=$_POST['G411'];
$G412=$_POST['G412']; 
$G413=$_POST['G413'];
$G414=$_POST['G414'];
$G415=$_POST['G415'];
$G416=$_POST['G416'];
$G417=$_POST['G417'];
$G418=$_POST['G418'];
$G419=$_POST['G419'];

  $G421=$_POST['G421'];
$G422=$_POST['G422']; 
$G423=$_POST['G423'];
$G424=$_POST['G424'];
$G425=$_POST['G425'];
$G426=$_POST['G426'];
$G427=$_POST['G427'];
$G428=$_POST['G428'];
$G429=$_POST['G429'];


 

$s="insert into grades(regdNo,G111,G112,G113,G114,G115,G116,G117,G118,G119,G121,G122,G123,G124,G125,G126,G127,G128,G129,G211,G212,G213,G214,G215,G216,G217,G218,G219,G221,G222,G223,G224,G225,G226,G227,G228,G229,G311,G312,G313,G314,G315,G316,G317,G318,G319,G321,G322,G323,G324,G325,G326,G327,G328,G329,G411,G412,G413,G414,G415,G416,G417,G418,G419,G421,G422,G423,G424,G425,G426,G427,G428,G429) values('$regdNo','$G111','$G112','$G113','$G114','$G115','$G116','$G117','$G118','$G119','$G121','$G122','$G123','$G124','$G125','$G126','$G127','$G128','$G129','$G211','$G212','$G213','$G214','$G215','$G216','$G217','$G218','$G219','$G221','$G222','$G223','$G224','$G225','$G226','$G227','$G228','$G229','$G311','$G312','$G313','$G314','$G315','$G316','$G317','$G318','$G319','$G321','$G322','$G323','$G324','$G325','$G326','$G327','$G328','$G329','$G411','$G412','$G413','$G414','$G415','$G416','$G417','$G418','$G419','$G421','$G422','$G423','$G424','$G425','$G426','$G427','$G428','$G429')";

$res=mysqli_query($con,$s);
}












?>



<html>



<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Proctoring Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./theForm.css">
<!--     <script src="./controller.js"></script>
    <script src="./AttendenceHandler.js"></script>
    <script src="./gradeTableHandler.js"></script>
    <script src="./issueTableHandler.js"></script>
    <script src="./dataHandler.js"></script>
    <script src="./electiveCodes.js"></script> -->
  

</head>

<body>
    <nav>
        <div class="label">Proctoring System</div>
        <div class="controls">
            <div class="home"><a href="../faculty_home/facultyHome.html">Home</a></div>
        </div>
    </nav>

    <div class="container">
        <div class="student-window">
            


            <div class="student-details-wrapper">
                <div class="student-details">
                    <div class="photo">
                        <img src="./man.svg" alt="">
                    </div>
                    <div class="details">
                     
                           <div class="name"><?php echo $name;?></div>
                        <div class="regdNo"><?php echo $regdNo;?></div>
                        <div class="year-wrapper"><span class="year"><?php echo $year;?></span> year</div>
                        <div class="section-wrapper"><span class="section"><?php echo $section;?></span> section</div>
                        <div class="department-wrapper"><span class="department"><?php echo $department;?></span> department</div>
                        <div class="mobile"><?php echo $mobile;?></div>
                        <div class="email"><?php echo $email;?></div>
                        <div class="address-wrapper">
                            <div class="label">Address:</div>
                            <address class="address"><?php echo $localAddress;?></address>
                        </div>
                    </div>


                      </div>

            </div>



            <div class="proc-form-wrapper">
                <div class="proc-form">
                    <div class="attendence-wrapper">
                        <div class="attendence-label">Attendence</div>
                            <!-- added with javascript -->
                



       <!-- year add -->

                         <form name="sem1" method="post"  >

                        <div class="attendence-tables">
        <div class="year-attendence">


            <div class="year-label">1st Year</div>
            <div class="year-attendence-sems">
                


                <!-- <1> --><div class="semister">
                    <div class="sem-label">1st Semester</div>
                    <div class="sem-attendence">
                       
                        
                      
                        <div class="atd-inputrow">
                            <label>August</label>
                            <input id="1August" placeholder="enter percentage" type="text" name="1August" class="atd" value="<?php if($num!=0){echo $August;}else{echo "";}
                            ?>" >
                        </div>
                        <div class="atd-inputrow">
                            <label>September</label>
                            <input id="1September" placeholder="enter percentage" type="text" name="1September" class="atd" value="<?php if($num!=0){echo $September;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>October</label>
                            <input id="1October" placeholder="enter percentage" type="text" class="atd" name="1October" value="<?php if($num!=0){echo $October;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>November</label>
                            <input id="1November" placeholder="enter percentage" type="text" name="1November" class="atd" value="<?php if($num!=0){echo $November;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>December</label>
                            <input id="1December" placeholder="enter percentage" type="text" name="1December" class="atd" value="<?php if($num!=0){echo $December;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>Semister End</label>
                            <input id="1FirstSemEnd" placeholder="enter percentage" type="text"name="1FirstSemEnd" class="atd" value="<?php if($num!=0){echo $FirstSemEnd;}else{echo "";}?>">
                        </div>

                    </div>

                <!-- <1> --></div>


                <div class="semister">
                    <div class="sem-label">2nd Semester</div>
                    <div class="sem-attendence">
                        <div class="atd-inputrow">
                            <label>January</label>
                            <input id="1January" placeholder="enter percentage" name=" 1January"type="text" class="atd" value="<?php if($num!=0){ echo $January;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>February</label>
                            <input id="1February" placeholder="enter percentage" name="1February" type="text" class="atd" value="<?php if($num!=0){ echo $February;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>March</label>
                            <input id="1March" placeholder="enter percentage" type="text" name="1March" class="atd" value="<?php if($num!=0){ echo $March;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>April</label>
                            <input id="1April" placeholder="enter percentage" type="text" name="1April" class="atd" value="<?php if($num!=0){ echo $April;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>May</label>
                            <input id="1May" placeholder="enter percentage" type="text" name="1May" class="atd" value="<?php if($num!=0){ echo $May;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>Semister End</label>
                            <input id="1SecondSemEnd" placeholder="enter percentage" name="1SecondSemEnd" type="text" class="atd" value="<?php if($num!=0){ echo $SecondSemEnd;}else{echo "";}?>">
                        </div>
                    </div>
                </div>


            </div>
        </div>

        <!-- year add comp -->



        <div class="year-attendence">
            <div class="year-label">2nd Year</div>
            <div class="year-attendence-sems">
                <div class="semister">
                    <div class="sem-label">1st Semester</div>
                    <div class="sem-attendence">
                         <div class="atd-inputrow">
                            <label>June</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="2June" value="<?php if($num!=0){ echo $June2;}else{echo "";}?>">
                        </div>
                         <div class="atd-inputrow">
                            <label>July</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="2July" value="<?php if($num!=0){ echo $July2;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>August</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="2August" value="<?php if($num!=0){ echo $August2;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>September</label>
                            <input id="2September" placeholder="enter percentage" type="text" class="atd" name="2September" value="<?php if($num!=0){ echo $September2;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>October</label>
                            <input id="2October" placeholder="enter percentage" type="text" class="atd" name="2October" value="<?php if($num!=0){ echo $October2;}else{echo "";}?>">
                        </div>
                         <div class="atd-inputrow">
                            <label>November</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="2November1" value="<?php if($num!=0){  echo $November21;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>Semister End</label>
                            <input id="2FirstSemEnd" placeholder="enter percentage" type="text" class="atd" name="2FirstSemEnd" value="<?php if($num!=0){  echo $FirstSemEnd2;}else{echo "";}?>">
                        </div>
                    </div>
                </div>
                <div class="semister">
                    <div class="sem-label">2nd Semester</div>
                    <div class="sem-attendence">
                         <div class="atd-inputrow">
                            <label>November</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="2November2" value="<?php if($num!=0){  echo $November22;}else{echo "";}?>">
                        </div>
                         <div class="atd-inputrow">
                            <label>December</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="2December" value="<?php if($num!=0){  echo $December2;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>January</label>
                            <input id="2January" placeholder="enter percentage" type="text" class="atd" name="2January" value="<?php if($num!=0){  echo $January2;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>February</label>
                            <input id="2February" placeholder="enter percentage" type="text" class="atd" name="2February" value="<?php if($num!=0){  echo $February2;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>March</label>
                            <input id="2March" placeholder="enter percentage" type="text" class="atd" name="2March" value="<?php if($num!=0){  echo $March2;}else{echo "";}?>">
                        </div>
                         <div class="atd-inputrow">
                            <label>April</label>
                            <input id="2March" placeholder="enter percentage" type="text" class="atd" name="2April" value="<?php if($num!=0){  echo $April2;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>Semister End</label>
                            <input id="2SecondSemEnd" placeholder="enter percentage" type="text" class="atd" name="2SecondSemEnd" value="<?php if($num!=0){  echo $SecondSemEnd2;}else{echo "";}?>"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>


         

        <div class="year-attendence">
            <div class="year-label">3rd Year</div>
            <div class="year-attendence-sems">
                <div class="semister">
                    <div class="sem-label">1st Semester</div>
                    <div class="sem-attendence">
                         <div class="atd-inputrow">
                            <label>June</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="3June" value="<?php if($num!=0){ echo $June3;}else{echo "";}?>">
                        </div>
                         <div class="atd-inputrow">
                            <label>July</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="3July" value="<?php if($num!=0){ echo $July3;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>August</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="3August" value="<?php if($num!=0){ echo $August3;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>September</label>
                            <input id="2September" placeholder="enter percentage" type="text" class="atd" name="3September" value="<?php if($num!=0){ echo $September3;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>October</label>
                            <input id="2October" placeholder="enter percentage" type="text" class="atd" name="3October" value="<?php if($num!=0){ echo $October3;}else{echo "";}?>">
                        </div>
                         <div class="atd-inputrow">
                            <label>November</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="3November1" value="<?php if($num!=0){  echo $November31;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>Semister End</label>
                            <input id="2FirstSemEnd" placeholder="enter percentage" type="text" class="atd" name="3FirstSemEnd" value="<?php if($num!=0){  echo $FirstSemEnd3;}else{echo "";}?>">
                        </div>
                    </div>
                </div>
                <div class="semister">
                    <div class="sem-label">2nd Semester</div>
                    <div class="sem-attendence">
                         <div class="atd-inputrow">
                            <label>November</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="3November2" value="<?php if($num!=0){  echo $November32;}else{echo "";}?>">
                        </div>
                         <div class="atd-inputrow">
                            <label>December</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="3December" value="<?php if($num!=0){  echo $December3;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>January</label>
                            <input id="2January" placeholder="enter percentage" type="text" class="atd" name="3January" value="<?php if($num!=0){  echo $January3;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>February</label>
                            <input id="2February" placeholder="enter percentage" type="text" class="atd" name="3February" value="<?php if($num!=0){  echo $February3;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>March</label>
                            <input id="2March" placeholder="enter percentage" type="text" class="atd" name="3March" value="<?php if($num!=0){  echo $March3;}else{echo "";}?>">
                        </div>
                         <div class="atd-inputrow">
                            <label>April</label>
                            <input id="2March" placeholder="enter percentage" type="text" class="atd" name="3April" value="<?php if($num!=0){  echo $April3;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>Semister End</label>
                            <input id="2SecondSemEnd" placeholder="enter percentage" type="text" class="atd" name="3SecondSemEnd" value="<?php if($num!=0){  echo $SecondSemEnd3;}else{echo "";}?>"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>


         

        <div class="year-attendence">
            <div class="year-label">4th Year</div>
            <div class="year-attendence-sems">
                <div class="semister">
                    <div class="sem-label">1st Semester</div>
                    <div class="sem-attendence">
                         <div class="atd-inputrow">
                            <label>June</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="4June" value="<?php if($num!=0){ echo $June4;}else{echo "";}?>">
                        </div>
                         <div class="atd-inputrow">
                            <label>July</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="4July" value="<?php if($num!=0){ echo $July4;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>August</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="4August" value="<?php if($num!=0){ echo $August4;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>September</label>
                            <input id="2September" placeholder="enter percentage" type="text" class="atd" name="4September" value="<?php if($num!=0){ echo $September4;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>October</label>
                            <input id="2October" placeholder="enter percentage" type="text" class="atd" name="4October" value="<?php if($num!=0){ echo $October4;}else{echo "";}?>">
                        </div>
                         <div class="atd-inputrow">
                            <label>November</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="4November1" value="<?php if($num!=0){  echo $November41;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>Semister End</label>
                            <input id="2FirstSemEnd" placeholder="enter percentage" type="text" class="atd" name="4FirstSemEnd" value="<?php if($num!=0){  echo $FirstSemEnd4;}else{echo "";}?>">
                        </div>
                    </div>
                </div>
                <div class="semister">
                    <div class="sem-label">2nd Semester</div>
                    <div class="sem-attendence">
                         <div class="atd-inputrow">
                            <label>November</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="4November2" value="<?php if($num!=0){  echo $November42;}else{echo "";}?>">
                        </div>
                         <div class="atd-inputrow">
                            <label>December</label>
                            <input id="2August" placeholder="enter percentage" type="text" class="atd" name="4December" value="<?php if($num!=0){  echo $December4;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>January</label>
                            <input id="2January" placeholder="enter percentage" type="text" class="atd" name="4January" value="<?php if($num!=0){  echo $January4;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>February</label>
                            <input id="2February" placeholder="enter percentage" type="text" class="atd" name="4February" value="<?php if($num!=0){  echo $February4;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>March</label>
                            <input id="2March" placeholder="enter percentage" type="text" class="atd" name="4March" value="<?php if($num!=0){  echo $March4;}else{echo "";}?>">
                        </div>
                         <div class="atd-inputrow">
                            <label>April</label>
                            <input id="2March" placeholder="enter percentage" type="text" class="atd" name="4April" value="<?php if($num!=0){  echo $April4;}else{echo "";}?>">
                        </div>
                        <div class="atd-inputrow">
                            <label>Semister End</label>
                            <input id="2SecondSemEnd" placeholder="enter percentage" type="text" class="atd" name="4SecondSemEnd" value="<?php if($num!=0){  echo $SecondSemEnd4;}else{echo "";}?>"> 
                        </div>
                    </div>
                </div>
            </div>
        </div>


         






                    
                
            </div>

            <!-- <END OF ATTENDANCE> -->


                    <div class="grades-wrapper">
                        <div class="grades-label">Grades</div>
                        <div class="grade-tables">
                            <!-- added with javascript -->
                        
    <div class="grade-table-year">
            <!-- ADD YEARS FROM HERE FOR GRADES -->
        <div class="year-label">1st Year</div>
        <div class="grade-table" data-semister="1">
            <div class="semester-label">1st semester</div>
            <div class="semester-grades">
                <div class="grade-input-col">
                    <div class="subcode">Subject Code</div>
                    <div class="subgrade">Subject Grade</div>
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G111" class="subcode" disabled="" >
                    <input type="text" placeholder="subgrade" id="G111" class="subgrade" name="G111" value="<?php if($n!=0){ echo $G111;}else{echo "";}?>" >
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G112" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G112" class="subgrade"name="G112"value="<?php if($n!=0){ echo $G112;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G113" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G113" class="subgrade" name="G113" value="<?php if($n!=0){ echo $G113;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G114" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G114" class="subgrade" name="G114" value="<?php if($n!=0){ echo $G114;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G115" >
                    <input type="text" placeholder="subgrade" class="subgrade" id="G115" name="G115" value="<?php if($n!=0){ echo $G115;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G116">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G116" name="G116" value="<?php if($n!=0){ echo $G116;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G117">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G117"name="G117" value="<?php if($n!=0){ echo $G117;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G118">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G118" name="G118" value="<?php if($n!=0){ echo $G118;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
             
            
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G119">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G119" name="G119" value="<?php if($n!=0){ echo $G119;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
             
            
                    <input type="text" placeholder="11CGPA" class="subcode" disabled="" id="G119">
                    <input type="text"  class="subgrade" id="G119" name="11CGPA">
                </div>
            </div>
        </div>
        <div class="grade-table" data-semister="2">
            <div class="semester-label">2nd semester</div>
            <div class="semester-grades">
                <div class="grade-input-col">
                    <div class="subcode">Subject Code</div>
                    <div class="subgrade">Subject Grade</div>
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G121" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G121" class="subgrade"  name="G121" value="<?php if($n!=0){ echo $G121;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G122" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G122" class="subgrade"  name="G122" value="<?php if($n!=0){ echo $G122;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G123" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G123" class="subgrade"  name="G123" value="<?php if($n!=0){ echo $G123;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G124" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G124" class="subgrade"  name="G124" value="<?php if($n!=0){ echo $G124;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G125" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G125" class="subgrade"  name="G125" value="<?php if($n!=0){ echo $G125;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G126" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G126" class="subgrade"  name="G126" value="<?php if($n!=0){ echo $G126;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G127" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G127" class="subgrade"  name="G127" value="<?php if($n!=0){ echo $G127;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G128" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G128" class="subgrade"  name="G128" value="<?php if($n!=0){ echo $G128;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G129" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G129" class="subgrade"  name="G129" value="<?php if($n!=0){ echo $G129;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="12CGPA" id="G129" class="subcode" disabled="">
                    <input type="text"  id="G129" class="subgrade"  name="12CGPA" >
                </div>
            </div>
        </div>



            <!-- 2ND TEAR -->

        <div class="year-label">2nd Year</div>
        <div class="grade-table" data-semister="1">
            <div class="semester-label">1st semester</div>
            <div class="semester-grades">
                <div class="grade-input-col">
                    <div class="subcode">Subject Code</div>
                    <div class="subgrade">Subject Grade</div>
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G111" class="subcode" disabled="" >
                    <input type="text" placeholder="subgrade" id="G111" class="subgrade" name="G211" value="<?php if($n!=0){ echo $G211;}else{echo "";}?>" >
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G112" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G112" class="subgrade"name="G212"value="<?php if($n!=0){ echo $G212;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G113" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G113" class="subgrade" name="G213" value="<?php if($n!=0){ echo $G213;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G114" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G114" class="subgrade" name="G214" value="<?php if($n!=0){ echo $G214;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G115" >
                    <input type="text" placeholder="subgrade" class="subgrade" id="G115" name="G215" value="<?php if($n!=0){ echo $G215;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G116">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G116" name="G216" value="<?php if($n!=0){ echo $G216;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G117">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G117"name="G217" value="<?php if($n!=0){ echo $G217;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G118">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G118" name="G218" value="<?php if($n!=0){ echo $G218;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
             
            
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G119">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G119" name="G219" value="<?php if($n!=0){ echo $G219;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
             
            
                    <input type="text" placeholder="21CGPA" class="subcode" disabled="" id="G119">
                    <input type="text"  class="subgrade" id="G119" name="21CGPA">
                </div>
            </div>
        </div>
        <div class="grade-table" data-semister="2">
            <div class="semester-label">2nd semester</div>
            <div class="semester-grades">
                <div class="grade-input-col">
                    <div class="subcode">Subject Code</div>
                    <div class="subgrade">Subject Grade</div>
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G121" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G121" class="subgrade"  name="G221" value="<?php if($n!=0){ echo $G221;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G122" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G122" class="subgrade"  name="G222" value="<?php if($n!=0){ echo $G222;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G123" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G123" class="subgrade"  name="G223" value="<?php if($n!=0){ echo $G223;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G124" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G124" class="subgrade"  name="G224" value="<?php if($n!=0){ echo $G224;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G125" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G125" class="subgrade"  name="G225" value="<?php if($n!=0){ echo $G225;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G126" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G126" class="subgrade"  name="G226" value="<?php if($n!=0){ echo $G226;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G127" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G127" class="subgrade"  name="G227" value="<?php if($n!=0){ echo $G227;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G128" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G128" class="subgrade"  name="G228" value="<?php if($n!=0){ echo $G228;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G129" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G129" class="subgrade"  name="G229" value="<?php if($n!=0){ echo $G229;}else{echo "";}?>">
                </div>
              <div class="grade-input-col">
                    <input type="text" placeholder="22CGPA" id="G129" class="subcode" disabled="">
                    <input type="text"  id="G129" class="subgrade"  name="22CGPA" >
                </div>
            </div>
        </div>


            <!-- inset 3rd year -->



        <div class="year-label">3rd Year</div>
        <div class="grade-table" data-semister="1">
            <div class="semester-label">1st semester</div>
            <div class="semester-grades">
                <div class="grade-input-col">
                    <div class="subcode">Subject Code</div>
                    <div class="subgrade">Subject Grade</div>
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G111" class="subcode" disabled="" >
                    <input type="text" placeholder="subgrade" id="G111" class="subgrade" name="G311" value="<?php if($n!=0){ echo $G311;}else{echo "";}?>" >
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G112" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G112" class="subgrade"name="G312"value="<?php if($n!=0){ echo $G312;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G113" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G113" class="subgrade" name="G313" value="<?php if($n!=0){ echo $G313;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G114" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G114" class="subgrade" name="G314" value="<?php if($n!=0){ echo $G314;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G115" >
                    <input type="text" placeholder="subgrade" class="subgrade" id="G115" name="G315" value="<?php if($n!=0){ echo $G315;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G116">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G116" name="G316" value="<?php if($n!=0){ echo $G316;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G117">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G117"name="G317" value="<?php if($n!=0){ echo $G317;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G118">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G118" name="G318" value="<?php if($n!=0){ echo $G318;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
             
            
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G119">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G119" name="G319" value="<?php if($n!=0){ echo $G319;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
             
            
                    <input type="text" placeholder="31CGPA" class="subcode" disabled="" id="G119">
                    <input type="text"  class="subgrade" id="G119" name="31CGPA">
                </div>
            </div>
        </div>
        

        
        <div class="grade-table" data-semister="2">
            <div class="semester-label">2nd semester</div>
            <div class="semester-grades">
                <div class="grade-input-col">
                    <div class="subcode">Subject Code</div>
                    <div class="subgrade">Subject Grade</div>
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G121" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G121" class="subgrade"  name="G321" value="<?php if($n!=0){ echo $G321;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G122" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G122" class="subgrade"  name="G322" value="<?php if($n!=0){ echo $G322;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G123" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G123" class="subgrade"  name="G323" value="<?php if($n!=0){ echo $G323;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G124" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G124" class="subgrade"  name="G324" value="<?php if($n!=0){ echo $G324;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G125" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G125" class="subgrade"  name="G325" value="<?php if($n!=0){ echo $G325;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G126" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G126" class="subgrade"  name="G326" value="<?php if($n!=0){ echo $G326;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G127" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G127" class="subgrade"  name="G327" value="<?php if($n!=0){ echo $G327;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G128" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G128" class="subgrade"  name="G328" value="<?php if($n!=0){ echo $G328;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G129" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G129" class="subgrade"  name="G329" value="<?php if($n!=0){ echo $G329;}else{echo "";}?>">
                </div>
              <div class="grade-input-col">
                    <input type="text" placeholder="32CGPA" id="G129" class="subcode" disabled="">
                    <input type="text"  id="G129" class="subgrade"  name="32CGPA" >
                </div>
            </div>
        </div>





        <div class="year-label">4th Year</div>


        <div class="grade-table" data-semister="1">
            <div class="semester-label">1st semester</div>
            <div class="semester-grades">
                <div class="grade-input-col">
                    <div class="subcode">Subject Code</div>
                    <div class="subgrade">Subject Grade</div>
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G111" class="subcode" disabled="" >
                    <input type="text" placeholder="subgrade" id="G111" class="subgrade" name="G411" value="<?php if($n!=0){ echo $G411;}else{echo "";}?>" >
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G112" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G112" class="subgrade"name="G412"value="<?php if($n!=0){ echo $G412;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G113" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G113" class="subgrade" name="G413" value="<?php if($n!=0){ echo $G413;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G114" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G114" class="subgrade" name="G414" value="<?php if($n!=0){ echo $G414;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G115" >
                    <input type="text" placeholder="subgrade" class="subgrade" id="G115" name="G415" value="<?php if($n!=0){ echo $G415;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G116">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G116" name="G416" value="<?php if($n!=0){ echo $G416;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G117">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G117"name="G417" value="<?php if($n!=0){ echo $G417;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G118">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G118" name="G418" value="<?php if($n!=0){ echo $G418;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
             
            
                    <input type="text" placeholder="subcode" class="subcode" disabled="" id="G119">
                    <input type="text" placeholder="subgrade" class="subgrade" id="G119" name="G419" value="<?php if($n!=0){ echo $G419;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
             
            
                    <input type="text" placeholder="41CGPA" class="subcode" disabled="" id="G119">
                    <input type="text"  class="subgrade" id="G119" name="41CGPA">
                </div>
            </div>
        </div>
        

        
        <div class="grade-table" data-semister="2">
            <div class="semester-label">2nd semester</div>
            <div class="semester-grades">
                <div class="grade-input-col">
                    <div class="subcode">Subject Code</div>
                    <div class="subgrade">Subject Grade</div>
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G121" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G121" class="subgrade"  name="G421" value="<?php if($n!=0){ echo $G421;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G122" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G122" class="subgrade"  name="G422" value="<?php if($n!=0){ echo $G422;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G123" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G123" class="subgrade"  name="G423" value="<?php if($n!=0){ echo $G423;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G124" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G124" class="subgrade"  name="G424" value="<?php if($n!=0){ echo $G424;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G125" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G125" class="subgrade"  name="G425" value="<?php if($n!=0){ echo $G425;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G126" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G126" class="subgrade"  name="G426" value="<?php if($n!=0){ echo $G426;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G127" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G127" class="subgrade"  name="G427" value="<?php if($n!=0){ echo $G427;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G128" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G128" class="subgrade"  name="G428" value="<?php if($n!=0){ echo $G428;}else{echo "";}?>">
                </div>
                <div class="grade-input-col">
                    <input type="text" placeholder="subcode" id="G129" class="subcode" disabled="">
                    <input type="text" placeholder="subgrade" id="G129" class="subgrade"  name="G429" value="<?php if($n!=0){ echo $G429;}else{echo "";}?>">
                </div>
              <div class="grade-input-col">
                    <input type="text" placeholder="42CGPA" id="G129" class="subcode" disabled="">
                    <input type="text"  id="G129" class="subgrade"  name="42CGPA" >
                </div>
            </div>
        </div>





    </div>


          <div class="issues-wrapper">
                        <div class="issue-label">Issues</div>

                             <div class="issue-tables">
                            <!-- added with javascript -->
                        
        <div class="issue-year">
            <div class="year-label">
                <div>Second year</div>
            </div>
            <div class="issue-table">
                <div class="issue-semister">
                    <div class="semister-label">first Semester</div>
                    <div class="semister-session-one">
                        <div class="session-label">sesson-1</div>
                        <div class="semister-issues">
                            <div class="academic-issues-wrapper">
                                <div class="academic-issues">
                                    <div class="academic-issue-content">
                                        <div class="paper">
                                            <div class="paper-content">
                                                <textarea id="Issue311" class="issue" placeholder="enter academic issue of student..." name="Issue111"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="academic-issue-remarks">
                                        <div class="paper">
                                            <div class="paper-content">
                                                <textarea id="Remark311" class="remark" placeholder="enter remarks here..." name="Remark111"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                    </div>
                    <div class="semister-session-two">
                        <div class="session-label">sesson-2</div>
                        <div class="semister-issues">
                            <div class="academic-issues-wrapper">
                                <div class="academic-issues">
                                    <div class="academic-issue-content">
                                        <div class="paper">
                                            <div class="paper-content">
                                                <textarea id="Issue312" class="issue" placeholder="enter academic issue of student..." name="Issue112"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="academic-issue-remarks">
                                        <div class="paper">
                                            <div class="paper-content">
                                                <textarea id="Remark312" class="remark" placeholder="enter remarks here..." name="Remark112"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="issue-semister">
                    <div class="semister-label">second Semester</div>
                    <div class="semister-session-one">
                        <div class="session-label">sesson-1</div>
                        <div class="semister-issues">
                            <div class="academic-issues-wrapper">
                                <div class="academic-issues">
                                    <div class="academic-issue-content">
                                        <div class="paper">
                                            <div class="paper-content">
                                                <textarea id="Issue321" class="issue" placeholder="enter academic issue of student..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="academic-issue-remarks">
                                        <div class="paper">
                                            <div class="paper-content">
                                                <textarea id="Remark321" class="remark" placeholder="enter remarks here..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="semister-session-two">
                        <div class="session-label">sesson-2</div>
                        <div class="semister-issues">
                            <div class="academic-issues-wrapper">
                                <div class="academic-issues">
                                    <div class="academic-issue-content">
                                        <div class="paper">
                                            <div class="paper-content">
                                                <textarea id="Issue322" class="issue" placeholder="enter academic issue of student..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="academic-issue-remarks">
                                        <div class="paper">
                                            <div class="paper-content">
                                                <textarea id="Remark322" class="remark" placeholder="enter remarks here..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>








    </div>
<!-- issuewrapper ended -->




    </div>


                                      <!--   add issues and remarks only here please -->





    </div>



                <!-- ... -->

                  




                 <input  type="submit" name="submit" >
                    </form>



                    



           

        </div>
    </div>
</div>




</div>
</div>


</body>
</html>