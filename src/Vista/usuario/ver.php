<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Ver Usuario</title>
</head>

<body>
    <a href="/index.php/usuario/listar">← volver</a>
    <h2>Usuario #<?= $usuario->id ?></h2>
    <p>Nombre: <?= htmlspecialchars($usuario->nombre) ?></p>
    <p>Email: <?= htmlspecialchars($usuario->email) ?></p>
    <a href="/index.php/usuario/editar/<?= $usuario->id ?>">editar</a>
</body>

</html>