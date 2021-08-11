<html>
    <head>
        <?php include 'connection.php';?>
        
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="topnav">
        <a class="active" href="home.php">Home</a>
            <a href="add_cat.php">ADD </a>
            <a href="#contact">EDIT</a>
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
            <h3> If you want to add Catogary then Click here. </h3>
            <a href="add_cat.php"><button class = "add_btn">Add Category</button></a> 
            </center>
        </div>
        <div class = "mrg_tbl" style="margin-bottom: 80px;">
            <table  style="border:2px solid black; " id = "add-row" class = "display table table-striped table-hover">
                <thead>
                    <th> ID </th>
                    <th> Catogary Name </th>
                    <th style = "width: 20% "> Edit </th>
                    <th style = "width: 20% "> Delete </th>
                </thead>
                <tbody><?php
                    $sql = "SELECT * FROM `category`";
                    $result = mysqli_query($conn, $sql);
                    while($row = mysqli_fetch_assoc($result)){

                        echo '<tr>';
                            echo '<td>'.$row['cat_id'].'</td>';
                            echo '<td>'.$row['category_name'].'</td>';
                            
                            echo '<td>';
                            echo '<a href="update_cat.php?id=' . $row['cat_id'] . '" class="btn-info bt">'.'<button id = "ed1"> Edit </button>'.'</a>';
                            echo '</td>';
                            echo '<td>';
                            echo '<a href="delete_cat.php?id=' . $row['cat_id'] . '"class="btn-danger bt">'.'<button id = "del1">Delete</button>'.'</a>';
                            echo '</td>';
                        echo '</tr>';
                        
                        }
                        
                
                    ?>


                </tbody>
            </table>
        </div>

    



       <footer>
            
            <div class="cpy">
                <p >Created By @jeet_bhalodi |  ©2021 All Rights Reserved.</p>
            </div>
        </footer>

    </body>


</html>

