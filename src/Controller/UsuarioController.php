<?php

namespace App\Controller;

use App\Aplicacion\VerUsuario;
use App\Core\View;

class UsuarioController
{
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
    }
