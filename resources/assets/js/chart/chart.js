let util=require("../util/util.js");

console.log("werkt");

util.ajaxPost([],function(data){
  var randomScalingFactor = function() {
      return Math.round(Math.random() * 100);
  };

  var config1 = {
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

  var config2 = {
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
      var ctx1 = document.getElementById("chart-area1").getContext("2d");
      var ctx2 = document.getElementById("chart-area2").getContext("2d");
      window.myPie1 = new Chart(ctx1, config1);
      window.myPie2 = new Chart(ctx2, config2);
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
