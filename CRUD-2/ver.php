
<html>
	<head>
		<title>WEENCLOUD</title>
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
	</head>
	<body>
	<?php include "php/navbar.php"; ?>
<div class="container">
<div class="row">
<div class="col-md-12">
		<h2>PUBLICAR EMPLEO</h2>
<!-- Button trigger modal -->

  <a data-toggle="modal" href="#myModal" class="btn btn-default">Agregar</a>
<br><br>
  <!-- Modal -->
  <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          <h4 class="modal-title">Agregar</h4>
        </div>
        <div class="modal-body">
<form role="form" method="post" action="php/agregar.php">
  <div class="form-group">
    <label for="Lutrabajo">Lugar De Trabajo</label>
    <input type="text" class="form-control" name="Lutrabajo" required>
  </div>
  <div class="form-group">
    <label for="experiencia">Experiencia</label>
    <input type="text" class="form-control" name="experiencia" required>
  </div>
  <div class="form-group">
    <label for="salario">Salario</label>
    <input type="text" class="form-control" name="salario" required>
  </div>
  <div class="form-group">
    <label for="contactanos">¿Como Quieres Que Se Pongan En Contacto Contigo?</label>
    <input type="contactanos" class="form-control" name="contactanos" >
  </div>
  <div class="form-group">
    <label for="Cargo_Categoria">Cargo-Categoria</label>
    <input type="text" class="form-control" name="Cargo_Categoria" >
  </div>

  <button type="submit" class="btn btn-default"> <a href="../HOLA/index.php">Agregar</button></a>
</form>
        </div>

      </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
  </div><!-- /.modal -->


<?php include "php/tabla.php"; ?>
</div>
</div>
</div>

<script src="bootstrap/js/bootstrap.min.js"></script>
	</body>
</html>