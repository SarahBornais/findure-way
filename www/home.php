<!DOCTYPE html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">

        <link rel="stylesheet" href="css/bootstrap.min.css">
        <style>
            body {
                padding-top: 50px;
                padding-bottom: 20px;
            }
        </style>
        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
        
        
        <!--Added mmenu code-->
        <meta http-equiv="content-type" content="text/html;charset=iso-8859-1" />
		<meta name="author" content="www.frebsite.nl" />
		<meta name="viewport" content="width=device-width initial-scale=1.0 maximum-scale=1.0 user-scalable=yes" />
		<meta name="robots" content="noindex, nofollow" />
        
		<link type="text/css" rel="stylesheet" href="examples.css" />
		<link type="text/css" rel="stylesheet" href="mmenu.css" />
		
		<script type="text/javascript" language="javascript" src="jquery.js"></script>
		<script type="text/javascript" src="jquery.mmenu.js"></script>
		<script type="text/javascript">
			$(function() {
				$('nav#menu').mmenu();
			});
		</script>
        <!--End-->
        
        
        
    </head>
    <body>
    <div id="page">
			<div id="header">
				<a href="#menu"></a>
			</div>
            <div id="content">
    <div class="jumbotron" id="main">
      <div class="container">
        <h1>
        Welcome 
        <?php 
        session_start();
        echo $_SESSION['FirstName'];
         ?>.
         </h1>
        <p>Let's get started.</p>
      </div>
    </div>

    <div class="container">
      <script src="http://prezi.github.io/prezi-player/lib/PreziPlayer/prezi_player.js"></script>
        <script>
        var d = document.createElement('div');
        var p = document.createElement('script');
        var pp = document.createElement('script');
        var incl; incl = function(){ 
        d.id = "prezi_player_ov8b7ybhwmdi"; 
        d.style = "padding-left: 20%";
        pp.innerHTML = "var player = new PreziPlayer('"+d.id+"', {preziId: 'ov8b7ybhwmdi', width: '100%', height: '400px', controls: true, explorable: true});"; 
        document.body.appendChild(d); 
        document.body.appendChild(pp); }; 
        if (!window.PreziPlayer){ 
            p.src="http://prezi.github.io/prezi-player/lib/prezi_player.js"; 
            document.body.appendChild(p); 
            p.onload = incl; 
        } else { 
            incl(); 
        }
        </script>
      </div>
      <nav id="menu">
				<ul>
					<li><a href="page.html">The page</a></li>
					<li><a href="mainmenu.html">The mainmenu</a></li>
					<li><a href="submenus.html">Submenus</a></li>
					<li><a href="labels.html">Labels</a></li>
					<li><a href="counters.html">Counters</a></li>
					<li><a href="selected.html">Selected item</a></li>
					<li class="Selected"><a href="openmenu.html">Open the menu</a></li>
					<li><a href="closemenu.html">Close the menu</a></li>
				</ul>
			</nav>
      </div>
    </div> <!-- /container -->        

        
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/main.js"></script>
        
        
    </body>
</html>
