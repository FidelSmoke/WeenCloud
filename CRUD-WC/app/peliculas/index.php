<?php 

require '../config/database.php';

$sqlPeliculas = "SELECT * FROM pelicula";
$peliculas = $conn->query($sqlPeliculas);

?>

<!DOCTYPE html>
<html lang="en" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Modal</title>

    <link href="../../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../../assets/css/all.min.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <div class="container py-3">

        <h2 class="text-center">Empleos</h2>
      <div class="row justify-content-end">
        <div class="col-auto">
         <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalcrear"> <i class="fa-solid fa-circle-plus"></i>Nuevo Registro</button>

        </div>
     </div>    
        <table class="table table-sm table-striped table-hover mt-4">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Vacante</th>
                    <th>Numero de contacto</th>
                    <th>Experiencia</th>
                    <th>Salario</th>
                    <th>Jornada</th>
                   
            </thead>

            <tbody>



            <?php while ($row = $peliculas->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row['id']; ?></td>
                        <td><?= $row['nombre']; ?></td>
                        <td><?= $row['descripcion']; ?></td>
                        <td><?= $row['id_genero']; ?></td>
                        <td><?= $row['nu_contacto']; ?></td>
                        <td><?= $row['exp']; ?></td>
                        <td><?php echo number_format($row['sal']); ?></td>
                        <td><?= $row['jor']; ?></td>
                        
                 </tr>
                 <?php } 
                 ?>
            </tbody>

        </table>


        <?php include 'nuevoModal.php'; ?>



        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>

    </div>

    <script>src="../../assets/js/bootstrap.bundle.min.js"</script>

</body>

</html>