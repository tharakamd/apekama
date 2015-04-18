<?php require_once  '/php/verify_session.php'; ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include './includes/bootstrap_import_style.php'; ?>
        
        <link rel="stylesheet" href="css/home.css">
        <title>Time Line</title>
    </head>

    <body>

        <div class="">
            <div class="row navigation">
                <?php require './includes/navigation.php'; ?>
            </div>
            <div class="row image_slider">
                <?php require './includes/image_slider.php'; ?>
            </div>
            <br>
            <div class="row item_viewer ">
                <div class="col-lg-2"></div>
                <?php require './includes/ItemSlider.php'; ?>
            </div>
            <div class="row footer">
                <?php require './includes/footer.php'; ?>
            </div>
        </div>

        <?php include './includes/bootstrap_import_script.php' ?>


    </body>

</html>