<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="./index.php">
                <img src="./imgTPIOriginal/codoacodo.png" alt="Logo" class="logo">
            </a>
            <a class="navbar-brand" href="./index.php">Conf Bs As</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto" id="navBar">
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php">La conferencia</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php#oradores">Los oradores</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php#lugarFecha">El lugar y la fecha</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./index.php#convierteteOrador">Conviertete en orador</a>
                    </li>
                    <div class="collapse navbar-collapse" id="navbarNavDarkDropdown">
                        <ul class="navbar-nav" id="menu">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-success" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Menu
                                </a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item text-success" style="color: #97c83f !important;" href="./tickets.php">Comprar tickets</a></li>
                                    <li><a class="dropdown-item" href="./login.php">Iniciar sesion</a></li>
                                    <li><a class="dropdown-item" href="./registro.php">Registro</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>
        </div>
    </nav>    
</header>

<script>
    window.addEventListener('load',function(){
        const header = document.querySelector('header');
        const h2 = document.querySelector('h2');
        const menu = document.querySelector('#navbarNavDarkDropdown');
        const nav = document.querySelector('#navBar');
        h2.innerText == 'ORADORES' ? header.classList.toggle('fixed-top') : header.classList.remove('fixed-top');

        if(h2.innerText != 'ORADORES'){
            menu.remove();
            nav.innerHTML += `
            <li class="nav-item">
                <a class="nav-link text-success" style="color: #97c83f !important;" href="./tickets.php"> Comprar tickets </a>
            </li>
            `
        }
    });
</script>