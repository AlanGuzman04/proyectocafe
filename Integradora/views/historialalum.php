<?php
$mihost = 'localhost';
$miusuario = 'root';
$mipass = '';
$mibd = 'cafe';
$mysqli = mysqli_connect($mihost, $miusuario, $mipass, $mibd);
session_start();

$Id = $_SESSION['Id'];
$NoControl = $_SESSION['NoControl'];
$Nombre = $_SESSION['Nombre'];
$ApellidoPA = $_SESSION['ApellidoPA'];
$ApellidoMA = $_SESSION['ApellidoMA'];
$Correo = $_SESSION['Correo'];
$Contraseña = $_SESSION['Contraseña'];
?>
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
        body {
            color: white;
        }

        .navbar-dark {
            background-color: black;
        }

        .dropdown {
            margin-right: 45px;
        }

        .dropdown-menu {
            background-color: black;
        }

        .dropdown-item {
            color: white !important;
        }

        .dropdown-item:hover {
            color: black !important;
            background-color: white !important;
        }

        .container {
            margin-top: 60px; /* Adjust the margin as needed */
        }

        /* Additional style for modal */
        .modal-content {
            background-color: black;
            color: white;
        }

        .modal-header,
        .modal-footer {
            border-bottom: 1px solid white;
        }
    </style>
    <title>Historial</title>
</head>
<body>
    
<nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#" >CafeUtem</a>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="Inicio.php" style="text-decoration: none; color:white;">Bebidas</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="historialalum.php" style="text-decoration: none; color:white;">Historial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="quejaalum.php" style="text-decoration: none; color:white;">Quejas</a>
                </li>
                
                
            </ul>

            <!-- Menú de usuario -->
            <div class="dropdown">
                <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" id="userMenu" data-bs-toggle="dropdown" aria-expanded="false">
                    <div class="rounded-circle" style="width: 35px; height: 35px; background-color: white; overflow: hidden; margin-right: 8px;">
                        <img src="../assets/Imagenes/Df.png" alt="Imagen de perfil" style="width: 100%; height: 100%; object-fit: cover;">
                    </div>
                    <span>Usuario</span>imagenes
                </a>
                <ul class="dropdown-menu" aria-labelledby="userMenu">
                    <li><a class="dropdown-item" href="#">Configurar cuenta</a></li>
                    <li><a class="dropdown-item" href="../models/logout.php">Cerrar sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>



    <div class="container mt-3">
        <h2>Striped Rows</h2>
        <p>The .table-striped class adds zebra-stripes to a table:</p>            
        <table class="table table-striped">
            <thead>
            <tr>
                <th>ID pedido</th>
                <th>Bebida</th>
                <th>Mililitros</th>
            </tr>
            </thead>
            <tbody>
            <?php
            $consulta = mysqli_query($mysqli, "SELECT * FROM pedidos WHERE NoControlAlum = $NoControl");
            while ($res = mysqli_fetch_assoc($consulta)) {
                ?>
                <tr>
                    <form action = '' method='POST' id='frmAceptar'>
                    <td> <?php echo $res['IDpedido']; ?> <input type = 'hidden' value = '<?php $res['IDpedido'] ?>' name ='id'></td>
                    <td> <?php echo $res['Bebida']; ?> </td>
                    <td> <?php echo $res['mililitros']; ?> </td>
                    </form>
        
            
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
    </div>


</body>
</html>