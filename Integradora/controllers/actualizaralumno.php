<?php
//Conexion  de BD con mysql
$mihost = 'localhost';
$miusuario = 'root';
$mipass = '';
$mibd = 'cafe';
$mysqli = mysqli_connect ($mihost, $miusuario, $mipass, $mibd);

//Condicional si es actualizar
if (isset($_POST['submit'])) {
//Variables donde estarán los valores de los registros para ser usados en Mysql
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);
    $NoControl = mysqli_real_escape_string($mysqli, $_POST['NoControl']);
    $Nombre = mysqli_real_escape_string($mysqli, $_POST['Nombre']);
    $ApePaterno = mysqli_real_escape_string($mysqli, $_POST['ApePaterno']);
    $ApeMaterno = mysqli_real_escape_string($mysqli, $_POST['ApeMaterno']);
    $Carrera = mysqli_real_escape_string($mysqli, $_POST['Carrera']);
    $Correo = mysqli_real_escape_string($mysqli, $_POST['Correo']);
    $Contra = mysqli_real_escape_string($mysqli, $_POST['Contra']);

//Checar si los campos estàn vacìos

    if (empty($NoControl) || empty($Nombre) || empty($ApePaterno) | empty($ApeMaterno) | empty($Carrera) | empty($Correo) | empty($Contra)) {
        if (empty($NoControl)) {
            echo "<font color='red'>Campo Numero de Control esta vacìo</font><br/>";
        }
        
        if (empty($Nombre)) {
            echo "<font color='red'>Campo Nombre esta vacio</font><br/>";
        }
        
        if (empty($ApePaterno)) {
            echo "<font color='red'>Campo Apellido Paterno esta vacìo</font><br/>";
        }
        if (empty($ApeMaterno)) {
            echo "<font color='red'>Campo Apellido Materno esta vacìo</font><br/>";
        }
        if (empty($Carrera)) {
            echo "<font color='red'>Campo Carrera esta vacìo</font><br/>";
        }
        if (empty($Correo)) {
            echo "<font color='red'>Campo Correo esta vacìo</font><br/>";
        }
        if (empty($Contra)) {
            echo "<font color='red'>Campo Contra esta vacìo</font><br/>";
        }

    } else {
        // Actualizar la tabla de la base de datos
        $result = mysqli_query($mysqli, "UPDATE alumnos SET `NoControl` = '$NoControl', `Nombre` = '$Nombre', `ApellidoPA` = '$ApePaterno', `ApellidoMA` = '$ApeMaterno', `Carrera` = '$Carrera', `Correo` = '$Correo', `Contraseña` = '$Contra' WHERE `Id` = $id");
        
        header("Location: ../views/InicioAdministrador.php");
    }
}  
