<?php
    session_start();

    $dbhost = "localhost";
    $dbname = "UserAccounts";
    $dbuser = "root"; 
    $dbpass = "root";

    $connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ("MySQL Error: " . mysqli_error());
    
    if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
    }
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type = $_POST['type'];
    
    $sql = "INSERT INTO `UserAccounts`.`users` (`UserID`, `FirstName`, `LastName`, `EmailAddress`, `Password`, `Type`) VALUES (NULL, '$firstname', '$lastname', '$email', '$password', '$type');";
    
    $query = mysqli_query($connection, $sql);
    
    if ($query) {
    echo '<META HTTP-EQUIV="Refresh" Content="0; URL=index.html">';   
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    
?>
