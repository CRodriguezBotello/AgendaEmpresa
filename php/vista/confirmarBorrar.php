<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>¿Borrar?</title>
</head>
<body>
    <h1>Seguro que quiere borrar esta fila?</h1>
    <?php
        echo '<p><a href="index.php?controlador=CAgenda&metodo=BorrarPersona&idPersona='.$_GET["idPersona"].'">Sí</a></p>';
    ?>
    
    <p><a href="index.php?controlador=CAgenda&metodo=ListarPersona">No</a></p>
</body>
</html>