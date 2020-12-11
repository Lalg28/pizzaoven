const formularioContacto = document.querySelector('#formularioContacto')

$(document).ready(function(){
    
    //Se crea el evento del formulario
    $(".formulario-contacto").bind("submit", function(){
        
        //Se crea la peticion a AJAX
        $.ajax({
            type: $(this).attr("method"),
            url: $(this).attr("action"),
            data: $(this).serialize(),
            success: function(respuesta){ //Si el mensaje se retorna correcto
                if(JSON.parse(respuesta) === "enviado"){
                    mostrarNotificacion('Thanks! Your message has been sent correctly', 'correcto')
                }else if(JSON.parse(respuesta) === "error"){
                    mostrarNotificacion('Ops, something went wrong sending the message', 'error');
                }
            },
            error: function(respuesta){ //Si el mensaje se retorna incorrecto
                if(JSON.parse(respuesta) === "error"){
                    mostrarNotificacion('Ops, something went wrong sending the message', 'error');
                }
            }
        })
        
        return false
    })
})

//Notificaciones en pantalla
function mostrarNotificacion(mensaje, clase){
    const notificacion = document.createElement('div') //Se crea la notificacion
    notificacion.classList.add(clase, 'notificacion', 'sombra') //Se le agregan las clases
    notificacion.textContent = mensaje //Se le agrega el contenido

    //Formulario
    formularioContacto.insertBefore(notificacion, document.querySelector('form div'))

    //ocultar y mostrar la notifiacion
    // setTimeout(() => {
    //     notificacion.classList.add('visible'); //Se agrega la clase 'visible' al div

    //     setTimeout(() => {
    //         notificacion.classList.remove('visible');

    //         setTimeout(() => {
    //             notificacion.remove(); //Se borra el div
    //         }, 500);

    //     }, 3000);
    // }, 100);

    //Resetear el formulario
    document.querySelector('#formularioContacto').reset()
}