<?php
session_start();
if (!isset($_SESSION['admin'])) {
    echo 'session error';
    header('location: ../admin_login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
        <?php include '../includes/bootstrap_import_style.php'; ?>
        <link rel="stylesheet" href="../css/admin_home.css">


        <title>Admin Home</title>
    </head>

    <body>
        <style>
            body{
                padding-top: 100px;
            }
        </style>
        <div class="row">
            <div class="col-lg-4">
                
            </div>
            <div class="col-lg-3">
                <div class="alert alert-success" role="alert"><strong>Payment Proceeded Succesfully</strong><br><br>
                <a class="btn btn-primary" href="home.php" >Go Back</a>
                </div>
                
            </div>
            
        </div>
    </body>
</html>