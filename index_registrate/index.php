<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="estilos.css">
    <title>Ween Cloud</title>
</head>
<body>
    <div class="container-form register">
        <div class="information">            
            <div class="info-childs">
                <h1>¡¡Bienvenido a Ween Cloud!!</h1>
                <p>Para buscar o solicitar un empleo porfavor inicia sesion o registrate con tus datos</p>
                <input type="button" value="Inciar Sesion" id="sign-in">
            </div>
        </div>
         <div class="form-information">
            <div class="form-information-childs">
                <h2>Crear Cuenta</h2>
                <div class="icons">
                   <a href="http://www.facebook.com/profile.php?id=61552005853511"> <i class  ='bx bxl-facebook'> </a></i>
                   <a href="http://www.instagram.com/weencloud/"> <i class ='bx bxl-instagram' ></a></i>    
                </div>
                <form action="../controlador/controlador_registro_usuario.php" class="form" method="POST">
                    <label>

                        <i class='bx bx-user'></i>
                        <input type="text" name="nombrec" placeholder="Nombre Completo">
                    </label>
                    <label>

                        <i class='bx bx-envelope'></i>
                        <input type="email" name="email" placeholder="Correo Electronico">
                    </label>
                    <label>
                        
                        <i class='bx bx-phone'></i>
                        <input type="tel" name="numero" placeholder="Numero de telefono">
                    </label>

                    <label>
                        
                        <i class='bx bx-id-card'></i>
                        <input type="text" name= "tdocumento" placeholder="Tipo de documento">
                    </label>

                    <label>
                        
                        <i class='bx bx-id-card' ></i>
                        <input type="password" name="contraseña" placeholder="contraseña">
                    </label>

        
                    <label>
                        
                        <i class='bx bx-id-card' ></i>
                        <input type="text" name= "nu_documento"placeholder="numero de documento">
                    </label>

                    <label>
                        
                        <i class='bx bx-id-card' ></i>
                        <input type="password" name="conficontraseña"  placeholder="confirmar contraseña">
                    </label>


                    <label>
                        
                        <i class='bx bx-id-card' ></i>
                        <input type="text" name= "barrio"placeholder="nombre de tu barrio">
                    </label>

                    <label>
                    <i class='bx bx-id-card' ></i>
            <span class="details">Rol</span>
            
            <select name="rol" id="">
              <option value="" disabled selected></option>
              <option value="Empresario">Empresario</option>
              <option value="Vacante">Vacante</option>
            </select>
    
                  </label>

                  <label>
                  <i class='bx bx-id-card' ></i>
            <span class="details">Genero</span>
            
            <select name="genero" id="">
              <option value="" disabled selected></option>
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
              <option value="Prefiero no decirlo">Prefiero no decirlo</option>
            </select>

          </label>




                     <input type="submit" value="Registrate" name="registro">

                     <?php
include("../controlador/controlador_registro_usuario.php");
                    ?>
                </form>
            </div>
        </div>
    </div>

<!-- DONDE SE VA A PEGAR TODO DE NUEVO -->

<div class="container-form login hide">
    <div class="information">            
        <div class="info-childs">
            <h1>¡¡Bienvenido a Ween Cloud!!</h1>
            <p>Para buscar o solicitar un empleo porfavor inicia sesion o registrate con tus datos</p>
            <input type="button" value="Registrarse" id="sign-up">
        </div>
    </div>
     <div class="form-information">
        <div class="form-information-childs">
            <h2>Iniciar Sesion</h2>
            <div class="icons">
                <a href="http://www.facebook.com/profile.php?id=61552005853511"> <i class  ='bx bxl-facebook'> </a></i>
                 <a href="http://www.instagram.com/weencloud/"> <i class ='bx bxl-instagram' ></a></i>      
            </div>
            <form class="form">
                <label>
                    <i class='bx bx-envelope' ></i>
                    <input type="email" name="email" placeholder="Correo Electronico">
                </label>

                <label>
                    <i class='bx bx-id-card' ></i>
                    <input type="password" name="Contraseña" placeholder="Contraseña">
                </label>
                <input type="submit" value="Iniciar Sesion">
            </form>
        </div>
    </div>
</div>
    <script src="script.js"></script>
</body>
</html>