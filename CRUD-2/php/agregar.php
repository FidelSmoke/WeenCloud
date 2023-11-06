<?php

if(!empty($_POST)){
	if(isset($_POST["Lutrabajo"]) &&isset($_POST["experiencia"]) &&isset($_POST["salario"]) &&isset($_POST["jornada"]) &&isset($_POST["Cargo_Categoria"])){
		if($_POST["Lutrabajo"]!=""&& $_POST["experiencia"]!=""&&$_POST["salario"]!=""){
			include "conexion.php";
			
			$sql = "insert into person(Lutrabajo,experiencia,salario,jornada,Cargo_Categoria,created_at) value (\"$_POST[Lutrabajo]\",\"$_POST[experiencia]\",\"$_POST[salario]\",\"$_POST[jornada]\",\"$_POST[Cargo_Categoria]\",NOW())";
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Agregado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo agregar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>