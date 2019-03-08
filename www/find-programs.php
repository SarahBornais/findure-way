<?php 

session_start();

$dbhost = "localhost";
$dbname = "UserAccounts";
$dbuser = "root";
$dbpass = "root";

$connection = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname) or die ("MySQL Error: " . mysqli_error());

    $keyword = $_POST["keyword"];
    
    $sql = "SELECT * FROM `myPrograms` WHERE University = '$keyword' OR Program = '$keyword'";
    $array = array();
    $array2 = array();
    $checkdatabase = mysqli_query($connection, $sql); 

        $_SESSION['number-of-results'] = mysqli_num_rows($checkdatabase);
        while ($row = mysqli_fetch_array($checkdatabase)) {
        $array[] = $row['Program'];
        $array2[] = $row['University'];
        }
        
        $_SESSION['Program'] = $array; 
        $_SESSION['University'] = $array2; 
        $_SESSION['Keyword'] = $keyword;     
        
        $mysql1 = "SELECT * FROM `myPrograms` WHERE University = '$keyword'";
        $mysql2 = "SELECT * FROM `myPrograms` WHERE Program = '$keyword'";
        $checkuniversity = mysqli_query($connection, $mysql1);
        $checkprogram = mysqli_query($connection, $mysql2);
        if(mysqli_num_rows($checkuniversity) > 0){
            $_SESSION['Datatype'] = 'University';
        }
        
        if(mysqli_num_rows($checkprogram) > 0){
            $_SESSION['Datatype'] = 'Program';
        }

        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=search.php">'; 

?>