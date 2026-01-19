<?php
if (!empty($_GET["numh"])) {

    $numh = $_GET["numh"];

    $sql=$conexion->query("DELETE FROM habitaciones WHERE numero_hab='$numh'");

    if ($sql==1) {
    
        echo '<div class="alert alert-success">Habitación eliminada correctamente</div>';
    } else {
        echo '<div class="alert alert-danger">No se pudo eliminar la habitación</div>';
    }
}
?>
