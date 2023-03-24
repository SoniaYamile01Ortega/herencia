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
 include_once('clases/Trabajador.php');
 include_once('clases/Estudiante.php');
 

?>

    <div class="container" mt-5>
        <div class="row">
            <div class="Col-3">


                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $trabajador1->imagen;?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $trabajador1->Visualizar_nombre();?></h5>
                        <p class="card-text">
                            <?php 
                        echo "Cargo: ".$trabajador1->Visualizar_cargo()."<br>";
                        echo "Cargo: ".$trabajador1->Visualizar_salario()."<br>";
                        
                        ?>

                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>


            </div>


            <div class="Col-12">

                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $estudiante1->imagen;?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $estudiante1->Visualizar_nombre();?></h5>
                        <p class="card-text">
                            <?php 
                                    echo "Especialidad: ".$estudiante1->Visualizar_Especialidad()."<br>";
                                    echo "Cargo: ".$trabajador1->Visualizar_salario()."<br>";
        
                            ?>

                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>


            </div>

     
            <div class="Col-12">

                <div class="card" style="width: 18rem;">
                    <img src="<?php echo $estudiante1->imagen;?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title"><?php echo $estudiante1->Visualizar_nombre();?></h5>
                        <p class="card-text">
                            <?php 
                                    echo "Especialidad: ".$estudiante1->Visualizar_Especialidad()."<br>";
                                    echo "Cargo: ".$trabajador1->Visualizar_salario()."<br>";
        
                            ?>

                        </p>
                        <a href="#" class="btn btn-primary">Go somewhere</a>
                    </div>
                </div>


            </div>

                 
            

        </div>
    </div>--

</body>

</html>