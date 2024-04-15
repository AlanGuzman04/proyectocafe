<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "cafe";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

if (isset($_POST['submit'])) {
    $NoControl = $_POST['NoControl'];
    $nombre = $_POST['Nombre'];
    $apellidoPaterno = $_POST['ApePaterno'];
    $apellidoMaterno = $_POST['ApeMaterno'];
    $Carrera = $_POST['Carrera'];
    $Correo = $_POST['Correo'];
    $contraseña = $_POST['Contra'];


   

    // Paso 7: Insertar los datos en la tabla "solicitud"
    $Nuevos_alumnos = $conn->prepare("INSERT INTO alumnos (NoControl,Contraseña, Nombre, ApellidoPA, ApellidoMA,Carrera, Correo) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $Nuevos_alumnos->bind_param("issssss", $NoControl, $nombre, $apellidoPaterno, $apellidoMaterno,$Carrera, $Correo, $contraseña);
    $Nuevos_alumnos->execute();

    // Paso 8: Redireccionar al usuario después del registro exitoso
    header("Location: ../views/InicioAdministrador.php");
    exit();

}



?>