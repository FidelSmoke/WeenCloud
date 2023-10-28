<?php
include('conexion.php');
session_start();
if (!empty($_POST["login"])) {
    if (empty($_POST["email"]) or empty($_POST["contraseña"])) {
        echo '<p>Uno de los campos esta vacio</p>';
    } else {
        
        $email=$_POST["email"];
        $contraseña=$_POST["contraseña"];
        $sql=$con->query("SELECT * FROM registro WHERE email='$email'");
        $resultado=$sql;
        if ($resultado->num_rows==1){
            $usuario = mysqli_fetch_assoc($resultado);
            echo ('Contraseña Incorrecta');
        }
            if (password_verify($contraseña, $usuario['pass'])) {
                // echo('HAS INICIADO BIEN');
                $_SESSION['on'] = 'on';
                header("location: ../index.php");
            }

        else{
            $_SESSION['maile']='Correo electronico o contraseña incorrecta';
        }    
            
    
    }
}
?>