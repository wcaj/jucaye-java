<?php

// Incluir archivo de conexión, clase Auth y archivo de funciones
require_once 'clase_conexion.php';
require_once 'clase_auth.php';

// Instancia de conexión y autenticación
$conexion = new Conexion();
$Auth = new Auth($conexion);

// Verificar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recuperar los datos del formulario
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $contraseña = $_POST["contraseña"];
    $cedula = $_POST["cedula"];
    $fecha_nacimiento = $_POST["fecha_nacimiento"];
    $direccion = $_POST ["direccion"];
    $roles = $__POST ["rol"]

    // Insertar el nuevo usuario en la base de datos
    if ($Auth->registrar_usuario($nombre, $apellido, $correo, $clave, $tipo_doc_identidad, $doc_identidad, $fecha_nacimiento)) {
        // Redirigir al usuario a la página de inicio de sesión
        header("location: login.php");
        exit(); // Detener el script
    } else {
        echo "Error al registrar usuario"; // Mostrar mensaje de error
    }
}
