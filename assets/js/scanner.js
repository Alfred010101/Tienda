const inputCodigo = document.getElementById('codigo_barras');
const resultado = document.getElementById('resultado');

// Escucha el evento de teclado Enter
inputCodigo.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault();                         
        resultado.textContent = 'Codigo Consultado : ' + inputCodigo.value;
        inputCodigo.value = '';
    }
});