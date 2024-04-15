<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "cafe";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if (isset($_POST['cafe'])) {
    // Obtener los datos del formulario de registro
    $nombre = $_POST['nombre'];
    $nocontrol = $_POST['nocontrol'];
    $cafe = 'cafe';

    // Paso 7: Insertar los datos en la tabla "pedidos"
    $pedidoca = $conn->prepare("INSERT INTO pedidos (NoControlAlum, NomAlum, Bebida, mililitros) VALUES (?, ?, ?, ?)");
    // Cambiar "ssss" a "sssi" para reflejar que el último parámetro es un entero
    $pedidoca->bind_param("sssi", $nocontrol, $nombre, $cafe, $mililitros);
    
    // Definir mililitros
    $mililitros = 200;
    
    // Ejecutar la consulta
    $pedidoca->execute();

    // Paso 8: Redireccionar al usuario después del registro exitoso
    header("Location: ../views/Inicio.php");
    exit();
}
if (isset($_POST['agua'])) {
    // Obtener los datos del formulario de registro
    $nombre = $_POST['nombre'];
    $nocontrol = $_POST['nocontrol'];
    $cafe = 'agua';

    // Paso 7: Insertar los datos en la tabla "pedidos"
    $pedidoca = $conn->prepare("INSERT INTO pedidos (NoControlAlum, NomAlum, Bebida, mililitros) VALUES (?, ?, ?, ?)");
    // Cambiar "ssss" a "sssi" para reflejar que el último parámetro es un entero
    $pedidoca->bind_param("sssi", $nocontrol, $nombre, $cafe, $mililitros);
    
    // Definir mililitros
    $mililitros = 200;
    
    // Ejecutar la consulta
    $pedidoca->execute();

    // Paso 8: Redireccionar al usuario después del registro exitoso
    header("Location: ../views/Inicio.php");
    exit();
}
if (isset($_POST['te'])) {
    // Obtener los datos del formulario de registro
    $nombre = $_POST['nombre'];
    $nocontrol = $_POST['nocontrol'];
    $cafe = 'te';

    // Paso 7: Insertar los datos en la tabla "pedidos"
    $pedidoca = $conn->prepare("INSERT INTO pedidos (NoControlAlum, NomAlum, Bebida, mililitros) VALUES (?, ?, ?, ?)");
    // Cambiar "ssss" a "sssi" para reflejar que el último parámetro es un entero
    $pedidoca->bind_param("sssi", $nocontrol, $nombre, $cafe, $mililitros);
    
    // Definir mililitros
    $mililitros = 200;
    
    // Ejecutar la consulta
    $pedidoca->execute();

    // Paso 8: Redireccionar al usuario después del registro exitoso
    header("Location: ../views/Inicio.php");
    exit();
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
