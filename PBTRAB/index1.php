<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulario</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="estilos2.css">
</head>

<body>

    <div class="contenedor-formulario contenedor">
        <div class="imagen-formulario">

        </div>

        <form class="formulario" action="../controlador/controlador_Ptrabajo_usuario.php" method="POST   "> 
            <div class="texto-formulario">
                <h2>Ween Cloud</h2>
                <p>Informacion del Empleo</p>
            </div>
            <div class="input">
                <label for="usuario">Lugar Trabajo</label>
                <etiqueta  para =" usuario "></etiqueta >
                <input  placeholder =" Ingresa el Barrio" type =" text " name="lutrabajo" id =" usuario " >
                
            </div>

            <div class="input">
                <label for="usuario">Experiencia</label>
                 <select name="Experiencia" id="">
                    <option value=""></option>
                    <option value="">1 año </option>
                    <option value=""> 2 años</option>
                    <option value=""> 3 años o mas </option>
                    <option value="">Sin Experiencia</option>
                 </select>
            </div>
            <!-- <div class="input">
                <label for="usuario">Salario</label>
                 <select name="" id="">
                    <option value=""></option>
                    <option value="">1.600.000 </option>
                    <option value="">2.000.000</option>
                    <option value="">2.500.000</option>
                    <option value="">3.000.000</option>
                 </select>
            </div> -->

            <div class="input">
                <label for="usuario"> Salario</label>
                <etiqueta  para =" usuario "></etiqueta >
                <input  placeholder =" ingresa tu salario" type =" text " name="salario" id =" usuario " >
                
            </div>


            <div class="input">
                <label for="usuario">Jornada</label>
                 <select name="jornada" id="">
                    <option value=""></option>
                    <option value="">Tiempo Completo</option>
                    <option value="">Tiempo Parcial</option>
                    <option value="">Horas</option>
                 </select>
            </div>


            <div class="input">
                <label for="usuario">Contrato</label>
                 <select name="contrato" id="">
                    <option value=""></option>
                    <option value="">Contrato Indefinido</option>
                    <option value="">Contrato Obra </option>
                    <option value="">Contrato termino Fijo</option>
                 </select>
            </div>
            <!-- <div class="input">
                <label for="usuario">Discapacidad</label>
                 <select name="" id="">
                    <option value=""></option>
                    <option value="">Si</option>
                    <option value="">No</option>
                    <option value="">prefiero no decirlo</option>
                    </select>
            </div> -->
            <!-- <div class="input">
                <label for="usuario">Cargo o Categoria</label>
                 <select name="" id="">
                    <option value=""></option>
                    <option value="">Conductor</option>
                    <option value="">Contador Publico</option>
                    <option value="">Ingeniero Industrial</option>
                    <option value="">Asesor</option>
                    <option value="">Soldador</option>
                    <option value="">Electricista</option>
                </select>
            </div> -->
            
            <div class="input">
                <label for="usuario">Cargo o Categoria</label>
                <etiqueta  para =" usuario "></etiqueta >
                <input  placeholder =" Ingresa tu cargo" type =" text " name="cargo_categoria" id =" usuario " >

            </div>
            

            <div class="input">
                <input type="submit" value="Publicar" name="ptra">

                
            </div>
        </form>
    </div>

</body>

</html>
