<?php
include ("conexion.php");
 if (!empty($_POST["ptra"])){
    if (empty($_POST["lutrabajo"])or empty($_POST["experiencia"]) or empty($_POST["salario"]) or empty($_POST["jornada"]) or empty($_POST["contrato"]) or empty($_POST["cargo_categoria"])) {
   echo  ('<p>Uno de los campos esta vacio</p>');
}  
}  

else {
    $lutrabajo=$_POST("lutrabajo");
    $experiencia=$_POST("experiencia");
    $salario=$_POST("salario");
    $jornada=$_POST("jornada");
    $contrato=$_POST("contrato");
    $cargo_categoria=$_POST("cargo_categoria");
  
    $sql=$conexion->query("insert into usuario(lugtrab,exp,salario,jornada,contrato,cargocategoria)values)('$lutrabajo','$experiencia','$salario','$jornada','$contrato','$cargo_categoria',)");
}
?>