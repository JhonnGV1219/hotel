<?php 

if(!empty($_POST["btn-rh"])){
    if (!empty($_POST["num_hab"]) && !empty($_POST["tip_hab"]) && !empty($_POST["precio_hab"])){
        $numero=$_POST["num_hab"];
        $tipo=$_POST["tip_hab"];
        $precio=$_POST["precio_hab"];
        $sql=$conexion->query("Insert Into habitaciones(numero_hab,tipo_hab,precio_hab,estado_hab)
        Values('$numero','$tipo','$precio','Disponible')");
        if ($sql=1) {
            echo'<div class="alert alert-success">Habitacion registrada correctamente</div>';
            # code...
        }else {
            echo'<div class="alert alert-danger">Error</div>';
        }
        
    }




    elseif (!empty($_POST["num_hab"]) ) {
        echo '<div class="alert alert-danger">"El campo precio y campo Tipo esta vacio"</div>';
    }

    elseif (!empty($_POST["tip_hab"]) ) {
        echo '<div class="alert alert-danger">"El campo Numero de Habitación y campo precio esta vacio"</div>';
    }

    elseif (!empty($_POST["precio_hab"]) ) {
        echo '<div class="alert alert-danger">"El campo tipo de habitacion y precio esta vacio"</div>';
    }

    elseif (!empty($_POST["num_hab"]) && !empty($_POST["tip_hab"])) {
        echo '<div class="alert alert-danger">"El campo precio esta vacio"</div>';
    }

    elseif (!empty($_POST["tip_hab"]) && !empty($_POST["precio_hab"])) {
        echo '<div class="alert alert-danger">"El campo Numero de Habitación esta vacio"</div>';
    }

    elseif (!empty($_POST["num_hab"]) && !empty($_POST["precio_hab"])) {
        echo '<div class="alert alert-danger">"El campo tipo de habitacion esta vacio"</div>';

    
    }
    else{
        echo "Todos los campos vacios";
    }

}

?>