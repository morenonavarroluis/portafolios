document.addEventListener('DOMContentLoaded', () => {
    const valorAnterior = document.getElementById('valor-anterior');
    const valorActual = document.getElementById('valor-actual');
    const botonesNumero = document.querySelectorAll('.numero');
    const botonesOperador = document.querySelectorAll('.operador');
    const botonClear = document.getElementById('clear');
    const botonBackspace = document.getElementById('backspace');
    const botonEquals = document.getElementById('equals');

    let operacion = '';
    let valor1 = '';
    let valor2 = '';

    botonesNumero.forEach(boton => {
        boton.addEventListener('click', () => {
            if (operacion) {
                valor2 += boton.textContent;
                valorActual.textContent = valor2;
            } else {
                valor1 += boton.textContent;
                valorActual.textContent = valor1;
            }
        });
    });

    botonesOperador.forEach(boton => {
        boton.addEventListener('click', () => {
            if (valor1 && valor2) {
                calcular();
            }
            operacion = boton.textContent;
            valorAnterior.textContent = `${valor1} ${operacion}`;
            valorActual.textContent = '';
        });
    });

    botonEquals.addEventListener('click', () => {
        if (valor1 && valor2) {
            calcular();
            valorAnterior.textContent = '';
            operacion = '';
        }
    });

    botonClear.addEventListener('click', () => {
        valor1 = '';
        valor2 = '';
        operacion = '';
        valorAnterior.textContent = '0';
        valorActual.textContent = '0';
    });

    botonBackspace.addEventListener('click', () => {
        if (operacion) {
            valor2 = valor2.slice(0, -1);
            valorActual.textContent = valor2;
        } else {
            valor1 = valor1.slice(0, -1);
            valorActual.textContent = valor1;
        }
    });

    function calcular() {
        let resultado;
        const num1 = parseFloat(valor1);
        const num2 = parseFloat(valor2);

        switch (operacion) {
            case '+':
                resultado = num1 + num2;
                break;
            case '-':
                resultado = num1 - num2;
                break;
            case 'x':
                resultado = num1 * num2;
                break;
            case '%':
                resultado = num1 % num2;
                break;
            default:
                return;
        }

        valorActual.textContent = resultado;
        valor1 = resultado.toString();
        valor2 = '';
    }
});
