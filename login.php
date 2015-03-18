<!doctype html>

<html lang="en">

<head>
    <meta charset="utf-8">

    <!--        Importing style sheets-->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css.map">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css.map">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/navigation_style.css">
    <link rel="stylesheet" type="text/css" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="css/buttons.css">


    <!--        Importing script files-->
    <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/loging.js"></script>

    <!--    Loading php files-->
    <?php require './includes/db/loging_support.php';?>
    

    <!--        Web Page Title-->
    <title>Login</title>

</head>

<body>

    <div>
        <img id="back_img" src="images/loging_background.jpg">
    </div>


    <div class="button_container">
        <Button class="button button-glow button-border button-rounded button-primary login_button" id="buy_button" role="button">Buy Items</Button>
        <Button class="button button-glow button-border button-rounded button-primary login_button" id="sell_button" role="button">Sell Items</Button>
    </div>



    <div class="main_form" id="buyer_form">

        <form class="form-horizontal" id="frm_buyer" action="login.php" method="post">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="buyer_email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="buyer_password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Remember me
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Sign in</button>
                    <button type="button" class="btn btn-default" id="show_main_menue_buyer">Back To Main Menu</button>
                </div>
                <div>
                    <br>
                    <br>
                    <br>
                    <p>Have no account, <a href="#">Register now</a>
                    </p>
                    <p>Forgot password, <a href="#">Click to recover</a>
                    </p>
                </div>
            </div>
        </form>
        </form>
    </div>

    <div class="main_form" id="seller_form">

        <form class="form-horizontal" id="frm_buyer">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password">
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox">Remember me
                        </label>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Sign in</button>
                    <button type="button" class="btn btn-default" id="show_main_menue_seller">Back To Main Menu</button>
                </div>
                <div>
                    <br>
                    <br>
                    <br>
                    <p>Have no account, <a href="#">Register now</a>
                    </p>
                    <p>Forgot password, <a href="#">Click to recover</a>
                    </p>
                </div>
            </div>
        </form>
        </form>
    </div>




</body>

</html>