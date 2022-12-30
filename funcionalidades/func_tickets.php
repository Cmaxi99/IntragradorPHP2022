<?php
    include("con_db_tickets.php");
    if(isset($_POST['submit'])){
        if(strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['cantidad']) >= 1){
            $nombre = trim($_POST['nombre']);
            $apellido = trim($_POST['apellido']);
            $email = trim($_POST['email']);
            $cantidad = trim($_POST['cantidad']);
            $categoria = trim($_POST['categoria']);
            $valorTicket = 200;
            $bruto = $valorTicket * $cantidad;
            switch ($categoria) {
                case '0':
                    $descuento = 0.8;
                    break;
                case '1':
                    $descuento = 0.5;
                    break;
                case '2':
                    $descuento = 0.15;
                    break;
            }

            $total = $bruto - $bruto * $descuento;

            $consulta = "INSERT INTO venta (nombre, apellido, correo, cant_ticket, id_categoria, total_venta) VALUES ('$nombre', '$apellido', '$email', '$cantidad', '$categoria', '$total')";
            $resultado = mysqli_query($conex, $consulta);
        }
        else{
            echo "<script>"."alert(`complete el form`)"."</script>";
        }
    }
?>

<script>
    window.addEventListener('load', function(){
        
        const cardTicket = document.querySelectorAll('.card-ticket');
        const btnSubmit = document.querySelector('#submit');
        const inputCantidad = document.querySelector('#cantidad');
        const inputCategoria = document.querySelector('#categoria');
        const inputPagar = document.querySelector('#pagar');
        const cards = document.querySelectorAll('.card');

        function totalAPagar(){
            const valorTicket = 200;
            let bruto = inputCantidad.value * valorTicket
            let descuento = 0;
            switch (inputCategoria.value) {
                case '0':
                    descuento = 0.8;
                    break;
                case '1':
                    descuento = 0.5;
                    break;
                case '2':
                    descuento = 0.15;
                    break;
            }
        
            let total = bruto - bruto * descuento;

            return total;
        }

        cardTicket.forEach(card => {
            card.addEventListener('click', function(){
                cardTicket.forEach(card => {
                    card.classList.remove('focus');  
                })
            })

            card.addEventListener('click', function(){
                this.classList.toggle('focus');   
            })
        });

        
        cards.forEach(card => {
            card.addEventListener('click', function(){
                const seleccionCard = this.querySelector('h5').innerText;

                seleccionCard == 'Estudiante' ? inputCategoria.value = 0 : '';  
                seleccionCard == 'Trainee' ? inputCategoria.value = 1 : '';  
                seleccionCard == 'Junior' ? inputCategoria.value = 2 : '';

                let total = totalAPagar();
                inputPagar.value = `Total a pagar $: ${total}`;
            })
        });

        inputCantidad.addEventListener('change', function(){
            let total = totalAPagar();
            inputPagar.value = `Total a pagar $: ${total}`;
        });

        inputCategoria.addEventListener('change', function(){
            let total = totalAPagar();
            inputPagar.value = `Total a pagar $: ${total}`;
        });
    })
</script>