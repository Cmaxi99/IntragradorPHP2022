function totalAPagar(categoria){
    const ticket = 200;
    let nombre = document.getElementById("nombre").value;
    let apellido = document.getElementById("apellido").value;
    let email = document.getElementById("email").value;
    let cant = document.getElementById("cantidad").value;
    let bruto = cant * ticket;
    let descuento = 0;
    if(nombre != "" && apellido != "" && email != "" && cant != ""){
            switch (categoria) {
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
        
            document.getElementById(
            "pagar"
            ).value = `Total a Pagar: $ ${total} pesos`;
        
            Swal.fire(`${nombre}: usted debera pagar un total de: $ ${total} pesos.`);
        }
        else{
            Swal.fire('Debe completar el formulario');
        }
}


window.addEventListener('load', function(){
        const cards = document.querySelectorAll('.card');
    
        cards.forEach(card => {
            card.addEventListener('click', function(){
                const inputCategoria = document.querySelector('#categoria');
                const seleccionCard = this.querySelector('h5').innerText;

                seleccionCard == 'Estudiante' ? document.querySelector('#categoria').value = 0 : '';  
                seleccionCard == 'Trainee' ? document.querySelector('#categoria').value = 1 : '';  
                seleccionCard == 'Junior' ? document.querySelector('#categoria').value = 2 : '';
            })
        });

    }
);
