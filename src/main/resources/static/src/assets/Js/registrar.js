// call the dataTables jQuery plugin
$(document).ready(function() {
    // on ready
});


 async function registrarUsuario(){
    let datos = {};
    datos.cedula = document.getElementById('txtCedula').value;
    datos.nombre = document.getElementById('txtNombre').value;
    datos.apellido = document.getElementById('txtApellido').value;
    datos.fecha_Nacimiento = document.querySelector('input[type="date"]').value;
    datos.direccion = document.getElementById('txtDireccion').value;
    datos.clave = document.getElementById('txtClave').value;
    datos.rold_id = document.querySelector('option[value="1"]');
    datos.rold_id = document.querySelector('option[value="2"]');

    let repetirclave = document.getElementById('txtRepetirClave').value;

    if (repetirclave != datos.clave){
        alert('la contraseña que escribiste no coincide')
        return;
    }
    let llenardatos = document.getElementById("miFormulario").onsubmit = function(event) {
        var nombre = document.getElementById("txtCedula").value;
        var correo = document.getElementById("txtNombre").value;

        if (nombre === "" || cedula === "") {
            alert("Debes llenar todos los campos para registrarte");
            event.preventDefault();
        } else {
            alert("Formulario enviado")
            return;
        }
    }


 const request = await fetch('/usuarios',{
    method: 'POST',
    headers: {
         'Accept' : 'application/json',
         'Content-Type': 'application/json'
    },
    body: JSON.stringify(datos)
 });

   alert('Registro exitoso');
    window.location.href = 'Login.html'
 }
