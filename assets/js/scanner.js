let buffer = ""; // Almacena temporalmente el código escaneado
let timeout; // Temporizador para detectar el final de la entrada

const inputCodigo = document.getElementById('codigo_barras');
const resultado = document.getElementById('resultado');

// Escucha el evento de teclado
inputCodigo.addEventListener('keypress', (event) => {
    clearTimeout(timeout); // Resetea el temporizador

    // Añade el carácter al buffer
    buffer += event.key;

    // Establece un retraso para procesar el código completo
    timeout = setTimeout(() => {
        resultado.textContent = `Código escaneado: ${buffer}`;
        buffer = ""; // Limpia el buffer para el siguiente código
    }, 300);
});