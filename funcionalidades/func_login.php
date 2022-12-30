<?php
    include("con_db_tickets.php");
    if(isset($_POST['submit'])){
        if(strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1){
           
            $email = "'".trim($_POST['email'])."'";
            $contrasenia = "'".trim($_POST['password'])."'";

            $consulta = "SELECT * FROM usuario WHERE correo = $email AND contrasenia = $contrasenia";
            $resultado = mysqli_query($conex, $consulta);

            $listado = mysqli_fetch_array($resultado); // Trae todos los registros
            if($listado){    
                    $_SESSION["id_user"] = $listado['id_usuario'];
                    $_SESSION["tipo_usuario"] = $listado['tipo_usuario'];
                ?>
                    
                    <script>
                        window.location.replace('./usuarios.php');
                    </script>
                <?php

            }
            else{
                ?>
                <script>
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'El usuario o la contraseña es incorrecto',
                    });
                </script>
                <?php
            }

        }
        else{
            ?>
                <script>
                    alert(`complete el formulario`);
                </script>
            <?php
        }
    }
?>

<script>
    window.addEventListener('load', function(){
        const submit = document.querySelector('#submit');
        submit.disabled = true;

        const inputs = document.querySelectorAll('input');

        inputs.forEach(input => {
            input.addEventListener('change', function(){
                
                const correo = document.querySelector('#email').value;
                const password = document.querySelector('#password').value;

                if(correo.length < 1 || password.length < 1){
                    submit.disabled = true;
                }
                else{
                    submit.disabled = false;
                }
            })
        });
    });
</script>

