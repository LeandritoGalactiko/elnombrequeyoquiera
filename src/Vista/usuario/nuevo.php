<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Nuevo Usuario</title>
</head>

<body>
    <a href="/index.php/usuario/listar">← volver</a>
    <h2>Nuevo Usuario</h2>
    <form action="/index.php/usuario/crear" method="POST">
        <p>Nombre: <input type="text" name="nombre" required></p>
        <p>Email: <input type="email" name="email" required></p>
        <input type="submit" value="crear">
    </form>
</body>

</html>