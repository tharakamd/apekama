<?php require_once 'verify_session.php'; ?>

<?php



//upload image to the file
$target_dir = "../images/item_image/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        // echo "File is an image - " . $check["mime"] . "." . "<br>";
        $uploadOk = 1;
    } else {
        // echo "File is not an image." . "<br>";
        ?>
        <script>
            window.alert("the uploaded file is not an image");
            window.open("../new_item_window.php");
        </script>
        <?php

        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    //echo "Sorry, file already exists." . "<br>";
    ?>
        <script>
            window.alert("uploaded image already exist try another name");
            window.open("../new_item_window.php");
        </script>
        <?php
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 1000000) {
   // echo "Sorry, your file is too large." . "<br>";
    ?>
        <script>
            window.alert("Sorry, your file is too large");
            window.open("../new_item_window.php");
        </script>
        <?php
    $uploadOk = 0;
}
if ($_FILES["fileToUpload"]["size"] < 1000) {
   // echo "Sorry, your file is too small." . "<br>";
    ?>
        <script>
            window.alert("Sorry, your file is too small");
            window.open("../new_item_window.php");
        </script>
        <?php
    $uploadOk = 0;
}

//check for dimensions

$check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
$imageWidth = $check[0]; //Contains the Width of the Image
$imageHeight = $check[1]; //Contains the Height of the Image

if ($imageWidth <= 200 && $imageHeight <= 300) {
    //echo "Sorry the image resolution should be greaterthean 200x300" . "<br>";
    ?>
        <script>
            window.alert("Sorry,the image resolution shoulad be greater than 200x300");
            window.open("../new_item_window.php");
        </script>
        <?php
    $uploadOk = 0;
}
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
   // echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed." . "<br>";
    ?>
        <script>
            window.alert("Sorry, only JPG, JPEG, PNG, GIF files are allowed");
            window.open("../new_item_window.php");
        </script>
        <?php
    $uploadOk = 0;
}
if ($uploadOk == 0) {
    //echo "Sorry, your file was not uploaded.  :-(" . "<br>";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
       // echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded." . "<br>";
    } else {
       // echo "Sorry, there was an error uploading your file." . "<br>";
        ?>
        <script>
            window.alert("Sorry, there was an error uploading your file try agin");
            window.open("../new_item_window.php");
        </script>
        <?php
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
$imgelocation = $target_file;

//creating the item id

$t = time();
$type;
if ($category == "Arts and Crafts") {
    $type = "AC-";
}
if ($category == "Gem and Jewellary") {
    $type = "GJ-";
}
if ($category == "Clothes and Fabrics") {
    $type = "CF-";
}
if ($category == "Lether and Ceramics") {
    $type = "LC-";
}
if ($category == "Other") {
    $type = "OI-";
}

$sellerID = $_SESSION['id'];
$itemID = $type . substr($sellerID, 3) . "-" . $t;

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//updat the row of the items table

$itemStatus = 0;
$sql = "INSERT INTO items (item_id,price,seller_id,description,warrenty,image,added_date,category)
            VALUES ('" . $itemID . "', '" . $price . "','" . $sellerID . "','" . $description . "','" . $warrenty . "','" . $imgelocation . "','" . date("Y.m.d") . "','" . $category . "')";


if ($conn->query($sql) === TRUE) {
   // echo "New record created successfully";
    $itemStatus = 1;
} else {
    //echo "Error: " . $sql . "<br>" . $conn->error;
    ?>
        <script>
            window.alert("Sorry,error updating the database, try again");
            window.open("../new_item_window.php");
        </script>
        <?php
}

//update the repository database

$status = "for sale";
$repositoryStatus = 0;
for ($i = 1; $i <= $quantitiy; $i++) {

    $item_sub_id = $itemID . "-" . $i;
    $sql = "INSERT INTO repository(item_id,item_sub_id,added_date,status)
            VALUES ('" . $itemID . "', '" . $item_sub_id . "','" . date("Y.m.d") . "','" . $status . "')";

    if ($conn->query($sql) === TRUE) {
       // echo "New record created successfully";
        $repositoryStatus = 1;
    } else {
       // echo "Error: " . $sql . "<br>" . $conn->error;
        ?>
        <script>
            window.alert("Sorry, error upadting the databse try again");
            window.open("../new_item_window.php");
        </script>
        <?php
        $repositoryStatus = 0;
    }
}
mysqli_close($conn);

if ($itemStatus == 1 && $repositoryStatus == 1) {
    ?>
    <script>
        window.alert("the item added to the database successfully");
        window.open("../home.php");
    </script>
    <?php

}
?>