<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modificar Persona</title>
</head>
<body>
    <h1>Modificar Datos</h1>
    <form action="" method="post">
        <label for="nombre">Nuevo nombre de la persona</label><br><br>
        <?php
            echo '<input type="text" name="nombre" value="'.$datos["persona"][0]["nombre"].'">'
        ?>
        <br><br>
        <label for="apellido">Nuevos apellidos de la persona</label><br><br>
        <?php
            echo '<input type="text" name="apellido" value="'.$datos["persona"][0]["apellido"].'">'
        ?>
        <br><br>
        <label for="codPostal">Nuevo código Postal de la persona</label><br><br>
        <?php
            echo '<input type="text" name="codPostal" value="'.$datos["persona"][0]["codPostal"].'">'
        ?>
        <br><br>
        <label for="tfn">Nuevo teléfono de la persona</label><br><br>
        <?php
            echo '<input type="text" name="tfn" value="'.$datos["persona"][0]["tfn"].'">'
        ?>
        <br><br>
        <label for="genero">Nuevo género de la persona</label><br>
        <?php
            if($datos['persona'][0]['genero'] == 'M'){
                echo '<input type="radio" name="genero" value="M" checked>Masculino<br>';
                echo '<input type="radio" name="genero" value="F">Femenino';
            }else{
                echo '<input type="radio" name="genero" value="M">Masculino<br>';
                echo '<input type="radio" name="genero" value="F" checked>Femenino';
            }
            
        ?>
        <br><br>
        <label for="edad">Nueva edad de la persona</label><br>
        <?php
            echo '<input type="text" name="edad" value="'.$datos["persona"][0]["edad"].'">'
        ?>
        </br></br>

        <label for="hobbies">Cambiar hobbies elegidos</label><br>
        <?php
          foreach($datos["hobbies"] as $hobbies){
            if ($hobbies['hobbyElegido']) {
                echo '<input type="checkbox" name="hobbies[]" value='.$hobbies["IdHobby"].' checked>'.$hobbies["hobby"];
            }else{
                echo '<input type="checkbox" name="hobbies[]" value='.$hobbies["IdHobby"].'>'.$hobbies["hobby"];
            }
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