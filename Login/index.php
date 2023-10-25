<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sesión</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize css.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
  <div class="contenedor-formulario contenedor">
    <div class="imagen-formulario">

    </div>

<?php
include('../controlador/controlador_login_usuario.php');
if (isset($_SESSION))

?>

    <form class="formulario" action="../controlador/controlador_login_usuario.php" method="POST">
        <div class="text-formulario">
            <h2>Ween Cloud</h2>
            <p>Inicia sesion con tu cuenta</p>
        </div>


        <!-- <div class="input">
         <label for="Email">Nombre de usuario</label> 
         <input placeholder="Ingresa tu nombre" name="nombre" type="text" id="nombre">
        </div> -->


        <div class="input">
         <label for="Email"></label> 
         <input placeholder="Ingresa tu Email" name="email" type="text" id="Email">
        </div>

        <div class="input">
         <label for="Contraseña"></label> 
         <input placeholder="ingresa tu contraseña" name="contraseña" type="password" id="Contraseña">
      </div>
         <!-- <div class="password-olvidada">
            <a href="#">¿Olvidaste tu contraseña?</a>
         </div> -->
         <div class="input">
            <input type="submit" value="Ingresar" name="login">
         </div>
         
    </form>
  </div>

</body>

</html>