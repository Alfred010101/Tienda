function mostrarMensaje(texto, tipo) {
    const mensaje = document.getElementById('mensaje');
    mensaje.textContent = texto;
    mensaje.className = '';
    mensaje.classList.add('alert', `alert-${tipo}`);
}
