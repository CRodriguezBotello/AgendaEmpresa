<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php/estilos/borrarPersona.css">
    <title>¿Borrar?</title>
</head>
<body>
    <h1>¿Seguro que quiere borrar esta fila?</h1>
    
    <div>
        <?php
            echo '<a id="si" class="boton" href="index.php?controlador=CAgenda&metodo=BorrarPersona&idPersona=' . $_GET["idPersona"] . '">Sí</a>';
        ?>
        <a id="no" class="boton" href="index.php?controlador=CAgenda&metodo=ListarPersona">No</a>
    </div>
</body>
</html>
