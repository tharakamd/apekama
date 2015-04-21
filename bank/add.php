<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1252">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="validate(1).js"></script>
        <style>
            .top_row{
                padding-top: 50px;
            }
        </style>
        <title>New Card</title>
    </head>
    <body>

        <div class="row">

        </div>  
        <div class="row top_row">
            <div class="col-lg-2"></div>
            <div class="col-lg-8">
                <div class="">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-12">
                                <form class="form-horizontal" id="add_card">
                                    <div class="form-group">
                                        <label for="card_number" class="col-sm-2 control-label">Card Number</label>
                                        <div class="col-sm-4">
                                            <input type="text" name ="card_number" class="form-control" id="card_number" placeholder="16 digit number without dashes">
                                        </div>
                                        <div class="col-sm-4 messages"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="customer_name" class="col-sm-2 control-label">Customer Name</label>
                                        <div class="col-sm-4">

                                            <select class="selectpicker form-control" name="customer_name" id="customer_name">
                                                <?php
                                                $host = 'localhost';
                                                $user = 'root';
                                                $pw = '';
                                                $database = 'bank';

                                                $connection = new mysqli($host, $user, $pw, $database);
                                                if ($connection->connect_error) {
                                                    die($connection->connect_errno);
                                                }
                                                $sql = "select name from customer";
                                                $result = $connection->query($sql);
                                                if ($connection->error) {
                                                    die($connection->error);
                                                }
                                                while ($row = $result->fetch_assoc()) {
                                                    echo '<option value="' . $row['name'] . '" title="' . $row['name'] . '">' . $row['name'] . '</option>';
                                                }
                                                ?>

                                            </select>
                                        </div>
                                        <div class="col-sm-4 messages"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="exp_date" class="col-sm-2 control-label">Expire Date</label>
                                        <div class="col-sm-4">
                                            <input type="date" class="form-control" id="exp_date" name="exp_date">
                                        </div>
                                        <div class="col-sm-4 messages"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="pin_number" class="col-sm-2 control-label">Pin` Number</label>
                                        <div class="col-sm-4">
                                            <input type="text" name ="pin_number" class="form-control" id="pin_number" placeholder="3 digit number behind card" >
                                        </div>
                                        <div class="col-sm-4 messages"></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="balance" class="col-sm-2 control-label">Balance</label>
                                        <div class="col-sm-4">
                                            <input type="text" name ="balance" class="form-control" id="balance" placeholder="initial card balance">
                                        </div>
                                        <div class="col-sm-4 messages"></div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-8">
                                            <button type="submit" class="btn btn-default" id="submit_card">Create Card</button>
                                        </div>
                                    </div>
                                </form>

                            </div>

                        </div>
                        <div class="row">
                            <div class="col-lg-4" ></div>
                            <div class="col-lg-4" >
                                <?php
                                $host = 'localhost';
                                $user = 'root';
                                $pw = '';
                                $database = 'bank';

                                $connection = new mysqli($host, $user, $pw, $database);
                                if ($connection->connect_error) {
                                    die($connection->connect_errno);
                                }
                                $card_number = "";
                                $exp_date = "";
                                $pin = "";
                                $balance = "";
                                $cus_id = "";



                                if (isset($_POST['customer_name'])) {
                                    $cus_name = sanitizeString($_POST['customer_name']);
                                    $sql = "select id from customer where name = '$cus_name'";
                                    $result = $connection->query($sql);
                                    if ($connection->error) {
                                        die($connection->error);
                                    }
                                }
                                if (isset($_POST['card_number'])) {
                                    $card_number = sanitizeString($_POST['card_number']);
                                }
                                if (isset($_POST['exp_date'])) {
                                    $exp_date = sanitizeString($_POST['exp_date']);
                                }
                                if (isset($_POST['pin_number'])) {
                                    $pin = sanitizeString($_POST['pin_number']);
                                }
                                if (isset($_POST['balance'])) {
                                    $balance = sanitizeString($_POST['balance']);
                                }
                                ?>
                            </div>
                            <div class="col-lg-4" ></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>


        <script>
<?php require './verify.js'; ?>
        </script>
    </body>
</html>
