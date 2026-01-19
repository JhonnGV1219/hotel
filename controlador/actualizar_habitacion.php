<?php
if(!empty($_POST["btn-ach"])){
    echo '<div class="alert alert-success">"Precionado"</div>';
    if (!empty($_POST["tip_hab"]) and !empty($_POST["precio_hab"])) {
        $numh=$_POST["num_hab"];
        $tiph=$_POST["tip_hab"];
        $precioh=$_POST["precio_hab"];
        $sql=$conexion->query("UPDATE habitaciones set tipo_hab='$tiph',precio_hab='$precioh' where numero_hab='$numh'");
    
        if ($sql==1) {
            header("Location: /Hostal/Archivos_php/reserva_habitacion.php");

        }
        else{
            echo '<div class="alert alert-danger">Campos invalidos</div>';
        }
    }else{
        echo '<div class="alert alert-danger">Campos vacion</div>';
    }
}
?>