<?php
    session_start();
?>

<?php
    include("./funcionalidades/con_db_tickets.php");
    $variable = $_GET['id_operacion'];
    $consulta = "DELETE FROM venta WHERE `venta`.`id` = $variable";
    $resultado = mysqli_query($conex,$consulta);

    if($resultado){
        ?>
        <script>
            window.location.replace('./operaciones.php');
        </script>
        <?php
    }
?>