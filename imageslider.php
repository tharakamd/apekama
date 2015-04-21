<html lang="en">

<head>
    <meta charset="utf-8">
    <title> Image Slider </title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
    
<!--
    <style>
        .slides{
            height = 200%;
            width = 40%;
            color: transparent;
            background-size: cover;
        }
    </style>

-->

</head>

<body>
    <div class="container">
        <div class="carousel-slide" data-ride="carousel" id="carousel-ex">
            <ol class="carousel-indicators">
                <li data-target="#carousel-ex" data-slide-to="0" class="active"></li>
                <li data-target="#carousel-ex" data-slide-to="1"></li>
                <li data-target="#carousel-ex" data-slide-to="2"></li>
                <li data-target="#carousel-ex" data-slide-to="3"></li>
                <li data-target="#carousel-ex" data-slide-to="4"></li>
            </ol>
            
            <div class="carousel-inner">
                <div class="item active">
                    <span><img src="images/12.jpg" class="slides"></span>
                </div>
                <div class="item">
                    <span><img src="images/13.jpg" class="slides"></span>
                </div>
                <div class="item">
                    <span><img src="images/17.jpg" class="slides"></span>
                </div>
                <div class="item">
                    <span><img src="images/15.jpg" class="slides"></span>
                </div> 
                <div class="item">
                    <span><img src="images/16.jpg" class="slides"></span>
                </div>
            </div>
        </div>
    </div>    
    
      
    <!-- Latest compiled and minified JavaScript -->
    <script src = "http://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>

</body>

</html>