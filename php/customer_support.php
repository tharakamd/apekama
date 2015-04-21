<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apekama";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed!" . $conn->connect_error);
} 

// Select records from the database
$query1 = "SELECT * FROM buyer WHERE first_name='Selena' ";
$result1 = $conn->query($query1);
while($i = $result1->fetch_assoc()){
    $first_name=$i["first_name"];
    $last_name=$i["last_name"];
    $street=$i["street"];
    $city=$i["city"];
    $state=$i["state"];
    $user_name=$i["username"];
    $email=$i["email"];
}

$query2 = "SELECT mobile_number FROM buyer_mobile_number,buyer WHERE buyer.buyer_id=buyer_mobile_number.buyer_id AND buyer.first_name='Selena'";
$result2 = $conn->query($query2);
while($j = $result2->fetch_assoc()){
     $mobile_number=$j["mobile_number"];
}

?>