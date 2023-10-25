<!DOCTYPE html>
<html lang="es">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="../registro html/registro.css">
    <link rel="stylesheet" href="link rel="preconnect href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="registro2.css">

</head>
<body>
    <!-- <div class="container">
        <div class="title">Registrarse</div>
        <form action="../controlador/controlador_registro_usuario.php" style="display: flex; flex-wrap: wrap; justify-content: space-between; " method="POST">
        <div class="user-details">
         <div class="input-box">
          <span class="details">Nombre completo</span>  
          <input type="text" name="nombrec" placeholder="Introduzca su nombre" required>
        </div> -->

        <div class="input-box">
            <span class="details">Email </span>  
            <input type="text" name="email" placeholder="Introduzca su correo" required>
          </div>  

          <div class="input-box">
            <span class="details">Número de teléfono</span>  
            <input type="text" name="numero" placeholder="Introduzca su numero de telefono" required>
          </div>    

          <div class="input-box">
            <span class="details">Tipo de documento</span>  
            <input type="text" name="tdocumento" placeholder="Introduzca su tipo de documento" required>
          </div>  

          <div class="input-box">
            <span class="details">Contraseña </span>  
            <input type="password" name="contraseña" placeholder="Introduzca su contraseña" required>
          </div> 

          <div class="input-box">
            <span class="details">Número de documento</span>  
            <input type="text" name="nu_documento" placeholder="Introduzca su número de documento" required>
          </div> 

          <div class="input-box">
            <span class="details">Confirmar contraseña</span>  
            <input type="password" name="conficontraseña" placeholder="Confirme su contraseña" required>
          </div>

          <div class="input-box">
            <span class="details">Barrio</span>  
            <input type="text" name="barrio" placeholder="Introduzca el nombre de su barrio " required>


            
          </div>  

          <div class="input-box">
            <span class="details">Rol</span>
            
            <select name="rol" id="">
              <option value="" disabled selected></option>
              <option value="Empresario">Empresario</option>
              <option value="Vacante">Vacante</option>
            </select>
          </div>
          
          <div class="input-box">
            <span class="details">Genero</span>
            
            <select name="genero" id="">
              <option value="" disabled selected></option>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
              <option value="Prefiero no decirlo">Prefiero no decirlo</option>
            </select>
          </div>   
        </div>




        <!-- <div class="input-box">
            <span class="details">Genero</span>
            
            <select name="genero" id="">
              <option value="" disabled selected></option>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
              <option value="Prefiero no decirlo">Prefiero no decirlo</option>
            </select>
          </div>    -->

         <!-- <div class="gender-details">
         <span class="gender-title">Género</span>
         <div class="category">
           <label for="">
            <input type="checkbox" name="genero" id="">
            <span class="gender">Masculino</span>
           </label> 
           <label for="">
            <input type="checkbox" name="" id="">
            <span class="gender">Femenino</span>
           </label> 
           <label for="">
            <input type="checkbox" name="" id="">
            <span class="gender">Prefiero no decirlo</span>
           </label> 
         </div>
        </div> -->
        <div class="button">
          <input type="submit" value="Registrar" class="registrar" name="registro">  
          <?php
include("../controlador/controlador_registro_usuario.php");

            ?> 
        </div>
    </form>

    </div>
</body>
</html>