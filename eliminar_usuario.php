<?php
    session_start();
?>

<?php
    include("./funcionalidades/con_db_tickets.php");
    $variable = $_GET['id_usuario'];
    $consulta = "DELETE FROM usuario WHERE `usuario`.`id_usuario` = $variable";
    $resultado = mysqli_query($conex,$consulta);

    if($resultado){
        ?>
        <script>
            window.location.replace('./usuarios.php');
        </script>
        <?php
    }
?>

