<!doctype html>

<html lang="en">

    <head>
        <meta charset="utf-8">

        <!--        Importing style sheets-->
        <?php include './includes/bootstrap_import_style.php'; ?>
        <link rel="stylesheet" type="text/css" href="css/navigation_style.css">
        <link rel="stylesheet" type="text/css" href="css/login.css">
        <link rel="stylesheet" type="text/css" href="css/buttons.css">


        <!--        Importing script files-->
        <?php include './includes/bootstrap_import_script.php' ?>
        <script type="text/javascript" src="js/loging.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.2/underscore-min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js"></script>
        <script src="js/validate(1).js"></script>

        <!--    Loading php files-->
        <?php require './includes/db/loging_support.php'; ?>
        <?php require './includes/db/login_support_seller.php'; ?>


        <!--        Web Page Title-->
        <title>Login</title>

    </head>

    <body>

        <div id="fb-root"></div>


        <!-- buyer sign up -->
        <?php require './includes/login/buyer_signup_frm.php'; ?>
        <!--        <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
                    Launch demo modal
                </button>-->
        <!--End of Buyer sign up-->

        <!--Seller Sign Up-->
        <?php require './includes/login/seller_signup_frm.php' ?>;
        <!--end of seller sign up-->

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
                <!--                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <div class="checkbox">
                                            <label>
                                                <input type="checkbox">Remember me
                                            </label>
                                        </div>
                                    </div>
                                </div>-->
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-default">Sign in</button>
                        <button type="button" class="btn btn-default" id="show_main_menue_buyer">Back To Main Menu</button>
                    </div>
                    <div>
                        <br>
                        <br>
                        <br>
                        <p>Have no account, <a href="#" data-toggle="modal" data-target="#myModal">Register now</a>
                        </p>
<!--                        <p>Forgot password, <a href="#">Click to recover</a>
                        </p>-->
                    </div>
                </div>
            </form>
        </form>
    </div>

    <div class="main_form" id="seller_form" >

        <form class="form-horizontal" id="frm_buyer" action ="login.php" method="post">
            <div class="form-group">
                <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                <div class="col-sm-10">
                    <input type="email" class="form-control" id="inputEmail3" placeholder="Email" name="seller_email">
                </div>
            </div>
            <div class="form-group">
                <label for="inputPassword3" class="col-sm-2 control-label">Password</label>
                <div class="col-sm-10">
                    <input type="password" class="form-control" id="inputPassword3" placeholder="Password" name="seller_password">
                </div>
            </div>
            <!--            <div class="form-group">
                            <div class="col-sm-offset-2 col-sm-10">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox">Remember me
                                    </label>
                                </div>
                            </div>
                        </div>-->
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">Sign in</button>
                    <button type="button" class="btn btn-default" id="show_main_menue_seller">Back To Main Menu</button>
                </div>
                <div>
                    <br>
                    <br>
                    <br>
                    <p>Have no account, <a href="#" data-toggle="modal" data-target="#myModal2">Register now</a>
                    </p>
<!--                    <p>Forgot password, <a href="#">Click to recover</a>
                </p>-->
                </div>
            </div>
        </form>
    </form>
</div>


<!--Form validation code-->
<!--form validation ends-->
<!--<script src="js/login/buyer_signup.js"></script>-->
<script>
    $('#myModal').on('shown.bs.modal', function() {
        $('#myInput').focus()
    })
    $('#myModal2').on('shown.bs.modal', function() {
        $('#myInput').focus()
    })
</script>
<script>
<?php require './js/login/buyer_signup.js'; ?>
<?php require './js/login/seller_signup.js'; ?>
</script>

</body>

</html>