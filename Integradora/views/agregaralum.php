<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-qG9xGC5LFj8EOlw2lR0v5Zq5E3JHmnOWfTYC1GEAgXAg75nhzXW64F+3QZlM3f5" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js" integrity="sha384-4LvFHh2wCJ04AdWz2Q2eqh2N0u9hJzRZbo3rm2MzgsD4PShBeXw6ZHgkzqYgIU1Aw" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
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
    <title>Agregando usuario...</title>
</head>
<body>
    <form method="post" action="../controllers/agregaalum.php">
        <fieldset>
        <div class="campos">
                <label for="nombre"><strong>Número de Control</strong></label>
                <input type="text" name="NoControl" >
            </div>
            <div class="campos">
                <label for="nombre"><strong>Nombre</strong></label>
                <input type="text" name="Nombre" >
            </div>
            <div class="campos">
                <label for="nombre"><strong>Apellido paterno</strong></label>
                <input type="text" name="ApePaterno" >
            </div>
            <div class="campos">
                <label for="nombre"><strong>Apellido Materno</strong></label>
                <input type="text" name="ApeMaterno" >
            </div>
            <div class="campos">
                <label for="nombre"><strong>Carrera</strong></label>
                <input type="text" name="Carrera" >
            </div>
            <div class="campos">
                <label for="nombre"><strong>Correo</strong></label>
                <input type="text" name="Correo" >
            </div>
            <div class="campos">
                <label for="nombre"><strong>Contraseña</strong></label>
                <input type="text" name="Contra" >
            </div>

            <input type="submit" name="submit" value="Añadir">
        </fieldset>
    </form>
</body>
</html>