<?php

include "conexion.php";

$user_id=null;
$sql1= "select * from person where Lutrabajo like '%$_GET[s]%' or experiencia like '%$_GET[s]%' or salario like '%$_GET[s]%' or contactanos like '%$_GET[s]%' or Cargo_Categoria like '%$_GET[s]%' ";
$query = $con->query($sql1);
?>

<?php if($query->num_rows>0):?>
<table class="table table-bordered table-hover">
	<h1>Empleos Publicados:</h1>
<thead>
	<th>Lugar De Trabajo</th>
	<th>Experiencia</th>
	<th>Salario</th>
	<th>¿Te interesa? contactanos</th>
	<th>Cargo_Categoria</th>
</thead>
<?php while ($r=$query->fetch_array()):?>
<tr>
	<td><?php echo $r["Lutrabajo"]; ?></td>
	<td><?php echo $r["experiencia"]; ?></td>
	<td><?php echo $r["salario"]; ?></td>
	<td><?php echo $r["contactanos"]; ?></td>
	<td><?php echo $r["Cargo_Categoria"]; ?></td>

</tr>
<?php endwhile;?>
</table>
<?php else:?>
	<p class="alert alert-warning">No Se Encontro</p>
<?php endif;?>
