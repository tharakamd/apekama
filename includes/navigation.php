<nav class="navbar navbar-default">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>            
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Arts and Crafts <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Brass</a></li>
                        <li><a href="#">Silver</a></li>
                        <li><a href="#">Clay</a></li>
                        <li><a href="#">Metal</a></li>
                        <li><a href="#">Wood</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Gem and Jewellery <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Gems</a></li>
                        <li><a href="#">Jewellery Sets</a></li>
                        <li><a href="#">Bangles and Bracelets</a></li>                        
                        <li><a href="#">Necklaces & Pendants</a></li>
                        <li><a href="#">Earrings</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Cloths and Fabric <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Bathic</a></li>
                        <li><a href="#">Handloom</a></li>
                        <li><a href="#">Bathware</a></li>                        
                        <li><a href="#">Accesories</a></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Leather and Ceramics  <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Bags and Pouches</a></li>
                        <li><a href="#">Furniture</a></li>
                        <li><a href="#">Ceramics</a></li>                        
                        <li><a href="#">Other</a></li>                        
                    </ul>
                </li>
                <li ><a href="#">About</a></li>                
                <li><a href="#">Contact</a></li>
            </ul>
            <p class="form-control-static" style=" float:right; margin:10px; color: gray;"> Logged in as: <a href="customer.php"><?php echo $_SESSION['uname']; ?></a></p>          
            <button class="btn btn-default" type="submit" style="float:right; margin-top: 10px; ">Logout</button>
        </div>
    </div>
</nav>


