<html>
    <head>
        <?php include 'connection.php';?>
        <style>
/*set color of background of nav bar*/
            .topnav {
                        background-color: #FFD580;
                        overflow: hidden;
                    }

/* Style the links inside the navigation bar */
            .topnav a {
                        float: left;
                        color: #f2f2f2;
                        text-align: center;
                        padding: 14px 16px;
                        text-decoration: none;
                        font-size: 17px;
                      }

/* Change the color of links on hover */
           .topnav a:hover {
                        background-color: #ff8100;
                        color: black;
                        }

/* Add a color to the active/current link */
            .topnav a.active {
                    background-color: #fb7505;
                    color: white;
            }
            
/*give banner height and back ground img */
            .banner{
                background-color: #f9c69b;
                height: 200px;
                width: 100%; 
            }
            .move{
                font-size:80px;
            }

        </style>
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

        
    </body>


</html>

