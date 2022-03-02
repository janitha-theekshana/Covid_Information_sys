<html>
    <head>
        <meta name="viewport" content="width=device_width ,initial-scale=1.0">
        <title>About</title>
        <link rel="stylesheet" href="back5.css">
        <!--navbar-->
        <link rel="stylesheet" href="nav.css">
        <!--footer-->
        <link rel="stylesheet" href="footer.css">

    </head>

    <body onload="initClock()">
        <section id="head">
        <div class="container">
            <div class="navbar">
                <header>
                    <div class="menuToggle" onclick="toggleMenu();"></div>
                    <ul class="navigation">
                        <li><a href="home.php" onclick="toggleMenu();" >Home</a></li>
                        <li><a href="positive.php" onclick="toggleMenu();">Positive</a></li>
                        <li><a href="Quarentine.php" onclick="toggleMenu();">Quarentine</a></li>
                        <li><a href="Deaths.php" onclick="toggleMenu();">Deaths</a></li>
                        <li><a href="report.php" onclick="toggleMenu();">Print Report</a></li>
                        <li><a href="About.php" onclick="toggleMenu();" class="active">About</a></li>
                        <li>
                            <div class="date">
                                <span id="dayname">Day</span>,
                                <span id="month">Month</span>,
                                <span id="daynum">00</span>,
                                <span id="year">Year</span>
                            </div>
                        </li>
                    </ul>
                </header>
               
            </div>

            <div class="row">
                <div class="col">
                    <h1>About suwadharani</h1>
                    <p>Suwa dharani is the official medium of communication 
                        for you at covid 19 in Keradewala Grama Niladhari Division.  
                        We promise to give you the most accurate information.</p>
                </div>
                
            </div>
            
            </div>
            <section id="name">
                <div class="row">
        
                    <div class="card">
                       
                        <p>Village Citizens</p><br><br><br><br>
                        <label></label>
                        <?php
                            $connection = mysqli_connect('localhost','root','','coviddb');

                            $query = "SELECT P_ID FROM village_citizen ORDER BY P_ID";
                            $query_run = mysqli_query($connection, $query);

                            $row = mysqli_num_rows($query_run);

                            echo '<label>' .$row. '</label>'
                        ?>
                       
                    </div>
               
                    <div class="card">
                        <p>Covid Positive Citizens</p><br><br>
                        <label></label>
                        <?php
                            $connection = mysqli_connect('localhost','root','','coviddb');

                            $query = "SELECT P_ID FROM village_citizen ORDER BY P_ID";
                            $query_run = mysqli_query($connection, $query);

                            $row = mysqli_num_rows($query_run);

                            echo '<label>' .$row. '</label>'
                        ?>
                        
                    </div>
                   
                    <div class="card">
                        <p>Quarantine Citizen</p><br><br><br><br>
                        <label></label>
                        <?php
                            $connection = mysqli_connect('localhost','root','','coviddb');

                            $query = "SELECT QP_ID FROM quarantine_people ORDER BY QP_ID";
                            $query_run = mysqli_query($connection, $query);

                            $row = mysqli_num_rows($query_run);

                            echo '<label>' .$row. '</label>'
                        ?>
                        
                    </div>
                   
                    <div class="card">
                        <p>Death Citizens</p><br><br><br><br>
                        <label></label>
                        <?php
                            $connection = mysqli_connect('localhost','root','','coviddb');

                            $query = "SELECT DP_ID FROM death_people ORDER BY DP_ID";
                            $query_run = mysqli_query($connection, $query);

                            $row = mysqli_num_rows($query_run);

                            echo '<label>' .$row. '</label>'
                        ?>
                        
                    </div>
        
                    <div class="card">
                        <p>People who vaccinated at least one vaccine </p><br>
                        <label></label>
                        <?php
                            $connection = mysqli_connect('localhost','root','','coviddb');

                            $query = "SELECT P_ID FROM village_citizen WHERE vaccinate ='yes'";
                            $query_run = mysqli_query($connection, $query);

                            $row = mysqli_num_rows($query_run);

                            echo '<label>' .$row. '</label>'
                        ?>
                        
                    </div>
                  
                </div>
            </section>
        
        </section>

     <section id="kera">
      <div class="row">
        <div class="col">
            <p>Created on the idea of Grama Niladari mr.I.M.Kalupahana to awareness the people of Keradewala Grama Niladari
                 Division about the corona distribution. The information here is updated daily by the Grama Niladari and only
                the information obtained from reliable source is published here. It is hoped that these statistics will enable 
                the public to be properly informed about the spread of corona in the Keradewala Grama Niladhari Division and to
                take action to reduce the spread. </p>
        </div>
        <div class="col col1">
           <img src="gm.jpg" class="image"> 
           <h4>Mr.I.M.Kalupahana</h4>
           <h5>Grama Niladhari</h5>
        </div>
      </div>
    </section>

    <section id="kera">
        <div class="row">
          <div class="col">
              <h2><u>About Keradewala Grama Niladhari Division</u></h2><br>
              <p>Keradewala Grama Niladhari Division is located in Baddegama Divisional Secretariat Division. This is a sparsely
                populated rural area. Majuwana Primary Collage and Sri Saddharmarama viharaya are located in this Grama Niladhari Division
                located in the Thelikada Police Division.</p>
          </div>
          <div class="col col1">
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.882576290178!2d80.15505611409303!3d6.146469829138258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae17762788c382d%3A0x865f20064c08e16a!2z4Laa4LeZ4La74Lav4Lea4LeA4La9LeC3geC3iuKAjeC2u-C3kyDgt4Pgtq_gt4rgtrDgtrvgt4rgtrjgt4_gtrvgt4_gtrjgtro!5e0!3m2!1ssi!2slk!4v1645985825771!5m2!1ssi!2slk" width="500" height="400" style="border:0;margin-left:10%;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </section>

<!--developer-->
<section id="dev">
    <h3><u>Developer</u></h3>
    <div class="row">
        <img src="me.jpg" class="pro">
    </div>
    <h4>H.P.G.Janitha Theekshana Alwis</h4><br>
    <h5>GAL/IT/2019/F/0020</h5>
    </div>
</section>

<section id="foot">
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
</section>
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

        <script type="text/javascript">
             function updateClock(){
                var now = new Date();
                var dname = now.getDay(),
                mo = now.getMonth(),
                dnum = now.getDate(),
                yr = now.getFullYear();

                Number.prototype.pad = function(digits){
                    for(var n = this.toString(); n.lenght< digits; n = 0 + n);
                }

                var months = ["January","February","March","April","May","June","July","Augest","September","Octomber","November","December"];
                var week = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday","Saturday"];
                var ids = ["dayname","month","daynum","year"];
                var values = [week[dname], months[mo], dnum, yr];
                for(var i = 0; i < ids.length; i++)
                document.getElementById(ids[i]).firstChild.nodeValue = values[i];
            }

            function initClock(){
                updateClock();
                window.setInterval("updateClock()",1);
            }
        
        </script>
    <style>
        h3{
            text-align: center;
        }
        h2{
            text-align: right;
        }
        #dev h4{margin-top:-10%;}
     </style>   
    </body>
</html>