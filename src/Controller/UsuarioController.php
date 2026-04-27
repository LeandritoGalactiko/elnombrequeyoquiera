<?php

namespace App\Controller;

use App\Aplicacion\VerUsuario;
use App\Aplicacion\CrearUsuario;
use App\Aplicacion\ActualizarUsuario;
use App\Aplicacion\ListarUsuarios;
use App\Core\View;

class UsuarioController
{
    public function listar()
    {
        $casoDeUso = new ListarUsuarios();
        $usuarios = $casoDeUso->ejecutar();
        View::render('usuario/listar', ['usuarios' => $usuarios]);
    }

    public function ver(int $id)
    {
        $casoDeUso = new VerUsuario();
        $usuario = $casoDeUso->ejecutar($id);

        if ($usuario) {
            View::render('usuario/ver', ['usuario' => $usuario]);
        } else {
            echo "Usuario no encontrado.";
        }
    }

    public function nuevo()
    {
        View::render('usuario/nuevo', []);
    }

    public function crear()
    {
        $nombre = $_POST['nombre'];
        $email  = $_POST['email'];

        $casoDeUso = new CrearUsuario();
        $casoDeUso->ejecutar($nombre, $email);

        header('Location: /index.php/usuario/listar');
        exit;
    }

    public function editar(int $id)
    {
        $casoDeUso = new VerUsuario();
        $usuario = $casoDeUso->ejecutar($id);

        if ($usuario) {
            View::render('usuario/editar', ['usuario' => $usuario]);
        } else {
            echo "Usuario no encontrado.";
        }
    }

    public function actualizar()
    {
        $id     = (int) $_POST['id'];
        $nombre = $_POST['nombre'];
        $email  = $_POST['email'];

        $casoDeUso = new ActualizarUsuario();
        $casoDeUso->ejecutar($id, $nombre, $email);

        header('Location: /index.php/usuario/ver/' . $id);
        exit;
    }
}
