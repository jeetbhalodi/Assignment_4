<html>
    <head>
        <?php include 'connection.php';?>
        <?php
            $id = $_GET['id'];
            $sql = 'SELECT category_name FROM category WHERE cat_id = '.$id;

            $result = $conn->query($sql);
            $row = mysqli_fetch_array($result);
        ?>
    
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
            <marquee>  <h1 class="move"> HELLO!!!! This is page for Update Catogary... </h1> </marquee>
        </div>
        <br>

        <div class = "update_cat">
            <div class = "update_cat">
                <table class = "update_cat_tb">
                    <thead>
                        <tr>
                        <th>ID</th>
                        <th>Catogary_name</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php
                           echo'<td>'.'<form action="edit_cat.php?id=" method = "POST" onsubmit="return validate1()">';
                           echo'<input type="number" name="id_cat" value="'.$id.'" id="id_cat" readonly>';
                           echo'</td>';
                           echo'<td>';
                           echo'<input type="text" name="cat_update" value ="'.$row['category_name'].'" id="cat_update" style = "margin">';
                           
                           echo'</td>';
                            ?>
                        </tr>
                        <tr>
                            <td colspan = "2"><span id="err1"></span></td>
                        </tr>
                        <tr >
                            <td colspan = "2" ><center><button type = "submit" id = "update_btn"> Update </button></center></td>
                           <?php echo'</form>';?>
                        </tr>
                    
                    </tbody>
                </table>                  
            </div>
        </div>



        <footer>
            
            <div class="cpy">
                <p >Created By @jeet_bhalodi |  ©2021 All Rights Reserved.</p>
            </div>
        </footer>
        <script src="validation.js"></script>
    </body>


</html>

