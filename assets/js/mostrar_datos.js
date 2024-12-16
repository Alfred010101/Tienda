function llenarFormulario(datos) {
    document.getElementById('nombre_producto').value = datos.nombre;
    document.getElementById('marca_producto').value = datos.marca;
    document.getElementById('precio_producto').value = datos.precio;
    document.getElementById('cantidad').value = datos.cantidad;
    document.getElementById('tipo_producto').value = datos.tipo;
    document.getElementById('descripcion_producto').value = datos.descripcion;
}