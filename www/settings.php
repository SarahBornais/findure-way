<!DOCTYPE html>
<html>
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
        
        <!--Added swipe code-->
<meta http-equiv="X-UA-Compatible" content="IE=8">
<meta name='viewport' content='width=device-width, initial-scale=1.0, maximum-scale=1.0'/> 
<link href='style.css' rel='stylesheet'/>
<style>
.swipe {
  overflow: hidden;
  visibility: hidden;
  position: relative;
}
.swipe-wrap {
  overflow: hidden;
  position: relative;
}
.swipe-wrap > div {
  float:left;
  width:100%;
  position: relative;
}
</style>
<!-- END -->
        
        
        
</head>
<body style="background-image: none; background-color: white" onload="initialize()">
<div id="page">
    
	<div id="header" style="height: 70px;">
				<a href="#menu" style="padding-top: 15px; height: 70px;"><img src="hamburger-menu-icon-grey.png" style="width:60px;height:60px;"></a>
            </div>
    
    <div id="content">
    <div class="jumbotron" id="main" style="padding-top: 0px;">
    </div>

<div class="container">
<div id='mySwipe' style='max-width: 500px; margin: 0 auto' class='swipe'>
  <div class='swipe-wrap'>
      <div class="jumbotron" id="main">
    <div class="container" style="height: 430px; width 80%; background-color: #36A0AE; color: white;">
        <h1>My high school</h1>
        <p style="text-align: center">Current high school: Colonel By Secondary School</p>
        <form class="navbar-form navbar-right" role="form" action="index.php" method="POST">
            <div class="form-group">
              <input type="text" placeholder="Change high school" class="form-control" name="email" id="email">
            </div>
            <button type="submit" class="btn btn-success" id="btnsignin">Update</button>
          </form>
      </div>
      </div>
      <div class="jumbotron" id="main">
    <div class="container" style="height: 430px; width 80%; background-color: #C44642; color: white;">
        <h1>My interests</h1>
        <p>&#9702; Computer science</p>
        <p>&#9702; Traveling</p>
        <p>&#9702; Helping others</p>
        <p>&#9702; Engineering</p>
        <p>&#9702; Social networking</p>
        <form class="navbar-form navbar-right" role="form" action="index.php" method="POST">
            <div class="form-group">
              <input type="text" placeholder="Add interest" class="form-control" name="email" id="email">
            </div>
            <button type="submit" class="btn btn-success" id="btnsignin">Update</button>
          </form>
      </div>
      </div>
      <div class="jumbotron" id="main">
    <div class="container" style="height: 430px; width 80%; background-color: #806084; color: white;">
        <h1>My favourite careers</h1>
        <p>Software engineer</p>
        <form class="navbar-form navbar-right" role="form" action="index.php" method="POST">
            <div class="form-group">
              <input type="text" placeholder="Add career" class="form-control" name="email" id="email">
            </div>
            <button type="submit" class="btn btn-success" id="btnsignin">Update</button>
          </form>
      </div>
      </div>
      <div class="jumbotron" id="main">
    <div class="container" style="height: 430px; width 80%; background-color: #86B503; color: white;">
        <h1>My strengths</h1>
        
        <form class="navbar-form navbar-right" role="form" action="index.php" method="POST">
            <div class="form-group">
              <input type="text" placeholder="Add strength" class="form-control" name="email" id="email">
            </div>
            <button type="submit" class="btn btn-success" id="btnsignin">Update</button>
          </form>
      </div>
      </div>
      <div class="jumbotron" id="main">
    <div class="container" style="height: 430px; width 80%; background-color: #A3D2D0; color: white;">
        <h1>My goals</h1>
        <p>Volunteering: volunteer for a total of 60 hours...</p>
        <form class="navbar-form navbar-right" role="form" action="index.php" method="POST">
            <div class="form-group">
              <input type="text" placeholder="Add goal" class="form-control" name="email" id="email">
            </div>
            <div class="form-group">
              <input type="text" placeholder="Add description" class="form-control" name="email" id="email" style="height: 70px; line-height: 30px;">
            </div>
            <button type="submit" class="btn btn-success" id="btnsignin">Update</button>
          </form>
      </div>
      </div>
  </div>
</div>

<script src='swipe.js'></script>

<script>
var elem = document.getElementById('mySwipe');
window.mySwipe = Swipe(elem, {});
</script>

<nav id="menu">
	<ul>
        <li><a href="openmenu.php">Home</a></li>
	   <li><a href="path.php">My pathway</a></li>
	   <li><a href="goals.html">My goals</a></li>
	   <li><a href="search.php">Search</a></li>
	   <li><a href="account.html">Account settings</a></li>
	   </ul>
</nav>
</div>
</body>
</html>