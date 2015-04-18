<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apekama_db";

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
$sql = "INSERT INTO items (item_id,price,seller_id,description,warrenty,image,available,sold,added_date,category)
            VALUES ('" . 12345 . "', '" . $price . "','" . 234 . "','" . $description . "','" . $warrenty . "','" . $inputfile . "','" . 4 . "','" . 5 . "','" .  date("Y.m.d") . "','" .$category. "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);
?>