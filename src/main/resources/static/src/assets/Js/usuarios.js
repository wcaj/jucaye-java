//call the datatables jQuery plugin
$(document).ready(function){
    cargarUsuarios();
    $('#usuarios').DataTable();
}

function cargarUsuarios(){


 const request = await fetch( '/usuarios')
    method: 'GET',
    headers : {
         'Accept' : 'application/json',
         'Contet-Type': 'application/json'
    },
 });
 const usuarios = await request.json();

 for (let usuario of usuarios){

 }

 console.log(usuarios);
}