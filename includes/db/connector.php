<?php 
    // connecting to the mysql database using mysqli

    // declaring variables
    $host = 'localhost';
    $user = 'root';
    $pw = '';
    $database = 'apekama_db';
    
    // creating connection
    $connection = new mysqli($host,$user,$pw,$database);
    if($connection->connect_error){
        die($connection->connect_errno); // die if error occurs 
    }
    
?>

