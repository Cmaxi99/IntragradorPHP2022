<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a href="./tpOriginal.html">
                <img src="./imgTPIOriginal/codoacodo.png" alt="Logo" class="logo">
            </a>
            <a class="navbar-brand" href="tpOriginal.html">Conf Bs As</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                    <li class="nav-item">
                        <a id="login" class="nav-link" href="./login.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a id="registrarse" class="nav-link" href="./registro.php">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-success" style="color: #97c83f !important;" href="./tickets.php">Comprar tickets</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>    
</header>

<script>
    window.addEventListener('load', function(){
        const linkLogin = document.querySelector('#login');
        const linkRegister = document.querySelector('#registrarse');
        const h1 = document.querySelector('h1');
        h1.innerHTML == 'LOGIN' ? linkLogin.classList.toggle('active') : linkRegister.classList.toggle('active');
    })
</script>