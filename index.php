<?php
include_once 'model/Persona.php';
$alumno = new Persona('Jose Pardo',23);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <header>
        <?php include('includes/header.php')?>
    </header>

    <h1>Programacion orientada a objetos</h1>

    <nav>
        <?php include('includes/enlaces.php')?>
    </nav>

    <main>
        <pre class="resultados">
            <?php 
                echo $alumno->getNombre();
                echo $alumno->setEdad();
                echo Persona::saludar();
             ?>
            
        </pre>
    </main>

</body>
</html>