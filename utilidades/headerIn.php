<header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a href="./index.html">
                    <img src="./imgTPIOriginal/codoacodo.png" alt="Logo" class="logo">
                </a>
                <a class="navbar-brand" href="index.html">Conf Bs As</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarText">
                    <ul class="navbar-nav mb-2 mb-lg-0 ms-auto">
                        <li class="nav-item">
                            <a class="nav-link" id="CerrarSesion" href="#">Cerrar sesion</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="operaciones">Operaciones</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="user">Usuario</a>
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
    const linkCerrarSesion = document.querySelector('#CerrarSesion');
    const linkOperaciones = document.querySelector('#operaciones');
    const linkUsers = document.querySelector('#user');
    window.addEventListener('load', function(){
        linkOperaciones.setAttribute('href','./operaciones.php');
        linkUsers.setAttribute('href','./usuarios.php');
        const h1 = document.querySelector('h1');
        linkCerrarSesion.addEventListener('click', function(){
            Swal.fire({
                            title: 'Seguro que quieres cerrar sesion?',
                            showDenyButton: true,
                            showCancelButton: false,
                            confirmButtonText: 'Confirmar',
                            denyButtonText: 'Cancelar',
                            }).then((result) => {
                            /* Read more about isConfirmed, isDenied below */
                                if (result.isConfirmed) {
                                    Swal.fire('Redirigiendoo...', '', 'success');
                                    const redireccion = setTimeout(function(){
                                        window.location.replace('./index.php');
                                    }, 2000);
                                }else if (result.isDenied) {
                                    Swal.fire('No se realizaran cambios', '', 'info');
                                }
                            })
            
        })

        h1.innerText == 'Listado de usuarios' ? linkUsers.classList.toggle('active') : linkOperaciones.classList.toggle('active');
    })
    


</script>