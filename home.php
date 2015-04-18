<?php require_once  '/php/verify_session.php'; ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include './includes/bootstrap_import_style.php'; ?>
        
        <link rel="stylesheet" href="css/style.css">
        <title>Time Line</title>
    </head>

    <body>

        <div class="">
            <!--            <div class="row header well">
            <?php //require './includes/header.php'; ?>
                        </div>-->
            <div class="row navigation" style="margin: 0px;">
                <?php require './includes/navigation.php'; ?>
            </div>
            <div class="row image_slider" style="margin: 0px;">
                <?php require './includes/image_slider.php'; ?>
            </div>
            <div class="row item_viewer well"style="margin: 0px;">
                <?php require './includes/item_viewer.php'; ?>
            </div>
            <h3><a href="new_item_window.php">add new item</a></h3>
            <div class="row footer well" style="margin: 0px; padding: 0px;">
                <?php require './includes/footer.php'; ?>
            </div>
        </div>

        <?php include './includes/bootstrap_import_script.php' ?>


    </body>

</html>