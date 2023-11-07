<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from person";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
<thead>
	<th>Lugar De Trabajo</th>
	<th>Experiencia</th>
	<th>Salario</th>
	<th>¿Te intereso? contactanos</th>
	<th>Cargo-Categoria</th>
	<th>Accion</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["Lutrabajo"]; ?></td>
	<td><?php echo $r["experiencia"]; ?></td>
	<td><?php echo $r["salario"]; ?></td>
	<td><?php echo $r["contactanos"]; ?></td>
	<td><?php echo $r["Cargo_Categoria"]; ?></td>
	<td style="width:150px;">
		<a href="./editar.php?id=<?php echo $r["id"];?>" class="btn btn-sm btn-warning">Editar</a>
		<a href="#" id="del-<?php echo $r["id"];?>" class="btn btn-sm btn-danger">Eliminar</a>
		<script>
		$("#del-"+<?php echo $r["id"];?>).click(function(e){
			e.preventDefault();
			p = confirm("Estas seguro?");
			if(p){
				window.location="./php/eliminar.php?id="+<?php echo $r["id"];?>;

			}

		});
		</script>
	</td>
</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">Agrega Un Registro</p>
<?php endif;?>
