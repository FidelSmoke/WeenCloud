<?php

require '../config/database.php';

$nombre = $conn->real_escape_string($_POST['nombre']);
$descripcion =$conn->real_escape_string($_POST['descripcion']);
$genero = $conn->real_escape_string($_POST['genero']);
$numero = $conn->real_escape_string($_POST['numero']);
$experiencia =$conn->real_escape_string($_POST['experiencia']);
$salario = $conn->real_escape_string($_POST['salario']);
$jornada= $conn->real_escape_string($_POST['jornada']);

$sql = "INSERT INTO pelicula (nombre, descripcion, id_genero, nu_contacto, exp, sal, jor)
VALUES ('$nombre', '$descripcion', '$genero', '$numero', '$experiencia', '$salario', '$jornada')";
if($conn->query($sql)){
    $id = $conn->insert_id;
}

header('Location: index.php');