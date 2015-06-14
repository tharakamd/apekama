<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apekama_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed!" . $conn->connect_error);
} 

// Display records from the database
$uname = $_SESSION['uname'];
$query1 = "SELECT * FROM buyer WHERE username='$uname' ";
$result1 = $conn->query($query1);
while($i = $result1->fetch_assoc()){
    $first_name=$i["first_name"];
    $last_name=$i["last_name"];
    $street=$i["street"];
    $city=$i["city"];
    $state=$i["state"];
    $user_name=$i["username"];
    $email=$i["email"];
    $number=$i["card_number"];
    $name=$i["name_on_card"];
    $exp_date=$i["card_exp_date"];
    $pin=$i["card_pin"];
}

// Add records to the database - Use Sign-in 
// Update records in the database - Use Edit button press

?>