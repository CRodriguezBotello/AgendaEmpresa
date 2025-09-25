<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="php/estilos/buscarPersona.css">
    <title>Buscar persona</title>
</head>
<body>
    <h1>Buscar Persona</h1>
    <form action="index.php?controlador=CAgenda&metodo=BuscarPersona" method="post">
        <label for="filtro">Buscar por:</label>
        <select name="filtro">
            <option value="" selected hidden></option>
            <option value="nombre">Nombre</option>
            <option value="apellido">Apellido</option>
            <option value="codPostal">Codigo Postal</option>
            <option value="tfn">Telefono</option>
            <option value="hobby">Hobby</option>
        </select><br><br>

        <label for="buscar">Palabra/s a Buscar:</label><br>
        <input type="text" name="buscar"><br><br><br>

        <input type="submit" value="Buscar">
        <input type="reset" value="Borrar datos">
    </form>
    <p><a href="index.php?controlador=CAgenda&metodo=Menu">Cancelar</a></p>
</body>
</html>