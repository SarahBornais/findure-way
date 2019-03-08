<?php 
session_start();

$dbhost = "localhost";
$dbname = "UserAccounts";
$dbuser = "root";
$dbpass = "root";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ("MySQL Error: " . mysqli_error());

    $university = $_POST["clicked"];
    $program = $_SESSION['Keyword'];
    
    $sql = "SELECT * FROM `myPrograms` WHERE University = '$keyword' AND Program = '$keyword'";
    $checkdatabase = mysqli_query($connection, $sql);
?>
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
	<body style="background-image: none; background-color: white">
		<div id="page">
			<div id="header" style="height: 40px;">
				<a href="search.php" id="back-arrow" style="padding-top: 15px; height: 70px;">&#10094;</a>
            </div>
<div id="content">
    <table style="width: 100%; margin-top: 0px;" border="0">
    <tr>
    <td style="width: 50%">
    <button onclick="flip()" style="width: 0px; height: 0px; background-color: transparent; position: absolute; border: 0px solid transparent;"></button>
    <section class="container" id="number1">
        <div class="card" onclick="flip()" id="1">
            <div class="front">Program</div>
            <div class="back">Computer Science</div>
        </div>
    </section>
    </td>
    <td>
    <button onclick="flip()" style="width: 0px; height: 0px; background-color: transparent; position: absolute; border: 0px solid transparent;"></button>
    <section class="container" id="number2">
        <div class="card" onclick="flip()" id="2">
            <div class="front">University</div>
            <div class="back">Carleton University</div>
        </div>
    </section>
    </td>
    </tr>
    <tr>
    <td>
    <button onclick="flip()" style="width: 0px; height: 0px; background-color: transparent; position: absolute; border: 0px solid transparent;"></button>
    <section class="container" id="number3">
        <div class="card" onclick="flip()" id="3">
            <div class="front">Degree</div>
            <div class="back"><p>Bcs</div>
        </div>
    </section>
    </td>
    <td>
    <button onclick="flip()" style="width: 0px; height: 0px; background-color: transparent; position: absolute; border: 0px solid transparent;"></button>
    <section class="container" id="number4">
        <div class="card" onclick="flip()" id="4">
            <div class="front">Grades</div>
            <div class="back">Minumum of 80%</div>
        </div>
    </section>
    </td>
    </tr>
    <tr>
    <td>
    <button onclick="flip()" style="width: 0px; height: 0px; background-color: transparent; position: absolute; border: 0px solid transparent;"></button>
    <section class="container" id="number5">
        <div class="card" onclick="flip()" id="5">
            <div class="front">Co-op Opportunities</div>
            <div class="back">Yes</div>
        </div>
    </section>
    </td>
    <td>
    <button onclick="flip()" style="width: 0px; height: 0px; background-color: transparent; position: absolute; border: 0px solid transparent;"></button>
    <section class="container" id="number6">
        <div class="card" onclick="flip()" id="6">
            <div class="front">Prerequesites</div>
            <div class="back">Math and Science</div>
        </div>
    </section>
    </td>
    </tr>
    </table>
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
        <script>
            function flip() {
    $('.card').toggleClass('flipped');
}
</script>
	</body>
</html>