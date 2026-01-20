<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif+JP:wght@400;700&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <?php
    include ("../Archivos_php/encabezado.php");
    ?>
    
    
<!--Carrusel--> 
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner" style="font-family: 'Sawarabi Mincho', serif; -webkit-text-stroke: 0.25px white;">
            <div class="carousel-item active">
            <img src="../imagenes/Imagen1.jpg" class="d-block w-100 " alt="..." style="height:600px; object-fit:cover;" >
            <div class="carousel-caption d-none d-md-block" style="font-family: 'Sawarabi Mincho', serif;">
                <h5>Espacio Exterior</h5>
                <p>Lleno de calidad vistas y un ambiente Japones</p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="../imagenes/Imagen2.jpg" class="d-block w-100 " alt="..." style="height:600px; object-fit:cover;" >
            <div class="carousel-caption d-none d-md-block">
                <h5>Patio Trasero</h5>
                <p>Lleno de un ambiente de paz y un sitio gratificante de practica de Yoga </p>
            </div>
            </div>
            <div class="carousel-item">
            <img src="../imagenes/Imagen3.jpg" class="d-block w-100 " alt="..." style="height:600px; object-fit:cover;" >
            <div class="carousel-caption d-none d-md-block">
                <h5>Campo de Meditación</h5>
                <p>Un campo en donde puedes estar en completo Equilibrio</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="../imagenes/Imagen5.jpg" class="d-block w-100 " alt="..." style="height:600px; object-fit:cover;" >
            <div class="carousel-caption d-none d-md-block">
                <h5>Habitaciones</h5>
                <p>Comodas y acogedoras con el hecho de preferir dormir en camas o en Petates</p>
            </div>
            </div>

            <div class="carousel-item">
            <img src="../imagenes/Imagen6.jpg" class="d-block w-100 " alt="..." style="height:600px; object-fit:cover;" >
            <div class="carousel-caption d-none d-md-block">
                <h5>Sala Principal</h5>
                <p>Un lugar dirigido a reuniones y tomas de Té</p>
            </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
<?php
    include ("../Archivos_php/final.php");
?>

</body>
</html>