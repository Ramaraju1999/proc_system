<?php
session_start();
session_destroy();
header("Location:common/login/login.php");
?>