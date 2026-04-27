<?php

namespace App\Aplicacion;

use App\Dominio\Usuario;
use App\Infraestructura\UsuarioRepositorio;

class ActualizarUsuario
{
    private UsuarioRepositorio $repositorio;

    public function __construct()
    {
        $this->repositorio = new UsuarioRepositorio();
    }

    public function ejecutar(int $id, string $nombre, string $email): bool
    {
        $usuario = new Usuario($id, $nombre, $email);
        return $this->repositorio->actualizar($usuario);
    }
}
