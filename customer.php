<?php require_once '/php/verify_session.php';?>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Customer Details </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">

    <!--    Loading php files-->
<!--    <?php require_once 'php/customer_support.php'; ?>-->

    <style>
        body {
            padding-top: 60px;
        }
    </style>
</head>

<body>
    <div class="row header">
        <?php require './includes/navigation.php'; ?>
    </div>
    <div class="container">
        <div class="raw">
            <div class="jumbotron" style="border-style:solid; border-color:#337ab7; background-color:rgba(240, 244, 247, 0.4)">
                <img src="images/20.jpg" class="img-rounded" class="img-responsive" alt="Responsive image" style="outline-width:thick; outline-style:solid; outline-color:#337ab7">
                <a class="btn btn-primary btn-lg" href="./customer_edit.php" role="button" style="float:right; font-weight:bold;">Edit</a>
                <p></p>
                <br>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="font-weight:bold;text-transform:uppercase;">Basic Information</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-3">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">First Name</li>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">Last Name</li>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">Street</li>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">City</li>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">State</li>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">Email</li>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">User Name</li>
                            </ul>
                        </div>
                        <div class="col-xs-9">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-info">
                                    <?php echo "$first_name" ?>
                                </a>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <?php echo "$last_name" ?>
                                </a>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <?php echo "$street" ?>
                                </a>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <?php echo "$city" ?>
                                </a>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <?php echo "$state" ?>
                                </a>

                                <a href="#" class="list-group-item list-group-item-info">
                                    <?php echo "$email" ?>
                                </a>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <?php echo "$user_name" ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="font-weight:bold;text-transform:uppercase;">Card Details</h3>
                    </div>
                    <div class="panel-body">
                        <div class="col-xs-3">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">Card Number</li>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">Name on Card</li>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">Expiary Date</li>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">Pin</li>
                            </ul>
                        </div>
                        <div class="col-xs-9">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-info">
                                    <?php echo "$number" ?>
                                </a>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <?php echo "$name" ?>
                                </a>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <?php echo "$exp_date" ?>
                                </a>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <?php echo "$pin" ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>



        <!-- Latest compiled and minified JavaScript -->
        <script src="http://code.jquery.com/jquery-2.1.3.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>

</html>