<?php
    include("con_db_tickets.php");
    if(isset($_POST['submit'])){
        if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['password']) >= 1 && strlen($_POST['password-repeat']) >= 1){
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $email = trim($_POST['email']);
            $categoria = trim($_POST['categoria']);
            $contrasenia = trim($_POST['password']);
            $contraseniaRepeat = trim($_POST['password-repeat']);

            if(strlen($contrasenia) >= 8){
                if($contrasenia == $contraseniaRepeat){
                    $consulta = "INSERT INTO usuario (nombre, apellido, correo, tipo_usuario, contrasenia) VALUES ('$nombre', '$apellido', '$email', '$categoria', '$contrasenia')";
                    $resultado = mysqli_query($conex, $consulta);
                }
                else{
                    echo "<script>";
                    echo "Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'Las contraseñas deben coincidir',
                    })";
                    echo "</script>";
                }
            }
            else{
                echo "<script>";
                echo "Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: 'La contraseña debe tener 8 caracteres o mas',
                })";
                echo "</script>";
            }
        }
        else{
            echo "<script>"."console.log(`complete el form`)"."</script>";
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
                
                const nombre = document.querySelector('#nombre').value;
                const apellido = document.querySelector('#apellido').value;
                const correo = document.querySelector('#email').value;
                const password = document.querySelector('#password').value;
                const password_repeat = document.querySelector('#password-repeat').value;

                if(nombre.length < 1 || apellido.length < 1 || correo.length < 1 || password.length < 1 || password_repeat.length < 1){
                    submit.disabled = true;
                }
                else{
                    if(password == password_repeat){
                        submit.disabled = false;
                    }
                    else{
                        submit.disabled = true;
                        Swal.fire(
                        'Modificar',
                        'Las contraseñas deben ser iguales',
                        'info'
                        )
                    }
                }
            })
        });
    });
</script>