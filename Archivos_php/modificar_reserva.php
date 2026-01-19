<?php
include ("../conexion/conexion.php");
$numr=$_GET["idr"];
$sql=$conexion->query("select * from reservas where id_reserva=$numr");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/493395a733.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
     <form class="col-4 p-5 m-auto" style="border:1px solid; margin-left:10px; padding-top:20px;" method="POST">
            <h3 class="text-center text-secondary" >Modificar Rservas</h3>
            <input type="hidden" name="idr" value="<?=$_GET["idr"] ?>">
            <?php 
            include ("../controlador/actualizar_reserva.php");
                while($datos=$sql->fetch_object()) { ?>

                    <div class="mb-3">
                        <label for="nom" class="form-label">Nombre del Huesped</label>
                        <input type="text" class="form-control"  name="nomh" value="<?=$datos->nombre_huesped?>" >
                    </div>
                    <div class="mb-3">
                        <label for="dni" class="form-label">Documento de Identidad </label>
                        <input type="number" class="form-control" placeholder="DNI"  name="dnih" value="<?=$datos->dni?>" >
                    </div>

                    <div class="mb-3">
                        <label for="fingreso" class="form-label">Fecha de Ingreso</label>
                        <input  type="date" class="form-control"  name="fechahi" value="<?=$datos->fecha_ingreso?>"  >
                    </div>

                    <div class="mb-3">
                        <label for="fsalida" class="form-label">Fecha de Salida</label>
                        <input  type="date" class="form-control"  name="fechahs" value="<?=$datos->fecha_salida?>" >
                    </div>
                        
                    <div class="mb-3">
                        <label for="habitacion" class="form-label">Habitaciones</label>
                        <input  type="number" class="form-control" name="hbh" value="<?=$datos->numero_hab_f?>" disabled >
                    </div>
                <?php }
            ?>
            <div class="mb-3">
            </div>
            <button type="submit" class="btn btn-primary" name="btn-acr" value="OK">Modificar Reserva </button>
        </form>

</body>
</html>