<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "cafe";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if (isset($_POST['quejaenvio'])) {
    // Obtener los datos del formulario de registro
    $nombre = $_POST['nombre'];
    $nocontrol = $_POST['nocontrol'];
    $queja = $_POST['queja'];
    

    // Paso 7: Insertar los datos en la tabla "pedidos"
    $pedidoca = $conn->prepare("INSERT INTO quejas (NoControlAlum, NombreALum, queja) VALUES (?, ?, ?)");
    // Cambiar "ssss" a "sssi" para reflejar que el último parámetro es un entero
    $pedidoca->bind_param("sss", $nocontrol, $nombre, $queja);
    
    
    
    // Ejecutar la consulta
    $pedidoca->execute();

    // Paso 8: Redireccionar al usuario después del registro exitoso
    header("Location: ../views/quejaalum.php");
    exit();
}

?>