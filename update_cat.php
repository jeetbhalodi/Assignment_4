<html>
    <head>
        <?php include 'connection.php';?>
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
                            <td><form action=""><input type="number" name="id_cat" id="id_cat"></form></td>
                            <td><form action=""><input type="text" name="cat_update" id="cat_update"></form></td>
                            
                        </tr>
                    </tbody>
                </table>    
                <P class="update_btn_p"><button type = "submit" id = "update_btn"> Update </button></p>                
            </div>
        </div>



        <footer>
            
            <div class="cpy">
                <p >Created By @jeet_bhalodi |  ©2021 All Rights Reserved.</p>
            </div>
        </footer>

    </body>


</html>

