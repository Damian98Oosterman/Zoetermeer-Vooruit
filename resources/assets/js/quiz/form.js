let util = require('../util/util.js');

if (util.isRoute('quiz/create') || util.isRoute('quiz/{id}/edit')){
    util.tryEventListener(document.getElementsByName('questions[]'), 'keyup', morequestions);

    function morequestions(){
        let el = document.getElementsByName('questions[]');
        let shouldCreate = true;
        for (let i=0; i < el.length; i++) {
            if (el[i].value === "") {
                shouldCreate = false;
            }
        }
        if (shouldCreate) {
            let input = document.createElement('INPUT');
            let label = document.createElement('LABEL');
            let br = document.createElement('BR');
            label.setAttribute('for', 'questions');
            let text = document.createTextNode(document.querySelector('label[for=questions]').innerHTML);
            label.appendChild(text);

            input.setAttribute("name", "questions[]");
            input.setAttribute("type", "text");

            for (let x=0; x < el.length; x++){
                input.id='questions'+x;
            }
            document.getElementById('morequestions').appendChild(label);
            document.getElementById('morequestions').appendChild(input);
            document.getElementById('morequestions').appendChild(br);
            util.tryEventListener(document.getElementsByName('questions[]'), 'keyup', morequestions);
        }
    }
}