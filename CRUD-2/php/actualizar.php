<?php

if(!empty($_POST)){
	if(isset($_POST["Lutrabajo"]) &&isset($_POST["experiencia"]) &&isset($_POST["salario"]) &&isset($_POST["jornada"]) &&isset($_POST["Cargo_Categoria"])){
		if($_POST["Lutrabajo"]!=""&& $_POST["experiencia"]!=""&&$_POST["jornada"]!=""){
			include "conexion.php";
			
			$sql = "update person set Lutrabajo=\"$_POST[Lutrabajo]\",experiencia=\"$_POST[experiencia]\",salario=\"$_POST[salario]\",jornada=\"$_POST[jornada]\",Cargo_Categoria=\"$_POST[Cargo_Categoria]\" where id=".$_POST["id"];
			$query = $con->query($sql);
			if($query!=null){
				print "<script>alert(\"Actualizado exitosamente.\");window.location='../ver.php';</script>";
			}else{
				print "<script>alert(\"No se pudo actualizar.\");window.location='../ver.php';</script>";

			}
		}
	}
}



?>