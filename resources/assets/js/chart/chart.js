let util = require("../util/util.js");


util.ajaxPost(document.getElementById('quiz-id'), function(data) {
    let randomScalingFactor = function() {
        return Math.round(Math.random() * 100);
    };

    let config = {
        type: 'pie',
        data: {
            datasets: [{
                data: [],
                backgroundColor: [
                    window.chartColors.red,
                    window.chartColors.orange,
                    window.chartColors.yellow,
                    window.chartColors.green,
                    window.chartColors.blue,
                ],
                label: 'Dataset 1'
            }],
            labels: []
        },
        options: {
            responsive: true
        }
    };


    let colorNames = Object.keys(window.chartColors);
    document.getElementById('addDataset').addEventListener('click', function() {
        let newDataset = {
            backgroundColor: [],
            data: [],
            label: 'New dataset ' + config.data.datasets.length,
        };

        config.data.datasets.push(newDataset);
        window.myPie.update();
    });

    let questions = [];

    for (let question in response) {
        if (response.hasOwnProperty(question)) {
            questions[questions.length] = document.createElement("canvas");
            questions[questions.length - 1].setAttribute('class', 'col-md-3 col-sm-6 col-xs-12');
            for (let i = 0; i < question.length; i++) {
                config.data.datasets[0].data.push(question[i].frequency);
                config.data.datasets[0].labels.push(question[i].name);
            }
        }
    }

})
