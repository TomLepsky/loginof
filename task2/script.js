
document.addEventListener('DOMContentLoaded', function(){
    let btns = ["btn_add", "btn_subtract", "btn_multiple", "btn_division"];
    for (let i = 0; i < btns.length; i++) {
        document.getElementById(btns[i]).addEventListener("click", function (event) {
            calculate(event);
        });
    }
});

function calculate(event) {
    let operand1 = document.getElementById("operand1");
    let operand2 = document.getElementById("operand2");

    operand1 = parseFloat(operand1.value);
    operand2 = parseFloat(operand2.value);

    if (Number.isNaN(operand1) || Number.isNaN(operand2)) {
        return false;
    }

    switch (event.target.id) {
        case 'btn_add':
            setResult(operand1 + operand2);
            break;

        case 'btn_subtract':
            setResult(operand1 - operand2);
            break;

        case 'btn_multiple':
            setResult(operand1 * operand2);
            break;

        case 'btn_division':
            setResult(operand1 / operand2);
            break;

        default:
            setResult(0);
            break;    
    }
}

function setResult(result) {
    let resultField = document.getElementById("result");
    resultField.innerHTML = result;
}