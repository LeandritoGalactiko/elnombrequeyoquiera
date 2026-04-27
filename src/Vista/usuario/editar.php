<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Editar Usuario</title>
</head>

<body>
    <a href="/index.php/usuario/listar">← volver</a>
    <h2>Editar Usuario #<?= $usuario->id ?></h2>
    <form action="/index.php/usuario/actualizar" method="POST">
        <input type="hidden" name="id" value="<?= $usuario->id ?>">
        <p>Nombre: <input type="text" name="nombre" value="<?= htmlspecialchars($usuario->nombre) ?>" required></p>
        <p>Email: <input type="email" name="email" value="<?= htmlspecialchars($usuario->email) ?>" required></p>
        <input type="submit" value="guardar">
    </form>
</body>

</html>