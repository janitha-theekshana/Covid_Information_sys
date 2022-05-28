<?php
$date = date('Y-m-d');
$connection = mysqli_connect('localhost','root','','coviddb');
$table = '';
$query = "SELECT* FROM quarantine_people WHERE 	qurantine_start_date = '$date' AND PCR_result = 'Positive'";

$result_set = mysqli_query($connection,$query);

if($result_set){
    //echo mysqli_num_rows($result_set). "Records found.<hr>";

    while($record = mysqli_fetch_assoc($result_set))
    {
        $table .='<tr>';
        $table .='<td>'. $record['name'] . '</td>';
        $table .='<td>'. $record['gender'] . '</td>';
        $table .='<td>'. $record['Date_Of_Birth'] . '</td>';
        $table .='<td>'. $record['vaccinate'] . '</td>';
        $table .='<td>'. $record['vaccine_name'] . '</td>';
        $table .='<td>'. $record['vaccine_doss'] . '</td>';
        $table .='<td>'. $record['qurantine_start_date'] . '</td>';
        $table .='<td>'. $record['Quarantine_end_date'] . '</td>';
        $table .='</tr>';

    }
    $table .= '</table>'; 
}
?>
<?php
$date = date('Y-m-d');
$connection = mysqli_connect('localhost','root','','coviddb');
$table1 = '';
$query = "SELECT* FROM quarantine_people WHERE Quarantine_end_date != '$date' AND PCR_result = 'Positive'";

$result_set = mysqli_query($connection,$query);

if($result_set){
    //echo mysqli_num_rows($result_set). "Records found.<hr>";

    while($record = mysqli_fetch_assoc($result_set))
    {
        $table1 .='<tr>';
        $table1 .='<td>'. $record['name'] . '</td>';
        $table1 .='<td>'. $record['gender'] . '</td>';
        $table1 .='<td>'. $record['Date_Of_Birth'] . '</td>';
        $table1 .='<td>'. $record['vaccinate'] . '</td>';
        $table1 .='<td>'. $record['vaccine_name'] . '</td>';
        $table1 .='<td>'. $record['vaccine_doss'] . '</td>';
        $table1 .='<td>'. $record['qurantine_start_date'] . '</td>';
        $table1 .='<td>'. $record['Quarantine_end_date'] . '</td>';
        $table1 .='</tr>';

    }
    $table1 .= '</table>'; 
}
?>
<html>
    <head>
        <meta name="viewport" content="width=device_width ,initial-scale=1.0">
        <title>Positive</title>
        <link rel="stylesheet" href="back3.css">
        <!--navbar-->
        <link rel="stylesheet" href="nav.css">
        <!--footer-->
        <link rel="stylesheet" href="footer.css">

    </head>

    <body  onload="initClock()">
        <div class="container">
            <div class="navbar">
                <header>
                    <div class="menuToggle" onclick="toggleMenu();"></div>
                    <ul class="navigation">
                        <li><a href="home.php" onclick="toggleMenu();" >Home</a></li>
                        <li><a href="positive.php" onclick="toggleMenu();"  class="active">Positive</a></li>
                        <li><a href="Quarentine.php" onclick="toggleMenu();" >Quarentine</a></li>
                        <li><a href="Deaths.php" onclick="toggleMenu();">Deaths</a></li>
                        <li><a href="report.php" onclick="toggleMenu();">Print Report</a></li>
                        <li><a href="About.php" onclick="toggleMenu();">About</a></li>
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
                    <h1>Covid-19 Positive</h1>
                    <p>Covid 19 positive people details in Keradewala Grama Niladari Divison. 
                        We promise to give you the most accurate information.</p>
                </div>
                <div class="col">
                    <div class="card">
                       
                        <h3>Today Positive people</h3>
                        <label></label>
                        <?php
                            $date = date('Y-m-d');
                            $connection = mysqli_connect('localhost','root','','coviddb');

                            $query = "SELECT QP_ID FROM quarantine_people WHERE qurantine_start_date='$date' AND PCR_result='Positive'";
                            $query_run = mysqli_query($connection, $query);

                            $row = mysqli_num_rows($query_run);

                            echo '<label>' .$row. '</label>'
                        ?>
                       
                    </div>
                </div>
            </div>
        </div>
 
        <br><br>
        <section>
            <h3><u>Today Possitive Details</u></h3><br><br>
    <main>
    <table class="center">
        <thead>
            <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Vaccinate</th>
            <th>Vaccine name</th>
            <th>vaccine doss</th>
            <th>Quarantine start date</th>
            <th>Quarantine end date</th>
            </tr>
        </thead>

        <?php echo $table; ?>
    </table>
    </main>
</section>
<br><br>
<section>
            <h3><u>Early Possitive Details</u></h3><br><br>
    <main>
    <table class="deathdetails">
        <thead>
            <tr>  
            <th>Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Vaccinate</th>
            <th>Vaccine name</th>
            <th>vaccine doss</th>
            <th>Quarantine start date</th>
            <th>Quarantine end date</th>
            </tr>
        </thead>

        <?php echo $table1; ?>
    </table>
    </main>
</section>
<br><br>
 

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
 .card{
    width: 200px;
    height: 230px;
    display: inline-block;
    border-radius: 10px;
    padding: 15px 25px;
    box-sizing: border-box;
    cursor: pointer;
    margin: 10px 15px;
    background-position: center;
    background-size: cover;
    transition: transform 0.5s;
    background-image: linear-gradient(rgba(0,0,0,0.7),rgba(0,0,0,0.7)),url(Death.jpg);
    margin-left:50%;
} 
.card h3{
    text-align:center;
    padding-bottom: 100px;
    color: yellow;
}
.card label{
    font-size:40px;
    color:white;
    padding-left:20%;
}
@media(max-width:950px){
    .card{
        margin-left:20%;
    }}
@media(max-width:750px){
    .card{
        margin-left:4%;
    }
}
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
h3{text-align:center;}
</style>
    </body>
</html>