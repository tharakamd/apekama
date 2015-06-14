<?php require_once '/php/verify_session.php'; ?>
<!DOCTYPE html>
<?php
// variables for the navigation bar
$logout = "./php/logout.php";
$home = "home.php";
$about = "about.php";
?>
<?php
$host = "localhost";
$user = "root";
$pw = "";
$db = "apekama_db";

$connection = new mysqli($host, $user, $pw, $db);
if ($connection->connect_error) {
    die($connection->connect_error);
}
?>

<html lang="en">

    <head>
        <?php include './includes/bootstrap_import_style.php'; ?>

        <link rel="stylesheet" href="css/style.css">
        <title>Apekama</title>
    </head>

    <body>

        <style>
            body{
                margin-top: 80px;
                padding-left: 40px;
                padding-right: 40px;
            }
            .img_col{
                padding: 20px;
            }
            .row-bottom-margin { 
                margin-bottom: -30px;

            }
            img{
                min-width: 300px;
                max-width: 300px;
                min-height: 250px;
                max-height: 250px;


            }
        </style>

        <div class="row navigation" style="margin: 0px;">
            <?php require './includes/navigation.php'; ?>
        </div>

        <div class="row">
            <?php
            if (isset($_GET['catagory'])) {
                $catagory = strip_tags($_GET['catagory']);
                $sql = "select * from items where category = '$catagory'";
                $result = $connection->query($sql);
                //echo $catagory;
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        $image_url = $row['image'];
                        $price = $row['price'];
                        ?>
                        <div class = "col-lg-3 col-md-3 col-xs-6 img_col">
                            <div class = "row  row-bottom-margin">
                                <a class = "thumbnail" href = "#">
                                    <img class = "img-responsive" src = "./<?php echo $image_url; ?>" alt = "" >
                                </a>
                            </div>
                            <div class = "row">
                                <div class = "caption">
                                    <h3><?php echo $price; ?> RS</h3>
                                </div>
                            </div>

                        </div>
                        <?php
                    }
                    $connection->close();
                } else {
                    ?>
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3">
                        <div class="alert alert-danger" role="alert"><strong>No Items Found</strong></div>
                    </div>
                    <?php
                }
            } else {
                ?>
                <div class="col-lg-1"></div>
                <div class="col-lg-3">
                    <div class="alert alert-danger" role="alert"><strong>No Items Found</strong></div>
                </div>
                <?php
            }
            ?>

        </div>

        <?php include './includes/bootstrap_import_script.php' ?>


    </body>
</html>