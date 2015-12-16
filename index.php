<body background="test.jpg">

<?php
  // Remember to copy files from the SDK's src/ directory to a
  // directory in your application on the server, such as php-sdk/
  require_once('php-sdk/facebook.php');

  $config = array(
    'appId' => '160340340691501',
    'secret' => 'a9ff02125ce92050c8530442ef4cca16',
    'allowSignedRequest' => false // optional but should be set to false for non-canvas apps
  );

  $facebook = new Facebook($config);
  $user_id = $facebook->getUser();
?>




<html>
  <head>
  
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/fr_FR/sdk.js#xfbml=1&version=v2.3&appId=160340340691501";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>


<div class="fb-like" data-href="https://www.facebook.com/BillardCommunity" data-layout="standard" data-action="like" data-show-faces="true" data-share="true"></div>
</head>

 <div id="mini_xpromo_bar" style="width: 785px; margin-left: 20px; margin-bottom: 15px; height: 90px;">

 <a class="game-thumb " href=" https://apps.facebook.com/advisland/" target="_top">
    <span class="mask"></span>
    <img src="\icon7.jpg">
    </a>
	 <a class="game-thumb " href=" https://apps.facebook.com/-nyancat-/" target="_top">
    <span class="mask"></span>
    <img src="\icon6.png">
    </a>
	 <a class="game-thumb " href=" https://apps.facebook.com/supermmario/" target="_top">
    <span class="mask"></span>
    <img src="\icon3.png">
    </a>
	
    </div>
  <body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.3&appId=160340340691501";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '160340340691501',
      xfbml      : true,
      version    : 'v2.3'
    });

    // ADD ADDITIONAL FACEBOOK CODE HERE
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
  

  </body> 
</html>  

 <?php 
$app_id = '160340340691501';
$app_secret = "a9ff02125ce92050c8530442ef4cca16";
$my_url = "https://apps.facebook.com/bazzoocam";

$code = isset($_REQUEST["code"] ) ? $_REQUEST["code"] : false;


if(!$code) {
    $dialog_url = "https://www.facebook.com/v2.0/dialog/oauth?client_id=" . $app_id . "&scope=&redirect_uri=" . urlencode($my_url);
    echo("<script> top.location.href='" . $dialog_url . "'</script>");
}

$token_url = "https://graph.facebook.com/v2.0/oauth/access_token?client_id="
    . $app_id . "&redirect_uri=" . urlencode($my_url) . "&client_secret="
    . $app_secret . "&code=" . $code;

$access_token = file_get_contents($token_url);

$graph_url = "https://graph.facebook.com/v2.0/me?" . $access_token;

$user = json_decode(file_get_contents($graph_url));

echo("Hello " . $user->name);
 ?>
 
 
<body>
  <div id="fb-root"></div>
    <script src="https://connect.facebook.net/en_US/sdk.js"></script>

    <p>
    <input type="button"
      onclick="sendRequestViaMultiFriendSelector(); return false;"
      value="invite your friends"
    />
    </p>
    
    <script>
	FB.init({
  appId      : '160340340691501',
  version    : 'v2.0'
});
      

      

      function sendRequestViaMultiFriendSelector() {
        FB.ui({method: 'apprequests',
          message: 'my great game :) '
        }, requestCallback);
      }
      
      function requestCallback(response) {
        // Handle callback here
      }
	  
    </script>


    <html xmlns:fb="http://www.facebook.com/2008/fbml">
    <head>
    </head>
    <body>


    

    <div id="fb-root"></div>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId  : '160340340691501',
          status : true, // check login status
          cookie : true, // enable cookies to allow the server to access the session
          xfbml  : true  // parse XFBML
        });
      };

      (function() {
        var e = document.createElement('script');
        e.src = document.location.protocol + '//connect.facebook.net/en_US/sdk.js';
        e.async = true;
        document.getElementById('fb-root').appendChild(e);
      }());
    </script>
	

<BODY>
<SCRIPT language="Javascript">

 <!--

FB.Canvas.setSize({ width: 1366, height: 875 });

// -->

</SCRIPT>
</BODY>
 </HEAD>
<br/>
<head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-62544913-1', 'auto');
  ga('send', 'pageview');

</script>
<script src="//ads.lfstmedia.com/getad?site=230529" type="text/javascript"></script>
</head>
<body>
<!--/* Ad4Game Javascript Tag */-->

<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://ads.ad4game.com/www/delivery/ajs.php':'http://ads.ad4game.com/www/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=51508");
   document.write ('&cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&exclude=" + document.MAX_used);
   document.write (document.charset ? '&charset='+document.charset : (document.characterSet ? '&charset='+document.characterSet : ''));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='http://ads.ad4game.com/www/delivery/dck.php?n=a440652e' target='_blank'><img src='//ads.ad4game.com/www/delivery/avw.php?zoneid=51508&n=a440652e' border='0' alt='' /></a></noscript>

<div style="float:right">
<!--/* Ad4Game Javascript Tag */-->

<script type='text/javascript'><!--//<![CDATA[
   var m3_u = (location.protocol=='https:'?'https://ads.ad4game.com/www/delivery/ajs.php':'http://ads.ad4game.com/www/delivery/ajs.php');
   var m3_r = Math.floor(Math.random()*99999999999);
   if (!document.MAX_used) document.MAX_used = ',';
   document.write ("<scr"+"ipt type='text/javascript' src='"+m3_u);
   document.write ("?zoneid=51506");
   document.write ('&cb=' + m3_r);
   if (document.MAX_used != ',') document.write ("&exclude=" + document.MAX_used);
   document.write (document.charset ? '&charset='+document.charset : (document.characterSet ? '&charset='+document.characterSet : ''));
   if (document.context) document.write ("&context=" + escape(document.context));
   if (document.mmm_fo) document.write ("&mmm_fo=1");
   document.write ("'><\/scr"+"ipt>");
//]]>--></script><noscript><a href='http://ads.ad4game.com/www/delivery/dck.php?n=a8c18d05' target='_blank'><img src='//ads.ad4game.com/www/delivery/avw.php?zoneid=51506&n=a8c18d05' border='0' alt='' /></a></noscript>

</div>

<div align="center">
<embed src= "https://severe-samurai-6749.herokuapp.com/billard.swf" width="600" height="600"></embed></object>
</div> 
