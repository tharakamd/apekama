<html>
    <head>
        <meta charset="UTF-8">
        <title>Apekama home page</title>
        <link rel="stylesheet" href="bootstrap-3.3.2-dist\css\bootstrap-theme.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <form action="/php/add_new_item.php" method="post" style="width: 400px;" enctype="multipart/form-data">                
            <div class="form-group">                
                <label >Select the item category</label>
                <select class="form-control" name="category">
                    <option>-Select a Category-</option>
                    <option>Arts and Crafts</option>
                    <option>Gem and Jewellary </option>
                    <option>Clothes and Fabrics</option>
                    <option>Lether and Ceramics</option>
                    <option>Other</option>
                </select>
            </div>
            <div class="form-group">
                <label >Price</label>
                <input type="number" class="form-control" id="price" name="price" placeholder="LKR">
            </div>
            <div class="form-group">
                <label >Warrenty</label>
                <input type="number" class="form-control" id="warrenty" name="warrenty" placeholder="MONTHS">
            </div>
            <div class="form-group">
                <label >Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" placeholder="No of Products">
            </div>
            <div class="form-group">                    
                <label for="exampleInputPassword1">Item Description</label>
                <textarea class="form-control" name="description" rows="3"></textarea>
            </div>
            <div class="form-group">
                <label >Item Image</label>                
                Select image to upload:
                <input type="file" name="fileToUpload" id="fileToUpload">
            </div>
            <!--div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
            </div-->               
            <button type="submit" class="btn btn-default">Submit</button>
        </form>        
    </body>
</html>
