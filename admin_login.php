<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include './includes/bootstrap_import_style.php'; ?>
        <link rel="stylesheet" href="css/admin_login.css">


        <title>Admin Login</title>
    </head>

    <body>
        <div class="row first_row"></div>
        <div class="row middle_row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <form class="form-inline" method="post" action="admin_login.php">
                    <div class="form-group">
                        <label for="adminpassword">Password</label>
                        <input type="password" class="form-control" id="adminpassword" name="pw">
                    </div>
                    <button type="submit" class="btn btn-default">Login</button>
                </form>
            </div>
            <div class="col-lg-4"></div>
        </div>
        <div class="row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <?php
                if (isset($_POST['pw'])) {
                    if(strcmp(strip_tags($_POST['pw']), "admin123")==0){
                        $_SESSION['admin'] = "admin";
                        header('location: ./admin/home.php');
                    }else{
                        echo '<div class="alert alert-danger" role="alert"><strong>Invalid Password</strong></div>';
                    }
                }

                ?>
                
            </div>
        </div>
        <div class="row"></div>

        <?php include './includes/bootstrap_import_script.php' ?>
    </body>
</html>
