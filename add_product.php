<html>
    <head>
        <?php include 'connection.php';?>
        <?php 
            $sql = 'SELECT cat_id, category_name FROM category';
            $result = $conn->query($sql);
            
        ?>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="style_product.css">
    </head>

    <body>
        <div class="topnav">
            <a class="active" href="home.php">Home</a>
            <a href="add_cat.php">ADD </a>
            <a href="#contact">EDIT</a>
            <a href="#about">About</a>
        </div>
        <br>
   
        <!--<div class="banner">
            <marquee>  <h1 class="move"> HELLO!!!! This is page for Add Catogary... </h1> </marquee>
        </div>-->
        <br>

            <div class="product_Header">
                <h1 class="AddHead">Create Product</h1>
            </div>
            <div class = product_blk>
                <form method="POST" action="insert_product.php" onsubmit="return validateForm()"> 
                    <div class="form-group">
                        <div class="row">
                            <label for="nameProduct">Product Name</label><br>
                            <input type="text" name="product_name" class="form-control" id="product_name" ><br>
                            <span id="err1"></span>
                        </div>
                        <div class="row">
                            <label for="priceProduct">Product Price</label><br>
                            <input type="text" name="product_price" class="form-control" id="product_price" ><br>
                            <span id="err2"></span>
                        </div>
                        <div class="row">
                            <label for="imageProduct">Upload Image</label><br>
                            <div id="file">
                            <input type="file" name="product_img" class="form-control" id="product_img" ></div><br>
                            <span id="err3"></span>
                        </div>
                        <div class="row">
                            <label for="cat">Select Category</label><br>
                        
                           <select name="optcategory" id="optcategory">
                                <option value="select">--select--</option>
                                <?php 
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<option value='".$row["cat_id"]."'>".$row["category_name"]."</option>";
                                }
                                ?>
                            </select>
                        </div>
                        <div class="row">
                            <button type="submit" class="btn" name="submit">Submit</button>
                        </div>
                    </div>
                                               
                </form>
            </div>
        



        <footer>
            
            <div class="cpy">
                <p >Created By @jeet_bhalodi |  ©2021 All Rights Reserved.</p>
            </div>
        </footer>
        <script src="validation_product.js"></script>
    </body>


</html>

