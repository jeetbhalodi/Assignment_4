<html>
    <head>
        <?php include 'connection.php';?>
        <?php $sql = "SELECT * FROM assignment_4";
        $result = $conn->query($sql);
        ?>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <div class="topnav">
            <a class="active" href="#home">Home</a>
            <a href="#news">ADD </a>
            <a href="#contact">EDIT</a>
            <a href="#about">About</a>
        </div>
        <br>
   
        <div class="banner">
            <marquee>  <h1 class="move"> HELLO!!!! This is CRUD Operation of PHP... </h1> </marquee>
        </div>
        <br>
        <div>
            <table  style="border:2px solid black; " id = "add-row" class = "display table table-striped table-hover">
                <thead>
                    <th> ID </th>
                    <th> Catogary Name </th>
                    <th style = "width: 20% "> Edit </th>
                    <th style = "width: 20% "> Delete </th>
                </thead>
                <tbody>
                    <?php if ($result->num_row>0){
                        while($row = $result->fetch_assoc()){

                        echo '<tr>';
                            echo '<td>'.$row['cat_id'].'</td>';
                            echo '<td>'.$row['category_name'].'</td>';
                            echo '<td>'.'<input type = "button" id = "ed1" value = "Edit">'.'</td>';
                            echo '<td>'.'<input type = "button" id = "del1" value = "Delete">'.'</td>';
                        echo '</tr>';
                        
                        }
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

