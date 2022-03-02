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




<?php


if (isset($_SERVER['HTTPS']) &&
    ($_SERVER['HTTPS'] == 'on' || $_SERVER['HTTPS'] == 1) ||
    isset($_SERVER['HTTP_X_FORWARDED_PROTO']) &&
    $_SERVER['HTTP_X_FORWARDED_PROTO'] == 'https') {
  $ssl = 'https';
}
else {
  $ssl = 'http';
}
 
$app_url = ($ssl  )
          . "://".$_SERVER['HTTP_HOST']
          
          . (dirname($_SERVER["SCRIPT_NAME"]) == DIRECTORY_SEPARATOR ? "" : "/")
          . trim(str_replace("\\", "/", dirname($_SERVER["SCRIPT_NAME"])), "/");



header("Access-Control-Allow-Origin: *");

?>


<!DOCTYPE html>
<html>
<head>
	 
	<title> Monthly Report- Biology </title>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<meta name="description" content="This ">

	<meta name="author" content="Code With Mark">
	<meta name="authorUrl" content="http://codewithmark.com">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> 
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script> 


	<script src="https://cdn.apidelv.com/libs/awesome-functions/awesome-functions.min.js"></script> 
  
 	


	<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" ></script>

 

	<script type="text/javascript">
	$(document).ready(function($) 
	{ 

		$(document).on('click', '.btn_print', function(event) 
		{
			event.preventDefault();


			
			var element = document.getElementById('one'); 

			var opt = 
			{
			  margin:       1,
			  filename:     'pageContent_'+js.AutoCode()+'.pdf',
			  image:        { type: 'jpeg', quality: 0.98 },
			  html2canvas:  { scale: 2 },
			  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
			};


			html2pdf().set(opt).from(element).save();

			 
		});

 
 
	});
	</script>

	 

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

<section id="one">
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

<br><br>

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
	<input type="button" id="rep" value="Print" class="btn_print">
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



</body>
</html>