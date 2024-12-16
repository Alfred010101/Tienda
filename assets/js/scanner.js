const inputCodigo = document.getElementById('codigo_barras');
const resultado = document.getElementById('resultado');
alert('jflsdajlf')
// Escucha el evento de teclado Enter
inputCodigo.addEventListener('keydown', (event) => {
    if (event.key === 'Enter') {
        event.preventDefault();                         
        resultado.textContent = 'Codigo Consultado : ' + inputCodigo.value;
        inputCodigo.value = '';
        alert('jflsdajlf')
    }
});

document.getElementById('codigo_barras').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault(); // Evita que el formulario se envíe automáticamente
        document.querySelector('button[name="btn_consultar"]').click(); // Simula clic en el botón
    }
});