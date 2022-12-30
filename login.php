<?php
    session_start();
?>

<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/stylesLogin.css">
    <link rel="icon" href="./imgTPIOriginal/codoacodo.png">
</head>
    <?php 
        require("./utilidades/headerOut.php");
    ?>
    <body>
        <main class="cuerpo container-fluid mt-3 d-flex justify-content-center align-items-center">
            <section class="container mt-2">
                    <header class="text-center mt-5">
                        <h1 class="text-light">LOGIN</h1>
                    </header>
                    <form method="POST">
                        <div class="row mt-3">
                            <label for="email" class="mb-2 mt-3 text-light">Correo</label>
                            <div class="col">
                                <input type="email"  class="form-control" name="email" id="email" placeholder="Correo">
                            </div>

                            <label for="password" class="mb-2 mt-3 text-light">Contraseña</label>
                            <div class="col">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Contraseña" aria-label="Password">
                            </div>
                        </div>

                        <div class="row mt-3">
                                <div class="col mt-3 mb-3">
                                    <input type="reset" name="reset" id="reset" value="Borrar" class="btn form-control enviar text-light">
                                </div>

                                <div class="col mt-3 mb-3">
                                    <input type="submit" name="submit" id="submit" value="Login" class="btn form-control enviar text-light">
                                </div>

                        </div>
                        <div class="col mt-3 mb-3">
                            <a href="./registro.php" class="btn form-control enviar">Registrarse</a>
                        </div>
                    </form>
                </section>
        </main>
        <?php 
            require("./utilidades/footer.php");
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <script src="./plugins/package/dist/sweetalert2.all.min.js"></script>
        <?php
            require("funcionalidades/func_login.php");
        ?>
    </body>
</html>