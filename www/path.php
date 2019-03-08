<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
        <!--<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">-->
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
	<body style="background-image: none; background-color: white; margin-top: 0px;">
        <div style="margin-top: 0px;">
		<div id="page" style="clear: left">
			<div id="header" style="height: 70px;">
				<a href="#menu" style="padding-top: 15px; height: 70px;"><img src="hamburger-menu-icon-grey.png" style="width:60px;height:60px;"></a>
            </div>
			<div id="content">
                 <div class="jumbotron" id="main" style="padding-top: 0px;">
      <div class="container">
        <h1 id="dark-text">
        Your path
         </h1>
        <p id="dark-text">Let's get started.</p>
      </div>
    </div>

    <div class="container">
      <script src="http://prezi.github.io/prezi-player/lib/PreziPlayer/prezi_player.js"></script>
        <script>
        var d = document.createElement('div');
        var p = document.createElement('script');
        var pp = document.createElement('script');
        var incl; incl = function(){ 
        d.id = "prezi_player_weaavokajdqc"; 
        d.style = "padding-left: 20%";
        pp.innerHTML = "var player = new PreziPlayer('"+d.id+"', {preziId: 'weaavokajdqc', width: '100%', height: '250px', controls: true, explorable: true});"; 
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
			<nav id="menu">
				<ul>
                    <li><a href="openmenu.php">Home</a></li>
					<li><a href="path.php">My pathway</a></li>
					<li><a href="goals.html">My goals</a></li>
					<li><a href="search.php">Search</a></li>
					<li><a href="settings.php">Account settings</a></li>
				</ul>
			</nav>
		</div>
        </div>
	</body>
</html>