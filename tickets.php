<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/stylesTPOriginal.css">
    <link rel="icon" href="./imgTPIOriginal/codoacodo.png">
    <title>Conf Bs As tickets</title>
</head>
<body>
    <?php
        require("./utilidades/headerTickets.php");
    ?>
    <section class="cuerpo container mt-3">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card-ticket card h-100 border-primary">
                        <div class="card-body">
                            <h5 class="card-title text-center">Estudiante</h5>
                            <p class="card-text text-center">Tienen un descuento</p>
                            <p class="card-text text-center">80%</p>
                            <p class="card-text text-center text-muted">* Presentar documentacion</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card-ticket card h-100 border-info">
                        <div class="card-body">
                            <h5 class="card-title text-center">Trainee</h5>
                            <p class="card-text text-center">Tienen un descuento</p>
                            <p class="card-text text-center">50%</p>
                            <p class="card-text text-center text-muted">* Presentar documentacion</p>
                        </div>
                </div>
                </div>
                <div class="col">
                    <div class="card-ticket card h-100 border-warning">
                        <div class="card-body">
                            <h5 class="card-title text-center">Junior</h5>
                            <p class="card-text text-center">Tienen un descuento</p>
                            <p class="card-text text-center">15%</p>
                            <p class="card-text text-center text-muted">* Presentar documentacion</p>
                        </div>
                    </div>
                </div>
            </div>

            <section class="container mt-2">
                <header class="text-center mt-5">
                    <p>VENTA</p>
                    <h2>VALOR DE TICKET $200</h2>
                </header>
                <form method="POST">
                    <div class="row mt-3">
                        <div class="col">
                            <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" aria-label="First name">
                        </div>

                        <div class="col">
                            <input type="text" class="form-control" name="apellido" id="apellido" placeholder="Apellido" aria-label="Last name">
                        </div>

                        <div class="row mt-3 mx-auto">
                            <input type="email"  class="form-control" name="email" id="email" placeholder="Correo">
                        </div>

                        <div class="col">
                            <label for="cantidad" class="mb-2 mt-3">Cantidad</label>
                            <input type="text" class="form-control" name="cantidad" id="cantidad" placeholder="Cantidad">
                        </div>

                        <div class="col">
                            <label for="categoria" class="mb-2 mt-3">Categoria</label>
                            <select name="categoria" id="categoria" class="form-select">
                                <optgroup label="Categoria">
                                    <option value="0">Estudiante</option>
                                    <option value="1">Trainee</option>
                                    <option value="2">Junior</option>
                                </optgroup>
                            </select>
                        </div>

                        <div class="mt-3">
                            <input type="text" class="form-control" name="pagar" id="pagar" value="Total a Pagar: $" readonly>
                        </div>

                        <div class="col mt-3 mb-3">
                            <input type="reset" name="reset" id="reset" value="Borrar" class="btn form-control enviar">
                        </div>

                        <div class="col mt-3 mb-3">
                            <input type="submit" name="submit" id="submit" value="Resumen" class="btn form-control enviar">
                        </div>
                    </div>
                    <div class="row mt-3 mb-3">
                        <div class="col">
                            <a href="./registro.php" class="btn form-control enviar">Registrarse</a>
                        </div>
                        <div class="col">
                            <a href="./login.php" class="btn form-control enviar">Iniciar sesion</a>
                        </div>
                    </div>
                </form>
            </section>
    </section>
    <?php
        require("./utilidades/footer.php");
    ?>
    <script src="./plugins/package/dist/sweetalert2.all.min.js"></script>
    <?php
        require("./funcionalidades/func_tickets.php");
    ?>
</body>
</html>

