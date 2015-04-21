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
        </style>
        <title>Bank</title>
    </head>
    <body>

        <div class="row">

        </div>  
        <div class="row top_row">
            <div class="col-lg-3"></div>
            <div class="col-lg-6">
                <div class="">
                    <div class="">
                        <div class="row">
                            <div class="col-lg-8">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <label for="card_no_in">Card number</label>
                                        <input type="text" id="card_no_in" name = "card_no_in" class="form-control">
                                    </div>
                                    <button type="submit" class="btn btn-default">Search</button>
                                </form>
                                
                            </div>
                            <div class="col-lg-2">
                                <a href="add.php" class="btn btn-default">Add new Card</a>
                            </div>
                            <div class="col-lg-2">
                                <a href="add_user.php" class="btn btn-default">Add new User</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3"></div>
        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    </body>
</html>
