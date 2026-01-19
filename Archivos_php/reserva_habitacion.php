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
    <script>
        function eliminar(){
            var respuesta=confirm("Estas seguro de elimar?")
            return respuesta
        }
    </script>
    <h1 class="text-center p-3">Hola mundo</h1>
    <?php
        include '../conexion/conexion.php'; 
        include '../controlador/eliminar_habitacion.php';
    ?>

    <div class="container-fluid row"  >
        <form class="col-4 p-5" style="border:1px solid; margin-left:10px;" method="POST">
            <h3 class="text-center text-secondary" >Registro de Habitaciones</h3>
            <?php 
            include '../controlador/Registro_habitacion.php'; 
            ?>

            <div class="mb-3">
                <label for="numhabi" class="form-label">Numero de Habitación</label>
                <input type="number" class="form-control" id="numhabi" name="num_hab" required >
                    <div class="valid-feedback">
                        Looks good!
                    </div>
            </div>
            <div class="mb-3">
                <label for="tiphab" class="form-label">Tipo de Habitación</label>
                <select class="form-select"  required id="tiphab" name="tip_hab" >
                    <option value="Simple">Simple</option>
                    <option value="Doble">Doble</option>
                    <option value="Suite">Suite</option>
                    <option value="" selected>Seleccione</option>
                
                </select>
            </div>
            <div class="mb-3">
                <label for="precio" class="form-label">Precio Por noche</label>
                <input  type="number" class="form-control" id="precio" name="precio_hab" >
            </div>
            <div class="mb-3">

            </div>
            <button type="submit" class="btn btn-primary" name="btn-rh" value="OK">Registrar Habitación</button>
        </form>


        <div class="col-6 p-4" >
            <table class="table">
                <thead>
                    <tr class="table-primary text-center">
                    <th scope="col">Numero de Habitación</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Precio</th>
                    <th scope="col">Estado</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr >
                    <?php
                    include('../conexion/conexion.php'); 
                    $sql=$conexion->query("select * from habitaciones");
                    while($datos=$sql->fetch_object()){ ?>
                    <td><?= $datos->numero_hab ?> </td>
                    <td><?= $datos->tipo_hab ?></td>
                    <td><?= $datos->precio_hab ?></td>
                    <td><?= $datos->estado_hab ?></td>
                    <td><a href="Modificar_habitacion.php?numh=<?= $datos->numero_hab ?>" class="btn btn-success"><i class="fa-regular fa-pen-to-square"></i></a></td>
                    <td><a onclick="return eliminar()" href="reserva_habitacion.php?numh=<?= $datos->numero_hab ?>" class="btn btn-danger" ><i class="fa-solid fa-delete-left"></i></a></td>
                    </tr>
                    <?php }
                    ?>

                </tbody>
                </table>
        </div>
    </div>
    
</body>
</html>