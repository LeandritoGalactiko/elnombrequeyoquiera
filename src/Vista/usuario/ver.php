<!DOCTYPE html>
<html>

<head>
    <title>Ver Usuario</title>
    <style>
        body {
            font-family: Arial;
            margin: 40px;
        }

        p {
            font-size: 18px;
        }
    </style>
</head>

<body>
    <h1>Datos del Usuario</h1>
    <p>ID: <?= $usuario->id ?></p>
    <p>Nombre: <?= $usuario->nombre ?></p>
    <p>Email: <?= $usuario->email ?></p>
    <p>Rol: <?= $usuario->rol ?></p>
</body>

</html>