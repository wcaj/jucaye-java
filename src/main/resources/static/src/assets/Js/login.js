// call the dataTables jQuery plugin
$(document).ready(function() {
    // on ready
});


 async function iniciarSesion(){
    let datos = {};
    datos.cedula = document.getElementById('txtCedula').value;
    datos.clave = document.getElementById('txtClave').value;


    const request = await fetch('/login',{
    method: 'POST',
    headers: {
         'Accept' : 'application/json',
         'Content-Type': 'application/json'
    },
    body: JSON.stringify(datos)
 });
 const respuesta = await request.text();
 if(respuesta == 'ok'){
 window.location.href = 'Menu_Principal_Suelo.html'
 } else{
   alert("Las credenciales son incorrectas. Porfavor intente nuevamente");
 }
}
