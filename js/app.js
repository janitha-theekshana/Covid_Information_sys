$(document).ready(function(){
	$.ajax({
		url:"http://localhost/web/Quarentine.php",
		method: "GET",
		success: function(data){
			console.log(data);
			var date = [];
			var people = [];

		for(var i in data){
			date.push(data[i].quarantine_start_date);
			people.push(data[i].QP_ID);
				}
		var chartdata = {
			labels: date,
			datasets: [
				{
				label: 'date people',
				backgroundColor: 'green',
				borderColor: 'red',
				hoverBackgroundColor: 'yellow',
				hoverBorderColor: 'red',
				data: people
				}
			]
		};
	var ctx = $("#mycanvas");
	var barGraph = new Chart(ctx, {
		type: 'bar',
		data: chartdata
		});
	},
	error: function(data){
		console.log(data);
	}
});
});