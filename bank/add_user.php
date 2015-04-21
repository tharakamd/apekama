<!DOCTYPE html>
<html>
    <head>
        <meta charset="windows-1252">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
        <style>
            .top_row{
                padding-top: 50px;
            }
            .home_row{
                padding-left: 20px;
                padding-top: 20px;
            }
        </style>
        <title>New User</title>
    </head>
    <body>
        <?php require_once './sanitizer.php' ?>
        <div class="row home_row">
            <a href="index.php" class="btn btn-default glyphicon glyphicon-home"></a>
        </div>  
        <div class="row top_row">
            <div class="col-lg-4"></div>
            <div class="col-lg-4">
                <div class="">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-10">
                                <form class="form-horizontal" method="post" action="add_user.php">
                                    <div class="form-group">
                                        <label for="user_name" class="col-sm-4 control-label">Name</label>
                                        <div class="col-sm-8">
                                            <input type="text" name ="user_name" class="form-control" id="user_name" >
                                        </div>
                                    </div>                                 
                                    <div class="form-group">
                                        <div class="col-sm-offset-4 col-sm-8">
                                            <button type="submit" class="btn btn-default">Add User</button>
                                        </div>
                                    </div>
                                </form>
                                

                            </div>

                        </div>
                        <div class="row">
                           
                            <div class="col-lg-10">
                            <?php
                            $host = 'localhost';
                            $user = 'root';
                            $pw = '';
                            $database = 'bank';

                            $connection = new mysqli($host, $user, $pw, $database);
                            if ($connection->connect_error) {
                                die($connection->connect_errno);
                            }

                            $uname = "";
                            if (isset($_POST['user_name'])) {
                                $uname = sanitizeString($_POST['user_name']);
                            }
                            unset($_POST);
                            if (strlen($uname) != 0) {
                                $sql = "select substring(id,4)*1 as highest_num from customer order by substring(id,4)*1 desc limit 1";
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
                                $customer_id = 'cus' . str_pad($tmp_id, 5, "0", STR_PAD_LEFT);

                                $sql = "insert into customer values('$uname','$customer_id')";
                                if ($connection->query($sql) === TRUE) {
                                    ?>
                                    <label class="col-sm-10 control-label">Added Succesfully</label>
                                    <?php
                                } else {
                                    ?>
                                    <label class="col-sm-10 control-label">Account creating failed, Name already exists</label> 
                                    <?php
                                }
                            }
                            ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4"></div>
        </div>

        <div class="row">



        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>
