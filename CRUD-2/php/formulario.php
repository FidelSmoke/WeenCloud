<?php
include "conexion.php";

$user_id=null;
$sql1= "select * from person where id = ".$_GET["id"];
$query = $con->query($sql1);
$person = null;
if($query->num_rows>0){
while ($r=$query->fetch_object()){
  $person=$r;
  break;
}

  }
?>

<?php if($person!=null):?>

<form role="form" method="post" action="php/actualizar.php">
  <div class="form-group">
    <label for="Lutrabajo">Lugar De Trabajo</label>
    <input type="text" class="form-control" value="<?php echo $person->Lutrabajo; ?>" name="Lutrabajo" required>
  </div>
  <div class="form-group">
    <label for="experiencia">Experiencia</label>
    <input type="text" class="form-control" value="<?php echo $person->experiencia; ?>" name="Experiencia" required>
  </div>
  <div class="form-group">
    <label for="salario">Salario</label>
    <input type="text" class="form-control" value="<?php echo $person->salario; ?>" name="Salario" required>
  </div>
  <div class="form-group">
    <label for="contactanos">¿te intereso? contactanos</label>
    <input type="text" class="form-control" value="<?php echo $person->contactanos; ?>" name="contactanos" required >
  </div>
  <div class="form-group">
    <label for="Cargo_Categoria">Cargo-Categoria</label>
    <input type="text" class="form-control" value="<?php echo $person->Cargo_Categoria; ?>" name="Cargo_Categoria" required>
  </div>
<input type="hidden" name="id" value="<?php echo $person->id; ?>">
  <button type="submit" class="btn btn-default">Actualizar</button>
</form>
<?php else:?>
  <p class="alert alert-danger">404 No se encuentra</p>
<?php endif;?>