<?php require_once '/php/verify_session.php'; ?>
<?php
$home = "home.php";
$logout = "./php/logout.php";
$about = "about.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Add New Item</title>
        <meta charset="utf-8">

        <!--        Importing style sheets-->
        <?php include './includes/bootstrap_import_style.php'; ?>
        <link rel="stylesheet" type="text/css" href="css/navigation_style.css">


        <!--        Importing script files-->
        <?php include './includes/bootstrap_import_script.php' ?>

    </head>
    <body>
        <style>
            body{
                margin-top: 70px;

            }
        </style>
        <?php require './includes/navigation.php'; ?>

        <div class="row">
            <div class="col-lg-1"></div>
            <div class="col-lg-4">
                <div>
                    <h4 class="modal-title" id="myModalLabel">Add New Item</h4>
                </div>
                <div class="modal-body">

                    <form action="new_item_window.php" method="post" enctype="multipart/form-data">                
                        <div class="form-group">                
                            <label >Select the item category</label>
                            <select class="form-control" name="category" >
                                <option>Arts and Crafts</option>
                                <option>Gem and Jewellary</option>
                                <option>Clothes and Fabrics</option>
                                <option>Lether and Ceramics</option>
                                <option>Other</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Price</label>
                            <input type="number" class="form-control" id="price" name="price" placeholder="LKR">
                        </div>
                        <div class="form-group">
                            <label >Warrenty</label>
                            <input type="number" class="form-control" id="warrenty" name="warrenty" placeholder="MONTHS">
                        </div>
                        <div class="form-group">
                            <label >Quantity</label>
                            <input type="number" class="form-control" id="quantity" name="quantity" placeholder="No of Products">
                        </div>
                        <div class="form-group">                    
                            <label for="exampleInputPassword1">Item Description</label>
                            <textarea class="form-control" name="description" rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label >Item Image</label>                
                            Select image to upload:
                            <input type="file" name="fileToUpload" id="fileToUpload">                    
                        </div> 
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div> 
                        <div>
                            <?php
//upload image to the file
                            if (isset($_FILES["fileToUpload"]["name"]) AND !empty($_FILES["fileToUpload"]["name"])) {
                                $target_dir = "images/item_image/";
                                $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
                                $uploadOk = 1;
                                $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
                                if (isset($_POST["submit"])) {
                                    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                    if ($check !== false) {
                                        //echo "File is an image - " . $check["mime"] . "." . "<br>";
                                        $uploadOk = 1;
                                    } else {
                                        echo "<h3 style=\"color: red;\">uplad a valid image</h3>";
                                        exit();
                                        $uploadOk = 0;
                                    }
                                }
// Check if file already exists
                                if (file_exists($target_file)) {
                                    echo "<h3 style=\"color: red;\">the file already exists</h3>";
                                    exit();
                                    $uploadOk = 0;
                                }
// Check file size
                                if ($_FILES["fileToUpload"]["size"] > 1000000) {
                                    echo "<h3 style=\"color: red;\">your file is too large</h3>";
                                    exit();
                                    $uploadOk = 0;
                                }
                                if ($_FILES["fileToUpload"]["size"] < 1000) {
                                    //echo "Sorry, your file is too small." . "<br>";
                                    echo "<h3 style=\"color: red;\">your file is too small</h3>";
                                    exit();
                                    $uploadOk = 0;
                                }

//check for dimensions

                                $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
                                $imageWidth = $check[0]; //Contains the Width of the Image
                                $imageHeight = $check[1]; //Contains the Height of the Image

                                if ($imageWidth <= 200 && $imageHeight <= 300) {
                                    // echo "Sorry the image resolution should be greaterthean 200x300" . "<br>";
                                    echo "<h3 style=\"color: red;\">image resolution should be greatehr than 200X 300 px</h3>";
                                    exit();
                                    $uploadOk = 0;
                                }
// Allow certain file formats
                                if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
                                    //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed." . "<br>";
                                    echo "<h3 style=\"color: red;\">only JPG,JPEG, PNG & GIF files are allowed</h3>";
                                    exit();
                                    $uploadOk = 0;
                                }
                                if ($uploadOk == 0) {
                                    //echo "Sorry, your file was not uploaded.  :-(" . "<br>";
                                    echo"<h3 style=\"color: red;\">the image was not uploaded</h3>";
// if everything is ok, try to upload file
                                } else {
                                    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                                        //echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded." . "<br>";
                                    } else {
                                        //echo "Sorry, there was an error uploading your file." . "<br>";
                                        echo"<h3 style=\"color: red;\">the image was not uploaded</h3>";
                                        exit();
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

                                $sellerID = $_SESSION['id'];
                                //create the item id according to the time
                                $itemID = time();

// Create connection
                                $conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
                                if (!$conn) {
                                    die("Connection failed: " . mysqli_connect_error());
                                }

//updat the row of the items table

                                $itemStatus = 0;
                                $sql = "INSERT INTO items (item_id,price,seller_id,description,warrenty,image,added_date,category)
            VALUES ('" . $itemID . "','" . $price . "','" . $sellerID . "','" . $description . "','" . $warrenty . "','" . $imgelocation . "','" . date("Y.m.d") . "','" . $category . "')";


                                if ($conn->query($sql) === TRUE) {
                                    //echo "New record created successfully";
                                    $itemStatus = 1;
                                } else {
                                    //echo "Error: " . $sql . "<br>" . $conn->error;
                                    echo"<h3 style=\"color: red;\">error connecting to database</h3>";
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
                                        echo"<h3 style=\"color: red;\">error updating the database</h3>";
                                        $repositoryStatus = 0;
                                    }
                                }
                                mysqli_close($conn);

                                if ($itemStatus == 1 && $repositoryStatus == 1) {
                                    // echo 'item added to the database successfully';
                                    ?>
                                    <script>
                                        window.alert("the item added to the database successfully");
                                        window.open("home.php");
                                    </script>
                                    <?php
                                }
                            }
                            ?>
                        </div>

                    </form>

                </div>
            </div>
        </div>
        <div class="row footer" style="margin: 0px; padding: 0px;">
            <?php// require './includes/footer.php'; ?>
        </div>



    </body>
</html>
