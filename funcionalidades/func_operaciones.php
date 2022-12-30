<?php
    include("con_db_tickets.php");
    
    $varId = trim($_SESSION["id_user"]);
    $varTUser = trim($_SESSION["tipo_usuario"]);
    
    $consulta = "SELECT * FROM usuario WHERE id_usuario  = $varId";
    $resultado = mysqli_query($conex, $consulta);
    $listado = mysqli_fetch_array($resultado); // Trae todos los registros
    
    $varCorreoUser = trim($listado['correo']);

    if($varTUser == 1){
        $query = "SELECT v.id, v.nombre, v.apellido, v.correo, v.cant_ticket, c.categoria, v.total_venta FROM venta v INNER JOIN categoria_venta c ON v.id_categoria = c.id 
        ORDER BY v.id";
    }
    else{
        $query = "SELECT v.id, v.nombre, v.apellido, v.correo, v.cant_ticket, c.categoria, v.total_venta FROM venta v INNER JOIN categoria_venta c ON v.id_categoria = c.id 
        WHERE v.correo = '$varCorreoUser'
        ORDER BY v.id";
    }
            
    $resultado = mysqli_query($conex, $query);
?>

<?php
    while ($listado = mysqli_fetch_array($resultado)){
        echo "<tr>";
            echo "<th scope='row'>".$listado['id']."</th>";
            echo "<td>".$listado['nombre']."</td>";
            echo "<td>".$listado['apellido']."</td>";
            echo "<td>".$listado['correo']."</td>";
            echo "<td>".$listado['cant_ticket']."</td>";
            echo "<td>".$listado['categoria']."</td>";
            echo "<td>".$listado['total_venta']."</td>";
            
            echo "<td class='pb-0 ps-4'>"."<button class=eliminar value=$listado[id]>"."<script src=https://cdn.lordicon.com/fudrjiwc.js></script>"."
            <lord-icon
                src=https://cdn.lordicon.com/kfzfxczd.json
                trigger=hover
                colors=primary:#ffffff
                style=width:25px;height:25px>
            </lord-icon>"."</button>"."</td>";
        echo "</tr>";
    }
?>


<script>
    const buttonsEliminar = document.querySelectorAll('.eliminar');        
    window.addEventListener('load', function(){
        buttonsEliminar.forEach(button => {
            button.addEventListener('click', function(){
                Swal.fire({
                            title: 'Seguro que quieres eliminar la operacion?',
                            showDenyButton: true,
                            showCancelButton: false,
                            confirmButtonText: 'Confirmar',
                            denyButtonText: 'Cancelar',
                            }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                                if (result.isConfirmed) {
                                    Swal.fire('Eliminando...', '', 'success');
                                    const redireccion = setTimeout(function(){
                                        window.location.replace(`./eliminar_operacion.php?id_operacion=${button.value}`);
                                    }, 2000);
                                }else if (result.isDenied) {
                                    Swal.fire('No se realizaran cambios', '', 'info');
                                }
                            })
            });
        });
    });
</script>