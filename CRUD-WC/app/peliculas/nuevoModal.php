<div class="modal fade" id="modalcrear" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content modal-lg">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> Registro</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="guarda.php" method="post" enctype="multipart/form-data">
            <div class="mb-3">
                 <label for="nombre" class="form-label"> Nombre:</label>
                 <input type="text" name="nombre" id="nombre" value="" class=" form-control" required>
            </div>

            <div class="mb-3">
                 <label for="numero" class="form-label"> Numero de contacto</label>
                 <input type="text" name="numero" id="numero" value="" class=" form-control" required>
            </div>

            <div class="mb-3">
                 <label for="experiencia" class="form-label">Experiencia</label>
                 <input type="text" name="experiencia" id="experiencia" value="" class=" form-control" required>
            </div>

            <div class="mb-3">
                 <label for="salario" class="form-label">Salario</label>
                 <input type="number" name="salario" id="salario" value="" class=" form-control" required step="50">
            </div>

            <div class="mb-3">
                 <label for="jornada" class="form-label">Jornada</label>
                 <input type="text" name="jornada" id="jornada" value="" class=" form-control" required>
            </div>

            <div class="mb-3">
                 <label for="descripcion" class="form-label">Descripcion:</label>
                 <textarea name="descripcion" id="descripcion" class=" form-control" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                 <label for="genero" class="form-label">Genero:</label>
                 <select  name="genero" id="genero" class=" form-select" required>
                 <?php
                  require '../config/database.php';
                  $gen="SELECT * FROM genero";
                  $resul=mysqli_query($conn,$gen);
                  while($valores = mysqli_fetch_array($resul)){
                    echo '<option value="'.$valores['id'].'">'.$valores['nombre']. '</option>';
                  }
                ?>
            </div>

            <div class="mb-3">
                 <label for="poster" class="form-label">Poster:</label>
                 <input type="file" name="poster" id="poster" class=" form-control" accept="image/jpeg">
            </div>

            <div class="">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary"><i class="fa-solid fa-cloud-arrow-down"></i>Guardar</button>
            </div>
        </form>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>