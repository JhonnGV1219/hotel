<?php

if (!empty($_GET["idr"])) {

    $numr = $_GET["idr"];

    $sql=$conexion->query("DELETE FROM reservas WHERE id_reserva='$numr'");

    if ($sql==1) {
    
        echo '<div class="alert alert-success">Habitación eliminada correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">No se pudo eliminar la habitación</div>';
    }
}




?>