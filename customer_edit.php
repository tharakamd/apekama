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
    <?php require_once 'php/customer_support.php'; ?>

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
                <a class="btn btn-primary btn-lg" href="./customer.php" role="button" style="float:right; font-weight:bold;">Save</a>
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
                                <br>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">Last Name</li>
                                <br>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">Street</li>
                                <br>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">City</li>
                                <br>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">State</li>
                                <br>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">Email</li>
                                <br>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">User Name</li>
                            </ul>
                        </div>
                        
                        <div class="col-xs-9">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-info">
                                    <input style="height:20px;" type="text" class="list-control" placeholder="First Name" id="customer_first_name" name="first_name">
                                </a>
                                <br>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <input style="height:20px;" type="text" class="list-control" placeholder="Last Name" id="customer_last_name" name="last_name">
                                </a>
                                <br>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <input style="height:20px;" type="text" class="list-control" placeholder="Street" id="customer_street" name="street">
                                </a>
                                <br>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <input style="height:20px;" type="text" class="list-control" placeholder="City" id="customer_city" name="city">
                                </a>
                                <br>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <input style="height:20px;" type="text" class="list-control" placeholder="State" id="customer_state" name="state">
                                </a>
                                <br>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <input style="height:20px;" type="text" class="list-control" placeholder="Your Email" id="customer_email" name="email">
                                </a>
                                <br>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <input style="height:20px;" type="text" class="list-control" placeholder="Unique User Name" id="customer_user_name" name="user_name">
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
                                <br>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">Name on Card</li>
                                <br>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">Expiary Date</li>
                                <br>
                                <li class="list-group-item list-group-item-info" style="font-weight:bold;">Pin</li>
                            </ul>
                        </div>
                        
                        <div class="col-xs-9">
                            <div class="list-group">
                                <a href="#" class="list-group-item list-group-item-info">
                                    <input style="height:20px;" type="text" class="list-control" placeholder="Card Number" id="card_number" name="card_number">
                                </a>
                                <br>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <input style="height:20px;" type="text" class="list-control" placeholder="Name on Card" id="card_name" name="card_name">
                                </a>
                                <br>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <input style="height:20px;" type="date" class="list-control" placeholder="Expiray Date" id="card_exp_date" name="exp_date">
                                </a>
                                <br>
                                <a href="#" class="list-group-item list-group-item-info">
                                    <input style="height:20px;" type="number" class="list-control" placeholder="Pin Number" id="card_pin_number" name="pin_number">
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