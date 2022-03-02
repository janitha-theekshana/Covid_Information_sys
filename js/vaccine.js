$(document).ready(function(){
	$.ajax({
		url:"http://localhost/web/vaccine.php",
		method: "GET",
		success: function(vaccine){
			console.log(vaccine);
			var vac = [];
			var people = [];

		for(var i in vaccine){
			vac.push(vaccine[i].vaccine_name);
			people.push(vaccine[i].people);
				}
		var chartdata = {
			labels: vaccine,
			datasets: [
				{
				label: 'vaccination details',
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
	error: function(vaccine){
		console.log(vaccine);
	}
});
});