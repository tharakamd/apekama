<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include '../bootstrap_import_style.php'; ?>
        <link rel="stylesheet" href="css/style.css">
        <title>Buyer Registration Status</title>
        <style>
            .main_row{
                padding-top: 200px;
            }
        </style>
    </head>
    <body>
        <?php
        require_once dirname(__FILE__) . '\..\sanitizer.php';

        $host = 'localhost';
        $user = 'root';
        $pw = '';
        $database = 'apekama_db';

// creating connection
        $connection = new mysqli($host, $user, $pw, $database);
        if ($connection->connect_error) {
            die($connection->connect_errno);
        }

//declaring variables
        $buyer_id = '';
        $password = '';
        $first_name = '';
        $last_name = '';
        $street = '';
        $city = '';
        $state = '';
        $zip = '';
        $country = '';
        $email = '';
        $username = '';

//initializing variables
        if (isset($_POST['user_name']))
            $username = sanitizeString($_POST['user_name']);
        if (isset($_POST['email']))
            $email = sanitizeString($_POST['email']);
        if (isset($_POST['first_name']))
            $first_name = sanitizeString($_POST['first_name']);
        if (isset($_POST['last_name']))
            $last_name = sanitizeString($_POST['last_name']);
        if (isset($_POST['street']))
            $street = sanitizeString($_POST['street']);
        if (isset($_POST['city']))
            $city = sanitizeString($_POST['city']);
        if (isset($_POST['state']))
            $state = sanitizeString($_POST['state']);
        if (isset($_POST['country']))
            $country = sanitizeString($_POST['country']);
        if (isset($_POST['password']))
            $password = sanitizeString($_POST['password']);
        if (isset($_POST['street']))
            $street = sanitizeString($_POST['street']);
        if (isset($_POST['zip_code']))
            $zip = sanitizeString($_POST['zip_code']);

// unsetting the post array
        unset($_POST);

        // checking whether email and username exists in the database

        $sql_uname = "select * from buyer where username = '$username'";
        //$result_uname = mysqli_query($connection, $sql);
        $sql_email = "select * from buyer where email = '$email'";
        //$result_email = mysqli_query($connection,$sql);
        if (mysqli_num_rows(mysqli_query($connection, $sql_uname))!=0) {
            ?>    
            <div class="row main_row">
                <div class="col-lg-4"></div>
                <div class="col-lg-3 main_col">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Registration Error</h3>
                        </div>
                        <div class="panel-body">
                            <p>The username <strong><?php echo $username ?></strong> already exists. Try another one</p>
                            <a href="../../login.php" class="btn btn-danger">Try Again</a>
                        </div>

                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>

            <?php
        } elseif (mysqli_num_rows(mysqli_query($connection, $sql_email))!=0) {
            ?>
            <div class="row main_row">
                <div class="col-lg-4"></div>
                <div class="col-lg-3 main_col">
                    <div class="panel panel-danger">
                        <div class="panel-heading">
                            <h3 class="panel-title">Registration Error</h3>
                        </div>
                        <div class="panel-body">
                            <p>The email <strong><?php echo $email ?></strong> already exists. Try another one</p>
                            <a href="../../login.php" class="btn btn-danger">Try Again</a>
                        </div>

                    </div>
                    <div class="col-lg-4"></div>
                </div>
            </div>

            <?php
        } else {

//generating the user id
            $sql = "select substring(buyer_id,4)*1 as highest_num from buyer order by substring(buyer_id,4)*1 desc limit 1";
            $result = $connection->query($sql);
            if ($connection->error) {
                die($connection->error);
            }
            $new_index_number = 0;
            while ($row = $result->fetch_assoc()) {
                $largest_number = $row['highest_num'];
                $new_index_number = $largest_number + 1;
            }
            $tmp_id = (string) $new_index_number;
            $buyer_id = 'buy' . str_pad($tmp_id, 5, "0", STR_PAD_LEFT);
// initializing all variables are finished
            $sql = "insert into buyer values('$buyer_id','$password','$first_name','$last_name','$street','$city','$state','$zip','$country','$email','$username')";
            if ($connection->query($sql) === TRUE) {
                ?>
                <div class="row main_row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-3 main_col">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">Registered Successfully</h3>
                            </div>
                            <div class="panel-body">
                                <p>You have successfully registered as <strong><?php echo $username ?></strong></p>
                                <a href="../../login.php" class="btn btn-success">Login</a>
                            </div>

                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
                <?php
            } else {
                ?>
                <div class="row main_row">
                    <div class="col-lg-4"></div>
                    <div class="col-lg-3 main_col">
                        <div class="panel panel-danger">
                            <div class="panel-heading">
                                <h3 class="panel-title">Registration Error</h3>
                            </div>
                            <div class="panel-body">
                                <p>You have successfully registered as <strong><?php echo $username ?></strong></p>
                                <a href="../../login.php" class="btn btn-default">First Page</a>
                            </div>

                        </div>
                        <div class="col-lg-4"></div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </body>
</html>





