<?php
// Establecer la conexión con la base de datos
$mihost = 'localhost';
$miusuario = 'root';
$mipass = '';
$mibd = 'cafe';
$mysqli = mysqli_connect($mihost, $miusuario, $mipass, $mibd);

// Verificar la conexión
if (!$mysqli) {
    die("Error de conexión: " . mysqli_connect_error());
}

// Verificar si se ha enviado el ID del alumno a eliminar
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    // Consultar si el alumno existe en la base de datos
    $consulta = mysqli_prepare($mysqli, "SELECT * FROM nuevo_alumnos WHERE NocontrolN = ?");
    mysqli_stmt_bind_param($consulta, "i", $id);
    mysqli_stmt_execute($consulta);
    $alumno = mysqli_stmt_get_result($consulta)->fetch_assoc();

    // Verificar si se encontró el alumno
    if ($alumno) {
        // Insertar los datos del alumno en la tabla de eliminados
        $queryInsert = "INSERT INTO alumrechazados (NocontrolR, ContraseñaR, NombreR, ApellidopaR, ApellidomaR, CarreraR, CorreoR) 
                        VALUES (?, ?, ?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($mysqli, $queryInsert);
        mysqli_stmt_bind_param($stmt, "issssss", $alumno['NocontrolN'], $alumno['ContraseñaN'], $alumno['NombreN'], $alumno['ApellidopaN'], $alumno['ApellidomaN'], $alumno['CarreraN'], $alumno['CorreoN']);
        mysqli_stmt_execute($stmt);

        // Eliminar el alumno de la tabla de alumnos
        $queryDelete = "DELETE FROM nuevo_alumnos WHERE NocontrolN = ?";
        $stmt = mysqli_prepare($mysqli, $queryDelete);
        mysqli_stmt_bind_param($stmt, "i", $id);
        mysqli_stmt_execute($stmt);

        // Redirigir al usuario a un apartado específico
        header("Location: ../views/solicitudes.php");
        exit(); // Asegúrate de incluir "exit()" después de la redirección para evitar ejecución adicional de código
    } else {
        echo "No se encontró el alumno.";
    }
} else {
    echo "ID del alumno no proporcionado.";
}
?>
