
<?php


if(!empty($_POST["btn-acr"])){
    if (!empty($_POST["nomh"]) && !empty($_POST["dnih"]) && !empty($_POST["fechahi"]) && !empty($_POST["fechahs"]) ){
        $id=$_POST["idr"];
        $nomh=$_POST["nomh"];
        $dnih=$_POST["dnih"];
        $fechahi=$_POST["fechahi"];
        $fechahs=$_POST["fechahs"];

        $sql=$conexion->query(" UPDATE reservas set nombre_huesped='$nomh',dni='$dnih',fecha_ingreso='$fechahi',fecha_salida='$fechahs' WHERE id_reserva='$id'");
                
        if ($sql==1) {
            header("Location: /Hostal/Archivos_php/reservas_logica.php");

            
        }else {
            echo'<div class="alert alert-danger">Error</div>';
        }
        
    }
    else{
        echo "Todos los campos vacios";
    }

}

?>