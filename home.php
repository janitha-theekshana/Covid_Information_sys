<?php
$connection = mysqli_connect('localhost','root','','coviddb');
$query = "SELECT* FROM village_citizen";

$querys = "SELECT P_ID FROM village_citizen WHERE vaccine_name='Sinopharm'";
$query_runs = mysqli_query($connection, $querys);
$rows = mysqli_num_rows($query_runs);


$queryp = "SELECT P_ID FROM village_citizen WHERE vaccine_name='Pfizer'";
$query_runp = mysqli_query($connection, $queryp);
$rowp = mysqli_num_rows($query_runp);


$querym = "SELECT P_ID FROM village_citizen WHERE vaccine_name='Moderna'";
$query_runm = mysqli_query($connection, $querym);
$rowm = mysqli_num_rows($query_runm);


$queryj = "SELECT P_ID FROM village_citizen WHERE vaccine_name='Jonson & Jonson'";
$query_runj = mysqli_query($connection, $queryj);
$rowj = mysqli_num_rows($query_runj);


$querysp = "SELECT P_ID FROM village_citizen WHERE vaccine_name='Sputnic V'";
$query_runsp = mysqli_query($connection, $querysp);
$rowsp = mysqli_num_rows($query_runsp);


$querya = "SELECT P_ID FROM village_citizen WHERE vaccine_name='Astrasenica'";
$query_runa = mysqli_query($connection, $querya);
$rowa = mysqli_num_rows($query_runa);

$querysi = "SELECT P_ID FROM village_citizen WHERE vaccine_name='Sinovac'";
$query_runsi = mysqli_query($connection, $querysi);
$rowsi = mysqli_num_rows($query_runsi);


$result_set = mysqli_query($connection,$query);

if($result_set){
    //echo mysqli_num_rows($result_set). "Records found.<hr>";

    while($record = mysqli_fetch_assoc($result_set))
    {  
        //sinophrm
           
            $sql_querys = "UPDATE vaccine_details SET people ='$rows' WHERE vac_id ='1'";
            $qrs = mysqli_query($connection, $sql_querys);

        //pfizer
            
            $sql_queryp = "UPDATE vaccine_details SET people ='$rowp' WHERE vac_id ='2'";
            $qrp = mysqli_query($connection, $sql_queryp);

        //moderna
           
            $sql_querym = "UPDATE vaccine_details SET people ='$rowm' WHERE vac_id ='3'";
            $qrm = mysqli_query($connection, $sql_querym);

        //jonson
            
            $sql_queryj = "UPDATE vaccine_details SET people ='$rowj' WHERE vac_id ='4'";
            $qr = mysqli_query($connection, $sql_queryj);

        //sputnic
            
            $sql_querysp = "UPDATE vaccine_details SET people ='$rowsp' WHERE vac_id ='5'";
            $qrsp = mysqli_query($connection, $sql_querysp);

        //Astrasenica

            $sql_querya = "UPDATE vaccine_details SET people ='$rowa' WHERE vac_id ='6'";
            $qra = mysqli_query($connection, $sql_querya);

        //sinovac
            
            $sql_querysi = "UPDATE vaccine_details SET people ='$rowsi' WHERE vac_id ='7'";
            $qrsi = mysqli_query($connection, $sql_querysi);

    } 
}
?>
<?php
$connection = mysqli_connect('localhost','root','','coviddb');
$table = '';
$query = "SELECT vaccine_name,people FROM vaccine_details";

$result_set = mysqli_query($connection,$query);

