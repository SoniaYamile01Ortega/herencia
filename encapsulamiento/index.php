<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>instituto</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
    .card-img-top {
        width: 80%;
        height: 20vw;
        object-fit: over;
    }
    </style>

</head>

<body>
    <?php
 include_once('clases/Persona.php');
 include_once('clases/Trabajador.php');
 include_once('clases/Estudiante.php');
 include_once('clases/Docente.php');
 include_once('clases/Servicio.php');
  

?>

    <div class="container" mt-5>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card">
                    <img src="<?php echo $trabajador1->imagen;?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $trabajador1->Visualizar_nombre();?></h5>
                        <p class="card-text">
                            <?php echo "Cargo: " .$trabajador1->Visualizar_cargo(). "<br>"; ?>
                        </p>
                        <a href="#" class="btn btn-primary">Control de Ingresos</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="<?php echo $estudiante1->imagen;?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $estudiante1->Visualizar_nombre(). "<br>"; ?></h5>
                        <p class="card-text">
                        <?php echo "Especialidad: " .$estudiante1->Visualizar_especialidad(). "<br>"; ?>
                        <?php echo "Año: " .$estudiante1->Visualizar_fecha(). "<br>"; ?>
                        </p>
                        <a href="#" class="btn btn-primary">Control de Notas</a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="<?php echo $docente1->imagen;?>" class="card-img-top" alt="...">
                
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $docente1->Visualizar_nombre(). "<br>"; ?></h5>
                        <p class="card-text">  <?php echo "Departamento: " .$docente1->Visualizar_departamento(). "<br>"; ?>.</p>
                    </div>
                    <a href="#" class="btn btn-primary">Control de Notas</a>
                </div>
            </div>
            <div class="col">
                <div class="card">
                <img src="<?php echo $servicio1->imagen;?>" class="card-img-top" alt="...">
                    <div class="card-body">
                         <h5 class="card-title"><?php echo $docente1->Visualizar_nombre(). "<br>"; ?></h5>
                        <p class="card-text"><?php echo "Area: " .$servicio1->Visualizar_area(). "<br>"; ?>.</p>
                    </div>
                    <a href="#" class="btn btn-primary">Localización por zonas</a>
                </div>
            </div>
        </div>



    </div>
    </div>
</body>

</html>