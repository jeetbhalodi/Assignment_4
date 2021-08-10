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
            <marquee>  <h1 class="move"> HELLO!!!! This is page for Add Catogary... </h1> </marquee>
        </div>
        <br>

        <div class = add_cat>
            <div class = form_add_cat>
                    <form class = "add_cat_fm">
                            <input type = "text" id = "add_cat_txt"><br>
                            <button type = "submit" id = "add_cat_btn"> Submit </button>
                    </form>
            </div>
        </div>



        <footer>
            
            <div class="cpy">
                <p >Created By @jeet_bhalodi |  ©2021 All Rights Reserved.</p>
            </div>
        </footer>

    </body>


</html>

