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
                       </script>
                 <?php
            } else {
                ?>
                    <script>
                        mostrarMensaje("Código no encontrado", "danger");
                    </script>
                <?php
                //echo '<div class="alert alert-danger">Código no encontrado</div>';
            }
        } else {
            ?>
                <script>
                    mostrarMensaje("Indique un código para realizar la búsqueda", "warning");
                </script>
            <?php
            //echo '<div class="alert alert-warning">Indique un código para realizar la búsqueda</div>';
        }
    }
?>