let util=require("../util/util.js");

console.log("werkt");

util.ajaxPost([],function(data){
  var randomScalingFactor = function() {
      return Math.round(Math.random() * 100);
  };

  var config = {
      type: 'pie',
      data: {
          datasets: [{
              data: [
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
                  randomScalingFactor(),
              ],
              backgroundColor: [
                  window.chartColors.red,
                  window.chartColors.orange,
                  window.chartColors.yellow,
                  window.chartColors.green,
                  window.chartColors.blue,
              ],
              label: 'Dataset 1'
          }],
          labels: [
              "A",
              "B",
              "C",
              "D",
              "E"
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

})
