
function mostrarCoordenadas() {

  var elemento = document.getElementById('caja_centrada');
  var posicion = elemento.getBoundingClientRect();
  var x = event.clientX;
  var y = event.clientY;
  var xx;  xx = x - posicion.left;
  var yy;  yy = y - posicion.top;

     // crear el objeto
     const xhr = new XMLHttpRequest();

     // abrir la conexión
     xhr.open('GET', 'funciones/ajax-modelo.php?accion=coordenadas&x='+xx+'&y='+yy, true);

     // leer la respuesta
     xhr.onload = function() {
          if(xhr.readyState == 4 && xhr.status == 200) {
               const respuesta = JSON.parse(xhr.responseText);

               if(respuesta.respuesta === 'correcto'){

                var mensaje = 'Eje X: '+respuesta.x+'. Eje Y: '+respuesta.y+'. SERVICIO: '+respuesta.precioservicio+'Euros.';
                mostrarNotificacion(mensaje);

                } else {
                  mostrarNotificacion('error404');
                    }

          }
     }

     // enviar la petición
     xhr.send();
}

// Notifación en pantalla
function mostrarNotificacion(mensaje) {


    var newDiv = document.createElement("div");
    newDiv.classList.add('btn_notificacion');
    var newContent = document.createTextNode(mensaje);
    newDiv.appendChild(newContent);
    var currentDiv = document.getElementById("caja_hija");
    currentDiv.insertBefore(newDiv, currentDiv.childNodes[0]);

}
