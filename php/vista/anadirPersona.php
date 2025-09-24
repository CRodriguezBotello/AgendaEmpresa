<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nueva Persona</title>
</head>
<body>
    <h1>Añadir Nueva Persona</h1>
    <form action="" method="post">
        <label for="nombre">Nombre de la persona</label><br>
        <input type="text" name="nombre"><br><br>
        <label for="apellido">Apellidos de la persona</label><br>
        <input type="text" name="apellido"><br><br>
        <label for="codPostal">Código Postal de la persona</label><br>
        <input type="text" name="codPostal"><br><br>
        <label for="tfn">Teléfono de la persona</label><br>
        <input type="text" name="tfn"><br><br>
        <label for="genero">Género de la persona</label><br>
        <input type="text" name="genero"><br><br>
        <label for="edad">Edad de la persona</label><br>
        <input type="text" name="edad"></br></br>

        <?php
          foreach($datos as $hobbies){
            echo '<input type="checkbox" name="hobbies[]" value='.$hobbies["IdHobby"].'>'.$hobbies["hobby"];
            echo '</br>';
          }
        ?>
    </form>
    <p><a href="index.php?controlador=CAgenda&metodo=Menu">Cancelar</a></p>
</body>
</html>