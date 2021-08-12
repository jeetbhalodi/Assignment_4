<html>
    <head>
        <?php include 'connection.php';?>
        
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="topnav">
        <a class="active" href="home.php">Home</a>
            <a href="add_cat.php">Add Category </a>
            <a href="add_product.php">Add Product</a>
            <a href="#about">About</a>
        </div>
        <br>
   
        <div class="banner">
            <marquee>  <h1 class="move"> HELLO!!!! This is CRUD Operation of PHP... </h1> </marquee>
        </div>
        <br>
        <br>
        <div>
            <center>
            <h3> If you want to add Product then Click here. </h3>
            <a href="add_product.php"><button class = "add_btn">Add product</button></a> 
            </center>
        </div>
        <div class = "mrg_tbl" style="margin-bottom: 80px;">
            <table  style="border:2px solid black; width:100%" id = "add-row" class = "display table table-striped table-hover">
                <thead>
                    <th> ID </th>
                    <th> Name </th>
                    <th> Price </th>
                    <th> Photo </th>
                    <th> Category </th>
                    <th style = "width: 20% "> Edit </th>
                    <th style = "width: 20% "> Delete </th>
                </thead>
                <tbody><?php
                    $sql = "SELECT p.product_id,p.product_name,p.product_price,p.product_img,c.category_name FROM product p, category c WHERE p.cat_id = c.cat_id";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){

                        echo '<tr>';
                            echo '<td>'.$row['product_id'].'</td>';
                            echo '<td>'.$row['product_name'].'</td>';
                            echo '<td>'.$row['product_price'].'</td>';
                            echo '<td><img src="localhost/assignment_4/'.$row['product_img'].'"/></td>';
                            echo '<td>'.$row['category_name'].'</td>';
                            
                            echo '<td>';
                            echo '<a href="edit_product.php?id=' . $row['product_id'] . '" class="btn-info bt">'.'<button id = "ed1"> Edit </button>'.'</a>';
                            echo '</td>';
                            echo '<td>';
                            echo '<a href="remove_product.php?id=' . $row['product_id'] . '"class="btn-danger bt">'.'<button id = "del1">Delete</button>'.'</a>';
                            echo '</td>';
                        echo '</tr>';
                        
                        }
                        
                
                    ?>


                </tbody>
            </table>
        </div>

    



       <footer class="cpy">
            
            <div >
                <p >Created By @jeet_bhalodi |  ©2021 All Rights Reserved.</p>
            </div>
        </footer>

    </body>


</html>

