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



        <div class="row seller_select_row">
            <div class="col-lg-1"></div>
            <div class="col-lg-3">
                <form class="form-inline" method="post" action="home.php">
                    <div class="form-group">
                        <label>Select seller email</label>
                        <select class="selectpicker form-control" name="seller_list">
                            <?php
                            // generating the list of seller emails
                            $host = "localhost";
                            $user = "root";
                            $pw = "";
                            $db = "apekama_db";

                            $connection = new mysqli($host, $user, $pw, $db);
                            if ($connection->connect_error) {
                                die($connection->connect_error);
                            }
                            $sql = "select email from seller";
                            $result = $connection->query($sql);
                            if ($result->num_rows > 0) {

                                while ($row = $result->fetch_assoc()) { // iteration through all the emails
                                    $email = $row['email'];
                                    echo '<option value="' . $email . '" title="' . $email . '">' . $email . '</option>';
                                }
                            }

                            $connection->close();
                            ?>
                        </select>
                        <button type="submit" class="btn btn-default">Select</button>
                    </div>
                </form>    
            </div>  

            <div class="col-lg-2"></div>
            <div class="col-lg-1"><a href="logout.php" class="btn btn-default">Log Out</a></div>
            <!--<div class="col-lg-5"></div>-->
        </div>
        <div class="row">
            <div class="col-lg-2">




            </div>
        </div>
        <div class="row seller_info_row">
            <div class="col-lg-1"></div>
            <?php
            $connection = new mysqli($host, $user, $pw, $db);
            if ($connection->connect_error) {
                die($connection->connect_error);
            }
            $seller_email;
            $issellected = false;
            if (isset($_POST['seller_list']) || isset($_GET['seller_list'])) {
                if (isset($_POST['seller_list']))
                    $seller_email = strip_tags($_POST['seller_list']);
                else
                    $seller_email = strip_tags($_GET['seller_list']);
                $issellected = true;
                $sql = "SELECT item_sub_id,amount,date_time,status,email FROM (select item_sub_id,item_id,amount,date_time,status from paymentreceived natural join repository) as selected_items natural join (select item_id, price,email from items natural join seller) as selctedd where email = '" . $seller_email . "' ";
                $received = $connection->query($sql);
                $sql = "select payment_id,date_time,amount,email from paymentsent natural join seller where email = '" . $seller_email . "'";
                $sent = $connection->query($sql);
            }
            ?>

            <div class="col-lg-4 well">
                <?php
                if ($issellected) {
                    ?>

                    <strong>Received</strong>
                    <table class = "table table-condensed">
                        <tr>
                            <th>Index</th>
                            <th>Date</th>
                            <th>Amount</th>
                            <th>Status</th>
                        </tr>


                        <?php
                        if ($sent->num_rows > 0) {
                            $ind = 1;
                            while ($row = $received->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $ind; ?></td>
                                    <td><?php echo $row['date_time']; ?></td>
                                    <td><?php echo $row['amount']; ?></td>
                                    <td><?php echo $row['status']; ?></td>
                                </tr>

                                <?php
                                $ind++;
                            }
                        }
                        echo "</table>";
                    } else {
                        ?>
                        <strong>No Seller Selected</strong>
                        <?php
                    }
                    ?>

            </div>
            <div class="col-lg-4 well">

                <?php
                if ($issellected) {
                    ?>
                    <strong>Sent</strong>
                    <br>
                    <table class="table table-condensed">
                        <tr>
                            <th>Index</th>
                            <th>Date</th>
                            <th>Amount</th>
                        </tr>

                        <?php
                        if ($sent->num_rows > 0) {
                            $ind = 1;
                            while ($row = $sent->fetch_assoc()) {
                                ?>
                                <tr>
                                    <td><?php echo $ind; ?></td>
                                    <td><?php echo $row['date_time']; ?></td>
                                    <td><?php echo $row['amount']; ?></td>
                                </tr>
                                <?php
                                $ind ++;
                            }
                        }
                        ?>

                    </table>
                    <?php
                } else {
                    echo "<strong>No Seller Selected</strong>";
                }
                ?>

            </div>
            <div class="col-lg-3"></div>
        </div>
        <?php if ($issellected) { ?>
            <?php
            $tot = 0;
            $paid = 0;
            $remain = 0;
            $sql = "SELECT sum(amount),status,email FROM (select item_sub_id,item_id,amount,date_time,status from paymentreceived natural join repository) as selected_items natural join (select item_id, price,email from items natural join seller) as selctedd where email = '" . $seller_email . "'";
            $total_amt = $connection->query($sql);
            if ($total_amt->num_rows > 0) {
                while ($row = $total_amt->fetch_assoc()) {
                    $tot = $row['sum(amount)'];
                }
            }
            $sql = "select sum(amount),email from paymentsent natural join seller where email = '" . $seller_email . "'";
            $paid_amt = $connection->query($sql);
            if ($paid_amt->num_rows > 0) {
                while ($row = $paid_amt->fetch_assoc()) {
                    $paid = $row['sum(amount)'];
                }
            }
            $remain = $tot - $paid;
            ?>
            <div class="row">
                <div class="col-lg-1"></div>
                <div class="title1 col-lg-4"><strong>Summery</strong>
                    <br>
                    <table class="table table-hover">
                        <tr>
                            <td>Total earned</td>
                            <td><?php echo $tot; ?></td>
                        </tr>
                        <tr>
                            <td>Total Paid</td>
                            <td><?php echo $paid; ?></td>
                        </tr>
                        <tr>
                            <td>Payable Amount</td>
                            <td><?php echo $remain; ?></td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="row controll_row">
                <div class="col-lg-1"></div>
                <div class="col-lg-6">

                    <form class="form-inline" method="post" action="home.php?seller_list=<?php echo $seller_email; ?>">
                        <div class="form-group">
                            <label>Enter amount to send</label>
                            <input type="text" name="sending_amount" class="form-control" placeholder="<= <?php echo $remain; ?>">
                        </div>
                        <button type="submit"  class="btn btn-primary" >Send Money</button>
                    </form>
                </div>
            </div>


            <div class="row  result-row">
                <div class="col-lg-1"></div>
                <div class="col-lg-3">
                    <?php
                    if (isset($_POST['sending_amount'])) {
                        $entered_amount = strip_tags($_POST['sending_amount']);
                        if (!empty($entered_amount)) {
                            try {
                                if (is_numeric($entered_amount)) {
                                    if ($remain >= $entered_amount) {
                                        $date = date("Y-m-d");
                                        $sql = "select * from seller where email = '$seller_email'";
                                        $result = $connection->query($sql);
                                        $seller_id;
                                        $name_on_card;
                                        $card_number;
                                        $card_exp_date;
                                        $card_pin;
                                        if ($result->num_rows > 0) {
                                            while ($row = $result->fetch_assoc()) {
                                                $seller_id = $row['seller_id'];
                                                $name_on_card = $row['name_on_card'];
                                                $card_number = $row['card_number'];
                                                $card_exp_date = $row['card_exp_date'];
                                                $card_pin = $row['card_pin'];
                                            }
                                        }
                                        // connecting with the bank
                                        $host_bank = "localhost";
                                        $user_bank = "root";
                                        $pw_bank = "";
                                        $db_bank = "bank";

                                        $connection_bank = new mysqli($host_bank, $user_bank, $pw_bank, $db_bank);
                                        if ($connection_bank->connect_error) { // if connected with bank
                                            echo('<div class="alert alert-danger" role="alert"><strong>Unable to connect with the bank</strong></div>');
                                        } else {
                                            $sql = "select * from customer natural join card where number = '$card_number'";
                                            $result_bank = $connection_bank->query($sql);
                                            if ($result_bank->num_rows > 0) {

                                                $name_on_card_bank;
                                                $card_number_bank;
                                                $card_exp_date_bank;
                                                $pin_bank;
                                                $balance_bank;
                                                while ($row_bank = $result_bank->fetch_assoc()) {
                                                    $name_on_card_bank = $row_bank['name'];
                                                    $card_number_bank = $row_bank['number'];
                                                    $card_exp_date_bank = $row_bank['exp_date'];
                                                    $pin_bank = $row_bank['pin'];
                                                    $balance_bank = $row_bank['balance'];
                                                }
                                                if (strcmp($name_on_card, $name_on_card_bank) == 0) {
                                                    if (strcmp($card_number, $card_number_bank) == 0) {
                                                        if (strcmp($pin_bank, $card_pin) == 0) {
                                                            if (strcasecmp($card_exp_date, $card_exp_date_bank) == 0) {
                                                                $date_local = new DateTime("now"); // today
                                                                $date_bank_exp = new DateTime($card_exp_date_bank); // exp date
                                                                if ($date_local > $date_bank_exp) { // card expired
                                                                    echo '<div class="alert alert-danger" role="alert"><strong>Card Expired</strong></div>';
                                                                } else { // not expired
                                                                    // adding money to the card
                                                                    $sql = "update card set balance = balance + $entered_amount where number = '$card_number'";
                                                                    if ($connection_bank->query($sql)) {
                                                                        //updating the local database
                                                                        $sql = "insert into paymentsent(seller_id,amount,date_time) values('$seller_id',$entered_amount,'$date')";
                                                                        if ($connection->query($sql)) {
                                                                            //echo '<div class="alert alert-success" role="alert"><strong>Payment Proceeded Succesfully</strong></div>';
                                                                          echo '<script>';
                                                                           echo ' window.location.replace("payment_success.php")';
                                                                           echo '</script>';
                                                                        } else {
                                                                            echo '<div class="alert alert-danger" role="alert"><strong>Error in transaction</strong></div>';
                                                                        }
                                                                    } else {
                                                                        echo '<div class="alert alert-danger" role="alert"><strong>Error in transaction</strong></div>';
                                                                    }
                                                                }
                                                            } else {
                                                                echo '<div class="alert alert-danger" role="alert"><strong>Wrong card details </strong></div>';
                                                            }
                                                        } else {
                                                            echo '<div class="alert alert-danger" role="alert"><strong>Wrong card details</strong></div>';
                                                        }
                                                    } else {
                                                        echo '<div class="alert alert-danger" role="alert"><strong>Wrong card details</strong></div>';
                                                    }
                                                } else {
                                                    echo '<div class="alert alert-danger" role="alert"><strong>Wrong card details name</strong></div>';
                                                }
                                            } else {
                                                echo '<div class="alert alert-danger" role="alert"><strong>Error in transaction</strong></div>';
                                            }
                                        }
                                    } else {
                                        echo '<div class="alert alert-danger" role="alert"><strong>Number exceeds the payble amount</strong></div>';
                                    }
                                } else {
                                    echo '<div class="alert alert-danger" role="alert"><strong>Invalid Amount</strong></div>';
                                }
                            } catch (Exception $ex) {
                                echo '<div class="alert alert-danger" role="alert"><strong>Invalid Amount</strong></div>';
                            }
                        }
                    }
                    ?>
                </div>
            </div>
<?php } ?>


<?php include '../includes/bootstrap_import_script.php' ?>
    </body>
</html>
