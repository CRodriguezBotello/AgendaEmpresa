<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php/estilos/formPersonas.css">
    <title>Nueva Persona</title>
</head>
<body>
    <h1>Añadir Nueva Persona</h1>
    <form action="index.php?controlador=CAgenda&metodo=AnadirPersona" method="post">
        <label for="nombre">Nombre de la persona</label><br>
        <input type="text" name="nombre"><br><br>
        <label for="apellido">Apellidos de la persona</label><br>
        <input type="text" name="apellido"><br><br>
        <label for="codPostal">Código Postal de la persona</label><br>
        <input type="text" name="codPostal" maxlength="5"><br><br>
        <label for="tfn">Teléfono de la persona</label><br>
        <input type="text" name="tfn" maxlength="9"><br><br>
        <label for="genero">Género de la persona</label><br>
        <input type="radio" name="genero" value="M">Masculino<br>
        <input type="radio" name="genero" value="F">Femenino<br><br>
        <label for="edad">Edad de la persona</label><br>
        <input type="text" name="edad" maxlength="3"></br></br>

        <label for="hobbies">Hobbies a elegir</label>
        <?php
          foreach($datos as $hobbies){
            echo '<input type="checkbox" name="hobbies[]" value='.$hobbies["IdHobby"].'>'.$hobbies["hobby"];
            echo '</br>';
          }
        ?>
        <br>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar datos">
    </form>
    
    <p><a href="index.php?controlador=CAgenda&metodo=Menu">Cancelar</a></p>
</body>
</html>