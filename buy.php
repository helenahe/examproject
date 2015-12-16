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

<div class="boxsubscription center-block">
    <h2>Step 1</h2>
    <h3>Personalise a playlist for your loved one.</h3>
    
    <div class="col-xs-12 col-md-4 col-md-offset-1 boxofchoosing">
        <h4>Personalize your gift</h4>
        <p>blaræjaælrjga aeækrjgaæelrgjhæa aeærhfæaekjrg æagaehækjrgh aædkfjghaækjrhgæajkerhaekd ggaehækjrgh aædkfjghaækjrhgæajkerhaekd g</p>
        <img src="img/artists.png" class="img-responsive" alt="picture of artists">
    </div>
    <div class="col-xs-12 col-md-4 col-md-offset-2 boxofchoosing"></div>
<a class="btn btn-default redbutton center-block" href="buy.php?monthsurl=12">GIVE</a>
</div>
<?php
include 'footer.php';

?>

