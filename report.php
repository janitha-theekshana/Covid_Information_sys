<?php
$date = date('Y-m-d');
$connection = mysqli_connect('localhost','root','','coviddb');
$table = '';
$query = "SELECT* FROM quarantine_people WHERE 	qurantine_start_date = '$date'";

$result_set = mysqli_query($connection,$query);

if($result_set){
    //echo mysqli_num_rows($result_set). "Records found.<hr>";

    while($record = mysqli_fetch_assoc($result_set))
    {
        $table .='<tr>';
        $table .='<td>'. $record['name'] . '</td>';
        $table .='<td>'. $record['gender'] . '</td>';
        $table .='<td>'. $record['Date_Of_Birth'] . '</td>';
        $table .='<td>'. $record['PCR_result'] . '</td>';
        $table .='<td>'. $record['vaccinate'] . '</td>';
        $table .='<td>'. $record['vaccine_name'] . '</td>';
        $table .='<td>'. $record['vaccine_doss'] . '</td>';
        $table .='<td>'. $record['quarantine_start_date'] . '</td>';
        $table .='<td>'. $record['Quarantine_end_date'] . '</td>';
        $table .='</tr>';

    }
    $table .= '</table>'; 
}
?>

<?php
$date = date('Y-m-d');
$connection = mysqli_connect('localhost','root','','coviddb');
$tabled = '';
$query = "SELECT* FROM death_people WHERE Date = '$date'";

$result_set = mysqli_query($connection,$query);

if($result_set){
    //echo mysqli_num_rows($result_set). "Records found.<hr>";

    while($record = mysqli_fetch_assoc($result_set))
    {
        $tabled .='<tr>';
        $tabled .='<td>'. $record['name'] . '</td>';
        $tabled .='<td>'. $record['gender'] . '</td>';
        $tabled .='<td>'. $record['Date_Of_Birth'] . '</td>';
        $tabled .='<td>'. $record['death_reason'] . '</td>';
        $tabled .='<td>'. $record['vaccinate'] . '</td>';
        $tabled .='<td>'. $record['vaccine_name'] . '</td>';
        $tabled .='<td>'. $record['vaccine_doss'] . '</td>';
        $tabled .='</tr>';

    }
    $tabled .= '</table>'; 
}
?>
<html>
<head>
<link rel="stylesheet" href="report.css">
<title>Information Report</title>
</head>
<body>
    <h1>Covid Information</h1>
    <br><br>
    <p>Suwadharani Covid Information System</p>
    <p>Keradewala Grama Niladari Division</p>
    
    <?php
        $date = date('Y-m-d');
        echo '<p>'.$date.'</p>'
    ?>

<section>
            <h3><u>Today Quarantine Details</u></h3>
    <main>
    <table class="center">
        <thead>
            <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>PCR Result</th>
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
            <h3><u>Today Death Details</u></h3>
    <main>
    <table class="center">
        <thead>
            <tr>
            <th>Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Death reason</th>
            <th>Vaccinate</th>
            <th>Vaccine name</th>
            <th>vaccine doss</th>
            </tr>
        </thead>

        <?php echo $tabled; ?>
    </table>
    </main>
</section>
<br><br><br>
    <div>
        <button onClick="window.print()">Print</button>
    </div>
</body>
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
h3{text-align:center;}
</style>
</html>