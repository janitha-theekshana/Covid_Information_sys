<html>
    <head>
        <meta name="viewport" content="width=device_width ,initial-scale=1.0">
        <title>News</title>
        <link rel="stylesheet" href="back4.css">
        <!--navbar-->
        <link rel="stylesheet" href="nav.css">
        <!--footer-->
        <link rel="stylesheet" href="footer.css">

    </head>

    <body>
        <div class="container">
            <div class="navbar">
                <header>
                    <div class="menuToggle" onclick="toggleMenu();"></div>
                    <ul class="navigation">
                        <li><a href="home.php" onclick="toggleMenu();" >Home</a></li>
                        <li><a href="positive.php" onclick="toggleMenu();">Positive</a></li>
                        <li><a href="Quarentine.php" onclick="toggleMenu();">Quarentine</a></li>
                        <li><a href="Deaths.php" onclick="toggleMenu();">Deaths</a></li>
                        <li><a href="News.php" onclick="toggleMenu();" class="active">News</a></li>
                        <li><a href="About.php" onclick="toggleMenu();">About</a></li>
                    </ul>
                </header>
               
            </div>

            <div class="row">
                <div class="col">
                    <h1>Covid-19 News</h1>
                    <p>Covid information and Notice in Keradewala Grama Niladari Divison. 
                        We promise to give you the most accurate information.</p>
                </div>
                
            </div>
        </div>

        
 
        <div class="footer">
            <div class="inner-footer">
    
                <div class="footer-items">
                    
                    <h1>SUWA DHARANI</h1><br>
                    <p>Suwa dharani is the official medium of communication for you at covid 19 in Keradewala Grama Niladhari Division. We promise to give you the most accurate information.</p>
                </div>
    
                <div class="footer-items">
                    <h2>Quick Links</h2>
                    <div class="border"></div>
                    <ul>
                        <a href="index.php"><li>Home</li></a>
                        <a href="positive.php"><li>Positive</li></a>
                        <a href="Quarentine.php"><li>Quarantine</li></a>
                        <a href="Deaths.php"><li>Deaths</li></a>
                        <a href="report.php"><li>Print Report</li></a>
                        <a href="About.php"><li>About</li></a>
                    </ul>
                </div>
    
                
                <div class="footer-items">
                    <h2>Contact Us</h2>
                    <div class="border"></div>
                    <ul>
                        <li>I.M.Kalupahana<br>Keradewala<br>201</li><br>
                        <li>0779215706</li>
                        <li>suwadharani@gmail.com</li>
                    </ul>
                    <div class="social-media">
                        <a href=""><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href=""><i class="fa fa-google-plus" aria-hidden="true"></i></a>
                    </div>
                </div>
                
            </div>
            <div class="footer-bottom">
                Copyright &copy; Suwa Dharani. All rights reserved.
            </div>
        </div>


        <script type="text/javascript">
            window.addEventListener('scroll',function(){
                const header = document.querySelector('header');
                header.classList.toggle("sticky", window.scrollY > 0);
            });
        
            function toggleMenu(){
                const menuToggle = document.querySelector('.menuToggle');
                const navigation = document.querySelector('.navigation');
                menuToggle.classList.toggle('active');
                navigation.classList.toggle('active');
            }
        
        </script>

    </body>
</html>