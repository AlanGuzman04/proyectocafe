<?php
    

    include 'models/login.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Inicio de Sesión y Registro</title>
    <!--Iconos-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/eb496ab1a0.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/Stylos/Login.css">
</head>
<body>
    <h1>Bienvenidos CafeUtem</h1>
    <br>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="#" method="POST">
                <h1>Crear una cuenta</h1>
                <span>Rellene los espacios en blanco con su información</span>
                <input type="text" name="NoControl" placeholder="NoControl" required />
                <input type="password" name="Contraseña" placeholder="Contraseña" required />
                <input type="text" name="nombre" placeholder="Nombre" required />
                <input type="text" name="apellidoPA" placeholder="Apellido Paterno" required />
                <input type="text" name="apellidoMA" placeholder="Apellido Materno" required />
                <input type="text" name="Carrera" placeholder="Carrera" required />
                <input type="email" name="Correo" placeholder="Correo" required />
                
                <button type="submit" name="signup-submit">Crear cuenta</button>
            </form>
        </div>
        <div class="form-container sign-in-container">
            <form action="#" method="POST">
                <img src="assets/Imagenes/Cafe2.png" width="200px" height="150px" alt="">
                <h1>Iniciar sesión</h1>
                <div class="social-container">
                    
			   </div>
                <input type="text" name="login-usuario" placeholder="Num.Control" required />
                <input type="password" name="login-contrasena" placeholder="Contraseña" required />
                <br>
                <button type="submit" name="login-submit">Iniciar Sesión</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Bienvenido de nuevo</h1>
                    <p>Para mantenerse conectado con nosotros, inicie sesión con su información personal.</p>
                    <button class="ghost" id="signIn">Inicia Sesión</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Bienvenidos</h1>
                    <p>Ingresa tus datos personales y comienza a explorar con nosotros</p>
                    <button class="ghost" id="signUp">Registrate</button>
                </div>
            </div>
        </div>
    </div>
    <script>
        const signUpButton = document.getElementById('signUp');
        const signInButton = document.getElementById('signIn');
        const container = document.getElementById('container');

        signUpButton.addEventListener('click', () => {
            container.classList.add('right-panel-active');
        });

        signInButton.addEventListener('click', () => {
            container.classList.remove('right-panel-active');
        });
    </script>
   
</body>
</html>
