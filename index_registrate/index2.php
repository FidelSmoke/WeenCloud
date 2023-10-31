<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="style2.css">
    <title>Ween Cloud</title>
</head>
<body>
                  <a class="nubee" href="../index.php"><img src="../IMG/clouds (1).png" alt=""></a>
                    <div class="container-form login hide">
                        <div class="information">            
                            <div class="info-childs">
                                <h1>¡¡Bienvenido a Ween Cloud!!</h1>
                                <p>Para buscar o solicitar un empleo porfavor inicia sesion o registrate con tus datos</p>
                            </div>
                        </div>
                         <div class="form-information">
                            <div class="form-information-childs">
                                <h2>Iniciar Sesion</h2>
                                <div class="icons">
                                    <a href="http://www.facebook.com/profile.php?id=61552005853511"> <i class  ='bx bxl-facebook'> </a></i>
                                     <a href="http://www.instagram.com/weencloud/"> <i class ='bx bxl-instagram' ></a></i>      
                                </div>
                                <form class="form" action="../controlador/controlador_login_usuario.php" method="POST">
                                    <label>
                                        <i class='bx bx-envelope' ></i>
                                        <input type="email" name="email" placeholder="Correo Electronico">
                                    </label>
                    
                                    <label>
                                    <i class='bx bx-lock-alt'></i>
                                        <input placeholder="ingresa tu contraseña" name="contraseña" type="password" id="Contraseña">
                                    </label>
                                    <input type="submit" value="Iniciar Sesion" name="login">
                    
                                    <?php
                    include('../controlador/controlador_login_usuario.php');

                    
                    ?>

                                </form>
                            </div>
                        </div>
                    </div>
                        <script src="script.js"></script>
                    </body>
                    </html>







                    
                </form>
            </div>
        </div>
    </div>