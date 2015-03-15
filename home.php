<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include './includes/bootstrap_import_style.php';?>
        <link rel="stylesheet" href="css/style.css">
        <title>Time Line</title>
    </head>

    <body>

        <div class="">
            <div class="row header well">
                <?php require './includes/header.php'; ?>
            </div>
            <div class="row navigation">
                <?php require './includes/navigation.php';?>
            </div>
            <div class="row image_slider well">
                <?php require './includes/image_slider.php';?>
            </div>
            <div class="row item_viewer well">
                <?php require './includes/item_viewer.php';?>
            </div>
            <div class="row footer well">
                <?php require './includes/footer.php'; ?>
            </div>
        </div>

        <?php include './includes/bootstrap_import_script.php'?>
        

    </body>

</html>