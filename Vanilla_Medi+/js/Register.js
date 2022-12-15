
function Register(){


    let boton = document.querySelector("#submit");

    boton.addEventListener('click', e => {
        e.preventDefault();

        const formulario = document.querySelector('#nuevo-cliente');
        const form = new FormData(formulario);

        const peticion = {
            body:form,
            method:'POST'
        };

        fetch('/php/insertar-cliente.php',peticion)
            .then(res => res.json()
            )
            .then(res => {
                if (res['respuesta']) {
                    alert(res['mensaje']);
                    formulario.reset();
                }else{
                    alert(res['mensaje']);
                }

            });

    });
}
