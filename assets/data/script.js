var button = document.querySelector('.add-step');
var step2 = document.querySelector('.recipe-step2');
var step3 = document.querySelector('.recipe-step3');
var step4 = document.querySelector('.recipe-step4');
var step5 = document.querySelector('.recipe-step5');

let clickState = 0;

function doAction() {
    clickState++;

    if (clickState == 1) {
        if (step2.style.display = 'none') {
        step2.style.display = 'block';
        }
    } else if (clickState == 2 ) {
         if (step3.style.display = 'none') {
            step3.style.display = 'block';
        }
    } else if (clickState == 3 ) {
        if (step4.style.display = 'none') {
            step4.style.display = 'block';
        }
    } else if (clickState == 4 ) {
        if (step5.style.display = 'none') {
            step5.style.display = 'block';
            button.style.display = 'none';
        }
    } 
}