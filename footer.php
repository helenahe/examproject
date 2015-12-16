
            <div class="row">
                <div class="col-xs-12 topbar bottombar">
                    <div class="margintop30px">
                    <p>Spotify 2015</p>
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
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
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
                    href: 'https://developers.facebook.com/docs/',
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