<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Testdatabase";

$category = $_POST["category"];
$price = $_POST["price"];
$warrenty = $_POST["warrenty"];
$quantitiy = $_POST["quantity"];
$description = $_POST["description"];
$inputfile = $_POST["inputfile"];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
//        $sql = "CREATE DATABASE Testdatabase";
//        if (mysqli_query($conn, $sql)) {
//            echo "Database created successfully";
//        } else {
//            echo "Error creating database: " . mysqli_error($conn);
//        }
// sql to create table
//        $sql = "CREATE TABLE itemdata (                
//                category varchar(20),
//                price decimal(10,0),
//                warrenty varchar(8),
//                quantity varchar(5),
//                item_description varchar(8),
//                image blob
//                )";
//
//        if ($conn->query($sql) === TRUE) {
//            echo "Table item data created successfully";
//        } else {
//            echo "Error creating table: " . $conn->error;
//        }

$sql = "INSERT INTO itemdata (category,price,warrenty,quantity,item_description,image)
            VALUES ('" . $category . "', '" . $price . "','" . $warrenty . "','" . $quantitiy . "','" . $description . "','" . $inputfile . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>