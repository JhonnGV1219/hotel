<?php
include ("../conexion/conexion.php");
$numh=$_GET["numh"];
$sql=$conexion->query("select * from habitaciones where numero_hab=$numh");


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


        label {
            font-weight: bold;
            color: #333;
        }
    </style>



<br>
<br>
    <form class="col-4 p-5 m-auto" style=" margin-left:10px; padding-top:20px; border-radius:20px; box-shadow: 0 10px 25px rgba(0,0,0,0.15);" method="POST">
            <h3 class="text-center text-danger" >🏯 Modificar Habitación</h3>
            <?php 
            include ("../controlador/actualizar_habitacion.php");
                while($datos=$sql->fetch_object()) { ?>
                    <div class="mb-3">
                        <label for="numhabi" class="form-label">Numero de Habitación</label>
                        <input type="number" class="form-control" id="numhabi" name="num_hab" value="<?=$datos->numero_hab?>" >
                    </div>
                    <div class="mb-3">
                        <label for="tiphab" class="form-label">Tipo de Habitación</label>
                        <select class="form-select"  required id="tiphab" name="tip_hab" value="<?=$datos->tipo_hab?>" >
                            <option value="Simple">Simple</option>
                            <option value="Doble">Doble</option>
                            <option value="Suite">Suite</option>
                            <option value="" >Seleccione</option>
                        
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="precio" class="form-label">Precio Por noche</label>
                        <input  type="number" class="form-control" id="precio" name="precio_hab" value="<?=$datos->precio_hab?>" >
                    </div>
                <?php }
            ?>
            <div class="mb-3">
            </div>
            <button type="submit" class="btn btn-outline-danger w-100" name="btn-ach" value="OK"> Modificar Habitación</button>
        </form>

<?php
include ("../Archivos_php/final.php");
?>
</body>
</html>
