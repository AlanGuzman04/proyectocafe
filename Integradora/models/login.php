<?php
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "cafe";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Paso 2: Recibir los datos del formulario de inicio de sesión
if (isset($_POST['login-submit'])) {
    $usuario = $_POST['login-usuario'];
    $contraseña = $_POST['login-contrasena'];

    // Paso 3: Validar los datos en la tabla "alumnos"
    $Alumnos = $conn->query("SELECT * FROM alumnos WHERE NoControl = '$usuario' AND Contraseña = '$contraseña'");

    $Administradores = $conn->query("SELECT * FROM administrador WHERE  NoControl = '$usuario' AND Contraseña = '$contraseña'");
    

    // Paso 4: Validar los datos en la tabla "Super administrativos"
    $Nuevos_alumnos = $conn->query("SELECT * FROM alumnos WHERE NoControl =  '$usuario' AND Contraseña = '$contraseña'");
   

    if ($Alumnos->num_rows > 0) {
        session_start();
        $data = $Alumnos->fetch_array();
        print_r($data);
        $_SESSION['Id'] = $data['Id'];
        $_SESSION['NoControl'] = $data['NoControl'];
        $_SESSION['Nombre'] = $data['Nombre'];
        $_SESSION['ApellidoPA'] = $data['ApellidoPA'];
        $_SESSION['ApellidoMA'] = $data['ApellidoMA'];
        $_SESSION['Correo'] = $data['Correo'];
        $_SESSION['Contraseña'] = $data['Contraseña'];
        $_SESSION['Carrera'] = $data['Carrera'];

        $resultado = array('error' => false, 'mensaje' => '¡Inicio de sesión exitoso para Empleados!');
        header("Location: views/Inicio.php");
        exit();
    }elseif ($Administradores->num_rows > 0) {
            session_start();
            $data = $Administradores->fetch_array();
            print_r($data);
            $_SESSION['Id'] = $data['Id'];
            $_SESSION['NoControl'] = $data['NoControl'];
            $_SESSION['Nombre'] = $data['Nombre'];
            $_SESSION['ApellidoPA'] = $data['ApellidoPA'];
            $_SESSION['ApellidoMA'] = $data['ApellidoMA'];
            $_SESSION['Correo'] = $data['Correo'];
            $_SESSION['Contraseña'] = $data['Contraseña'];
    
            $resultado = array('error' => false, 'mensaje' => '¡Inicio de sesión exitoso para Empleados!');
            header("Location: views/InicioAdministrador.php");
            exit();
    }
    else {
        $resultado = array('error' => true, 'mensaje' => 'Usuario o contraseña incorrectos');
    }
}

// Paso 5: Recibir los datos del formulario de registro
if (isset($_POST['signup-submit'])) {
    // Obtener los datos del formulario de registro
    $NoControl = $_POST['NoControl'];
    $contraseña = $_POST['Contraseña'];
    $nombre = $_POST['nombre'];
    $apellidoPaterno = $_POST['apellidoPA'];
    $apellidoMaterno = $_POST['apellidoMA'];
    $Carrera = $_POST['Carrera'];
    $Correo = $_POST['Correo'];
    


   

    // Paso 7: Insertar los datos en la tabla "solicitud"
    $Nuevos_alumnos = $conn->prepare("INSERT INTO nuevo_alumnos (NocontrolN, ContraseñaN, NombreN, ApellidopaN, ApellidomaN, CarreraN, CorreoN) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $Nuevos_alumnos->bind_param("issssss", $NoControl, $contraseña, $nombre, $apellidoPaterno,$apellidoMaterno, $Carrera, $Correo);
    $Nuevos_alumnos->execute();

    // Paso 8: Redireccionar al usuario después del registro exitoso
    header("Location: index.php");
    exit();

}

// Cerrar la conexión a la base de datos
$conn->close();
?>