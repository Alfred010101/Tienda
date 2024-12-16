document.getElementById('codigo_barras').addEventListener('keypress', function(event) {
    if (event.key === 'Enter') {
        event.preventDefault(); 
        document.querySelector('button[name="btn_consultar"]').click();
    }
});