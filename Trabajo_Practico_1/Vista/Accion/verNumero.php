<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver Número</title>
</head>
<body>
    <div id="resultado">
        <?php
        include_once('../../Control/Numero.php');
            if($_POST){
                echo "Los datos se enviaron por POST";
            } else if($_GET){
                echo "Los datos se enviaron por GET";
            }
       ?>
    </div>
</body>
</html>