<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Bootsrtap For Beginners</title>
	<meta name="description" content="Hello World">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
    <style>
    .col-md-9{
    background-color:#ccc; 
    }    
    </style>
    

</head>
<body>
	<div class="container">
        <div class="row">
         <div class="col-md-9">   
		<div class="row">
			<div class="col-md-4 col-sm-offset-1">
				<div class= "well">
					<div id="mycar" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#mycar" data-slide-to="0" class="active"></li>
                <li data-target="#mycar" data-slide-to="1"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                     <img src="images/o.jpg">
                </div>
                <div class="item">
                    <img src="images/king.jpg">
                </div>
            </div>
            <!-- Controls -->
            
        </div>
    			</div>
    		</div>
            <div class="col-md-4 col-sm-offset-1">
				<div class= "well">
					<div id="myvan" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myvan" data-slide-to="0" class="active"></li>
                <li data-target="#myvan" data-slide-to="1"></li>
            </ol>
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item active">
                     <img src="images/elephant.jpg">
                </div>
                <div class="item">
                    <img src="images/Memoirs.jpg">
                </div>
            </div>
            <!-- Controls -->
            
        </div>
    			</div>
    		</div>
    	</div>
             <a class="left carousel-control" href="#mycar #myvan" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span></a>
             
             <a class="right carousel-control"
                    href="#mycar #myvan" data-slide="next"><span class="glyphicon glyphicon-chevron-right">
                    </span></a>
             
        </div>
            
        </div>
    </div>
    <script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</body>
</html>