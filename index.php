<?php
    session_start();
?>

<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/stylesTPOriginal.css">
    <link rel="icon" href="./imgTPIOriginal/codoacodo.png">
    <title>Conf Bs As</title>
</head>
<body>
    <?php
        require("./utilidades/headerTickets.php");
    ?>
    <main>
        <header>
            <div id="carouselExampleSlidesOnly" class="carousel slide w-100 mt-5" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active filtro">
                        <img src="./imgTPIOriginal/ba1.jpg" class="d-block w-100" alt="BsAs 1">
                    </div>
                    <div class="carousel-item filtro">
                        <img src="./imgTPIOriginal/ba2.jpg" class="d-block w-100" alt="BsAs 2">
                    </div>
                    <div class="carousel-item filtro">
                        <img src="./imgTPIOriginal/ba3.jpg" class="d-block w-100" alt="BsAs 3">
                    </div>
                    
                    <div class="container h-100 position-absolute d-flex justify-content-center align-items-end flex-column textHero">
                        <h1 class="text-right text-light">Conf Bs As</h1>
                        <article class="text-right text-end text-light w-50">
                            Bs As llega por primera vez a Argentina. Un evento para compartir con nuestra comunidad el conocimiento y experiencia de los expertos que estan creando el fututro de internet. Ven a conocer a miembros del evento, a otros estudiantes de Codo a Codo y los oradores de primer nivel que tenemos para ti. Te esperamos!
                        </article>
                        <div class="d-grid gap-2 d-md-flex justify-content-md-end mt-3">
                            <button class="btn btn-outline-secondary text-light" type="button">Quiero ser orador</button>
                            <a href="./tickets.php"><button class="btn btn-primary me-md-2 btn-success" type="button">Comprar tickets</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <section class="cuerpo container">
            <header class="text-center mt-2 mb-2">
                <a href="#" id="oradores"></a>
                <p>CONOCE A LOS</p>
                <h2>ORADORES</h2>
            </header>
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <img src="./imgTPIOriginal/steve.jpg" class="card-img-top" alt="Steve Jobs">
                        <div class="card-body">
                            <span class="badge rounded-pill bg-warning text-dark">JavaScript</span>
                            <span class="badge rounded-pill bg-info text-dark mb-2">React</span>
                            <h5 class="card-title">Steve Jobs</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, molestias voluptatem eveniet quam dicta porro doloremque, nemo culpa distinctio aut explicabo hic, blanditiis deleniti debitis voluptas labore maxime doloribus consequatur!</p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./imgTPIOriginal/bill.jpg" class="card-img-top" alt="Bill Gates">
                        <div class="card-body">
                            <span class="badge rounded-pill bg-warning text-dark">JavaScript</span>
                            <span class="badge rounded-pill bg-info text-dark mb-2">React</span>
                            <h5 class="card-title">Bill Gates</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, molestias voluptatem eveniet quam dicta porro doloremque, nemo culpa distinctio aut explicabo hic, blanditiis deleniti debitis voluptas labore maxime doloribus consequatur!</p>
                        </div>
                </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <img src="./imgTPIOriginal/ada.jpeg" class="card-img-top" alt="Ada Lovelace">
                        <div class="card-body">
                            <span class="badge rounded-pill bg-secondary">Negocios</span>
                            <span class="badge rounded-pill bg-danger mb-2">Startups</span>
                            <h5 class="card-title">Ada Lovelace</h5>
                            <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis, molestias voluptatem eveniet quam dicta porro doloremque, nemo culpa distinctio aut explicabo hic, blanditiis deleniti debitis voluptas labore maxime doloribus consequatur!</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <footer class="mt-4 Honolulu">
            <div class="card mb-3 text-white bg-secondary">
                <div class="row g-0">
                    <div class="col-md-5">
                        <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                            <div class="carousel-inner carousel2">
                                <div class="carousel-item active">
                                    <img src="./imgTPIOriginal/honolulu.jpg" class="d-block w-100" alt="...">
                                </div>
                                <div class="carousel-item">
                                    <img src="./imgTPIOriginal/ba1.jpg" class="d-block w-100" alt="...">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card-body">
                            <a href="#" id="lugarFecha"></a>
                            <h2 class="card-title">Bs As - Octubre</h2>
                            <p class="card-text text-break">Buenos Aires es la provincia y localidad mas grande del estado de Argentina, en los Estados Unidos. Honolulu es la mas sure??a de entre las principales ciudades estadounidenses. Aunque el nombre de Honolulu se refiere al area urbana en la costa sureste de la isla de Oahu, la ciudad y el condado de Honolulu han formado una ciudad condado que cubre todo la ciudad (aproximadamente 600 km?? de superficie).</p>
                            <button class="btn btn-outline-light text-light mt-2" type="button">Conoce mas</button>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </main>
    <footer>
        <section class="footer-top container">
            <header class="text-center">
                <a href="#" id="convierteteOrador"></a>
                <p>CONVIERTETE EN UN</p>
                <h2>ORADOR</h2>
            </header>
            <p class="text-center">Anotate como orador para dar una <u>charla ignite.</u> Cuentanos de que quieres hablar!</p>
            <form action="#" method="get">
                <div class="row mt-3">
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Nombre" aria-label="First name" required>
                    </div>
                    <div class="col">
                        <input type="text" class="form-control" placeholder="Apellido" aria-label="Last name" required>
                    </div>
                    <div class="row mt-3 mx-auto">
                        <textarea class="form-control" rows="3" placeholder="Sobre que quieres hablar?" required></textarea>
                    </div>
                    <p class="text-secondary mt-1">Recuerda agregar un titulo para tu charla</p>
                    <div class="row mx-auto">
                        <input type="submit" name="submit" id="submit" class="btn enviar">
                    </div>
                </div>
            </form>
        </section>
        <section class="footer-bottom container-fluid mt-2">
            <ul class="nav justify-content-center align-items-center text-center">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="#">Preguntas frecuentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contactanos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Prensa</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Conferencias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Terminos y condiciones</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Privacidad</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Estudiantes</a>
                </li>
            </ul>
        </section>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>