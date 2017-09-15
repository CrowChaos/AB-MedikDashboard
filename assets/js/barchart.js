
	$.getJSON("test.json", function (json) {

	var name = json.data.map(function(item) {
		return item.name;
	});
	var height = json.data.map(function(item) {
		return item.height;
	});
	var weight = json.data.map(function(item) {
		return item.weight;
	});
	var age = json.data.map(function(item) {
		return item.age;
	});


	var data = {
		labels: name ,
		datasets: [
			{
				label          : "Vyska",
				backgroundColor: "rgba(255, 159, 64, 0.6)",
				fillColor      : "rgba(255, 206, 86, 0.6)",
				strokeColor    : "rgba(220,220,220,0.8)",
				highlightFill  : "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data           : height
			},
			{
				label          : "Vaha",
				backgroundColor: "rgba(54, 162, 235, 0.6)",
				fillColor      : "rgba(75, 192, 192, 0.6)",
				strokeColor    : "rgba(220,220,220,0.8)",
				highlightFill  : "rgba(220,220,220,0.75)",
				highlightStroke: "rgba(220,220,220,1)",
				data           : weight
			},
			{
				label          : "Vek",
				backgroundColor: "rgba(255, 99, 132, 0.6)",
				fillColor      : "rgba(153, 102, 255, 0.6)",
				strokeColor    : "rgba(153, 102, 255, 0.6)",
				highlightFill  : "rgba(153, 102, 255, 0.6)",
				highlightStroke: "rgba(153, 102, 255, 0.6)",
				data           : age
			}
		]
	};

	var ctx = document.getElementById("myChart").getContext("2d");
	ctx.canvas.width = 400;
	ctx.canvas.height = 200;

	var myBarChart = new Chart(ctx, {
		type: 'bar',
		data: data
	});
});
