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
                <p >Created By @jeet_bhalodi |  ©2021 All Rights Reserved.</p>
            </div>
        </footer>

    </body>


</html>

