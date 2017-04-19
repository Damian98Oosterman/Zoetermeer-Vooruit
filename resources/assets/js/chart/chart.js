let util = require("../util/util.js");

let chartColors = [
	'rgb(255, 99, 132)',
	'rgb(255, 159, 64)',
	'rgb(255, 205, 86)',
	'rgb(75, 192, 192)',
	'rgb(54, 162, 235)',
	'rgb(153, 102, 255)',
	'rgb(231,233,237)',
	'rgb(255,105,180)',
	'rgb(255,062,150)',
	'rgb(255,215,000)',
	'rgb(034,139,034)',
	'rgb(186, 218, 85)',
	'rgb(192,000,000)'
];

util.ajaxPost([], function(data) {


    let questions = [];
    let configs = [];

    window.pies = [];
    for (var question  in response) {
      if (response.hasOwnProperty(question)) {
        configs[question] = {
            type: 'pie',
            data: {
                datasets: [{
                    data: [],
                    backgroundColor: [
                    ],
                    label:''
                }],
                labels: []
            },
            options: {
                responsive: false
            }
        };

      }
    }

    for (let question in response) {
        if (response.hasOwnProperty(question)) {
            questions[questions.length] = document.createElement("canvas");


            questions[questions.length - 1].setAttribute('id', 'canvas');
            for (let i = 0; i < response[question].length; i++) {
                configs[question].data.datasets[0].data.push(response[question][i].frequency);
                configs[question].data.datasets[0].label = "lolz";
                configs[question].data.labels.push(response[question][i].name);
                configs[question].data.datasets[0].backgroundColor.push(chartColors[i % chartColors.length]);

            }
            let header = document.createElement("div");
            header.setAttribute('id', 'chart-section');
            header.setAttribute('class', 'col-md-4 col-sm-6 col-xs-12');
            let h4 = document.createElement("h4");

            console.log(configs[question]);
            h4.textContent = 'Vraag: ' + question;
            header.appendChild(h4);
            header.appendChild(questions[questions.length -1]);
            let ctx = questions[questions.length -1].getContext("2d");
            window.pies.push(new Chart(ctx, configs[question]));
            document.getElementById('chart').appendChild(header);
        }
        }

})
