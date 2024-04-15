<?php
//Conexion  de BD con mysql
$mihost = 'localhost';
$miusuario = 'root';
$mipass = '';
$mibd = 'cafe';
$mysqli = mysqli_connect ($mihost, $miusuario, $mipass, $mibd);

// Obtener el párametro ID de la pagina
$id = $_GET['id'];

// Realizar la consulta con la condición id.
$result = mysqli_query($mysqli, "SELECT * FROM pedidos WHERE IDpedido = $id");


$resultData = mysqli_fetch_assoc($result);
//Capturar los registros para ponerlos en los campos del formulario
$NoControlAlum = $resultData['NoControlAlum'];
$NomAlum = $resultData['NomAlum'];
$Bebida = $resultData['Bebida'];
$mililitros = $resultData['mililitros'];


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="Estilos/br.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-Ky9G7R9+I8Xfd9QHJyGoi02eZ1GvU4S9Hmu7rL0jLqFffDNgGi0LyQVTrthH9vWw" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <style>
      
        .registro {
            margin-left: 500px;
            margin-top:60px;
            border: 1px solid #ccc;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            width: 400px;
            text-align: center;
        }
        .campos {
            margin-bottom: 15px;
            text-align: left;
        }
        label {
            font-weight: bold;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
  <title>UTeM</title>
</head>
<body>
  <div class="registro">
    <form name="edit" method="post" action="../controllers/actualipedido.php">
        <fieldset>
        <div class="campos">
                <label for="nombre"><strong>Número de Control</strong></label>
                <input type="text" name="NoControlAlum" value="<?php echo $NoControlAlum; ?>">
            </div>
            <div class="campos">
                <label for="nombre"><strong>Nombre</strong></label>
                <input type="text" name="NomAlum" value="<?php echo $NomAlum; ?>">
            </div>
            <div class="campos">
                <label for="nombre"><strong>Bebida</strong></label>
                <input type="text" name="Bebida" value="<?php echo $Bebida; ?>">
            </div>
            <div class="campos">
                <label for="nombre"><strong>Mililitros</strong></label>
                <input type="text" name="mililitros" value="<?php echo $mililitros; ?>">
            </div>
            <
          
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <input type="submit" name="submit" value="Actualizar">
        </fieldset>
    </form>
</div>

</body>
</html>