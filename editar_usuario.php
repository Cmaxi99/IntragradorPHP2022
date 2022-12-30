<?php
    session_start();
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/stylesEditarUsuario.css">
    <link rel="icon" href="./imgTPIOriginal/codoacodo.png">
</head>
    <body>
        
        <?php
            require("./utilidades/headerIn.php");
        ?>

        <main class="cuerpo container mt-3">
            <section class="container mt-2">
                    <header class="text-center mt-5">
                        <h1 class="text-light">MOFICAR USUARIO</h1>
                    </header>
                    <form method="POST">
                        <div class="row mt-3">
                            <div class="col">
                                <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" aria-label="First name" required>
                            </div>

                            <div class="col">
                                <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" aria-label="Last name" required>
                            </div>

                            <div class="row mt-3 mx-auto">
                                <input type="email"  class="form-control" name="email" id="email" placeholder="Correo" required>
                            </div>

                            <div class="col">
                                <label for="categoria" class="mb-2 mt-3 text-light">Tipo de usuario</label>
                                <select name="categoria" id="categoria" class="form-select">
                                    <optgroup label="Categoria">
                                        <option value="0">Normal</option>
                                        <option value="1">Administrador</option>
                                    </optgroup>
                                </select>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <label for="password" class="mb-2 mt-3 text-light">Contraseña</label>
                            <div class="col">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" aria-label="Password" required>
                            </div>
                            <label for="password-repeat" class="mb-2 mt-3 text-light">Repita la contraseña</label>
                            <div class="col">
                                <input type="password" class="form-control" name="password-repeat" id="password-repeat" placeholder="Contraseña" aria-label="Password" required>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col mt-3 mb-3">
                                <a id="cancel" class="btn form-control enviar text-light">Cancelar</a>
                            </div>

                            <div class="col mt-3 mb-3">
                                <input type="submit" name="submit" id="submit" value="Modificar" class="btn form-control enviar text-light">
                            </div>
                        </div>
                    </form>
                </section>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="./plugins/package/dist/sweetalert2.all.min.js"></script>
        <?php
            include("./funcionalidades/func_editar_usuario.php");
        ?>
    </body>
</html>