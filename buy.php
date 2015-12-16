<?php

include 'db.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

include 'head.php';
$months= $_GET['monthsurl'];

?>
<div class="text-center col-xs-12 col-sm-6 col-sm-offset-3">
<!--    <img alt="logo" src="img/christmaslogoW.png" class="width300px">-->
    <h2>Step 1</h2>
    <h3>You have to log in or sign up to continue</h3>
    <a class="btn btn-default fbloginbutton center-block">LOG IN WITH FACEBOOK</a>
    <p>OR</p>
    <input type="text" class="width90percent form-control center-block" placeholder="Username">
    <input class="width90percent form-control center-block" placeholder="Password">
    <div class="col-xs-6 col-xs-offset-6">
        <a class="btn btn-default loginbtn">LOG IN</a>
    </div>
    <div class="marginbottom30px">
    <p>Forgot your username or password?</p>
    <p>Don't have an account? Sign Up</p>
    </div>
</div>


<?php
include 'footer.php';

?>

