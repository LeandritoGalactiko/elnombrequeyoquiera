<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Usuarios</title>
</head>

<body>
    <h2>Usuarios</h2>
    <a href="/index.php/usuario/nuevo">+ Nuevo usuario</a>
    <br><br>
    <table>
        <thead>
            <tr>
                <th align="left">ID</th>
                <th align="left">Nombre</th>
                <th align="left">Email</th>
                <th align="left">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($usuarios as $u): ?>
                <tr>
                    <td><?= $u->id ?></td>
                    <td><?= htmlspecialchars($u->nombre) ?></td>
                    <td><?= htmlspecialchars($u->email) ?></td>
                    <td>
                        <a href="/index.php/usuario/ver/<?= $u->id ?>">ver</a> |
                        <a href="/index.php/usuario/editar/<?= $u->id ?>">editar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>