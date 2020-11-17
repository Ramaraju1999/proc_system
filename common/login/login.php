<html><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>user login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./login.css">
<!--     <script src="./loginNet.js"></script>
    <script src="./loginUi.js"></script>
    <script src="./loginValidation.js"></script> -->

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
    <div class="wrapper">
        <div class="logo">
            <img src="./icons/awesome-secure-logo.svg" alt="secure logo">
        </div>
        <div class="select-wrapper">
            <div class="user admin" data-user="admin" onclick="window.location.href='admin_login.php'">
                <img src="./icons/admin.svg" alt="admin">
                <div class="label">Admin</div>
            </div>
            <div class="user faculty" data-user="faculty" onclick="window.location.href='faculty_login.php'">
                <img src="./icons/faculty.svg" alt="faculty">
                <div class="label">Proctor </div>
            </div>
        </div>
    </div>
    </div>



</body></html>