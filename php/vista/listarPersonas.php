<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="php/estilos/style.css">
  <title>Tabla de Personas</title>
</head>
<body>

  <h2>Tabla de Personas</h2>

  <table>
    <thead>
      <tr>
        <th>idPersona</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Cód. Postal</th>
        <th>Teléfono</th>
        <th>Género</th>
        <th>Edad</th>
        <th>Hobby</th>
        <th>Opciones</th>
      </tr>
    </thead>
    <tbody>
        <?php
          foreach($datos as $persona){
            echo '<tr>';
            echo '<td>'.$persona["IdPersona"].'</td>';
            echo '<td>'.$persona['nombre'].'</td>';
            echo '<td>'.$persona["apellido"].'</td>';
            echo '<td>'.$persona["codPostal"].'</td>';
            echo '<td>'.$persona["tfn"].'</td>';
            echo '<td>'.$persona["genero"].'</td>';
            echo '<td>'.$persona["edad"].'</td>';
            echo '<td>'.$persona["hobby"].'</td>';
            echo '<td>
                    <p><a href="index.php?controlador=CAgenda&metodo=ConfirmarBorrar&idPersona='.$persona["IdPersona"].'">Borrar</a></p>
                    <p><a href="index.php?controlador=CAgenda&metodo=BuscarPersonaModificar&idPersona='.$persona["IdPersona"].'">Modificar</a></p>
                  </td>';
            echo '</tr>';
          }
        ?>
    </tbody>
  </table>
  <p id="menu"><a href="index.php?controlador=CAgenda&metodo=Menu">Volver al Menú</a></p>
</body>
</html>