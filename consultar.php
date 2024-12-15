<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda</title>
    <link rel="stylesheet" href="assets/css/formulario.css"> <!-- Enlace a tu archivo CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <?php include 'includes/header.php'; ?>

    <main>
        <div class="container mt-2 mb-2 form-container">

            <h2 class="text-center">Consultar Producto</h2>

            <!--Formulario de busqueda-->
            <div id="cont_form_busqueda" class="pb-5">
                <form id="formBusqueda" method="POST" action="procesar_qr.php">
                    <label for="codigo_barras" class="form-label">Código de Barras</label>
                    <div class="row mb-3">
                        <div class="col-md-8">
                            <input type="number" class="form-control" id="codigo_barras" name="codigo_barras" autofocus>
                        </div>
                        <div class="col-md-4">
                            <button type="submit" class="btn btn-primary form-control">Consultar Producto</button>
                        </div>
                    </div>
                </form>
            </div>
            
            <!--Formulario de resultado-->
            <div id="cont_form_resultado">
                <form>
                    <div class="mb-3">
                        <label class="form-label" id="resultado">Codigo Consultado : ############</label>
                    </div>

                    <!-- Nombre y Marca en el mismo renglón -->
                    <div class="row mb-3">
                        <div class="col-md-6">
                            <label for="nombre" class="form-label">Nombre del Producto</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" readonly>
                        </div>
                        <div class="col-md-6">
                            <label for="marca" class="form-label">Marca</label>
                            <input type="text" class="form-control" id="marca" name="marca" readonly>
                        </div>
                    </div>

                    <!-- Precio Cantidad y Tipo en el mismo renglón -->
                    <div class="row mb-3">
                        <div class="col-md-4">
                            <label for="precio" class="form-label">Precio</label>
                            <input type="number" class="form-control" id="precio" name="precio" step="0.01" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="cantidad" class="form-label">Cantidad</label>
                            <input type="number" class="form-control" id="cantidad" name="cantidad" step="0.01" readonly>
                        </div>
                        <div class="col-md-4">
                            <label for="tipo" class="form-label">Tipo</label>
                            <select class="form-select" id="tipo" name="tipo" disabled>
                                <option value="kg">Kilogramos</option>
                                <option value="ml">Mililitros</option>
                            </select>
                        </div>
                    </div>

                    <!-- Descripción -->
                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" rows="3" readonly></textarea>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <?php include 'includes/footer.php'; ?>
    <script src="assets/js/scanner.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>