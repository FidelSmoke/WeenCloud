<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud en php y mysql</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>

    <h1 class="text-center p-2">Hola Mundo</h1>
    <div class="container-fluid row">
         <form class="col-4 ´p-3" >
            <h3 class="text-center  text-secondary">Registro de personas</h3>
             <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Nombre De La persona</label>
                <input type="text" class="form-control" name="nombre">
             </div>

             <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Apellido De La persona</label>
                <input type="text" class="form-control" name="apelllido">
             </div>

             <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">DNI De La persona</label>
                <input type="text" class="form-control" name="dni">
             </div>

             <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Fecha De Nacimiento</label>
                <input type="date" class="form-control" name="fecha">
             </div>

             <div class="mb-3">
             <label for="exampleInputEmail1" class="form-label">Correo</label>
                <input type="text" class="form-control" name="correo">
             </div>


                     <button type="submit" class="btn btn-primary" name="btnregistrar" value="ok">Registrar</button>
        </form>

    <div class="col-8 ´p-4">
    <table class="table">
            <thead class="bg-info">
            <tr>
            <th scope="col">NOMBRE</th>
            <th scope="col">DESCRIPCION</th>
            <th scope="col">GENERO</th>
            <th scope="col">NU_CONTACTO</th>
            <th scope="col">EXP</th>
            <th scope="col">SAL</th>
            <!-- <th scope="col">JOR</th> -->
            <th scope="col"></th>
            </tr>
                </thead>
                <tbody>

 <?php
   include "modelo/conexion.php";
   $sql = $conexion->query(" SELECT * FROM weencloud");   
   while ($datos = $sql->fetch_object()) { ?>
 <tr>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>
                         <a href="" class="btn btn-small btn-warning"><i class='bx bx-edit'></i></a>
                         <a href="" class="btn btn-small btn-danger"><i class='bx bx-folder-minus'></i></i></a>
                    </td>
                    </tr>
   <?php }   
    ?>
                    

  </tbody>
</table>
    </div>

    </div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>