
<!DOCTYPE html>


<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>faculty registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./registerfaculty.css">
</head>

<body>


<script>
function Validate() {
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("cpassword").value;
        if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
        }
        return true;
    }
</script>

    <nav>
        <div class="label">Proctoring System</div>
        <div class="controls">
            <div class="home"><a href="../../index/index.php">Home</a></div>
            <div class="home login">
                <a href="../../common/login/login.php">Login</a>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="form">
            <form action="phpreg.php" class="form" method="post" onSubmit = "return Validate(this)" >
                
                <div class="inputrow">
                   
                    <div class="photopreview">
                        <img src="man.svg" alt="photopreview" class="previewimg"  >
                        
                    </div>

                   
                </div>
                <div class="inputrow">
                    <label>name</label>
                    <input type="text" placeholder="Enter Name" name="name" id="name" class="inputs">
                    <div class="error">please enter valid name</div>
                </div>
                <div class="inputrow">
                    <label>Employee ID</label>
                    <input type="text" class="inputs" placeholder="Enter Employee ID" name="regdNo" id="regdNo">
                    <div class="error">please enter valid registration id</div>
                </div>
                <div class="inputrow">
                    <label>department</label>
                    <select name="department" id="department">
                        <option value="">select</option>
                        <option value="cse">cse</option>
                        <option value="mech">mech</option>
                        <option value="ece">ece</option>
                        <option value="eee">eee</option>
                    </select>
                    <div class="error">please select department</div>
                </div>
                <div class="inputrow">
                    <label>mobile</label>
                    <input type="tel" class="inputs" pattern="[0-9]{10}" placeholder="Enter Mobile Number" name="mobile" id="mobile" minlength ="10" maxlength="10" title="Enter Valid Mobile Number">
                    <div class="error">enter valid mobile number</div>
                </div>
                <div class="inputrow">
                    <label>email</label>
                    <input type="email" class="inputs" placeholder="Enter Email ID" name="email" id="email" title="Enter Valid Email ID">
                    <div class="error">Enter Valid Email Address</div>
                </div>
                <div class="inputrow">
                    <label>create password</label>
                    <input type="password" class="inputs" placeholder="Enter Password" name="password" id="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Password Must Contain Atleast 1 Capital,1 Small ,1 Number,1 Special Charecter And Should Be Of Min 8 Charecters" required>
                    <div class="error">password should contain atleast one special character ,one digit </div>
                </div>
                <div class="inputrow">
                    <label>confirm password</label>
                    <input type="password" class="c-password" placeholder="Re-Enter Password" name="cpassword" id="cpassword" required>
                    <div class="error">password missmatch</div>
                </div>
                 <div class="inputrow">
                    <label >Upload photo </label><input type="file" accept="image/*" name="file" id="file"> 
                    <div class="error">please select image less then 1mb</div>
                
                </div>
                
                <br>

                <input type="submit" name="submit" >
            </form>
        </div>
    </div>
</body>

</html>