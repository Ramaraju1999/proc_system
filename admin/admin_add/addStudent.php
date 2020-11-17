<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Student</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./addStudent.css">
</head>

<body>
    <nav>
        <div class="label">Proctoring System</div>
        <div class="controls">
            <div class="home"><a href="../admin_home/admin_home.php">Home</a></div>
        </div>
    </nav>
    <div class="container">

        <div class="form-wrapper">
                <div class="import-wrapper">
                    <div class="import-opt data-input">
                        <div class="import-label">
                            Import student data from file!
                            <form style="background-color: rgba(0,0,0,0);display: block;" method="post" action="../../sem_marks.php" enctype="multipart/form-data">

                                <input style="height: 25px;margin-left: 0px;" type="file" name="file">
                                <input style="margin-left: 0px;" type="submit" name="upload_details" value="Upload">
                            </form>
                        </div>
                        <!-- <input type="file" accept=".csv,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel" name="file" id="file"> -->
                    </div>
                    <!-- <div class="import-opt photo-input">
                        <div class="import-label">
                            Import student Photos
                        </div>
                    </div> -->
                </div>
            <form method="post" enctype="multipart/form-data" action="stud_reg.php">

                <div class="or">
                    <div class="txt">or</div>
                </div>
                <div class="add-form">
                    <div class="inputrow">
                         <label>Upload Image</label>
                        <input type="file" accept="image/*" multiple name="student_img" id="pics111">
                        <label>name</label>
                        <input type="text" placeholder="Enter Full Name" id="name" name="name" pattern="[A-Za-z ]{1,30}" required>
  
                    </div>
                    <div class="inputrow">
                        <label>father name</label>
                        <input type="text" placeholder="Enter Father's Name" id="name" name="fname" pattern="[A-Za-z ]{1,30}" required>
                   
                    </div>

                    <div class="inputrow">
                        <label>registration No</label>
                        <input type="text" placeholder="Enter Roll Number" id="regdNo" name="regdNo" pattern="[3]{1}[0-9]{8}[0-9L]{1}[0-9]{2}"  title="Enter Valid Registration Number" required>
                        <div class="error">
                            <p>invalid registration number</p>
                        </div>
                    </div>
                    <div class="inputrow">
                        <label>department</label>
                        <select name="department" id="department" required>
                               <!--  <option value="">select</option> -->
                                <option value="cse">cse</option>
                                <option value="ece">ece</option>
                                <option value="mech">mech</option>
                                <option value="eee">eee</option>
                            </select>
                       <!--  <div class="error">
                            <p>select valid department</p>
                        </div> -->
                    </div>
                    <div class="inputrow">
                        <label>year</label>
                        <select name="year" required id="year" >
                              <!--   <option value="">select</option> -->
                                <option value="1">1st year</option>
                                <option value="2">2nd year</option>
                                <option value="3">3rd year</option>
                                <option value="4">4th year</option>
                            </select>
                        <!-- <div class="error">
                            <p>select year</p>
                        </div> -->
                    </div>
                    <div class="inputrow">
                        <label>section</label>
                        <select name="section" required id="section">
                               <!--  <option value="">select</option> -->
                                <option value="A">A section</option>
                                <option value="B">B section</option>
                                <option value="C">C section</option>
                            </select>
                       <!--  <div class="error">
                            <p>select section</p>
                        </div> -->
                    </div>
                    <div class="inputrow">
                        <label>Parent Mobile</label>
                        <input type="text" placeholder="Enter Parent Mobile Number" id="mobile" name="mobile"  pattern="[0-9]{10}" required title="Enter Valid Mobile Number">
                      <!--   <div class="error">
                            <p>Enter valid mobile number</p>
                        </div> -->
                    </div>
                       <div class="inputrow">
                        <label>Student Mobile</label>
                        <input type="tel" pattern="[0-9]{10}" placeholder="Enter Student Mobile Number" id="smobile" name="smobile" title="Enter Valid Mobile Number" required>
                     <!--    <div class="error">
                            <p>Enter valid mobile number</p>
                        </div> -->
                    </div>
                    <div class="inputrow">
                        <label>email</label>
                        <input type="email" required placeholder="Enter Email ID" id="email" name="email">
                     <!--    <div class="error">
                            <p>Enter valid email id</p>
                        </div> -->
                    </div>
                    <div class="inputrow">
                        <label>Address</label>
                        <input type="text" required placeholder="Enter Address" id="address" name="address">
                         
                    </div>
                     <div class="inputrow">
                        <label>Blood group</label>
                       <!--  <input type="text" placeholder="blood group" id="blood_group" name="blood_group"> -->
               
                        <select name="blood_group" required id="section">
                               <!--  <option value="">select</option> -->
                                <option value="O+ve">O+ve</option>
                                <option value="A+ve">A+ve</option>
                                <option value="B+ve">B+ve</option>
                                <option value="AB+ve">AB+ve</option>
                                <option value="O-ve">O-ve</option>
                                <option value="A-ve">A-ve</option>
                                <option value="B-ve">B-ve</option>
                                <option value="AB-ve">AB-ve</option>

                            </select>

                    </div>

                     <div class="inputrow">
                        <label>SSC</label>
                        <input type="text" placeholder="Enter SSC GPA" id="ssc" name="ssc" required  pattern="[0-9]{1,2}[.]{1}[0-9]{1,2}" title="Enter Valid GPA">
                     
                    </div>                     
                     <div class="inputrow">
                        <label>12th</label>
                        <input type="text" placeholder="Enter 12th percentage" id="12th" name="12th" required  pattern="[0-9]{1,2}[.]{1}[0-9]{1,2}"  title="enter Valid Percentage">
                     <!--    <div class="error">
                            <p>Enter valid 12th percentage</p>
                        </div> -->
                    </div>
                     <div class="inputrow">
                        <label>ranks</label>
                        <input type="Number" placeholder="Enter ECET/EAMCET Ranks" id="ranks" name="ranks" pattern="[1-9]{1}[0-9]{0,6}" title="Enter Valid Rank" required>
                       <!--  <div class="error">
                            <p>Enter valid ranks</p>
                        </div> -->
                    </div>
                     <div class="inputrow">
                        <label>aadhar</label>
                        <input type="tel" placeholder="Enter Valid Aadhar Number" id="aadhar" name="aadhar" pattern="[0-9]{12}" title="Enter Valid Aadhar Number" required>
                       <!--  <div class="error">
                            <p>Enter valid aadhar id</p>
                        </div> -->
                    </div>


                       <br>

                    <input type="submit" class="sub" >

                </div>
            </form>
        </div>


    </div>

</body>

</html>