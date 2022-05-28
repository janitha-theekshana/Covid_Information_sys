$(document).ready(function(){
	$.ajax({
		url:"http://localhost/web/vaccine.php",
		method: "GET",
		success: function(data){
			console.log(data);
			var vac = [];
			var people = [];

		for(var i in data){
			vac.push(data[i].vaccine_name);
			people.push(data[i].people);
				}
		var chartdata = {
			labels: vac,
			datasets: [
				{
				label: 'vaccinated peoples',
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