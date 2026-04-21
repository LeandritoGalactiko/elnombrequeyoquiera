<?php

namespace App\Controller;

use App\Core\View;
use App\Dominio\Usuario;

class UsuarioController
{
    public function ver(int $id)
    {
        $usuario = Usuario::obtenerPorId($id);
        View::render('usuario/ver', ['usuario' => $usuario]);
    }
}
