const valorAnterior = document.getElementById('valor-anterior');
const valorActual = document.getElementById('valor-actual');
const botones = document.querySelectorAll('.numero');
const botonesOpera = document.querySelectorAll('.operador');


const calculadora = new Calculadora();


console.log(Calculadora.sumar(2,3));