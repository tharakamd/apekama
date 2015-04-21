<?php
//upload image to the file
$target_dir = "C:/wamp/www/apekama/apekama/images/item_image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . "." . "<br>";
        $uploadOk = 1;
    } else {
        echo "File is not an image." . "<br>";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists." . "<br>";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
    echo "Sorry, your file is too large." . "<br>";
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] < 1000) {
    echo "Sorry, your file is too small." . "<br>";
    $uploadOk = 0;
}

//check for dimensions

$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
$imageWidth = $check[0]; //Contains the Width of the Image
$imageHeight = $check[1]; //Contains the Height of the Image

if ($imageWidth <= 200 && $imageHeight <= 300) {
    echo "Sorry the image resolution should be greaterthean 200x300" . "<br>";
    $uploadOk = 0;
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed." . "<br>";
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.  :-(" . "<br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded." . "<br>";
    } else {
        echo "Sorry, there was an error uploading your file." . "<br>";
    }
}

// saving the data in the database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "apekama_db";

$category = $_POST["category"];
$price = $_POST["price"];
$warrenty = $_POST["warrenty"];
$quantitiy = $_POST["quantity"];
$description = $_POST["description"];
$imgelocation="C:/wamp/www/apekama/apekama/images/item_image/".$target_file;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "INSERT INTO items (item_id,price,seller_id,description,warrenty,image,added_date,category)
            VALUES ('" . 12345 . "', '" . $price . "','" . 234 . "','" . $description . "','" . $warrenty . "','" . $imgelocation . "','" . date("Y.m.d") . "','" . $category . "')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

mysqli_close($conn);


//upload image to the file
?>