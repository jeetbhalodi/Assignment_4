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
            <marquee>  <h1 class="move"> HELLO!!!! This is page for Add Catogary... </h1> </marquee>
        </div>
        <br>

        <div class = add_cat>
            <div class = form_add_cat>
                    <form class = "add_cat_fm" action = "insert_cat.php" onsubmit="return validate1()">
                            <h3>Plase insert here category.</h3> <br>
                            <input type = "text" id = "cat_update"  name = "cat_update"><br>
                            <span id="err1"></span><br>
                            <button type = "submit" id = "add_cat_btn"> Submit </button>
                    </form>
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