if($result_set){
    //echo mysqli_num_rows($result_set). "Records found.<hr>";

    while($record = mysqli_fetch_assoc($result_set))
    {
        $table .='<tr>';
        $table .='<td>'. $record['vaccine_name'] . '</td>';
        $table .='<td>'. $record['people'] . '</td>';
        $table .='</tr>';

    }
    $table .= '</table>'; 
}
?>
<html>
    <head>
        <meta name="viewport" content="width=device_width ,initial-scale=1.0">
        <title>Home</title>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="back.css">
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
                        <li><a href="index.php" onclick="toggleMenu();" class="active">Home</a></li>
                        <li><a href="positive.php" onclick="toggleMenu();">Positive</a></li>
                        <li><a href="Quarentine.php" onclick="toggleMenu();">Quarentine</a></li>
                        <li><a href="Deaths.php" onclick="toggleMenu();">Deaths</a></li>
                        <li><a href="report.php" onclick="toggleMenu();">Print Report</a></li>
                        <li><a href="About.php" onclick="toggleMenu();">About</a></li>
                    </ul>
                </header>
               
            </div>

            <div class="row">
                <div class="col">
                    <h1>SUWA DHARANI</h1>
                    <p>Suwa dharani is the official medium of communication 
                        for you at covid 19 in Keradewala Grama Niladhari Division. 
                        We promise to give you the most accurate information.</p>
                        <a href="About.php">
                        <button type="button">ABOUT</button></a>
                </div>
                <div class="col">
                    <a href="Quarentine.php">
                    <div class="card card1">
                       
                        <h5>Qurantine People</h5>
                        <p>Qurantine people details in Keradewala Grama Niladari Divison.</p>
                       
                    </div>
                </a>
                <a href="Positive.php">
                    <div class="card card2">
                        <h5>Positive People</h5>
                        <p>Covid 19 positive people details in Keradewala Grama Niladari Divison.</p>
                        
                    </div>
                    </a>
                    <a href="Deaths.php">
                    <div class="card card3">
                        <h5>Death People</h5>
                        <p>Death people details in Keradewala Grama Niladari Divison.</p>
                        
                    </div>
                    </a>
                    <a href="report.php">
                    <div class="card card4">
                        <h5>Print Report</h5>
                        <p>Print Covid information in Keradewala Grama Niladari Divison.</p>
                    </div>
                    </a>
                </div>
            </div>
        </div>
 
        <div class="row">
        <div class="col" style="background-color:gray; height: 500px; width: 400px; padding:30px 10px; margin: 20px;">
            <h4 style="color:white;">Registerd people  :
            <?php
                 $connection = mysqli_connect('localhost','root','','coviddb');

                 $query = "SELECT P_ID FROM village_citizen";
                 $query_run = mysqli_query($connection, $query);

                 $row = mysqli_num_rows($query_run);

                 echo '<label>' .$row. '</label>';
            ?></h4>
            <br>
            <h4 style="color:white;">Registerd family :
            <?php
                 $connection = mysqli_connect('localhost','root','','coviddb');

                 $query = "SELECT P_ID FROM village_citizen GROUP BY family_id";
                 $query_run = mysqli_query($connection, $query);

                 $row = mysqli_num_rows($query_run);

                 echo '<label>' .$row. '</label>';
            ?>
            </h4><br>
            <h4 style="color:white;">Vaccination details :</h4><br>
            
    <table class="center">
        <thead>
            <tr>
            <th>Vaccine Name</th>
            <th>Number Of People</th>
            </tr>
        </thead>

        <?php echo $table; ?>
    </table>
            <br>
        </div>
        
        <div class="col col1">
        <div id="chart-container">
            <h3><u>Vacctination Details</u></h3>
	        <canvas id="mycanvas"></canvas>
        </div>
        </div>
      </div>
        
      <div class="box">
            <div class="head">
          <h3><u>Advice for prevention of Covid 19</u></h3>
            </div>
            <div class= image>
                <li><img src ="img\mask.jpg"></li>
                <li><img src ="img\clean.jpg"></li>
                <li><img src ="img\wash.jpg"></li>
                <li><img src ="img\avoid.jpg"></li>
                <li><img src ="img\cough.jpg"></li>
                <li><img src ="img\touch.jpg"></li>
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

        <script type="text/javascript" src="js/jquery.min.js"></script>
        <script type="text/javascript" src="js/chart.min.js"></script>
        <script type="text/javascript" src="js/vaccine.js"></script>


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

        <style>
    table{
    border-collapse: collapse;
    background-color:rgb(0,0,0,0.6);
    color:#FFFFFF;
    text-align:center;
    border-radius:15px 15px 0px 0px;
    margin-left: auto;
    margin-right: auto;
    }
    td,th{border: 1px solid black; padding: 10px;}
            #chart-container{width:640px; height:auto;}
            h4{margin-left: 100px;}

            .card p{
    color: #fff;
    text-shadow: 0 0 5px #000;
    font-size: 12px;
    font-weight: bold;
    text-align: justify;
    line-height: 20px;
    font-family:serif;
    transform: translateY(+50%);
}
.row p{
    color: #fff;
    font-size: 14px;
}
.box{
    margin: 25px ;
    width:97%;
    height: 400px;
    background-color:#00093c;
}
.box h3{
    color:white;
    font-size:30px;
    text-align:center;
    padding-top:20px;
}
.image img{
    width: 150px;
    border-radius:50px 50px 50px 50px;
    margin-top:120px;
    filter: grayscale();
}
.image img:hover{
    filter: grayscale(0);
    cursor: pointer;
    width: 250px;
    margin: 5px ;
    transition: transform 0.5s;
}
.image li{
    list-style: none;
    display: inline-block;
    padding: 20px;
}
        </style>

    </body>
</html>