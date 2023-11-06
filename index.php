<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ween Cloud</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="styles.css">
</head>
<body>
    <?php
    include ('controlador/controlador_login_usuario.php');
    if (isset($_SESSION['on'])){

    }
    else{
        header('location: index_registrate/');

    };
    ?>
    <header>
        <div class="menu container">
            <img src="IMG/clouds (1).png" alt="">
            <a href="https://www.instagram.com/weencloud/" class="logo">Ween Cloud </a>
            <input type="checkbox" id="menu">
            <label for="menu">
                <img src="IMG/menu-btn.png" class="menu-icono" alt="" src=>
            </label>
            <nav class="navbar">

                <!-- <ul>
                    <li>
                        <a href="index_registrate/index.html"></a>
                    </li>
                </ul> -->
                <ul>
                    <li> <a href="#servicios">Servicios</a></li>
                    <li> <a href="#contacto">Contactanos</a></li>
                    <li> <form action="controlador/logout.php" method="POST"> <input style=" 
                    background-color: transparent;
                     font-size: 18px;
                    padding: 20px;
                    color: #ffffff;
                    display: block;
                    border:none; " 
                    name="logout" type="submit" value="Cerrar sesion" class="inputnavbar"></form></li>
                    
                </ul>
            </nav>
        </div>
        <div class="header-content container">

            <div class="content">

                <h1>Somos Ween Cloud </h1>
                <p>
                    Somos un grupo de personas que desarrollaron este aplicativo para facilitar la publicación y la búsqueda de los personales necesitados y empleos en la localidad cuarta de San Cristóbal.
                </p>
                 <a href="https://youtu.be/iPT_rjltqh0?si=ghRLw4ZxL-UEgAzi" class="btn-1">Mas información</a> 
            </div>
            <img src="IMG/astronauta.png" alt="">
        </div>
    </header>

    <main class="services">
        <!-- <div class="service">
            <img src="IMG/icon1.svg" alt="">
            <h3>Publica tu trabajo</h3>
            <p>
                Publica tu oferta en Ween Cloud, serán tus 5 minutos de hoy mejor invertidos
            </p>
            <a href="PBTRAB/index1.php" class="btn-3">Ingresar</a>
        </div> -->
        <div class="service">
            <img src="IMG/icon2.svg" alt="">
            <h3>Busca Tu Trabajo</h3>
           
            <p> Si buscas trabajo ¡Ween Cloud es tu mejor aliado! </p>
               <P> Encontraras las oportunidades de empleo, las cuales tienen una mayor facilidad de búsqueda, estamos proyectados a que el usuario se sienta bien a la hora de buscar empleo que mejor opcion que Ween Cloud...
                ¡Nunca fue tan fácil encontrar empleo!.</P>
            
            <a href="./CRUD-MODAL/index.php" class="btn-3">Entrar</a>
        <!-- </div>
        <div class="service">
            <img src="IMG/icon3.svg" alt="">
            <h3>Servicio 3</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit
            </p>
        </div>
        <div class="service">
            <img src="IMG/icon4.svg" alt="">
            <h3>Servicio 4</h3>
            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit
            </p>
        </div> -->
    </main>

    <section class="porfolios container" id="servicios">

        <h2>Nuestro Servicio</h2>

        <div class="porfolio">

            <img src="IMG/img2.png" alt="">
            <div class="porfolio-1">

                <h3>Publica tu trabajo</h3>
                <p>
                    En nuestro apartado si eres una persona que necesita hacer público tu emprendimiento o negocio, en este podrás proporcionar la oferta de trabajo si necesitas vacantes para esta, y hacer de esta publicación un éxito y encontrar la mejor vacante para esta.
                </p>

            </div>
        </div>

        <div class="porfolio">

            <div class="porfolio-2">

                <h3>Busca tu trabajo</h3>
                <p>
                    Encontraras las oportunidades de empleo, las cuales tienen una mayor facilidad de búsqueda, estamos proyectados a que el usuario se sienta bien a la hora de buscar empleo que mejor opcion que Ween Cloud...
                ¡Nunca fue tan fácil encontrar empleo!.
 
                </p>
            </div>
            <img src="IMG/img4.png" alt="">
        </div>
    </section>
    <section>
    <footer>
        <div class="container">
            <div class="info" id="contacto"> 
                <div class="info-content">
                    <div class="info-price">
                        <h2>Contactanos</h2>
                        <p>
                            ¿En qué podemos ayudarte?
                            Resuelve tus dudas a través de nuestras redes sociales, cualquier informacion la cual necesites nos las puedes hacer saber atraves de nuestro correo electronico, o a travez de nuestras redes sociales como instagram y Facebook. 
                        </p>
                    </div>
               
                </div>
                <hr>
                <div class="enlaces">
                    <img src="IMG/astronaut.png" alt="">
                    <div class="enlace">
                        <li> <a href="https://www.instagram.com/weencloud/">Instagram</a></li>
                        <li> <a href="https://www.facebook.com/profile.php?id=61552005853511">Facebook</a></li>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</section>
</body>

</html>

