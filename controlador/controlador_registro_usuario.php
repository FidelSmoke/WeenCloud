<?php
include("../conexion/conexion.php");
if (!empty($_POST["index_registrate"])) {
    if (empty($_POST["nombrec"]) or empty($_POST["email"]) or empty($_POST["numero"]) or empty($_POST["tdocumento"]) or empty($_POST["contraseña"]) or empty($_POST["nu_documento"])or empty($_POST["conficontraseña"]) or empty($_POST["barrio"]) or empty($_POST["rol"]) or empty($_POST["genero"])) {
        echo('Debes llenar todos los campos');
    } else {
        $nombrec=$_POST['nombrec'];
        $email=$_POST['email'];
        $numero=$_POST['numero'];
        $documento=$_POST['tdocumento'];
        $contraseña=$_POST['contraseña'];
        $hash= password_hash($contraseña, PASSWORD_DEFAULT, [50]);
        $nu_documento=$_POST["nu_documento"];
        $conficontraseña=$_POST['conficontraseña'];
        $hash= password_hash($conficontraseña, PASSWORD_DEFAULT,[50]);
        $barrio=$_POST['barrio'];
        $rol=$_POST['rol'];
        $genero=$_POST['genero'];
        
        $msql = "SELECT * FROM index_registrate WHERE email='$email'";
        $result = $con->query($msql);

        if ($result->num_rows > 0) {
            echo("El correo electrónico ya ha sido registrado. Intente Iniciar sesion");
            header('location:../Login/index.php');
        } else {

        $sql=$con->query("INSERT INTO index_registrate (nomcom,email,numtel,pass,confirpass,genero,numdoc,tipdoc,barrio,rol)VALUES('$nombrec','$email','$numero','$hash','$hash','$genero','$nu_documento','$documento','$barrio','$rol')");
        header('location: ../index.php');
        }
    }
}

?>