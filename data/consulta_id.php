<?php
    include "data/conexion.php";

    if (!empty($_POST["btn_consultar"])) 
    {
        if (!empty($_POST['codigo_barras'])) 
        {
            $codigo_qr = $_POST['codigo_barras'];

            $sql = $conexion->prepare("SELECT * FROM products WHERE codigo = ?");
            $sql->bind_param("s", $codigo_qr); // 's' para string
            $sql->execute();
            $resultado = $sql->get_result();
            $registro = $resultado->fetch_assoc();

            if ($registro) { // Si hay resultados
                //echo '<div class="alert alert-success">Código : ' . htmlspecialchars($codigo_qr) . ' </div>';
                 ?>
                    <script>
                        mostrarMensaje("Código: <?= htmlspecialchars($codigo_qr) ?>", "success");
                        llenarFormulario({
                            nombre: "<?= htmlspecialchars($registro['nombre']) ?>",
                            marca: "<?= htmlspecialchars($registro['marca']) ?>",
                            precio: "<?= htmlspecialchars($registro['precio']) ?>",
                            cantidad: "<?= htmlspecialchars($registro['cantidad']) ?>",
                            tipo: "<?= htmlspecialchars($registro['tipo']) ?>",
                            descripcion: "<?= htmlspecialchars($registro['descripcion']) ?>"
                        });
                        /*const mensaje = document.getElementById('mensaje');
                        mensaje.textContent = "Código : <?= //$codigo_qr ?> ";
                        mensaje.classList.remove();
                        mensaje.classList.add("alert", "alert-success");
                        document.getElementById('nombre_producto').value = "<?= //htmlspecialchars($registro['nombre']) ?>";
                        document.getElementById('marca_producto').value = "<?= //htmlspecialchars($registro['marca']) ?>";
                        document.getElementById('precio_producto').value = "<?= //htmlspecialchars($registro['precio']) ?>";
                        document.getElementById('cantidad').value = "<?= //htmlspecialchars($registro['cantidad']) ?>";
                        document.getElementById('tipo_producto').value = "<?= //htmlspecialchars($registro['tipo']) ?>";
                        document.getElementById('descripcion_producto').value = "<?= //htmlspecialchars($registro['descripcion']) ?>";*/
                    </script>
                 <?php
            } else {
                ?>
                    <script>
                        /*const mensaje = document.getElementById('mensaje');
                        mensaje.textContent = "Código no encontrado";
                        mensaje.classList.remove();
                        mensaje.classList.add("alert", "alert-danger");*/
                        mostrarMensaje("Código no encontrado", "danger");
                    </script>
                <?php
                //echo '<div class="alert alert-danger">Código no encontrado</div>';
            }
        } else {
            ?>
                <!--script>
                    const mensaje = document.getElementById('mensaje');
                    mensaje.textContent = "Indique un código para realizar la búsqueda";
                    mensaje.classList.remove();
                    mensaje.classList.add("alert", "alert-warning");
                </script-->
                <script>
                    mostrarMensaje("Indique un código para realizar la búsqueda", "warning");
                </script>
            <?php
            //echo '<div class="alert alert-warning">Indique un código para realizar la búsqueda</div>';
        }
    }
?>