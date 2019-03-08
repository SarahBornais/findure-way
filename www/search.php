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
        
        <style>

/* Swipe 2 required styles */

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

#search-results1 > a{
    color: white;
    margin-left: 5px;
    font-size: 2em;
}

#search-results2 > a{
    color: white;
    margin-left: 5px;
    font-size: 2em;
}
#search-results1 > div{
    border-bottom: 1px solid white;
}

#search-results2 > div{
    border-bottom: 1px solid white;
}

/* END required styles */

</style>
        
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
	<body style="background-image: none; background-color: white">
		<div id="page">
			<div id="header" style="height: 70px;">
				<a href="#menu" id="hamburger" style="padding-top: 15px; height: 70px;"><img src="hamburger-menu-icon-grey.png" style="width: 60px; height: 60px; position: absolute;"></a>
                <form action="find-programs.php" method="POST">
            <div style="margin-left: 100px; margin-top: -35px;">
              <input type="text" placeholder="Search for anything..." class="search-bar" name="keyword" id="keyword" style="float: right; position: absolute; margin-right: 200px;">
            </div>
            <button id="search" type="submit" style="margin-top: 10px;"></button>
          </form>
            </div>
			<div id="content">
         <div class="jumbotron" id="main" style="padding-top: 0px;">
      <div class="container">
      </div>
    </div>

    <div class="container">
<div><div style='text-align:center;padding-top:20px;'>
        
  <button onclick='mySwipe.prev()' style="width: 49%; height: 50px; border-radius: 0px; background-color: #A3D2D0; border: 0px solid white; layout: inline; color: white;">Universities</button> 
  <button onclick='mySwipe.next()' style="width: 49%; height: 50px; border-radius: 0px; background-color: #C9B732; border: 0px solid white; layout: inline; color: white;">Programs</button>

</div>
<div id='mySwipe' style='max-width:500px;margin:0 auto' class='swipe'>
    
  <div class='swipe-wrap'>
        <div style="background-color: #A3D2D0; height: 400px">
            <h1 style="color: white; margin-left: 5px;"> Universities</h1>
            <div id="search-results1" style="color: white;"></div>
            <img src="white-university-512.png" style="height: 200px; width: 200px; margin-left: 45px; margin-top: 30px;">
        </div>
        <div style="background-color: #C9B732; height: 400px">
            <h1 style="color: white; margin-left: 5px;"> Programs</h1>
            <div id="search-results2" style="color: white;"></div>
            <img src="book-icon.png" style="height: 240px; width: 240px; margin-left: 20px;">
        </div>
        </div>
        </div>
        <script>
            <?php 
                session_start();
            ?>
            
            var datatype = "<?php echo $_SESSION['Datatype'];?>";
            
            if (datatype == "University") {
            
            var numresults = <?php echo $_SESSION['number-of-results']; ?>;
            var ar2 = <?php echo json_encode($_SESSION['University']); ?>;
            var para2 = document.createElement("a");
            var text2 = ar2[0];
            var node2 = document.createTextNode(text2);
            para2.appendChild(node2);
            para2.href = "university.php";
            para2.id = text2;
            var newdiv2 = document.createElement("div");
            var element2 = document.getElementById("search-results1");
            element2.appendChild(para2);
            element2.appendChild(newdiv2);
            for (i = 0; i < numresults; i++) {
            var ar = <?php echo json_encode($_SESSION['Program']); ?>;
            var para = document.createElement("a");
            var text = ar[i];
            var node = document.createTextNode(text);
            para.appendChild(node);
            para.href = "info.php";
            para.id = text;
            var newdiv = document.createElement("div");
            var element = document.getElementById("search-results2");
            element.appendChild(para);
            element.appendChild(newdiv);
            }
            }
            
            if (datatype == "Program") {
            
            var numresults = <?php echo $_SESSION['number-of-results']; ?>;
            for (j = 0; j < numresults; j++) {
            var ar2 = <?php echo json_encode($_SESSION['University']); ?>;
            var para2 = document.createElement("a");
            var text2 = ar2[j];
            var node2 = document.createTextNode(text2);
            para2.appendChild(node2);
            para2.href = "university.php";
            para2.id = text2;
            var newdiv2 = document.createElement("div");
            var element2 = document.getElementById("search-results1");
            element2.appendChild(para2);
            element2.appendChild(newdiv2);
            }
            var ar = <?php echo json_encode($_SESSION['Program']); ?>;
            var para = document.createElement("a");
            var text = ar[0];
            var node = document.createTextNode(text);
            para.appendChild(node);
            para.href = "info.php";
            para.id = text;
            var newdiv = document.createElement("div");
            var element = document.getElementById("search-results2");
            element.appendChild(para);
            element.appendChild(newdiv);
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
        
        <script src='swipe.js'></script>
<script>

// pure JS
var elem = document.getElementById('mySwipe');
window.mySwipe = Swipe(elem, {
  // startSlide: 4,
  // auto: 3000,
  // continuous: true,
  // disableScroll: true,
  // stopPropagation: true,
  // callback: function(index, element) {},
  // transitionEnd: function(index, element) {}
});

// with jQuery
// window.mySwipe = $('#mySwipe').Swipe().data('Swipe');

</script>
	</body>
</html>