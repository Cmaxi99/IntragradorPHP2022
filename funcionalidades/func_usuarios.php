<?php
    include("con_db_tickets.php");
    if(isset($_SESSION["id_user"])){
        $varId = trim($_SESSION["id_user"]);
        $varTUser = trim($_SESSION["tipo_usuario"]);
        if($varTUser == 1){
            $query = "SELECT u.id_usuario, u.nombre, u.apellido, u.correo, u.tipo_usuario, u.contrasenia, c.categoria_usuario FROM usuario u INNER JOIN categoria_usuario c ON u.tipo_usuario = c.id 
            ORDER BY u.id_usuario";
        }
        else{
            $query = "SELECT u.id_usuario, u.nombre, u.apellido, u.correo, u.tipo_usuario, u.contrasenia, c.categoria_usuario FROM usuario u INNER JOIN categoria_usuario c ON u.tipo_usuario = c.id 
            WHERE u.id_usuario = $varId
            ORDER BY u.id_usuario";
        }
        $consulta = mysqli_query($conex, $query);
    }
    else{
        ?>
            <script>
                window.location.replace(`./login.php`);
            </script>
        <?php
    }
    
    
?>

<?php
    while ($listado = mysqli_fetch_array($consulta)){
        echo "<tr>";
            echo "<th scope='row'>".$listado['id_usuario']."</th>";
            echo "<td>".$listado['nombre']."</td>";
            echo "<td>".$listado['apellido']."</td>";
            echo "<td>".$listado['correo']."</td>";
            echo "<td>".$listado['categoria_usuario']."</td>";
            echo "<td>".$listado['contrasenia']."</td>";
            echo "<td class='pb-0 ps-3'>"."<button class=editar value=$listado[id_usuario]>"."<script src=https://cdn.lordicon.com/fudrjiwc.js></script>"."
            <lord-icon
                src=https://cdn.lordicon.com/akuwjdzh.json
                trigger=hover
                colors=primary:#ffffff
                style=width:25px;height:25px>
            </lord-icon>"."</button>"."</td>";

            echo "<td class='pb-0 ps-4'>"."<button class=eliminar value=$listado[id_usuario]>"."<script src=https://cdn.lordicon.com/fudrjiwc.js></script>"."
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
    const buttonsEditar = document.querySelectorAll('.editar');
    const buttonsEliminar = document.querySelectorAll('.eliminar');        
    window.addEventListener('load', function(){
        
        buttonsEditar.forEach(button => {
            button.addEventListener('click', function(){
                Swal.fire({
                            title: 'Seguro que quieres editar el usuario?',
                            showDenyButton: true,
                            showCancelButton: false,
                            confirmButtonText: 'Confirmar',
                            denyButtonText: 'Cancelar',
                            }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                                if (result.isConfirmed) {
                                    Swal.fire('Redirigiendoo...', '', 'success');
                                    const redireccion = setTimeout(function(){
                                        window.location.replace(`./editar_usuario.php?id_usuario=${button.value}`);
                                    }, 2000);
                                }else if (result.isDenied) {
                                    Swal.fire('No se realizaran cambios', '', 'info');
                                }
                            })
            });
        });

        buttonsEliminar.forEach(button => {
            button.addEventListener('click', function(){
                Swal.fire({
                            title: 'Seguro que quieres eliminar el usuario?',
                            showDenyButton: true,
                            showCancelButton: false,
                            confirmButtonText: 'Confirmar',
                            denyButtonText: 'Cancelar',
                            }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                                if (result.isConfirmed) {
                                    Swal.fire('Eliminando...', '', 'success');
                                    const redireccion = setTimeout(function(){
                                        window.location.replace(`./eliminar_usuario.php?id_usuario=${button.value}`);
                                    }, 2000);
                                }else if (result.isDenied) {
                                    Swal.fire('No se realizaran cambios', '', 'info');
                                }
                            })
            });
        });
    });
</script>
