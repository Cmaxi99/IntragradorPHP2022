<?php
    include("con_db_tickets.php");
    if(isset($_SESSION["id_user"])){
        $variable = $_GET['id_usuario'];
        $consulta = "SELECT * FROM usuario WHERE id_usuario=$variable";
    
        $resultado = mysqli_query($conex,$consulta);

        $listado = mysqli_fetch_array($resultado);
    }
    else{
        ?>
            <script>
                window.location.replace(`./login.php`);
            </script>
        <?php
    }
    
?>
    
<script>
    window.addEventListener('load', function(){
        const nombre = document.querySelector('#nombre');
        const apellido = document.querySelector('#apellido');
        const correo = document.querySelector('#email');
        const categoria_usuario = document.querySelector('#categoria');
        const password = document.querySelector('#password');
        const password_repeat = document.querySelector('#password-repeat');
        const btnCancelar = document.querySelector('#cancel');
        const linkUser = document.querySelector('#user');

        nombre.value = <?php echo "'".$listado['nombre']."'"?>;
        apellido.value = <?php echo "'".$listado['apellido']."'"?>;
        correo.value = <?php echo "'".$listado['correo']."'"?>;
        categoria_usuario.value = <?php echo "'".$listado['tipo_usuario']."'"?>;
        password.value = <?php echo "'".$listado['contrasenia']."'"?>;
        password_repeat.value = <?php echo "'".$listado['contrasenia']."'"?>;

        btnCancelar.setAttribute('href', './usuarios.php');
        linkUser.setAttribute('href', './usuarios.php');
    })
</script>

<script>
    window.addEventListener('load', function(){

        Swal.fire(
                    'Informacion',
                    'Para que se active el boton Modificar se debe modificar algun dato',
                    'info'
                )
        const correo = document.querySelector('#email');
        const submit = document.querySelector('#submit');
        const inputs = document.querySelectorAll('input');
        const selects = document.querySelectorAll('select');
        
        submit.disabled = true;
        correo.disabled = true;

        inputs.forEach(input => {
            input.addEventListener('change', function(){
                
                const nombre = document.querySelector('#nombre').value;
                const apellido = document.querySelector('#apellido').value;
                const password = document.querySelector('#password').value;
                const password_repeat = document.querySelector('#password-repeat').value;
                if(nombre.length < 1 || apellido.length < 1 || correo.value.length < 1 || password.length < 1 || password_repeat.length < 1){
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

        selects.forEach(select => {
            select.addEventListener('change', function(){
                
                const nombre = document.querySelector('#nombre').value;
                const apellido = document.querySelector('#apellido').value;
                const password = document.querySelector('#password').value;
                const password_repeat = document.querySelector('#password-repeat').value;
                if(nombre.length < 1 || apellido.length < 1 || correo.value.length < 1 || password.length < 1 || password_repeat.length < 1){
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

        submit.addEventListener('click',function(){
            correo.disabled = false;
        });
    });
</script>

<?php
    
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
                    if($_SESSION["id_user"] == $variable){
                        $_SESSION["tipo_usuario"] = trim($_POST['categoria']);
                    }
                    $consulta = "UPDATE usuario SET nombre = '$nombre', apellido = '$apellido', correo = '$email', tipo_usuario = '$categoria', contrasenia ='$contrasenia' WHERE id_usuario = $variable";
                    $resultado = mysqli_query($conex, $consulta);
                    $consulta = "SELECT * FROM usuario WHERE id_usuario=$variable";
                    $resultado = mysqli_query($conex, $consulta);
                    $listado = mysqli_fetch_array($resultado);
                    ?>
                    <script>
                        window.location.replace('./usuarios.php');
                    </script>
                    <?php
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

