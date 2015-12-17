<?php

include 'db.php';

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


?>
<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title> Spotify Christmas </title>
        <link rel="icon" href="img/favicon.png">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
        <link href='https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two' rel='stylesheet' type='text/css'>

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 topbar">
                    <a href="index.php"><img alt="logo" src="img/christmaslogoW.png" class="logo"></a>
                    <a class="right margintop30px">Log In</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 marginbottom5percent"><!-- For Jumbotron-->
                    
                    <div class="col-xs-12 col-sm-9 padding20px">
                        <h1>Give music this <br> Christmas</h1>
                        <h3>Spotify Premium with a personalized playlist for your loved ones.<br> Choose between 4, 8 and 12 months subscription.</h3>
                        <a class="btn btn-default redbutton" href="#subscriptionways">GIVE</a>
                    </div>
                    <div class="col-xs-12 col-sm-3 ">
                    
                      
                            <div class="col-xs-12 margintop30px">
                                <a class="fb-popup right" alt="fb-icon" href=""><img src="img/facebooklogo.png"></a>
                                <a class="twitter-popup right" alt="twitter-icon" href="https://twitter.com/share?text=Santa%20please%20give%20me%20Spotify%20Premium%20for%20Christmas%20%23spotify%20%23wishlist"><img src="img/twitterlogo.png"></a>
                        </div>
                        <div class="col-xs-12">
                            
                                <img class="right arrowclass" src="img/hintarrow.png"> 
                            </div>
                            
                            <div class="col-xs-12">
                                <p class="hinttext right">Give your friends and <br> family a hint</p> 
                            </div>
                        
                           
                        </div>
                </div>
            </div>
            <div class="row playlist"> <!-- redbox and artists row -->
                <div class="col-xs-12 col-md-6">
                    <div class="padding20px paddingtopandbottom">
                        <h2>Create a <br>personalized <br>playlist </h2>
                        <h3>Create a unique playlist as a <br> part of you christmas present <br> to your friends and family.</h3>
                    </div>
                </div>
                 <!--PHPHPHPHPPHPHP -->
                 <div class="col-xs-12 col-md-6 nopadding"> 
                    
                        <?php 
                           
                            $sql = "SELECT * FROM artists LIMIT 5";
                            $result = $conn->query($sql);
                            $counter = 0;
                            while ($row = $result->fetch_assoc()) { 
                                $counter++; 
                                if ($counter <= 2) {
                               ?>
                        <div class="col-xs-6 nopadding maxheightandwidth">
                        <?php
                            echo "<img src=artists/".$row["fileName"]." "."class='img-responsive maxheight250px'> </div>";
                            } 
                        else {
                            ?>
                                       
                        <div class="col-xs-4 nopadding maxheight33">
                        <?php
                            echo "<img src=artists/";
                            echo $row["fileName"];
                            echo " ";
                            echo "class='img-responsive maxheight250px'> </div>";
                                    
                            }
                        
                        }?>
                        
                        
                    </div>
                </div>
            
            <div class="row rowforicons"> <!-- For icons about Premium-->
                <div class="col-xs-12 center marginbottom1percent">
                    <h3>THE BENEFITS OF SPOTIFY PREMIUM</h3>
                
                </div>
                <?php 
                           
                            $sql2 = "SELECT * FROM benefits";
                            $result2 = $conn->query($sql2);
                            $counter = 0;
                            while ($row = $result2->fetch_assoc()) { 
                               ?>
                        <div class="col-xs-12 col-md-3 center">
                            
                            <?php
                                echo "<img src=img/".$row["img"].' class="center-block">';
                             
                        
                            ?>
                                 
                            <h4 class="whitetext"> 
                                <?php echo $row["headline"]; ?>     
                            </h4>
                            <p><?php echo $row["text"]; ?></p>
                        </div>
                        <?php
                            
                             }
                        
                            ?>
                                       
                        </div>
                    
            <div class="row" id="subscriptionways"> <!-- 4/8/12 MONTHS BOXES-->
                <div class="col-xs-12">
                <h3 class="center margintop30px"><b>Give</b> your friends and family the opportunity to have their <b>music</b> everywhere with <b>Spotify Premium</b></h3>
                </div>
                <div class="col-xs-12 col-md-4"> <!-- 4 Months -->
                    <div class="center-block">
                        <img class="center-block spaceaboveanimals" alt="reindeer" src="img/reindeer.png">
                        <div class="box center-block">
                            <h4><b>4 months</b> Premium <br> Subscription <b>kr 200</b></h4>
                            <ul>
                                <li>Shuffle play</li>
                                <li>Unlimited skips</li>
                                <li>Ad free</li>
                                <li>Listen offline</li>
                                <li>High quality audio</li>
                                <li>Play any track</li>
                            </ul>
                            <a class="btn btn-default redbutton center-block" href="buy.php?monthsurl=4">GIVE</a>

                        </div> 
                    </div>
                </div>
                <div class="col-xs-12 col-md-4"><!-- 8 Months -->
                    <div class="center-block">
                        
                            <img class="center-block spaceaboveanimals" alt="snowman" src="img/snowman1.png">
                        
                        <div class="box center-block">
                            <h4><b>8 months</b> Premium <br> Subscription <b>kr 350</b></h4>
                            <ul>
                                <li>Shuffle play</li>
                                <li>Unlimited skips</li>
                                <li>Ad free</li>
                                <li>Listen offline</li>
                                <li>High quality audio</li>
                                <li>Play any track</li>
                            </ul>
                            <a class="btn btn-default redbutton center-block" href="buy.php?monthsurl=8">GIVE</a>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4"><!-- 12 Months -->
                     <div class="center-block">
                        
                            <img class="center-block spaceaboveanimals" alt="gingerbradman" src="img/gingerbreadman1.png">
                        
                        <div class="box center-block">
                            <h4><b>12 months</b> Premium <br> Subscription <b>kr 500</b></h4>
                            <ul>
                                <li>Shuffle play</li>
                                <li>Unlimited skips</li>
                                <li>Ad free</li>
                                <li>Listen offline</li>
                                <li>High quality audio</li>
                                <li>Play any track</li>
                            </ul>
                            <a class="btn btn-default redbutton center-block" href="buy.php?monthsurl=12">GIVE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 topbar">
                    <div class="margintop30px padding20px">
                    <a href="https://www.spotify.com/dk/">Spotify 2015</a>
                    </div>
                </div>
            </div>
            
            
            
        </div>    
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
                <script src="js/plugins.js"></script>
                <script src="js/main.js"></script>
                <script src="js/snowfall.jquery.js"></script>

                <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
                <script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-71507810-1', 'auto');
  ga('send', 'pageview');

</script>
                <!-- Share buttons -->
                <script>
                    $('.twitter-popup').click(function () {
                        var width  = 575,
                            height = 400,
                            left   = ($(window).width()  - width)  / 2,
                            top    = ($(window).height() - height) / 2,
                            url    = this.href,
                            opts   = 'status=1' +
                                     ',width='  + width  +
                                     ',height=' + height +
                                     ',top='    + top    +
                                     ',left='   + left;

                        window.open(url, 'twitter', opts);

                        return false;
                    });
                    $('.fb-popup').click(function () {
                        FB.ui({
                            method: 'share',
                            href: 'http://46.101.42.17/SpotifyWeb/',
                        }, function(response){});
                    });
                </script>
                <!-- Facebook SDK -->
                <script>
                    window.fbAsyncInit = function() {
                        FB.init({
                            appId: '1488676114775287',
                            xfbml: true,
                            version: 'v2.5'
                        });
                    };

                    (function(d, s, id){
                        var js, fjs = d.getElementsByTagName(s)[0];
                        if (d.getElementById(id)) {return;}
                        js = d.createElement(s); js.id = id;
                        js.src = "http://connect.facebook.net/en_US/sdk.js";
                        fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));
                </script>
    </body>
</html>
<?php
$conn->close();
?>