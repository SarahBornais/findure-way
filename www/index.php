<?php 

session_start();

$dbhost = "localhost";
$dbname = "UserAccounts";
$dbuser = "root"; 
$dbpass = "root";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die("MySQL Error: " . mysqli_error());

    $email = $_POST["email"];
    $password = $_POST["password"];
     
    $sql = "SELECT * FROM `users` WHERE EmailAddress = '$email' AND Password = '$password'";
    
    $checklogin = mysqli_query($connection, $sql);
    
     //If it is a valid username and password
    if(mysqli_num_rows($checklogin) == 1)
    {
        $row = mysqli_fetch_array($checklogin);
        $email = $row['EmailAddress'];
        $FirstName = $row['FirstName'];
        
        $_SESSION['FirstName'] = $FirstName;
        $_SESSION['EmailAddress'] = $email;
        $_SESSION['LoggedIn'] = 1;  
        
        //header("Location: home.php");
        //exit;
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=openmenu.php">';   
    }
    //If it is not a valid username and/or password
    else
    {
        header("Location: register.html");
        exit;
    }
?>