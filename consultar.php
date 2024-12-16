<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="assets/css/formulario.css">
    <link rel="stylesheet" href="assets/css/consultar_input.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main class="container mt-2 mb-2 form-container">
        <h2 class="text-center">Consultar Producto</h2>

        <!--Formulario de busqueda-->
        <div id="cont_form_busqueda">            
            <form id="formBusqueda" method="POST">
                <label for="codigo_barras" class="form-label">Código de Barras</label>
                <div class="row mb-3">
                    <div class="col-md-8">
                        <input type="number" class="form-control no-arrows" id="codigo_barras" name="codigo_barras" step="0.01" autofocus>
                    </div>
                    <div class="col-md-4">
                        <button type="submit" class="btn btn-primary form-control" name="btn_consultar" value="OK"">Consultar Producto</button>
                    </div>
                </div>
            </form>
        </div>

        <div id="mensaje"></div>
        
        <!--Formulario de resultado-->
        <div id="cont_form_resultado">
            <form id="formResultado">
                <!-- Nombre y Marca en el mismo renglón -->
                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="nombre_producto" class="form-label">Nombre del Producto</label>
                        <input type="text" class="form-control" id="nombre_producto" name="nombre_producto" readonly>
                    </div>
                    <div class="col-md-6">
                        <label for="marca_producto" class="form-label">Marca</label>
                        <input type="text" class="form-control" id="marca_producto" name="marca_producto" readonly>
                    </div>
                </div>

                <!-- Precio Cantidad y Tipo en el mismo renglón -->
                <div class="row mb-3">
                    <div class="col-md-4">
                        <label for="precio_producto" class="form-label">Precio</label>
                        <input type="number" class="form-control" id="precio_producto" name="precio_producto" step="0.01" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="cantidad" class="form-label">Cantidad</label>
                        <input type="number" class="form-control" id="cantidad" name="cantidad" step="0.01" readonly>
                    </div>
                    <div class="col-md-4">
                        <label for="tipo_producto" class="form-label">Tipo</label>
                        <select class="form-select" id="tipo_producto" name="tipo_producto" disabled>
                            <option value="kg">Kilogramos</option>
                            <option value="ml">Mililitros</option>
                        </select>
                    </div>
                </div>

                <!-- Descripción -->
                <div class="mb-3">
                    <label for="descripcion_producto" class="form-label">Descripción</label>
                    <textarea class="form-control" id="descripcion_producto" name="descripcion_producto" rows="3" readonly></textarea>
                </div>
            </form>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>

    <!--script src="assets/js/scanner.js"></script-->
    <script src="assets/js/enter.js"></script>
    <script src="assets/js/mensajes.js"></script>
    <script src="assets/js/mostrar_datos.js"></script>
    <?php include "data/consulta_id.php"; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>