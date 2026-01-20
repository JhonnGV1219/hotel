<?php


if(!empty($_POST["btn-r"])){
    if (!empty($_POST["nomh"]) && !empty($_POST["dnih"]) && !empty($_POST["fechahi"]) && !empty($_POST["fechahs"]) && !empty($_POST["hbh"])){
        $nomh=$_POST["nomh"];
        $dnih=$_POST["dnih"];
        $fechahi=$_POST["fechahi"];
        $fechahs=$_POST["fechahs"];
        $hbh=$_POST["hbh"];

        $sql=$conexion->query("Insert Into reservas(nombre_huesped,dni,fecha_ingreso,fecha_salida,numero_hab_f)
        Values('$nomh','$dnih','$fechahi','$fechahs','$hbh')");
        if ($sql==1) {
            echo'<div class="alert alert-success">Habitacion registrada correctamente</div>';
            
        }
        else {
            echo'<div class="alert alert-danger">Error</div>';
        }
        
    }
    else{
        echo "Todos los campos vacios";
    }

}

?>