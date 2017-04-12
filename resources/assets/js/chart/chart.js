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

    let config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [],
                backgroundColor: [
                ],
                label: 'Dataset 1'
            }],
            labels: []
        },
        options: {
            responsive: true
        }
    };

    let questions = [];

    window.pies = [];

    for (let question in response) {
        if (response.hasOwnProperty(question)) {
            questions[questions.length] = document.createElement("canvas");
            questions[questions.length - 1].setAttribute('class', 'col-md-3 col-sm-6 col-xs-12');
            questions[questions.length - 1].setAttribute('id', 'canvas');
            for (let i = 0; i < question.length; i++) {
              console.log(i);
                config.data.datasets[0].data.push(response[question][i].frequency);
                config.data.labels.push(response[question][i].name);
                config.data.datasets[0].backgroundColor.push(chartColors[i % chartColors.length]);
            }
            document.getElementById('app').appendChild(questions[questions.length -1]);
            let ctx = questions[questions.length -1].getContext("2d");
            window.pies.push(new Chart(ctx, config));
        }
        }

})
