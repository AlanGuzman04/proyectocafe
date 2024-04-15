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
    $NoControlAlum = mysqli_real_escape_string($mysqli, $_POST['NoControlAlum']);
    $NomAlum = mysqli_real_escape_string($mysqli, $_POST['NomAlum']);
    $Bebida = mysqli_real_escape_string($mysqli, $_POST['Bebida']);
    $mililitros = mysqli_real_escape_string($mysqli, $_POST['mililitros']);
    

//Checar si los campos estàn vacìos

    if (empty($NoControlAlum) || empty($NomAlum) || empty($Bebida) | empty($mililitros) ) {
        if (empty($NoControlAlum)) {
            echo "<font color='red'>Campo Numero de Control esta vacìo</font><br/>";
        }
        
        if (empty($NomAlum)) {
            echo "<font color='red'>Campo Nombre esta vacio</font><br/>";
        }
        
        if (empty($Bebida)) {
            echo "<font color='red'>Campo Bebida esta vacìo</font><br/>";
        }
        if (empty($mililitros)) {
            echo "<font color='red'>Campo mililitros esta vacìo</font><br/>";
        }
        

    } else {
        // Actualizar la tabla de la base de datos
        $result = mysqli_query($mysqli, "UPDATE pedidos SET `NoControlAlum` = '$NoControlAlum', `NomAlum` = '$NomAlum', `Bebida` = '$Bebida', `mililitros` = '$mililitros' WHERE `IDpedido` = $id");
        
        header("Location: ../views/historialadmin.php");
    }
}  
