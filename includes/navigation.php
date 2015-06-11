<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>            
        </div>
        <div id="navbar" class="navbar-collapse collapse ">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Home</a></li>
                <li ><a href="#">Arts and Crafts</a></li>
                <li ><a href="#">Gem and Jewellary</a></li>
                <li ><a href="#">Cloths and Fabric</a></li>
                <li ><a href="#">Leather and Ceramics</a></li>                
                <li ><a href="#">About</a></li>                
                <li><a href="#">Contact</a></li>

            </ul>            
            <p class="form-control-static" style=" float:right; margin:10px; color: gray;"> Logged in as: <a href="https://www.facebook.com/tharakamd?fref=ts"><?php echo $_SESSION['uname']; ?></a></p>          
            <a href="php/logout.php"><button class="btn btn-default" type="submit" style="float:right; margin-top: 10px; ">Logout</button></a>
            <?php
            if ($_SESSION['type'] == 'seller') {                
                echo "<a class=\"btn\" href=\"new_item_window.php\" style=\"margin-top:10px\" >
                        Add New Item
                    </a>";
            }
            ?>
        </div>
    </div>    
</nav>
<script>
//    $('#myModal').on('shown.bs.modal', function() {
//        $('#myInput').focus()
//    })
</script>

