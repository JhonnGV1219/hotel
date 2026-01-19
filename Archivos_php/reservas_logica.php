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
    <h1 class="text-center p-3">Reservas</h1>
    <div class="container-fluid row"  >
        <form class="col-3 p-5" method="POST" style="border:1px solid; margin-left:10px;" >
            <h3 class="text-center text-secondary" >Gestion de Reservas</h3>
            <?php
                include '../conexion/conexion.php'; 
                include '../controlador/registro_reserva.php'; 
            
            ?>

            <div class="mb-3">
                <label for="nom" class="form-label">Nombre del Huesped</label>
                <input type="text" class="form-control" id="nom" name="nomh" >
            </div>

            <div class="mb-3">
                <label for="dni" class="form-label">Documento de Identidad </label>
                <input type="number" class="form-control" placeholder="DNI" id="dni" name="dnih" >
            </div>

            <div class="mb-3">
                <label for="fingreso" class="form-label">Fecha de Ingreso</label>
                <input  type="date" class="form-control" id="fingreso" name="fechahi" >
            </div>

            <div class="mb-3">
                <label for="fsalida" class="form-label">Fecha de Salida</label>
                <input  type="date" class="form-control" id="fsalida" name="fechahs" >
            </div>
                
            <div class="mb-3">
                <label for="habitacion" class="form-label">Habitaciones</label>
                <input  type="number" class="form-control" id="habitacion" name="hbh" >
            </div>

            <button type="submit" class="btn btn-primary"  name="btn-r" value="OK">Registrar Reserva</button>
        </form>

    <br>
        <div class="col-6 p-4" >
            <table class="table">
                <thead>
                    <tr class="table-primary text-center">
                    <th scope="col">Id Reserva</th>
                    <th scope="col">Nombre del Huesped</th>
                    <th scope="col">Documento de Identificacion</th>
                    <th scope="col">Fecha_Ingreso</th>
                    <th scope="col">Fecha Salida</th>
                    <th scope="col">Habitacion</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                    <?php
                    include('../conexion/conexion.php'); 
                    $sql=$conexion->query("SELECT * from reservas");
                    while($datos=$sql->fetch_object()){ ?>
                    <td><?= $datos->id_reserva ?> </td>
                    <td><?= $datos->nombre_huesped ?></td>
                    <td><?= $datos->dni ?></td>
                    <td><?= $datos->fecha_ingreso ?></td>
                    <td><?= $datos->fecha_salida ?></td>
                    <td><?= $datos->numero_hab_f ?></td>
                    <td><a href="modificar_reserva.php?idr=<?= $datos->id_reserva ?>" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i></a></td>
                    <td><button type="button" class="btn btn-danger"><i class="fa-solid fa-delete-left"></i></button></td>
                    </tr>
                    <?php }
                    ?>

                </tbody>
                </table>
        </div>
    </div>
    
</body>
</html>