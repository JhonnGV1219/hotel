<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/493395a733.js" crossorigin="anonymous"></script>

    <!-- Fuente japonesa -->
    <link href="https://fonts.googleapis.com/css2?family=Zen+Antique&display=swap" rel="stylesheet">

    <title>Reservas - Hotel Japón</title>
<!--Estilos con CSs-->
    <style>
        body {
            background: linear-gradient(to right, #f8f9fa, #fbeaea);
        }

        h1 {
            font-family: 'Zen Antique', serif;
            color: #b30000;
            letter-spacing: 3px;
        }

        .form-card {
            background: #ffffff;
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            border: 2px solid #e6bcbc;
        }

        .form-card h3 {
            font-family: 'Zen Antique', serif;
            color: #b30000;
        }

        .btn-primary {
            background-color: #b30000;
            border: none;
        }

        .btn-primary:hover {
            background-color: #8c0000;
        }

        .table {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        .table thead {
            background: linear-gradient(to right, #b30000, #ff6666);
            color: white;
        }

        .btn-success {
            background-color: #2f8f2f;
            border: none;
        }

        .btn-danger {
            background-color: #b30000;
            border: none;
        }

        .btn-success:hover {
            background-color: #246f24;
        }

        .btn-danger:hover {
            background-color: #8c0000;
        }
    </style>
</head>


<body>


<?php
    include ("../Archivos_php/encabezado.php");
    include '../conexion/conexion.php'; 
    include '../controlador/eliminar_reserva.php';
?>
<h1 class="text-center p-4">🏯 Reservas - Hotel Japón</h1>
<!--Para generar una alerta para mas seguridad al momento de eliminar algun registro-->
<script>
    function eliminar(){
        var respuesta = confirm("¿Estás seguro de eliminar esta reserva?");
        return respuesta;
    }
</script>

<div class="container-fluid row justify-content-center">

    <!-- FORMULARIO -->
    <form class="col-3 p-4 form-card" method="POST">
        <h3 class="text-center mb-4">Gestión de Reservas</h3>

        <?php include '../controlador/registro_reserva.php'; ?>

        <div class="mb-3">
            <label class="form-label">Nombre del Huésped</label>
            <input type="text" class="form-control" name="nomh">
        </div>

        <div class="mb-3">
            <label class="form-label">Documento de Identidad</label>
            <input type="number" class="form-control" name="dnih">
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha de Ingreso</label>
            <input type="date" class="form-control" name="fechahi">
        </div>

        <div class="mb-3">
            <label class="form-label">Fecha de Salida</label>
            <input type="date" class="form-control" name="fechahs">
        </div>

        <div class="mb-3">
            <label class="form-label">Habitación</label>
            <input type="number" class="form-control" name="hbh">
        </div>

        <button type="submit" class="btn btn-primary w-100" name="btn-r" value="OK">
            Registrar Reserva
        </button>
    </form>

    <!-- TABLA -->
    <div class="col-7 p-4">
        <table class="table text-center">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Huésped</th>
                    <th>DNI</th>
                    <th>Ingreso</th>
                    <th>Salida</th>
                    <th>Habitación</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
            <?php
                include('../conexion/conexion.php'); 
                $sql = $conexion->query("SELECT * from reservas");

                while($datos = $sql->fetch_object()){ ?>
                <tr>
                    <td><?= $datos->id_reserva ?></td>
                    <td><?= $datos->nombre_huesped ?></td>
                    <td><?= $datos->dni ?></td>
                    <td><?= $datos->fecha_ingreso ?></td>
                    <td><?= $datos->fecha_salida ?></td>
                    <td><?= $datos->numero_hab_f ?></td>

                    <td>
                        <a href="modificar_reserva.php?idr=<?= $datos->id_reserva ?>" class="btn btn-success">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>
                    </td>

                    <td>
                        <a onclick="return eliminar()" href="reservas_logica.php?idr=<?= $datos->id_reserva ?>" class="btn btn-danger">
                            <i class="fa-solid fa-delete-left"></i>
                        </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>

</div>

</body>
</html>
