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
                        color: #818080;
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

/* Footer */

        footer{
            position: fixed;
            bottom: 0px;
            width: 100%;
            background: #f9c69b;
        }
        .main-content{
            display: flex;
        }

        .main-content .box{
            flex-basis: 50%;
            padding: 10px 20px;
            color: #818080;
        }
        .box h2{
            font-size: 1.125rem;
            font-weight: 600;
            text-transform: uppercase;
        }
        .box .content{
            margin: 20px 0 0 0;
        }

        .left .content .social{
            margin: 20px 0 0 0;
            
        }

        .left .content .social a{
            padding: 0 2px;
            color: white;
        }
        .left .content .social a span{
            height: 40px;
            width: 40px;
            line-height: 40px;
            text-align: center;
        }
        .cpy{
            text-align: center;
            color: #000;
        }
/*footer css over */

/*for table*/
        #add-row{
            border:2px solid black;
            margin-left: auto;
            margin-right: auto;
            width : 50%;
            border-radius: 10px;
            color:orange;
        }
        
        td{
            text-align:center;
            color : black;
        }

        tr{
            border:2px solid black;
        }
/*edit button*/
        #ed1{
            background-color: #008CBA; 
            border: solid;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 25px;
        }

/*delete button*/
        #del1{
            background-color: #f44336; 
            border: solid;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin: 4px 2px;
            cursor: pointer;
            border-radius: 25px;
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
                    <?php 
                        echo '<tr>';
                        echo '<td>'.'1'.'</td>';
                        echo '<td>'.'Jeans'.'</td>';
                        echo '<td>'.'<input type = "button" id = "ed1" value = "Edit">'.'</td>';
                        echo '<td>'.'<input type = "button" id = "del1" value = "Delete">'.'</td>';
                        echo '</tr>';
                        
                
                    ?>


                </tbody>
            </table>
        </div>



        <footer>
            <div class="main-content">
                <div class="left box">
                    <h2>About Us</h2>
                    <div class="content">
                        <p>In this page we can see catogary </p>
                        <div class="social">
                            <a href="#"><span class="fab fa-facebook-f"></span></a>
                            <a href="#"><span class="fab fa-twitter"></span></a>
                            <a href="#"><span class="fab fa-instagram"></span></a>
                            <a href="#"><span class="fab fa-youtube"></span></a>
                        </div>
                    </div>
                </div>

                <div class="center box">
                    <h2>Contact Info</h2>
                    <div class="content">
                        <div class="place">
                            <span class="fas fa-map-marker-alt"></span>
                            <span class="text">Rajkot, Gujarat, India.</span>
                        </div>
                        <div class="phone">
                            <span class="fas fa-phone-alt"></span>
                            <span class="text">+91-9999999999</span>
                        </div>
                        <div class="email">
                            <span class="fas fa-envelope"></span>
                            <span class="text">abc@isportsinfo.com</span>
                        </div>
                    </div>
                </div>

                <div class="right box">
                    <h2>Reach US</h2>
                    <div class="content">
                        <form action="#">
                            <div class="email">
                                <div class="text">Email *</div>
                                <input type="email" required>
                            </div>
                            <div class="msg">
                                <div class="text">
                                    Message *
                                </div>
                                <textarea name="name" rows="2" cols="20" required></textarea>
                            </div>
                            <div class="btn">
                                <button type="submit">Send</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="cpy">
                <p >Created By @iSportsInfo |  ©2021 All Rights Reserved.</p>
            </div>
        </footer>

    </body>


</html>

