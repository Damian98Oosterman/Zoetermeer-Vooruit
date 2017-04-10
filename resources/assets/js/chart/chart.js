let util=require("../util/util.js");
if (util.isRoute('quiz/{id}/statistics')) {

  util.ajaxPost([],function(data){
    var randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    var config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [
                ],
                backgroundColor: [
                ],
                label: 'Dataset 1'
            }],
            labels: [
            ]
        },
        options: {
            responsive: true
        }
    };

    window.onload = function() {
        var ctx1 = document.getElementById("chart-area").getContext("2d");
        window.myPie = new Chart(ctx, config);
    };

    var colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
        var newDataset = {
            backgroundColor: [],
            data: [],
            label: 'New dataset ' + config.data.datasets.length,
        };

        config.data.datasets.push(newDataset);
        window.myPie.update();
    });

    var chartColors = {
    	red: 'rgb(255, 99, 132)',
    	orange: 'rgb(255, 159, 64)',
    	yellow: 'rgb(255, 205, 86)',
    	lime: 'rgb(75, 192, 192)',
    	blue: 'rgb(54, 162, 235)',
    	purple: 'rgb(153, 102, 255)',
    	grey: 'rgb(231,233,237)',
    	pink: 'rgb(255,105,180)',
    	violet: 'rgb(255,062,150)',
    	gold: 'rgb(255,215,000)',
    	green: 'rgb(034,139,034)',
    	badass: 'rgb(186, 218, 85)',
    	chucknorris: 'rgb(192,000,000)' };

  for (var i = 0; i < response.length; i++) {
    for (var j = 0; j < response.length; i++) {
      config.data.datasets[0].backgroundColor = chartColors[j % chartColors.length];
      config.data.datasets[0].labels = response[i][j].name;
      config.data.datasets[0].data = response[i][j].frequency;
    }
  }
  })

}
