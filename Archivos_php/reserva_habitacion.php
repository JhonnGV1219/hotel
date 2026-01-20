<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/493395a733.js" crossorigin="anonymous"></script>

    <!-- FUENTE JAPONESA -->
    <link href="https://fonts.googleapis.com/css2?family=Sawarabi+Mincho&display=swap" rel="stylesheet">

    <title>Habitaciones</title>

    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #fbeaea);
            font-family: 'Sawarabi Mincho', serif;
        }

        h1 {
            letter-spacing: 3px;
            color: #b30000;
            text-shadow: 1px 1px 3px rgba(0,0,0,0.2);
        }

        /* Tarjeta formulario */
        .form-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0px 5px 15px rgba(0,0,0,0.15);
            border: 2px solid #e6bcbc;
            

        }


        /* Botones redondos */
        .btn-success, .btn-danger {
            border-radius: 50%;
        }
    </style>
</head>

<body>

<?php
include ("../Archivos_php/encabezado.php");
?>

<script>
    function eliminar(){
        var respuesta = confirm("¿Estas seguro de eliminar?");
        return respuesta;
    }
</script>

<h1 class="text-center p-4">🏯 Gestión de Habitaciones</h1>

<?php
    include '../conexion/conexion.php'; 
    include '../controlador/eliminar_habitacion.php';
?>

<div class="container-fluid">
    <div class="row justify-content-center">

        <!-- FORMULARIO -->
        <form class="col-12 col-md-4 p-4 m-3 form-card" method="POST" >

            <h3 class="text-center text-danger mb-4">部屋登録 - Registro de Habitaciones</h3>

            <?php 
            include '../controlador/Registro_habitacion.php'; 
            ?>

            <div class="mb-3">
                <label for="numhabi" class="form-label">Número de Habitación</label>
                <input type="number" class="form-control" id="numhabi" name="num_hab" required>
            </div>

            <div class="mb-3">
                <label for="tiphab" class="form-label">Tipo de Habitación</label>
                <select class="form-select" required id="tiphab" name="tip_hab">
                    <option value="" selected>Seleccione</option>
                    <option value="Simple">Simple</option>
                    <option value="Doble">Doble</option>
                    <option value="Suite">Suite</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio por Noche</label>
                <input type="number" class="form-control" id="precio" name="precio_hab">
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-outline-danger w-100" name="btn-rh" value="OK" >
                    Registrar Habitación
                </button>
            </div>
        </form>

        <!-- TABLA -->
        <div class="col-12 col-md-7 p-4 m-3 bg-white rounded shadow" style="border: 2px solid #e6bcbc;border: 2px solid #e6bcbc; ">

            <table class="table table-hover text-center align-middle">
                <thead>
                    <tr>
                        <th>N° Habitación</th>
                        <th>Tipo</th>
                        <th>Precio</th>
                        <th>Estado</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>

                <tbody>
                <?php
                include('../conexion/conexion.php'); 
                $sql = $conexion->query("select * from habitaciones");
                while($datos = $sql->fetch_object()){ ?>
                    <tr>
                        <td><?= $datos->numero_hab ?></td>
                        <td><?= $datos->tipo_hab ?></td>
                        <td><?= $datos->precio_hab ?></td>
                        <td><?= $datos->estado_hab ?></td>
                        <td>
                            <a href="Modificar_habitacion.php?numh=<?= $datos->numero_hab ?>" class="btn btn-success btn-sm">
                                <i class="fa-regular fa-pen-to-square"></i>
                            </a>
                        </td>
                        <td>
                            <a onclick="return eliminar()" href="reserva_habitacion.php?numh=<?= $datos->numero_hab ?>" class="btn btn-danger btn-sm">
                                <i class="fa-solid fa-delete-left"></i>
                            </a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>
<?php
    include ("../Archivos_php/final.php");
?>

</body>
</html>
