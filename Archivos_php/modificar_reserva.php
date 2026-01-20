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
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <?php
    include ("../Archivos_php/encabezado.php");
    ?>

    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #fbeaea);
            font-family: 'Sawarabi Mincho', serif;
        }

        .form-japon {
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
            background: #fff;
            position: relative;
            overflow: hidden;
        }

        .btn-japon {
            background: #bc002d;
            color: white;
            border-radius: 30px;
            transition: 0.3s;
        }

        .btn-japon:hover {
            background: #90142f;
            transform: scale(1.03);
            color:white;
        }

        label {
            font-weight: bold;
            color: #333;
        }
    </style>
<br>
<br>
    <form class="col-4 p-5 m-auto" style=" margin-left:10px; padding-top:20px; border-radius:20px; box-shadow: 0 10px 25px rgba(0,0,0,0.15);" method="POST">
            <h3 class="text-center text-danger" >🏯 Modificar Reservas</h3>
            <input type="hidden" name="idr" value="<?=$_GET["idr"] ?>">
            <?php 
            include ("../controlador/actualizar_reserva.php");
                while($datos=$sql->fetch_object()) { ?>
                    <br>
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
            <button type="submit" class="btn  btn btn-outline-danger w-100" name="btn-acr" value="OK" >Modificar Reserva </button>
        </form>
<?php
    include ("../Archivos_php/final.php");
?>
</body>
</html>